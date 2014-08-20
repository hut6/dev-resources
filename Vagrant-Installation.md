# Vagrant Installation

### Install Brew

Brew is a package manager for OSX.

    ```shell
    xcode-select --install # Xcode command line tools
    ruby -e "$(curl -fsSL https://raw.github.com/Homebrew/homebrew/go/install)"
    ```

### Install Caskroom

Caskroom is a package for brew that lets you install GUI applications in OSX.

    ```shell
    brew install caskroom/cask/brew-cask
    ```

### Install Vagrant

    ```shell
    brew install ansible
    brew cask install virtualbox vagrant
    ```
### Clone Vagrant Configuration

    ```shell
    mkdir -r ~/Projects/YourProject
    cd ~/Projects/YourProject
    git clone git@github.com:hut6/vagrant-symfony.git vagrant
    ```

## Run Vagrant

    ```shell
    vagrant up
    ```
