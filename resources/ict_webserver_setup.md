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


## SSL/TLS (HTTPS)

Next challenge is getting HTTPS setup. I returned to the debian wiki page
[Lighttpd](https://wiki.debian.org/Lighttpd) for this. It told me to install
[certbot](https://github.com/certbot) so we can automate the process of
getting an SSL certificate from [Let's
Encrypt](https://en.wikipedia.org/wiki/Let's_Encrypt). I ran:
```
$ sudo apt install certbot
```
Stop the web server:
```
$ sudo systemctl stop lighttpd
```
Generate the SSL certificate:
```
$ sudo certbot certonly --standalone -d ict.gracehopper.center
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Enter email address or hit Enter to skip.
 (Enter 'c' to cancel): jeff.elkner@novawebdevelopment.coop

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Please read the Terms of Service at:
https://letsencrypt.org/documents/LE-SA-v1.6-August-18-2025.pdf
You must agree in order to register with the ACME server. Do you agree?
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(Y)es/(N)o: Y

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Would you be willing, once your first certificate is successfully issued, to
share your email address with the Electronic Frontier Foundation, a founding
partner of the Let's Encrypt project and the non-profit organization that
develops Certbot? We'd like to send you email about our work encrypting the web,
EFF news, campaigns, and ways to support digital freedom.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
(Y)es/(N)o: Y
Account registered.
Requesting a certificate for ict.gracehopper.center

Successfully received certificate.
Certificate is saved at:
/etc/letsencrypt/live/ict.gracehopper.center/fullchain.pem
Key is saved at:
/etc/letsencrypt/live/ict.gracehopper.center/privkey.pem
This certificate expires on 2026-08-09.
These files will be updated when the certificate renews.
Certbot has set up a scheduled task to automatically renew this certificate in
the background.

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
If you like Certbot, please consider supporting our work by:
 * Donating to ISRG / Let's Encrypt:   https://letsencrypt.org/donate
 * Donating to EFF:                    https://eff.org/donate-le
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
```

