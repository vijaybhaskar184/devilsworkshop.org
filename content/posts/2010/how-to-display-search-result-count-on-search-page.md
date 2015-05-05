---
title: '[How to] Display search result count on search page'
author: umeshnevase
date: 2010-11-13
excerpt: You can decorate your search result page in WordPress by displaying search count in page title. Most WordPress themes show search results on search.php. We have to add just a few lines of code in our page title.
url: /how-to-display-search-result-count-on-search-page/
views:
  - 12
dsq_thread_id:
  - 2947115278
categories:
  - Tips
tags:
  - Developers
  - Search result count
  - tip
  - Wordpress
---
You can decorate your search result page in WordPress by displaying search count in page title. Most WordPress themes show search results on search.php. We have to add just a few lines of code in our page title.

### Code

` `

<div>
  <h2>
</div>

<div>
  <?php
</div>

<div>
  $rt_search = &new WP_Query(&#8220;s=$s&showposts=-1&#8243;);
</div>

<div>
  $rt_search_key = esc_html($s, 1);
</div>

<div>
  $count = $rt_search->post_count;
</div>

<div>
  echo &#8216;Search Result for <span>&#8221;&#8216; . $rt_search_key . &#8216;&#8221;</span>  &#8211;   &#8216;.$count;
</div>

<div>
  if($count > 1 ) echo &#8216; Results'; else echo &#8216; Result&#8217; ;
</div>

<div>
  wp_reset_query();
</div>

<div>
  ?>
</div>

<div>
  </h2>
</div>

<div>
  Just add this code in page title. The result will look something like the image below. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
</div>

<div>
  <a href="http://wpveda.com/how-to-display-search-result-count-on-search-page/search_result-2/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/how-to-display-search-result-count-on-search-page/search_result-2/', '']);" rel="attachment wp-att-1187"><img class="size-large  alignnone wp-image-54268" src="http://cdn.devilsworkshop.org/files/2010/11/search_result1-520x266.png" alt="" width="520" height="266" /></a>
</div>

Do drop in your comments and views.
