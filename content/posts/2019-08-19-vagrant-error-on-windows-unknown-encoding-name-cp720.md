---
title: 'Vagrant Error on Windows: unknown encoding name – CP720'
author: Amirmasoud
type: post
date: 2019-08-19T03:52:20+00:00
draft: true
url: /?p=117
categories:
  - DevOps

---
Solution:

<pre class="EnlighterJSRAW" data-enlighter-language="generic" data-enlighter-theme="" data-enlighter-highlight="" data-enlighter-linenumbers="" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">chcp 1252</pre>

<blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow">
  <p>
    This is caused by your current terminal as it is using a codepage (encoding) that is not supported by Ruby. Codepage 720 is Arabic characters used by MS-DOS back in the day and seems Ruby do not have a translation table for it.
  </p>
</blockquote>

_Reference:_ [_https://stackoverflow.com/questions/22815542/rails4-unknown-encoding-name-cp720_][1] __

 [1]: https://stackoverflow.com/questions/22815542/rails4-unknown-encoding-name-cp720