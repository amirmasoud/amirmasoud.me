---
title: Coir – WordPress on docker-compose utilizing MariaDB and NGINX
author: Amirmasoud
type: post
date: 2020-05-10T06:40:10+00:00
draft: true
url: /?p=1272
categories:
  - Projects
tags:
  - docker
  - mariadb
  - nginx
  - wordpress

---
This is a boilerplate project that can help developers to spin a WordPress website up with docker. it utilized NGINX as a reverse proxy to serve PHP-fpm and using MariaDB as the database driver.

To spin up the project <a rel="noreferrer noopener" href="https://www.docker.com/" target="_blank">docker </a>and [docker-compose][1] need to be installed on the target machine. After that, by cloning the <a rel="noreferrer noopener" href="https://github.com/amirmasoud/coir" target="_blank">coir repository</a> from GitHub, you need to run `docker-compose up -d` inside the clone directory in order to start the docker to pull and start the containers.

you can check it out on [GitHub][2].

 [1]: https://docs.docker.com/compose/
 [2]: https://github.com/amirmasoud/coir