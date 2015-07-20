#script to deploy website
echo "DROP DATABASE IF EXISTS conf_php" |  mysql --user=root --password=root

echo "CREATE DATABASE conf_php DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci" | mysql --user=root --password=root

#user tom exists?
echo "DELETE FROM mysql.user WHERE user='tom' and host='tom'"

#create user for conf_php database
#donner tous les privileges sur les tables de la bdd conf_php a l'utilisatateur tom
echo "GRANT ALL PRIVILEGES ON conf_php. * TO 'tom'@'localhost' identified by 'tom' WITH GRANT OPTION" | mysql --user=root --password=root

#migration laravel
#php artisan make:migration create_student_table --create=students


