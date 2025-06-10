# Deployment Notes

This repo is deployed to <https://ict.gracehopper.center>

Deployment automatically happens when we push to this repo, using Webhooks.
When we push a commit to the `main` branch, github automatically
makes a post request to <https://ict.gracehopper.center/hooks/ict-deploy>
(this request is configured in github settings, and should be easily
migrated to any other git host)

From there, Caddy routes the request to the webhook service, which executes
a deployment script on the sever at `/usr/local/scripts/deploy/deploy.sh`

That script runs `git pull` on the local copy of our repo, which is at
`/var/www/ict`. (Note - Caddy is only serving `/var/www/ict/docs`)

All of this is owned and executable by the user group called `ict-deployers`
which includes chris and jeff.

To troubleshoot, check these logs:
On the server:
    - journalctl -u ict-webhook -f
    - tail -f /var/log/ict-deploy.log
On github:
    - <https://github.com/gracehoppercenter/ict/settings/hooks/551497255?tab=deliveries>
