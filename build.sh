echo \#
echo \# Cleanup
echo \#
sudo docker rmi $(sudo docker images | grep "^<none>" | awk "{print $3}")
echo \#
echo \# Building Apache App
echo \#
sudo docker build -t kt-apache apache_app/
echo \#
echo \# Building Apache App
echo \#
sudo docker build -t kt-loadb apache_loadbalancer/
cd apache_loadbalancer
./build.sh
echo \#
echo \# Listing images
echo \#
sudo docker images
