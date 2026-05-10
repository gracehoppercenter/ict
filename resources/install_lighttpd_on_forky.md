# Installing lighttpd on forky

I orginally tried installing
[Caddy](https://en.wikipedia.org/wiki/Caddy_(web_server), but after struggling
unsuccessfully for more time than I wanted getting user directories to work,
I bailed on it and decided to try
[lighttpd](https://en.wikipedia.org/wiki/Lighttpd) instead, since it takes
a more traditional configuration approach with which I am more familiar.


## Lighttpd plus PHP

After removing apache2, I ran: 
```
$ sudo apt install lighttpd
```
I then used Debian's [Lighttpd](https://wiki.debian.org/Lighttpd) and ran:
```
$ dpkg -l | grep php8.4-fpm
```
to confirm that php-fpm was still available, and then:
```
$ sudo lighty-enable-mod fastcgi-php-fpm
$ sudo service lighttpd force-reload
```
to enable it. I visited the ``forky.local/info.php`` page to confirm it was
working. Easy peasy!


## Userdirs

This is what gave me so much trouble with Caddy. With lighttpd, I found
its [User-based
Directories](https://redmine.lighttpd.net/projects/lighttpd/wiki/Mod_userdir)
page. The default configuration I wanted was already available in
``/etc/lighttpd/conf-available/10-userdir.conf``, which contains:
```
## The userdir module provides a simple way to link user-based directories into
## the global namespace of the webserver.
##
# /usr/share/doc/lighttpd/userdir.txt

server.modules      += ( "mod_userdir" )

## the subdirectory of a user's home dir which should be accessible
## under http://$host/~$user
userdir.path         = "public_html"

## The users whose home directories should not be accessible
userdir.exclude-user = ( "root", "postmaster" )
```
This is just what I wanted, so I only had to run:
```
$ sudo lighty-enable-mod userdir
$ sudo service lighttpd force-reload
```
and *Voilà*, my system is back and running just the way I want with the new
web server.
