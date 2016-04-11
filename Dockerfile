FROM ubuntu:latest
#Update
RUN echo "Apache Docker Image"
RUN apt-get update
RUN apt-get -y upgrade
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install apache2 libapache2-mod-php5 php5-mysql php5-gd php-pear php-apc php5-curl curl
ADD wordpress /var/www/html/

# Enable apache mods.
RUN a2enmod php5
RUN a2enmod rewrite
