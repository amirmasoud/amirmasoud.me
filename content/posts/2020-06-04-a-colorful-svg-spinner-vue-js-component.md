---
title: A Colorful SVG Spinner Vue.js Component
author: Amirmasoud
type: post
date: 2020-06-04T09:18:45+00:00
url: /2020/06/04/a-colorful-svg-spinner-vue-js-component/
featured_image: /wp-content/uploads/2020/05/spinner.gif
categories:
  - Learning

---
I just created a simple Vue.js spinner using SVG and CSS animation to iterate along with the different colors.

The default spinner comes from&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://glennmccomb.com/articles/building-a-pure-css-animated-svg-spinner/">Glenn McComb</a>&nbsp;post, where he created a spinning SVG circle using CSS animation. I have slightly adjusted it to put in a Vue.js template.

The HTML part is straight forward; we have a circle in 100 by 100 view box, centered at 50 with a radius of 45.

<pre class="wp-block-code"><code>&lt;svg class="spinner" viewBox="0 0 100 100" 
    xmlns="http://www.w3.org/2000/svg">
    &lt;circle cx="50" cy="50" r="45" />
&lt;/svg></code></pre>

In the CSS part, I have changed the stroke color to our very first color, a subtle pink, and set a [linear animation][1] for color change:

<pre class="wp-block-code"><code>svg.spinner {
  animation: 2s linear infinite svg-animation;
}

@keyframes svg-animation {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(360deg);
  }
}

.spinner circle {
  animation: 1.4s ease-in-out infinite both circle-animation;
  -webkit-transition: stroke 0.3s linear;
  -moz-transition: stroke 0.3s linear;
  -o-transition: stroke 0.3s linear;
  transition: stroke 0.3s linear;
  display: block;
  fill: transparent;
  stroke: #ed64a6;
  stroke-linecap: round;
  stroke-dasharray: 283;
  stroke-dashoffset: 280;
  stroke-width: 10px;
  transform-origin: 50% 50%;
}

@keyframes circle-animation {
  0%,
  25% {
    stroke-dashoffset: 280;
    transform: rotate(0);
  }

  50%,
  75% {
    stroke-dashoffset: 75;
    transform: rotate(45deg);
  }

  100% {
    stroke-dashoffset: 280;
    transform: rotate(360deg);
  }
}</code></pre>

In our Vue.js component, we need to set the colors data property, which we used&nbsp;<a rel="noreferrer noopener" target="_blank" href="https://tailwindcss.com/docs/customizing-colors/#default-color-palette">Tailwind</a>&nbsp;400 level colors. Next, I&#8217;ve created an [interval][2] of 2000 millisecond to iterate through colors. We also set the destroy method in our Vue.js component to [clear interval][3] after we are done with showing spinner.

<pre class="wp-block-code"><code>new Vue({
  el: '#app',
  data: () => ({
    interval: null,
    colors: &#91;
      '#F56565',
      '#ED8936',
      '#ECC94B',
      '#48BB78',
      '#38B2AC',
      '#4299E1',
      '#667EEA',
      '#9F7AEA',
      '#ED64A6'
    ]
  }),
  created() {
    let idx = 0
    this.interval = setInterval(() => {
      document.querySelector('.spinner circle').style.stroke = this.colors&#91;
        idx++
      ]
      if (idx === this.colors.length) {
        idx = 0
      }
    }, 2000)
  },
  destroyed() {
    clearInterval(this.interval)
  }
});</code></pre>

Final result:

<div class="wp-block-cp-codepen-gutenberg-embed-block cp_embed_wrapper">
</div>

For Nuxt.js, as we don&#8217;t have access to `document` on the server-side, we need to wrap the color change in `<a href="https://nuxtjs.org/api/context/">process.client</a>` condition to only run on the client-side and add `<a href="https://github.com/nuxt/eslint-plugin-nuxt/blob/master/docs/rules/no-globals-in-created.md">eslint-disable-line nuxt/no-globals-in-created</a>` comment to prevent `eslint` from throwing error.

<pre class="wp-block-code"><code>if (process.client) {
  document.querySelector('.spinner circle').style.stroke = this.colors&#91; // eslint-disable-line nuxt/no-globals-in-created
    idx++
  ]
}</code></pre>

 [1]: https://developer.mozilla.org/en-US/docs/Web/CSS/animation-timing-function
 [2]: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setInterval
 [3]: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/clearInterval