echo \#
echo \# Cleanup
echo \#
sudo docker ps -a | grep 'weeks ago' | awk '{print $1}' | xargs --no-run-if-empty docker rm
echo \#
echo \# Building Apache
echo \#
sudo docker build -t kt-apache apache/
echo \#
echo \# Listing images
echo \#
sudo docker images
