echo Stopping all running containers
sudo docker stop kt-apache kt-mysql
sudo docker rm kt-apache kt-mysql
echo Start MySQL
sudo docker run --name kt-mysql -v /dockerData/kt-mysql:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=1234 -d mysql/mysql-server:latest
echo Start Apache
sudo docker run -p 80:80 --name=kt-apache --link kt-mysql:mysql -d kt-apache
echo 
echo
echo Remember, it can take up to 5 secons until MySQL is up!
echo
