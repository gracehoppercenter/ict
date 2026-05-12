> This is the old version of this process, which runs on ict.gctaa.net and
> uses Caddy. The new version, which runs on ict.gracehopper.center
> and uses lighttpd is documented 
> [here](./ict_webhook_deployment_notes_lighttpd.md)


# Deployment Notes

This repo is deployed to <https://ict.gracehopper.center>

Deployment automatically happens when we push to this repo, using 
[Webhooks](https://github.com/adnanh/webhook).

When we push a commit to the `main` branch, github automatically
makes a POST request to <https://ict.gracehopper.center/hooks/ict-deploy>
(this request is configured in github settings - see <https://docs.github.com/en/webhooks/about-webhooks>)

From there, Caddy routes the request to the webhook service, which executes
a deployment script on the sever at `/usr/local/scripts/deploy/deploy.sh`
.

That script (copied below) runs `git pull` on the local copy of our repo, which is at
`/var/www/ict`. (Note - we're only serving `/var/www/ict/docs`)

All of this is owned and executable by the user group called `ict-deployers`
which includes chris and jeff.

## PHP

The PHP config was a bit tricky to configure. We want only PHP files to go through
the PHP server, Caddy's default fileserver handles everything else. Here's
the full configuration from the Caddyfile:

```
ict.gctaa.net {
    root * /var/www/ict/docs

    handle /hooks/* {
        reverse_proxy localhost:9001 {
            header_up X-Forwarded-Proto https
        }
    }

    handle {
        # Try the path as-is, then as a directory index.php, then index.html, then 404
        try_files {path} {path}/index.php {path}/index.html =404

        @phpFiles path *.php
        php_fastcgi @phpFiles unix//run/php/php-fpm.sock

        file_server
    }
}
```

To modify this file, edit: /etc/caddy/Caddyfile
And then `sudo systemctl restart caddy`


To troubleshoot, check these logs:
On the server:
    - journalctl -u ict-webhook -f
    - tail -f /var/log/ict-deploy.log
On github:
    - <https://github.com/gracehoppercenter/ict/settings/hooks/551497255?tab=deliveries>
