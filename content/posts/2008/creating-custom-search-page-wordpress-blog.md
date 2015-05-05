---
title: Creating Custom Search Page in WordPress Blog
author: rahul286
date: 2008-09-23
url: /creating-custom-search-page-wordpress-blog/
views:
  - 1019
dsq_thread_id:
  - 2947092064
categories:
  - Tips
tags:
  - Adsense
  - Developers
  - Google
  - plugin
  - Wordpress
---
In wordpress, there are two types of webpages &#8211; &#8220;posts&#8221; and &#8220;pages&#8221;. While &#8220;posts&#8221; are generated dynamically, &#8220;pages&#8221; are statics and created explicitly. You can create as many &#8220;pages&#8221; as you want and put them anywhere in your blog&#8217;s structure. Few pages I have here includes &#8211; [about page][1], [contact page][2], [joining DW page][3], etc.

Apart from these &#8220;pages&#8221;, I use a special &#8220;[search page][4]&#8221; with extra-level of customization. It is technically outside my wordpress setup. I do not use wordpress built-in search mechanism. Instead I use, Google custom search like many of you. I will explain why I use Google custom search some other time!

For time being, if you notice my search page do not have any sidebar compared to say &#8220;contact page&#8221;. A simple way to disable sidebar for any post/page is to surround &#8220;get_sidebar()&#8221; call in theme with if-else block. But for sake of slight performance improvement and few other reasons I prefer maintaining a dedicated search page outside my wordpress setup. But as you can see, it is blended with my theme very-well!

**So here is &#8220;how-to&#8221; guide to create such &#8220;search pages&#8221; outside wordpress:**

  1. Create a page say in root-directory of your blog. Name it something like &#8211; **search.php**. It will have URL like &#8211; http://www.devilsworkshop.org/search.php
  2. Next log into AdSense or Google Custom Search Engine, and create a new custom search or update existing search engine.
  3. Just remember to use above URL (step 1) for search result pafe
  4. Then add following code as it is to it: 
    <pre><code class="no-highlight">&lt;?php
define('WP_USE_THEMES', false);
require('wp-blog-header.php');
get_header();
?&gt;
&lt;!-- Google Search Result CODE --&gt;
&lt;?php
get_footer();
?&gt;</code></pre>

  5. Finally replace *&#8220;Google Search Result CODE&#8221;* line in above code with codes you will get from Google.
  6. Save/Upload **search.php** in your blog&#8217;s root directory.

If you need to use some CSS, use it inline on Google search result code&#8217;s first line, i.e.

<pre><code class="no-highlight">&lt;div id="cse-search-results"&gt;&lt;/div&gt;</code></pre>

**Example:**

<pre><code class="no-highlight">&lt;div id="cse-search-results" style="width:980px;"&gt;&lt;/div&gt;</code></pre>

I needed to set width attribute like above to expand search results into space made available by absence of sidebar.

Try this and use comments form below if you stuck! I hope this answer your question <a href="http://www.pcdrome.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.pcdrome.com/', 'Anurag']);" >Anurag</a>. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related:** [WordPress Plugin Series][5]

 [1]: http://devilsworkshop.org/about/
 [2]: http://devilsworkshop.org/contact/
 [3]: http://devilsworkshop.org/join-dw/
 [4]: http://devilsworkshop.org/search.php
 [5]: http://devilsworkshop.org/series/wordpress-plugins-series/
