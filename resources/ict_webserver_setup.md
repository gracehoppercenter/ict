# Setup of ict.gracehopper.center

I created a nanode and selected PublicFirewall as the public interface
firewall.

On our old webserver, I tarred the relevant lines from ``/etc/password``,
``/etc/group`` and ``/etc/shadow`` and our home directories to move our user
accounts to the new machine.

*Note:* Chris has an ``ict-deployers`` group that I copied over, but I'm not
sure what it is for.

I ran:
``` 
$ sudo hostnamectl hostname ghc
``` 
to set the hostname, and edited ``/etc/hosts`` appending ``ghc`` to create:
``` 
127.0.0.1   localhost   ghc
``` 
After extracting the tar file on the new machine and copying the relevant lines
to the relevant files, I could ssh in.

## Webserver

I added a ``Accept TCP 80`` rule to permit inbound http requests? Let's see...

Add lighttpd with:
```
$ sudo apt install lightppd
```
Pointing a browser at ``http://ict.gracehopper.center`` gave me the lighttpd
placeholder page, Yippee!

I now see what the ``ict-deployers`` group is for, since Chris cloned our
website repo and set the group to that so that we could both access it. I'll
ask him if he wants to set this up again tomorrow.


## PHP 

LOL, I can do this in my sleep now ;-)
```
$ sudo lighty-enable-mod fastcgi-php-fpm
$ sudo service lighttpd force-reload
```
After which ``http://ict.gracehopper.center/info.php`` shows it's running.
