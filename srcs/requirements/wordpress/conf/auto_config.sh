sleep 10

cd /var/www/wordpress/

if [ ! -f wp-config.php ]; then

wp config create	--allow-root \
	--dbname=$SQL_DATABASE \
	--dbuser=$SQL_USER \
	--dbpass=$SQL_PASSWORD \
	--dbhost=mariadb:3306 \
	--path='/var/www/wordpress'

wp core install	--allow-root \
	--url=${DOMAIN_NAME} \
	--title=${WORDPRESS_NAME} \
	--admin_user=${WORDPRESS_ROOT_LOGIN} \
	--admin_password=${WORDPRESS_ROOT_PASSWORD} \
	--admin_email=${WORDPRESS_ROOT_EMAIL} \
	--path='/var/www/wordpress'

wp user create ${WORDPRESS_USER} ${WORDPRESS_USER_EMAIL} \
	--user_pass=${WORDPRESS_USER_PASSWORD} \
	--role=author \
	--allow-root \
	--path='/var/www/wordpress'

fi

/usr/sbin/php-fpm7.3 -F
