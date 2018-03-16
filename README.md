# Lumen boilerplate api

## Docker

For development, we use [docker-compose](https://docs.docker.com/compose/);
make sure you have both that and Docker installed on your machine.

Build the images:

```bash
$ docker-compose build
```

And then launch them:

```bash
$ docker-compose up -d

You can then browse to `http://localhost:8082`, and any changes you make in the
project will be reflected immediately.
