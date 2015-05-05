---
title: 'Force Firefox To Display Your Full Feeds [WordPress Hack]'
author: rahul286
date: 2008-07-11
url: /force-firefox-to-display-your-full-feeds-wordpress-hack/
views:
  - 969
dsq_thread_id:
  - 2947090913
categories:
  - Tips
tags:
  - Firefox
  - 'Tips &amp; Hacks'
  - Wordpress
---
There is a problem *(or feature)* in Firefox. For wordpress blogs and few other feeds it always show partial content making it hard to judge for a wannabe subscriber whether your are displaying full feed or partial feed.

Many subscribers just hate partial feeds and most of them are unaware of this default firefox behavior which I guess can’t be changed via some **about:config** hack.

As a blogger if you care about your subscriber count, you can use following hack to force firefox to display your original full feed.

**RSS 2.0 Feeds (default wordpress format)**

1. Open file.

<pre><code class="no-highlight">&lt;wordpress-root&gt;/wp-includes/feed-rss2.php</code></pre>

2. Find following lines

<pre><code class="no-highlight">&lt;?php if (get_option('rss_use_excerpt')) : ?&gt;
&lt;description&gt;&lt;![CDATA[&lt;?php the_excerpt_rss() ?&gt;]]&gt;&lt;/description&gt;
&lt;?php else : ?&gt;
&lt;description&gt;&lt;![CDATA[&lt;?php the_excerpt_rss() ?&gt;]]&gt;&lt;/description&gt;</code></pre>

3. Now comment out last line. We can remove it too but commenting is safe option. So it will look like…

<pre><code class="no-highlight">&lt;?php if (get_option('rss_use_excerpt')) : ?&gt;
          &lt;description&gt;&lt;![CDATA[&lt;?php the_excerpt_rss() ?&gt;]]&gt;&lt;/description&gt;
&lt;?php else : ?&gt;
          &lt;strong>&lt;!-&nbsp;-
    &lt;/strong>        &lt;description&gt;&lt;![CDATA[&lt;?php the_excerpt_rss() ?&gt;]]&gt;&lt;/description&gt;
        &lt;strong>  -&nbsp;-&gt;&lt;/strong></code></pre>

4. Save file. That’s it.

**ATOM Feeds**

1. Open file.

<pre><code class="no-highlight">&lt;wordpress-root&gt;/wp-includes/feed-atom.php</code></pre>

2. Find following line

<pre><code class="no-highlight">&lt;summary type="&lt;?php html_type_rss(); ?&gt;"&gt;&lt;![CDATA[&lt;?php the_excerpt_rss(); ?&gt;]]&gt;&lt;/summary&gt;</code></pre>

3. Now comment out last line. We can remove it too but commenting is safe option. So it will look like…

<pre><code class="no-highlight">&lt;!-&nbsp;-
&lt;summary type="&lt;?php html_type_rss(); ?&gt;"&gt;&lt;![CDATA[&lt;?php the_excerpt_rss(); ?&gt;]]&gt;&lt;/summary&gt;
-&nbsp;-&gt;</code></pre>

4. Save file. That’s it.

**RSS 0.92 Feeds**

Fix is not needed.

**RDF Format**

1. Open file.

<pre><code class="no-highlight">&lt;wordpress-root&gt;/wp-includes/feed-rdf.php</code></pre>

2. Find following lines

<pre><code class="no-highlight">&lt;?php if (get_option('rss_use_excerpt')) : ?&gt;
&lt;description&gt;&lt;?php the_excerpt_rss() ?&gt;&lt;/description&gt;
&lt;?php else : ?&gt;
&lt;description&gt;&lt;?php the_content_rss('', 0, '', get_option('rss_excerpt_length'), 2) ?&gt;&lt;/description&gt;</code></pre>

3. Now comment out last line. We can remove it too but commenting is safe option. So it will look like…

<pre><code class="no-highlight">&lt;?php if (get_option('rss_use_excerpt')) : ?&gt;
&lt;description&gt;&lt;?php the_excerpt_rss() ?&gt;&lt;/description&gt;
&lt;?php else : ?&gt;
&lt;!-&nbsp;-
&lt;description&gt;&lt;?php the_content_rss('', 0, '', get_option('rss_excerpt_length'), 2) ?&gt;&lt;/description&gt;
-&nbsp;-&gt;</code></pre>

4. Save file. That’s it.

### What is the problem? (Technical Details)

RSS 2.0 &  ATOM  have exclusive support for summaries. In RSS 2.0, actual **content** is placed in content element while summaries can be optionally put in **description** element. Similarly in ATOM, actual content is placed in **content** element while summaries can be optionally put in **summary** element.

Now other browsers displays data from content but Firefox uses data in **description **(for RSS 2.0) or **summary** (for Atom). These element are optional so by commenting them we force firefox to use data in **content **field. As both **description **& **summary** are optional element in their formats at item/post levels, feeds are still valid. In fact, blogger.com by default don’t use these elements so this problem does not arise there.

Actually this can be seen as a feature too as you can see entire feed without much scrolling. But firefox should somehow tell a user that full feeds area also available whenever applicable.

As a firefox user I am still looking for a way to solve this in firefox as I prefer full feeds all the times.

### For FeedBurner users…

Above modifications are reflected instantly at wordpress end but if you are using FeedBurner to burn your feeds, you can <a href="http://www.feedburner.com/fb/a/ping" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.feedburner.com/fb/a/ping', 'ping FeedBurner here']);" >ping FeedBurner here</a> and ask them to clear their cache.
