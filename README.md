# Img api
Image api (resize, scale, optimize, etc.)

## Configuration
- PHP 8.1
- Postgres latest
- Nginx latest

## Local development

Copy environment file:
```bash
cp .env.dist .env
```

Create `docker-compose.yml` symlink:
```bash
ln -s docker-compose.local.yml docker-compose.yml
```

Add `.env` variable `SITE_HOST` value to `/etc/hosts`
```text
127.0.1.1	img-api.docker
```

Build application:
```bash
make build
```

Start application:
```bash
make start
```

After start, application is available at http://img-api.docker/

## Swagger
http://localhost:8081/
