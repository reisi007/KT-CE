FROM ubuntu:latest
# Install base packages
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get -yq install \
        apache2 && \
  a2enmod proxy_balancer proxy_http lbmethod_byrequests
RUN  DEBIAN_FRONTEND=noninteractive  rm -rf /var/lib/apt/lists/*
RUN mkdir /var/lock/apache2
RUN a2enmod proxy_balancer proxy_http
ENV ALLOW_OVERRIDE **True**
RUN service apache2 restart
# Add image configuration and scripts
ADD conf/needed4Docker.sh /run.sh
ADD conf/apache2.conf /etc/apache2/apache2.conf
ADD conf/site.conf /etc/apache2/sites-available/000-default.conf
RUN chmod 755 /*.sh

EXPOSE 80
CMD ["/run.sh"]
