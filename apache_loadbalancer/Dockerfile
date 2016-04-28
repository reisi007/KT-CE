FROM ubuntu:latest
# Install base packages
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get -yq install \
        apache2 \
         && \
    rm -rf /var/lib/apt/lists/*

RUN a2enmod proxy_balancer proxy_http

ENV ALLOW_OVERRIDE **True**

# Add image configuration and scripts
ADD needed4Docker.sh /run.sh
ADD apache2.conf /etc/apache2/apache2.conf
RUN chmod 755 /*.sh

EXPOSE 80
CMD ["/run.sh"]
