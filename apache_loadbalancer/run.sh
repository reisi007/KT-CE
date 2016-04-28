echo Stopping Apache Loadbalancer
sudo docker stop kt-loadb
sudo docker rm kt-loadb
echo Start Apache Loadbalancer
sudo docker run -p 80:80 --name=kt-loadb kt-loadb
echo
echo
