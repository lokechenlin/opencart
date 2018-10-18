# About

A docker container for Opencart

## Prerequisite
* Please build nginx-php before.
* Install the mysql and setup the database.

## To build Docker image

* Under the folder with `Dockerfile`. Build time should < 1 min.

Example:

    docker build -t opencart .

## To run Docker image

Example:

    docker run -it --rm \
    --cap-add SYS_PTRACE \
    -p 8080:80  -p 8081:81 -p 8082:9001 \
    -e ADMIN_PASSWORD=1234 \
    -e DB_HOSTNAME=192.168.7.145 \
    -e DB_USERNAME=opencart \
    -e DB_PASSWORD=1234 \
    --name opencart opencart


    