cp -r /usr/src/cache/node_modules/. /var/www/node_modules/
cp -r /usr/src/cache/vendor/. /var/www/vendor/
cd /var/www
mysqladmin ping  -h "mysql_activity" -uroot -proot --silent; ISNOTALIVE=$?;
while [ $ISNOTALIVE == 1 ]; do
    sleep 3;
    mysqladmin ping  -h "mysql_activity" -uroot -proot --silent; ISNOTALIVE=$?;
    done
php artisan migrate:fresh;
apache2-foreground
