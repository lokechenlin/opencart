# About

A docker container for Nginx-PHP-Opencart

## To run Docker image

docker run -d \
    --cap-add SYS_PTRACE \
    -p 8081:80 \
    -p 28081:9001 \
    -v /Users/chenlin/Dev3/docker/opencart:/data/src \
    --name opencart nginx-php