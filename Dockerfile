# FROM node:17
# VUE
FROM composer:latest
WORKDIR /api
COPY ./api/ /api/
RUN composer update
CMD [ "php","-S", "0.0.0.0:80","-t","public" ]
EXPOSE 80