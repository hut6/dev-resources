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


## Homebrew

The easiest way is to use the script below, it installs **Homebrew** to ``/usr/local`` so that you don’t need sudo when you brew install. See alternative installations methods at [github.com/Homebrew/homebrew/wiki/Installation](https://github.com/Homebrew/homebrew/wiki/Installation#alternative-installs)

```
$ ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
```

After the installation is finished, check every is configured properly and fix issues if needed with ``$ brew doctor``.


## Additional formulae and commonly used packages 

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


## xdebug, phpunit, intl, opcache...

```
$ brew tap homebrew/homebrew-php
$ brew install php55-xdebug php55-intl php55-mcrypt php55-opcache phpunit
```

**Change the PHP timezone setting**

```
$ sudo vi /etc/php.ini
```

Then set the timezone to ``Australia/Darwin``. For the full list of timezones, have a look at [php.net/manual/en/timezones.php](http://php.net/manual/en/timezones.php)

```
date.timezone = Australia/Darwin¬
```

## MySQL

```
$ brew install mysql
```

**Setup MySQL as a service**

```
$ mkdir -p ~/Library/LaunchAgents
$ ln -sfv /usr/local/opt/mysql/*.plist ~/Library/LaunchAgents
```

**To start or stop MySQL**

```
$ launchctl unload -w ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist
$ launchctl load -w ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist
```

## Applications

Most of the apps you'll want can be install using Caskroom, if you like it that way:

```shell
brew install caskroom/cask/brew-cask
brew cask install phpstorm google-chrome dropbox onepassword sequel-pro # Minimal
brew cask install virtualbox vagrant # Vagrant
brew cask install firefox hipchat github codekit sublime-text keka harvest alfred # Extras
```

## Database Tools

You might want **Sequel Pro** from [sequelpro.com/download](http://www.sequelpro.com/download), **Querious** from [araelium.com/querious](http://www.araelium.com/querious/) for the database GUI. For modeling tools, use **MySQL Workbench** from [dev.mysql.com/downloads/workbench](http://dev.mysql.com/downloads/workbench/).

 
## Java

Java is required by some apps still; PHP Storm, the Adobe suite, etc... ``$ java -version`` will trigger a popup that will ask if you want to install Java.


## PHP Storm

PHP Storm can be downloaded from [jetbrains.com/phpstorm](http://www.jetbrains.com/phpstorm/). Remember to install the two Symfony addons and turn theme on (this section about plugins to be extended).


## Vagrant 

See [github.com/hut6/vagrant-symfony](https://github.com/hut6/vagrant-symfony)
 for more information. 
 

## Other apps to install

- Google Chrome [google.com/chrome](http://www.google.com/chrome/)
- CodeKit [incident57.com/codekit](https://incident57.com/codekit/)
- SublimeText [sublimetext.com](http://www.sublimetext.com/3)
- Dropbox [dropbox.com/downloading](https://www.dropbox.com/downloading)
- 1Password [agilebits.com/downloads](https://agilebits.com/downloads)
- Github for Mac [mac.github.com](https://mac.github.com/) or Git Tower [git-tower.com](http://www.git-tower.com/)
- ImageOptim [imageoptim.com](https://imageoptim.com/)
- ImageAlpha [pngmini.com](http://pngmini.com/)
- Keka [www.kekaosx.com](http://www.kekaosx.com/en/)
- Moom [manytricks.com/moom](http://manytricks.com/moom/)
