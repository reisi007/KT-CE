echo Start Apache
sudo docker run -p 80:80 --name=kt-apache --link kt-mysql:mysql -d kt-apache

