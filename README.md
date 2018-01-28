<<<<<<< HEAD
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
=======
# main
Only testing project
>>>>>>> 4d3365c7f3616ffe7ef263500d0568f51432ab97
