FROM ubuntu:14.04

MAINTAINER Maks

RUN apt-get update \
&&	apt-get --assume-yes install \
	build-essential \
 	python-software-properties \
 	software-properties-common \
 	zip \
 	supervisor \
 	nano \
	git \
	curl \
	wget \
	nginx

#install php7
RUN add-apt-repository ppa:ondrej/php \
&&	apt-get update \
&&	apt-get --assume-yes --force-yes install \
	php7.0 \
	php7.0-fpm \
	php7.0-mysql \
	php7.0-curl \
	php7.0-mcrypt \
	php7.0-mbstring \
	php7.0-xml

RUN curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
RUN wget https://phar.phpunit.de/phpunit.phar
RUN chmod +x phpunit.phar
RUN sudo mv phpunit.phar /usr/local/bin/phpunit

COPY conf/nginx/default /etc/nginx/sites-enabled/
COPY conf/supervisord.conf /etc/supervisor/conf.d/
