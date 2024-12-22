---
title: Install Mailparse extension on PHP 7.0 + Apache + Vagrant (Ubuntu)
author: Amirmasoud
type: post
date: 2019-06-17T19:36:23+00:00
url: /2019/06/17/install-mailparse-extension-on-php-7-0-apache-vagrant-ubuntu/
categories:
  - DevOps

---
1. SSH into your server (Vagrant, Whatever)

<pre class="EnlighterJSRAW" data-enlighter-language="generic" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">vagrant ssh

# or

ssh whatever@whereever</pre>

2. Follow the following instruction:

<pre class="EnlighterJSRAW" data-enlighter-language="msdos" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">cd /tmp

apt-get install php7.0-dev

pecl download mailparse

tar xvzf mailparse-3.0.2.tgz

cd mailparse-3.0.2

phpize

./configure

sed -i \
  's/^\(#error .* the mbstring extension!\)/\/\/\1/' \
  mailparse.c

make

make install</pre>

<pre class="EnlighterJSRAW" data-enlighter-language="msdos" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">echo "extension=mailparse.so" > \
  /etc/php/7.0/fpm/conf.d/30-mailparse.ini

service php7.0-fpm reload</pre>

<pre class="EnlighterJSRAW" data-enlighter-language="generic" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">echo "extension=mailparse.so" > \ /etc/php/7.0/mods-available/mailparse.ini 
ln -s /etc/php/7.0/mods-available/mailparse.ini /etc/php/7.0/cli/conf.d/30-mailparse.ini 
ln -s /etc/php/7.0/mods-available/mailparse.ini /etc/php/7.0/cli/conf.d/30-mailparse.ini</pre>

_Source:_ [_https://stackoverflow.com/questions/35793216/installing-mailparse-php7-mbstring-error_][1] __

Although I ended up adding manually (last step) maybe this can be a future reference for myself or any other developer.

 [1]: https://stackoverflow.com/questions/35793216/installing-mailparse-php7-mbstring-error