# Default Setup for Developers

## Xcode

Download and install **Xcode** [https://itunes.apple.com/us/app/xcode/id497799835](https://itunes.apple.com/us/app/xcode/id497799835)

Then install the **Xcode Command Line Tools** ``xcode-select --install``.

Mac OS X Mavericks will also alert you when you enter a command in the terminal that requires Xcode Command Line Tools. 


## Setup sensible defaults for OS X (Mathias’s dotfiles)

You'll find more information about the modified items here [github.com/mathiasbynens/dotfiles](https://github.com/mathiasbynens/dotfiles/blob/master/README.md). Open apps will be closed; save your work before executing the last command. 

```
cd ~
git clone https://github.com/mathiasbynens/dotfiles.git && cd dotfiles && source bootstrap.sh
cd ~
./.osx
```

Hot corners will be turned on. If you don't like to use hot corners; settings can be found in the **Screen Saver** settings window. 


## Install xQuartz

Downaload the latest DMG from http://xquartz-dl.macosforge.org/ and install it. Then log out and log back in.


## Homebrew

The easiest way is to use the script below, it installs **Homebrew** to ``/usr/local`` so that you don’t need sudo when you brew install. See alternative installations methods at [github.com/Homebrew/homebrew/wiki/Installation](https://github.com/Homebrew/homebrew/wiki/Installation#alternative-installs)

```
ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
```

After the installation is finished, check every is configured properly and fix issues if needed with ``brew doctor``.


## Additional formulae and commonly used packages 

Install some common Homebrew packages such as **grep, wget, git, node, php**. This requires **Mathias’s dotfiles** to be installed. 

See the full list of packages  at [github.com/mathiasbynens/dotfiles/blob/master/Brewfile](https://github.com/mathiasbynens/dotfiles/blob/master/Brewfile)

```
brew tap homebrew/dupes
brew tap homebrew/versions
brew tap homebrew/php
brew bundle ~/Brewfile
brew install freetype jpeg libpng gd icu4c php55-xdebug php55-mcrypt php55-opcache phpunit mysql
brew upgrade
```

After the installation is finished, check every is configured properly and fix issues if needed with ``$ brew doctor``.

## Some useful npm packages 

```
npm update -g npm
npm install -g svgo grunt-cli bower 
```

## Java

Java is required by some apps still; PHP Storm, the Adobe suite, etc... ``java -version`` will trigger a popup that will ask if you want to install Java.


## Other Applications

Most of the apps you'll want can be installed using Caskroom, if you like it that way:

```
brew install caskroom/cask/brew-cask
brew cask install phpstorm google-chrome dropbox onepassword sequel-pro firefox hipchat github codekit sublime-text keka harvest alfred imageoptim imagealpha the-unarchiver virtualbox vagrant filezilla teamviewer google-drive
```

## PHP settings

```
sudo vi /usr/local/etc/php/5.5/php.ini
```

Set the timezone to ``Australia/Darwin``. For the full list of timezones, have a look at [php.net/manual/en/timezones.php](http://php.net/manual/en/timezones.php)

```
date.timezone = Australia/Darwin¬
```

## Composer 

This installer script will simply check some php.ini settings, warn you if they are set incorrectly, and then download the latest composer.phar in the current directory and then move it to ``/usr/local/bin/composer`` which will allow composer to run from anywhere on your system.

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

## Show hidden files in the finder

```
defaults write com.apple.finder AppleShowAllFiles YES
killall Finder
```

## MySQL

MySQL has already been installed by brew above. 

**Start or stop MySQL** 

```
mysql.server start
mysql.server stop
```

**Setup MySQL as a service**

```
mkdir -p ~/Library/LaunchAgents
ln -sfv /usr/local/opt/mysql/*.plist ~/Library/LaunchAgents
```

**To start or stop the MySQL service**

```
launchctl load -w ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist
launchctl unload -w ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist
```
