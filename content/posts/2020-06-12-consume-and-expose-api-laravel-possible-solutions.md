---
title: Consume and Expose API – Laravel possible solutions
author: Amirmasoud
type: post
date: 2020-06-12T15:41:17+00:00
url: /2020/06/12/consume-and-expose-api-laravel-possible-solutions/
featured_image: /wp-content/uploads/2020/06/pankaj-patel-fvMeP4ml4bU-unsplash.jpg
categories:
  - Learning
tags:
  - api
  - curl
  - graphql
  - guzzle
  - hasura
  - laravel
  - postman
  - zttp

---
## How to consume APIs inside Laravel? {.wp-block-heading}

If you want to fetch, save, crawl, or fire a one-time request to a remote server that exposes API, there are a variety of options for Laravel. An example use-case would be updating the IMDB rating for a batch of movies and series for your film listing web application.

The popular ones are:

<ol class="wp-block-list">
  <li>
    <a rel="noreferrer noopener" target="_blank" href="http://docs.guzzlephp.org/en/stable/">Guzzle</a><br />You can learn more about how to use it with Laravel HTTP client wrapper in <a href="https://laravel.com/docs/7.x/http-client">Laravel Doc</a>.
  </li>
  <li>
    <a rel="noreferrer noopener" target="_blank" href="https://curl.haxx.se/">Curl</a><br />Another powerful option is <code>curl,</code> you can use it directly with <a href="https://www.php.net/manual/en/book.curl.php">PHP cURL library</a>, or you can use <a href="https://github.com/ixudra/curl">this Laravel package</a> by <a href="https://github.com/ixudra">Ixudra</a>.
  </li>
  <li>
    <a rel="noreferrer noopener" target="_blank" href="https://github.com/kitetail/zttp">zttp</a><br />Zttp is another wrapper around Guzzle which they describe themselves as `A developer-experience focused HTTP client, optimized for most common use cases.` if you don&#8217;t need to send any crazy complex request to your remote, Zttp can be your friend.
  </li>
</ol>

_Things to keep in mind&#8230;_

<ol class="wp-block-list">
  <li>
    Always save your remote server credential in `.env` file. <a rel="noreferrer noopener" target="_blank" href="https://laravel.com/docs/7.x/configuration">Read more about it on Laravel Doc</a>.
  </li>
  <li>
    Always check for any error that your remote might throw, it can be as much as <a rel="noreferrer noopener" target="_blank" href="https://developers.google.com/youtube/v3/docs/errors">YouTube API errors</a> or as little as just access forbidden (403) and not found error (404).
  </li>
</ol>

**Heads Up!** if the API you are going to consume in your application is well-known and complex, there is a high chance that someone else has already developed a library to just work with that API, like this <a rel="noreferrer noopener" target="_blank" href="https://github.com/alaouy/Youtube">Laravel package</a> by <a rel="noreferrer noopener" target="_blank" href="https://github.com/alaouy">Mustapha Alaouy</a> that specifically calls YouTube API.

## How to expose APIs from Laravel? {.wp-block-heading}

When you expose one or more endpoints from your application to the world, other users can consume your API to fetch what they are looking for. An example would be to expose all posts of your blog to be consumed by your mobile application team and be shown the posts in the native UI.

A great walkthrough on how to write REST API in Laravel can be found in <a rel="noreferrer noopener" target="_blank" href="https://www.twilio.com/blog/building-and-consuming-a-restful-api-in-laravel-php">this blog post</a> in the Twilio blog by Micheal Okoh. Which clearly explains how to do so step by step in Laravel.

If you want to learn more about REST development and be standard, I recommend reading <a rel="noreferrer noopener" href="https://stackoverflow.blog/2020/03/02/best-practices-for-rest-api-design/" target="_blank">this article</a> on Stack Overflow blog by <a rel="noreferrer noopener" href="https://stackoverflow.blog/author/john-au-yeung/" target="_blank">John Au-Yeung</a> and checking out <a rel="noreferrer noopener" href="https://jsonapi.org/" target="_blank">json:api</a> website for following best practices.

Other than the REST API option, you can consider <a rel="noreferrer noopener" href="https://graphql.org/" target="_blank">GraphQL </a>for the fast development of your APIs as it offers query-specific requirements at the frontend. You can also use this <a rel="noreferrer noopener" href="https://github.com/rebing/graphql-laravel" target="_blank">GraphQL package for Laravel</a> and match it with <a rel="noreferrer noopener" href="https://hasura.io/" target="_blank">Hasura </a>for rapid backend development.

**Heads Up!** If you want to test your API or someone else&#8217;s API, you can use [Postman][1] as it has matured dramatically over the past few years to support different requests.

 [1]: https://www.postman.com/