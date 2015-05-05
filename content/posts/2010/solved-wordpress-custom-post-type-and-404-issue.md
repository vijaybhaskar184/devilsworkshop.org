---
title: '[Solved] WordPress Custom Post Type and 404 issue'
author: prasadnevase
date: 2010-10-21
url: /solved-wordpress-custom-post-type-and-404-issue/
views:
  - 69
dsq_thread_id:
  - 2947114704
categories:
  - Tips
tags:
  - 404 issues
  - Custom Post
  - Developers
  - Wordpress
---
WordPress posts and pages are stored in wp\_posts table. You may wonder how it differentiates? The post\_type column stores the value &#8216;post&#8217; for post and &#8216;page&#8217; for page. We can have our own custom post type also. For example if we add custom post type &#8216;portfolio&#8217; then, what gets stored under post_type column is &#8216;portfolio&#8217;<figure id="attachment_1025" style="width: 164px;" class="wp-caption alignleft">

<a href="http://wpveda.com/solved-wordpress-custom-post-type-and-404-issue/post_type/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/solved-wordpress-custom-post-type-and-404-issue/post_type/', '']);" rel="attachment wp-att-1025"><img class="size-full   wp-image-51617" src="http://cdn.devilsworkshop.org/files/2010/10/post_type.png" alt="Post Type" width="164" height="132" /></a><figcaption class="wp-caption-text">WordPress default Post menu</figcaption></figure> 

<p style="text-align: center">
  <figure id="attachment_1026" style="width: 157px;" class="wp-caption alignright"><a href="http://wpveda.com/solved-wordpress-custom-post-type-and-404-issue/portfolio_type/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/solved-wordpress-custom-post-type-and-404-issue/portfolio_type/', '']);" rel="attachment wp-att-1026"><img class="size-full wp-image-1026 " src="http://cdn.devilsworkshop.org/files/2010/10/portfolio_type.png" alt="Custom Post Type Portfolio" width="157" height="79" /></a><figcaption class="wp-caption-text">Custom Post Type Portfolio</figcaption></figure> 
  
  <p>
    It&#8217;s very easy to have custom post type. But my humble advise is to check twice whether it is really needed? If it is really needed then do go for it, because there is nothing like it, Trust me..!
  </p>
  
  <p>
    Instead of dictating everything step by step I will recommend reading codex link for &#8216;<a href="http://codex.wordpress.org/Custom_Post_Types" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Custom_Post_Types', 'Custom Post Type']);" title="Custom Post Type"  target="_self">Custom Post Type</a>&#8216;. This will certainly give you up to the mark knowledge about the same.
  </p>
  
  <h2>
    Solution to 404 issue
  </h2>
  
  <p>
    Finally I got the solution for WordPress Custom Post Type 404 issue.
  </p><figure id="attachment_1016" style="width: 350px;" class="wp-caption aligncenter">
  
  <a href="http://wpveda.com/solved-wordpress-custom-post-type-and-404-issue/404_with_custom_post_type/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/solved-wordpress-custom-post-type-and-404-issue/404_with_custom_post_type/', '']);" rel="attachment wp-att-1016"><img class="size-full wp-image-1016" src="http://cdn.devilsworkshop.org/files/2010/10/404_with_custom_post_type.png" alt="Custom Post Type 404 Issue" width="350" height="185" /></a><figcaption class="wp-caption-text">Custom Post Type 404 Issue</figcaption></figure> 
  
  <p>
    After doing a lot of  search and banging my head against a wall, I came to know that we can not have a <strong>PAGE</strong> and <strong>CUSTOM POST TYPE</strong> with the same name. I repeat, <strong>we cant have a PAGE and CUSTOM POST TYPE with the same name</strong>. Since, WordPress generates the permalink on the fly as per the name/title of the page we enter while creating, it conflicts with the Custom Post Type. For example if you have page name &#8216; Portfolio &#8216; please do not make mistake of defining Custom Post Type as
  </p>
  
  <pre><code class="no-highlight">register_post_type('portfolio',$args);</code></pre>
  
  <p>
    If you do, you will get 404 headache either with your <strong>pagination</strong> or any links e.g. <strong>Read More</strong>. So simply make either of the name plural.
  </p>
  
  <p>
    Hope this helps, and saves you precious time! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
  </p>
