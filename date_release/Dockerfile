FROM ubuntu

RUN apt update && apt install -y php-mysqli


FROM nginx

ADD www/html /var/www/html/

COPY nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 8000

