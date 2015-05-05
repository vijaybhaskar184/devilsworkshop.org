---
title: Create Portfolio with Image Sliding Effect with jQuery
author: manishsongirkar
date: 2011-10-20
url: /portfolio-image-sliding-effect-with-jquery/
dsq_thread_id:
  - 3180158004
categories:
  - Tutorial
tags:
  - Developers
  - HTML
  - jQuery
  - Sliding Effect
  - web designing
  - Wordpress
---
[<img class="wp-image-51065" style="margin: 4px 10px 0px 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2011/10/portfolio-image-sliding-effect-with-jquery_thumb.jpg" alt="portfolio-image-sliding-effect-with-jquery" width="604" height="339" border="0" />][1]  
There are tons of tutorials already out there about creating portfolio image slide effect with jQuery. I wanted to create an easy-to-implement jQuery image slider for my portfolio page, you can check the live demo at <a href="http://bloggertowp.org/portfolio/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/portfolio/', 'Blogger To WordPress portfolio']);" title="Blogger To WordPress">Blogger To WordPress portfolio</a>.

This slider requires the latest release of jQuery and functional knowledge of jQuery, HTML and CSS

So let&#8217;s start the implementation

## Step 1 : Include the JQuery Library

First, you have to include the JQuery library between &#8216;<head>&#8217; and &#8216;</head>&#8217; tags of your html page:

<pre><code class="no-highlight">&lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"&gt;&lt;/script&gt;</code></pre>

## Step 2 : Add HTML Code

Add HTML Code, this is the source code of our sample:

<pre><code class="no-highlight">&lt;div class="image-container"&gt;
 &lt;a title="Devils Workshop" href="http://devilsworkshop.org/" target="_blank"&gt; 
  &lt;span class="image-caption"&gt;image title&lt;/span&gt; 
  &lt;span class="image-content"&gt;&lt;img title="custom title" alt="custom alt" class="attachment-rt-gallery" src="http://path-to-image.jpg" /&gt;&lt;/span&gt; 
 &lt;/a&gt;
&lt;/div&gt;</code></pre>

## Step 3 : Add Style/CSS code

Add CSS Code in your style sheet file, this is the source code of our sample:

<pre><code class="no-highlight">.image-container {
  border: 1px solid #CCCCCC;
  float: left;
  height: 180px;
  margin: 0 25px 20px 0;
  overflow: hidden;
  padding: 5px;
  text-align: center;
  width: 300px;
}

.image-container a {
  color: #66A83E;
  display: block;
  font-size: 18px;
  height: 100%;
  overflow: hidden;
  position: relative;
  width: 100%;
}

.image-container a span.image-caption {
  display: table-cell;
  height: 180px;
  text-align: center;
  vertical-align: middle;
  width: 300px;
}

.image-container a span.image-content {
  height: 180px;
  left: 0;
  position: absolute;
  top: 0;
  width: 300px;
  z-index: 5;
}

.image-container a span.image-content img {
  border: medium none;
  margin: 0;
  padding: 0;
}</code></pre>

## Step 4 : Add jQuery Code

You have to include the following jQuery code to work the image slider. To do so, embed it within <script type=&#8221;text/javascript&#8221;> /\* Put the Code given below \*/ </script>, or even better, put it in a separate .js file.

<pre><code class="no-highlight">jQuery( '.image-container' ).hover(
    function() { jQuery( '.image-content', this ).stop().animate( { left : '300px' }, { queue : false, duration : 500 } ); },
    function() { jQuery( '.image-content', this ).stop().animate( { left : '0px' }, { queue : false, duration : 500 } ); }
);</code></pre>

#### Screenshot

[<img style="margin: 4px 10px 0px 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2011/10/rt-screenshot_thumb.jpg" alt="rt-screenshot" width="618" height="234" border="0" />][2]

Hope this helps and saves your time, do drop in your opinions and comments below.<img class="wlEmoticon wlEmoticon-smile" style="border-style: none" src="http://cdn.devilsworkshop.org/files/2011/10/wlEmoticon-smile.png" alt="Smile" />

 [1]: http://cdn.devilsworkshop.org/files/2011/10/portfolio-image-sliding-effect-with-jquery.jpg
 [2]: http://cdn.devilsworkshop.org/files/2011/10/rt-screenshot.jpg
