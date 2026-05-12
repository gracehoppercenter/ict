# Deployment Notes

(All of this was created via a shell script at 
/home/cjones/setup_ict_deploy_without_ufw.sh . Everything that script
does is described below)

This repo is deployed to <https://ict.gracehopper.center>

Deployment automatically happens when we push to this repo, using 
[Webhooks](https://github.com/adnanh/webhook).

When we push a commit to the `main` branch, github automatically
makes a POST request to <https://ict.gracehopper.center:9001/hooks/ict-deploy>
(this request is configured in github settings - see <https://docs.github.com/en/webhooks/about-webhooks>).

The webhook service is listening for requests on port 9001, and executes
a deployment script on the sever at `/usr/local/scripts/deploy/deploy.sh`.

That script (copied below) runs `git pull` on the local copy of our repo, which is at
`/var/www/ict`. The directory `/var/www/html` is a symlink to `/var/www/ict/docs`.

All of this is owned and executable by the user group called `ict-deployers`
which includes chris and jeff.


## Webhook Setup

The webhook has a couple parts:

- A shell script, `deploy.sh` that runs git pull on the repo.
- A `hooks.json` file that describes a mapping from incoming POST requests to 
the `deploy.sh` script.
- A systemd service, `ict-webhook.service`, that runs /usr/bin/webhook and passes, 
the `hooks.json` configuration file, and tells it to listen on port 9001.


On commit, github makes a post request that includes a secret hash. I've hidden
that value from the JSON file copied below.

Here's the contents of /usr/local/scripts/deploy/hooks/hooks.json
```
[
  {
    "id": "ict-deploy",
    "execute-command": "/usr/local/scripts/deploy/deploy.sh",
    "command-working-directory": "/usr/local/scripts/deploy",
    "response-message": "ICT deployment triggered",
    "trigger-rule": {
      "and": [
        {
          "match": {
            "type": "payload-hash-sha1",
            "secret": "HIDDEN! REAL VALUE IN THE FILE",
            "parameter": {
              "source": "header",
              "name": "X-Hub-Signature"
            }
          }
        },
        {
          "match": {
            "type": "value",
            "value": "refs/heads/main",
            "parameter": {
              "source": "payload",
              "name": "ref"
            }
          }
        }
      ]
    }
  }
]
```

and here is the contents of the service:
/etc/systemd/system/ict-webhook.service
```
[Unit]
Description=ICT Deployment Webhook Service
After=network.target

[Service]
User=cjones
Group=ict-deployers
WorkingDirectory=/usr/local/scripts/deploy
ExecStart=/usr/bin/webhook -hooks /usr/local/scripts/deploy/hooks/hooks.json -verbose -port 9001
Restart=always
Environment="PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin"

[Install]
WantedBy=multi-user.target
```

And here's the contents of deploy.sh:
```bash
#!/bin/bash
# ICT Deployment Script
# Usage: ./deploy.sh [branch] (default: main)

set -e  # Exit on error

# Configuration
DEPLOY_GROUP="ict-deployers"
REPO_DIR="/var/www/ict"
TARGET_DIR="/var/www/ict"
LOG_FILE="/var/log/ict-deploy.log"

# Verify permissions (allow group members or root)
if ! groups | tr ' ' '\n' | grep -qxF "$DEPLOY_GROUP" && [ "$(id -u)" -ne 0 ]; then
    echo "Error: This script must be run by root or a member of $DEPLOY_GROUP" >&2
    exit 1
fi

# Determine branch
BRANCH=${1:-main}

# Start deployment
echo "$(date) - Starting deployment (branch: $BRANCH)" | tee -a "$LOG_FILE"

# Update repository
echo "Updating repository..."
cd "$REPO_DIR"
git fetch origin
git checkout "$BRANCH"
git reset --hard origin/"$BRANCH"

# Set permissions
echo "Setting permissions..."
chown -R "$DEPLOY_USER:$DEPLOY_GROUP" "$TARGET_DIR"
find "$TARGET_DIR" -type d -exec chmod 775 {} \;
find "$TARGET_DIR" -type f -exec chmod 664 {} \;

# Complete
echo "$(date) - Deployment completed successfully" | tee -a "$LOG_FILE"
echo "Deployment finished successfully"
```