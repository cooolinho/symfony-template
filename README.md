# Symfony Template

## Installation
### 1. run commands on local machine
```
composer install
vagrant up
vagrant ssh
```
### 2. run commands in vagrant box
```
cd /home/vagrant/symfony/template/symfony
yarn install
yarn run dev
```

## symfony/var Directory
If the enviroment is "dev", maybe u have to change the root directory of the cache and log directory
```
# symfony/src/Kernel.php
...
const ENV_DEV_DIR = '/tmp/symfony' <-- change Root Directory (optional)
...
```

## Git Hook pre_commit
This hook runs the php-cs-fixer command
```
scripts/git/hooks/pre_commit
```

## Commands
```
composer run phpcs
composer run phpcbf
composer run php-cs-fixer

# Runs phpcs & php-cs-fixer
composer run tools 
```


## Requirements
- Vagrant 2.3.4
- VirtualBox 6.1
- PHP 8.1.10
- Composer 2.2.1
