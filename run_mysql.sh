echo Start MySQL
sudo docker run -p 3306:3306 --name kt-mysql -v /dockerData/kt-mysql:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=1234 -e MYSQL_DATABASE=ktce -d mysql/mysql-server:latest
echo 
echo
echo Remember, it can take up to 5 secons until MySQL is up!
echo
