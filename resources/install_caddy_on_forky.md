# Installing Caddy on forky

After removing apache2, I followed the instructions
[here](https://caddyserver.com/docs/install#debian-ubuntu-raspbian) to install
caddy.

Pointing a browser at ``forky.local`` now displays the caddy "Congratulations!" 
file, loaded from ``/user/share/caddy``.

The configuration file is ``/etc/caddy/Caddyfile``. I changed the ``:80``
configuration section to be:
```
:80 {
	# Set this path to your site's directory.
    # root * /usr/share/caddy
    root * /var/www/html

	# Enable the static file server.
	file_server

	# Another common task is to set up a reverse proxy:
	reverse_proxy localhost:8080

	# Or serve a PHP site through php-fpm:
	php_fastcgi localhost:9000
}
```
