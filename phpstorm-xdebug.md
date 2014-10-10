# PHPStorm xdebug configuration on Mac OSX

Chronicles Ben Mc's adventures with xdebug on localhost and vagrant.

## LOCALHOST DEBUGGING

### Install xdebug
```sh
brew install xdebug
```
### find the xdebug.so file
```sh
Studio-PM-iMac:~ ben$ find / -name xdebug.so 2> /dev/null
/usr/lib/php/extensions/no-debug-non-zts-20100525/xdebug.so
/usr/local/Cellar/php54-xdebug/2.2.5/xdebug.so
```
(the dev/null pipe of the error output at the end prevents 'permission denied' errors displaying)

##### note:
using locate is much faster but depends on the locate database being current
```sh
Studio-PM-iMac:~ ben$ locate xdebug.so
```
use the following to update the locate database (may take 5+ mins)
```sh
sudo /usr/libexec/locate.updatedb
```

### configure php.ini

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

max_nesting_level defaults to 100 which can lead to stack overflows in Symfony

### Check PHPStorm settings
under Preferences -> Project Settings -> PHP -> Debug
- in the xdebug section, port is set to 9000 and all checkboxes are ticked

## TROUBLESHOOT
if xdebug is still not working, then try the following:
- copy web/ini.php.dist to web/ini.php
- the web folder is the public web root of a Symfony project
- browse to localhost/ini.php

ini.php.dist:
```php
<?php 
	phpinfo();
?>
```
if xdebug does not appear in the list of modules, go to http://xdebug.org/wizard.php
and paste in the HTML of the entire page. This page wil give advice on the configuration changes.

## VAGRANT/REMOTE DEBUGGING

... to be continued

notes:
PHPStorm Debug settings

- port 9000
- inst chrome xdebug plugin
	- filter localhost.*, 192.*, 127.*
- debug match local file tree to vagrant server path
- nginx timeout (vendor folder)


PHPUnit invocation for a single bundle
    phpunit-debug -c app src/Website/DefaultBundle/Tests/Command/


