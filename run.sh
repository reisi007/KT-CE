echo Stopping all running containers
sudo docker stop $(docker ps -a -q)
echo Start Apache
sudo docker run -d -p 80:80 kt-apache
