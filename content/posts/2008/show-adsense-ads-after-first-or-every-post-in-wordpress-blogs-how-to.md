---
title: 'Show AdSense Ads After First or Every Post in WordPress Blogs [How-To]'
author: rahul286
date: 2008-07-10
url: /show-adsense-ads-after-first-or-every-post-in-wordpress-blogs-how-to/
views:
  - 2422
dsq_thread_id:
  - 2947067140
categories:
  - Tips
tags:
  - Adsense
  - Google
  - Wordpress
---
Long time back, I wrote about showing Google AdSense ads after each post in blogger.com blogs. Now I am doing exactly opposite by limiting ads to only first post on home, archives, categories pages. <a href="http://www.funfilledblog.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.funfilledblog.org/', 'Johnson']);" >Johnson</a> wants to know how I am doing it!

To do this, You need to edit famous wordpress loop. Such a loop can be found in your current wordpress theme’s **index.php**. There may be other files present in your theme directory which uses loop like archives.php. They may need to be updated as well. 

Listed below are steps to edit loop in **index.php **file. Similar steps can be performed for other files too, if required.

1. Go to **WordPress Dashboard >>Design >> Theme Editor**. 

2. Click on **index.php** or **Main Index Template** file. It will open in **Theme Editor** on left.

3. Find a line: 

> <pre><code class="no-highlight">&lt;?php while (have_posts()) : the_post(); ?&gt;</code></pre>

4. Add **before** it:

> <pre><code class="no-highlight"> &lt;?php $adcount = 1; ?&gt;</code></pre>

5. So final code will look:

> <pre><code class="no-highlight">&lt;?php $adcount = 1; ?&gt;

&lt;?php while (have_posts()) : the_post(); ?&gt;</code></pre>

6. Now find:

> <pre><code class="no-highlight">&lt;?php endwhile; ?&gt;</code></pre>

7. Add **before** it:

> <pre><code class="no-highlight">&lt;?php $adcount++; ?&gt;</code></pre>

8. So final code will look:

> <pre><code class="no-highlight">&lt;?php $adcount++; ?&gt;

&lt;?php endwhile; ?&gt;</code></pre>

9. Now inside loop, i.e. after “**while” **line but before **“endwhile” **line put your AdSense codes. Exact location depend on your choice between ads before post, ads after post, etc. **Important thing is you have to put your AdSense code in a if-block**. below is an example…

> <pre><code class="no-highlight">&lt;?php if ($adcount == 1) : ?&gt;

&lt;!-- Put Your AdSense Code here --&gt; 

&lt;?php endif; $adcount++; ?&gt;</code></pre>

That’s it. **Save** changes and check if it works. 

### Variations…

**1. If you want to put ads after first two post…**

In step 9 code, Change **$adcount == 1** to **$adcount == 2**

**2. If you want to put ads after first three post…**

In step 9 code, Change **$adcount == 1** to **$adcount == 3**

**3. If you want to put ads after each post…**

In step 9 code, Change **$adcount == 1** to **$adcount == 3.** Yes this is same like above. Because AdSense only allows maximum three ad-units on a a single page. This way you avoid blank space created after each post when you directly put AdSense code after each post.

If you need any help, or stuck at some point, feel free to contact via comment. 

***(Credit:** Based on <a href="http://www.joehayes.org/about-me" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.joehayes.org/about-me', 'Joe Hayes']);" >Joe Hayes</a>&#160;<a href="http://www.joehayes.org/adsense-after-the-first-post-in-wordpress.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.joehayes.org/adsense-after-the-first-post-in-wordpress.html', 'post']);" >post</a>.**)***
