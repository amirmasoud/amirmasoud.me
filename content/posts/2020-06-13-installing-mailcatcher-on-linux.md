---
title: Installing Mailcatcher on Linux
author: Amirmasoud
type: post
date: 2020-06-13T06:40:06+00:00
url: /2020/06/13/installing-mailcatcher-on-linux/
categories:
  - Learning

---
1. Install essential packages:

<pre class="wp-block-code"><code>sudo apt install gem ruby build-essential ruby-dev libsqlite3-dev</code></pre>

Sources: [_https://github.com/sj26/mailcatcher/issues/144#issuecomment-152839748_][1]  
[_https://github.com/sj26/mailcatcher/issues/144#issuecomment-48008579_][2]

2. Install Mailcatcher

<pre class="wp-block-code"><code>gem install mailcatcher</code></pre>

 [1]: https://github.com/sj26/mailcatcher/issues/144#issuecomment-152839748
 [2]: https://github.com/sj26/mailcatcher/issues/144#issuecomment-48008579