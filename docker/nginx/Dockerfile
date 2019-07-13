FROM nginx:latest

COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./keys/server.crt /etc/nginx/server.crt
COPY ./keys/server.key /etc/nginx/server.key

RUN chmod 400 /etc/nginx/server.key
RUN chmod 400 /etc/nginx/server.crt
