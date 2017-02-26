balkany2022.fr

## Docker

```
docker build -t "bastien/balkany2022:latest" .
docker run --restart=always -d --publish 127.0.0.1:8080:80 bastien/balkany2022:latest
```
