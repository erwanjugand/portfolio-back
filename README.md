# portfolio-back

> My personal portfolio


## Required

``` bash
# install Node 12
$ curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -
$ apt-get install nodejs

# install Yarn
$ curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
$ echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
$ apt update
$ apt install yarn

# install PHP
$ add-apt-repository ppa:ondrej/php
$ apt-get update
$ apt-get install -y php php-xml php-intl php-zip php-mbstring php-curl php-apcu php-xdebug php-mysql

# install Composer
$ php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
$ mv composer.phar /usr/local/bin/composer

# install Mysql
$ apt install mysql-server
```

## Build Setup

``` bash
# install Symfony CLI
$ wget https://get.symfony.com/cli/installer -O - | bash
$ mv /home/erwan/.symfony/bin/symfony /usr/local/bin/symfony

# install dependencies
$ composer install

# serve with hot reload at localhost:8000
$ symfony server:start
```


## Tips

``` bash
# export database
$ mysqldump -u root -p DB_NAME > DB_NAME.sql

# import database
$ mysql> source DB_NAME.sql
```
