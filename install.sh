#!/bin/sh

#install composer
composer install
npm install

#install databases
echo "DROP DATABASE IF EXISTS conf_php" |  mysql --user=root --password=root

echo "CREATE DATABASE conf_php DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci" | mysql --user=root --password=root

echo "DELETE FROM mysql.user WHERE user='admin' and host='admin'"

echo "GRANT ALL PRIVILEGES ON conf_php. * TO 'admin'@'localhost' identified by 'admin' WITH GRANT OPTION" | mysql --user=root --password=root

#create the .env file
ENV=$(cat<<EOF
APP_ENV=local\n
APP_DEBUG=false\n
APP_KEY=\n
\n
DB_HOST=localhost\n
DB_DATABASE=conf_php\n
DB_USERNAME=admin\n
DB_PASSWORD=admin\n
\n
CACHE_DRIVER=file\n
SESSION_DRIVER=file\n
QUEUE_DRIVER=sync\n
\n
MAIL_DRIVER=mail\n
MAIL_HOST=null\n
MAIL_PORT=2525\n
MAIL_USERNAME=null\n
MAIL_PASSWORD=null\n
MAIL_ENCRYPTION=null\n
EOF
)

echo $ENV > .env
php artisan key:generate

#migrate and seed databases
php artisan migrate --seed

#start the server localhost:8000
php artisan serve

