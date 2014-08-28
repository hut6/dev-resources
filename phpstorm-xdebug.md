# PHPStorm xdebug configuration on Mac OSX

Currently chronicles Ben Mc's adventures with xdebug on localhost and vagrant.

## Install xdebug

```sh
brew install xdebug
```

## configure php.ini

find the xdebug.so file

```sh
Studio-PM-iMac:~ ben$ find / -name xdebug.so 2> /dev/null
/usr/lib/php/extensions/no-debug-non-zts-20100525/xdebug.so
/usr/local/Cellar/php54-xdebug/2.2.5/xdebug.so
```
the dev/null pipe of the error output at the end prevents 'permission denied' errors displaying

using locate is much faster but depends on the locate database being current
```sh
Studio-PM-iMac:~ ben$ locate xdebug.so
```
use the following to update the locate database (may take 5+ mins)
```sh
sudo /usr/libexec/locate.updatedb
```


find your php.ini and edit it

```sh
Studio-PM-iMac:~ find / -name php.ini 2> /dev/null
/private/etc/php.ini
/Users/ben/PhpstormProjects/cranaplus-website/php.ini
/usr/local/etc/php/5.4/php.ini
Studio-PM-iMac:~ sudo vi /usr/local/etc/php/5.4/php.ini
```

add the following section, pointing to the xdebug.so file found above

```sh
[xdebug]
xdebug.max_nesting_level = 1000
zend_extension=/usr/lib/php/extensions/no-debug-non-zts-20100525/xdebug.so
xdebug.remote_enable=1
xdebug.remote_handler=dbgp
xdebug.remote_port=9000
xdebug.remote_host=127.0.0.1
```

max_nesting_level defaults to 100 and can lead to stack overflows in Symfony

## troubleshoot

remove the .dist to run it, eg. localhost/ini.php
the web folder is the public web root of a Symfony project

ini.php.dist:
```php
<?php 
	phpinfo();
?>
```

if xdebug does not appear in the list of headings, go to 
http://xdebug.org/wizard.php
and paste in the HTML of the entire page


