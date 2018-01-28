docker build -t my-php-app .
docker run -it --rm --name kk01-running my-php-app

docker stop kk-nginx-running
docker build -t kk-nginx . --no-cache 
docker run -it --rm --name kk-nginx-running kk-nginx:latest
docker exec -it kk-nginx-running /bin/bash

docker stop kk-php-running
docker build -t kk-php .
docker run -it --rm --name kk-php-running kk-php:latest


docker exec -it kk-php-running /bin/bash
