---
title: Certbot + Cloudflare
author: Amirmasoud
type: post
date: 2019-05-25T08:09:44+00:00
excerpt: How to set up cerbot on a cloudflare based DNS website.
url: /2019/05/25/certbot-cloudflare/
featured_image: /wp-content/uploads/2019/05/cloudflarecertbot.jpg
categories:
  - DevOps

---
## 1. Install Certbot {.wp-block-heading}

<pre class="EnlighterJSRAW" data-enlighter-language="msdos" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">sudo apt-get update
sudo apt-get install software-properties-common
sudo add-apt-repository universe
sudo add-apt-repository ppa:certbot/certbot
sudo apt-get update
sudo apt-get install certbot python-certbot-apache</pre>

_more:_ [_https://certbot.eff.org/lets-encrypt/ubuntubionic-nginx_][1]

## 2. Make cloudflare.ini {.wp-block-heading}

Get your `API key` from: <https://dash.cloudflare.com/profile>

<pre class="EnlighterJSRAW" data-enlighter-language="ini" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group=""># In ~/cloudflare.ini
# Cloudflare API credentials used by Certbot
dns_cloudflare_email = cloudflare@example.com
dns_cloudflare_api_key = 0123456789abcdef0123456789abcdef01234567</pre>

Secure `cloudflare.ini` file:

<pre class="EnlighterJSRAW" data-enlighter-language="raw" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">chmod 600 cloudflare.ini</pre>

_more:_ [_https://certbot-dns-cloudflare.readthedocs.io/en/stable/#credentials_][2]

## 3. Install Cloudflare plugin {.wp-block-heading}

<pre class="EnlighterJSRAW" data-enlighter-language="raw" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">sudo apt-get install certbot python3-certbot-dns-cloudflare</pre>

_code:_ [_https://github.com/certbot/certbot/tree/master/certbot-dns-cloudflare_][3]_  
more:_ [_https://certbot.eff.org/docs/using.html#plugins_][4]

## 4. Activate SSL {.wp-block-heading}

Change `amirmasoud.me` and `www.amirmasoud.me` to your domains:

<pre class="EnlighterJSRAW" data-enlighter-language="raw" data-enlighter-theme="" data-enlighter-highlight="4,5" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">certbot certonly \
  --dns-cloudflare \
  --dns-cloudflare-credentials ~/cloudflare.ini \
  -d amirmasoud.me \
  -d www.amirmasoud.me</pre>

_more:_ [_https://certbot-dns-cloudflare.readthedocs.io/en/stable/#examples_][5]

 [1]: https://certbot.eff.org/lets-encrypt/ubuntubionic-nginx
 [2]: https://certbot-dns-cloudflare.readthedocs.io/en/stable/#credentials
 [3]: https://github.com/certbot/certbot/tree/master/certbot-dns-cloudflare
 [4]: https://certbot.eff.org/docs/using.html#plugins
 [5]: https://certbot-dns-cloudflare.readthedocs.io/en/stable/#examples