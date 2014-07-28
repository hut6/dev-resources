# Default Setup for Developers

## Xcode

Download and install **Xcode** [https://itunes.apple.com/us/app/xcode/id497799835](https://itunes.apple.com/us/app/xcode/id497799835)

Then install the **Xcode Command Line Tools** ``$ xcode-select --install``.

Mac OS X Mavericks will also alert you when you enter a command in the terminal that requires Xcode Command Line Tools. 


## Setup sensible defaults for OS X (Mathias’s dotfiles)

You'll find more information about the modified items here [github.com/mathiasbynens/dotfiles](https://github.com/mathiasbynens/dotfiles/blob/master/README.md). Open apps will be closed; save your work before executing the last command. 

```
$ cd ~
$ git clone https://github.com/mathiasbynens/dotfiles.git && cd dotfiles && source bootstrap.sh
$ cd ~
$ ./.osx
```

Hot corners will be turned on. If you don't like to use hot corners; settings can be found in the **Screen Saver** settings window. 


## Install Homebrew

The easiest way is to use the script below, it installs **Homebrew** to ``/usr/local`` so that you don’t need sudo when you brew install. See alternative installations methods at [github.com/Homebrew/homebrew/wiki/Installation](https://github.com/Homebrew/homebrew/wiki/Installation#alternative-installs)

```
$ ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
```

Check every is configured properly and fix issues if needed with ``$ brew doctor``.


##  Install additional formulae and commonly used packages 

Install some common Homebrew packages such as **grep, wget, git, node, php**. This requires **Mathias’s dotfiles** to be installed. 

See the full list of packages  at [github.com/mathiasbynens/dotfiles/blob/master/Brewfile](https://github.com/mathiasbynens/dotfiles/blob/master/Brewfile)

```
$ brew tap homebrew/dupes
$ brew tap homebrew/versions
$ brew update
$ brew bundle ~/Brewfile
$ brew upgrade
$ brew install freetype jpeg libpng gd zlib
```


## Install xdebug, phpunit, intl, opcache...

```
$ brew tap homebrew/homebrew-php
$ brew install php55-xdebug php55-intl php55-mcrypt php55-opcache phpunit
```
**If when running a php application, it complains about the timezone:**
Edit the /etc/php.ini file:
```
sudo vi /etc/php.ini
```
Or if the file doesn't exist yet, copy the php.ini.default:
```
sudo cp /etc/php.ini.default /etc/php.ini
```
Then edit it so that the timezone parameter looks like follow:
```
; Defines the default timezone used by the date functions¬                                                               
; http://php.net/date.timezone¬
date.timezone = Australia/Darwin¬
```

## Install MySQL

```
$ brew install mysql
```

To start MySQL (including auto start MySQL at login): 

```
$ brew services start mysql
```

Optionally "secure" your MySQL installation, just a handy way to clean up defaults and set a root password with ``mysql_secure_installation``.

Then install **Sequel Pro** from [sequelpro.com/download](http://www.sequelpro.com/download), **Querious** from [araelium.com/querious](http://www.araelium.com/querious/) for the database GUI. For modeling tools, use **MySQL Workbench** from [dev.mysql.com/downloads/workbench](http://dev.mysql.com/downloads/workbench/).

## Virtual Box

VirtualBox is a free, cross-platform consumer virtualisation product. It must be installed on its own from [virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads) prior to using Vagrant.

VMware Fusion could be used as an alternative; better performance but more costly.


## Ansible

Ansible is an automation platform that makes applications and systems easier to deploy. 

It is used to provision provision Vagrant boxes using ''playbooks'' for instance (yaml documents that comprise the set of steps to be actioned).

Install it with ``$ brew install ansible``. 


## Vagrant 

Vagrant can be downloaded from [vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)

The installer will automatically add ``vagrant`` to your system path so that it is available in terminals. If it is not found, please try logging out and logging back in to your system.


## Setup a Vagrant box 

See [github.com/hut6/vagrant-symfony](https://github.com/hut6/vagrant-symfony)
 for more information. Make sure Apache and MySQL are not running before starting or provisioning the vagrant environment. 

 
## Install Java

Java is required by some apps still; PHP Storm, the Adobe suite, etc... ``$ java -version`` will trigger a popup that will ask if you want to install Java.


## Other apps to install

- Google Chrome [google.com/chrome](http://www.google.com/chrome/)
- PHP Storm [jetbrains.com/phpstorm](http://www.jetbrains.com/phpstorm/)
- CodeKit [incident57.com/codekit](https://incident57.com/codekit/)
- SublimeText [sublimetext.com](http://www.sublimetext.com/3)
- Dropbox [dropbox.com/downloading](https://www.dropbox.com/downloading)
- 1Password [agilebits.com/downloads](https://agilebits.com/downloads)
- Github for Mac [mac.github.com](https://mac.github.com/) or Git Tower [git-tower.com](http://www.git-tower.com/)
- ImageOptim [imageoptim.com](https://imageoptim.com/)
- ImageAlpha [pngmini.com](http://pngmini.com/)
- The Unarchiver [wakaba.c3.cx/s/apps/unarchiver.html](http://wakaba.c3.cx/s/apps/unarchiver.html)
- Growl [itunes.apple.com](https://itunes.apple.com/au/app/growl/id467939042)
- Moom [manytricks.com/moom](http://manytricks.com/moom/)
