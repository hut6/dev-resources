# Vagrant Installation

This document will help you setup a vagrant virtual machine, with nginx+PHP+MySQL+xdebug.

### Install Brew

Brew is a package manager for OSX.

```sh
xcode-select --install # Xcode command line tools
ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
```

### Install Caskroom

Caskroom is a package for brew that lets you install GUI applications in OSX.

```sh
brew install caskroom/cask/brew-cask
```

### Install Vagrant

```sh
brew install ansible # ansible is used for vagrant provisioning
brew cask install virtualbox vagrant # Virtualbox is used by vagrant
```
### Clone Vagrant Configuration

```sh
mkdir -r ~/Projects/YourProject # This can be a clone of a project repository
cd ~/Projects/YourProject
git clone git@github.com:hut6/vagrant-symfony.git vagrant
```

## Run Vagrant

```sh
cd vagrant #
vagrant up --provision
```

It may take a while to download the box image the first time. But once the box is downloaded and provisioned, you should
be all done. [http://192.168.33.10/](http://192.168.33.10/).

### Possible Problems

1. NFS exports can cause issues when sharing folders from your local machine to the VM (you'll need the root pwd for this).
