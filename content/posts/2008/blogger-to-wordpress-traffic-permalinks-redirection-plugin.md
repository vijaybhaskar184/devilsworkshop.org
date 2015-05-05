---
title: 'Blogger To WordPress Traffic & Permalinks Redirection Plugin'
author: rahul286
date: 2008-01-19
url: /blogger-to-wordpress-traffic-permalinks-redirection-plugin/
views:
  - 5830
robotsmeta:
  - index,follow
dsq_thread_id:
  - 2946462213
categories:
  - Tutorial
tags:
  - Blogging
  - Developers
  - Firefox
  - Google
  - Javascript
  - plugin
  - Plugins
  - Windows
  - Wordpress
---
**Major Update:** This plugin&#8217;s new version has been released with many **new features **like:

  * Zero changes requires on WordPress-side. Plugin handles everything automatically on WordPress.
  * New configuration wizard help you setup redirection without much efforts.
  * Supports importing from multiple Blogger.com blogs.
  * Add supports for &#8220;rel=canonical&#8221; & &#8220;meta-refresh&#8221; tags on Blogger.com which will speed-up redirection. This will help search engine update their index faster.

**Link: <a href="http://bloggertowp.org/blogger-to-wordpress-redirection-plugin" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/blogger-to-wordpress-redirection-plugin', 'Blogger to WordPress Redirection Plugin']);" >Blogger to WordPress Redirection Plugin</a>**

* * *

**Update: **This plugin maintains permalinks but in case you want to preserve Google Pagerank and other search engine ranking, please [read this new complete tutorial first][1].</p> 

* * *If you have imported your blog from blogger (blogspot.com) then you might be redirecting visitors from your old blogspot blog to your new wordpress blogs HOMEPAGE. While this approach ensures that you get all the traffic redirected from your old blog to new blog, a visitor may feel lost! What if a person is referred to your old blog via search engine or other link listings?</p> 

So this plugin just takes care of this part. It checks for which post people were looking on old blog and then redirect them to same post but on new blog! See following picture which will give you brief idea about what you can accomplish using this plugin&#8230;

[<img class="wp-image-52722" src="http://cdn.devilsworkshop.org/files/2008/01/image-thumb11.png" border="0" alt="image" width="437" height="444" />][2]

**This plugin assumes following things:**

  * You used **wordpress blog importer** while importing your **blogspot beta** blog.
  * You put **redirection code** in your old blogspot blog. An example of code is attached below. I strongly recommend using it only.
  * You have imported only **one blog**. In next version I will remove this restriction so that you can import (or say merge) two or more blogspot blog into one new wordpress blog.

**Installation (Blogger Blogspot Part):**

  1. Log into your blogger account.
  2. Select **old blogspot blogs** template/layout. If you are using new custom layout, use **&#8220;Revert to Classic Template” **option on Edit HTML.
  3. Go to **&#8220;Edit HTML&#8221;** tab.
  4. Put following codes there with **one important change** and **save changes**.

(**Important:** Replace **http://www.devilsworkshop.org/ **in following code with your wordpress blog URL)

<pre><code class="no-highlight">&lt;html&gt;
&lt;head&gt;
&lt;script LANGUAGE="JavaScript"&gt;
&lt;!--
window.location.replace("http://www.devilsworkshop.org/");
--&gt;
&lt;/script&gt;
&lt;noscript&gt;
&lt;meta http-equiv="Refresh" content="10; URL=http://www.devilsworkshop.org/"/&gt;
&lt;meta http-equiv="expires" content="10"/&gt;
&lt;meta name="Description" content="301 moved permanently"/&gt;
&lt;META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW"/&gt;
&lt;META NAME="GOOGLEBOT" CONTENT="NOINDEX, FOLLOW"/&gt;
&lt;/noscript&gt;
&lt;title&gt;301 moved permanently&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;center&gt;
&lt;h1&gt;Devils Workshop&lt;/h1&gt;
&lt;p&gt;has been moved to new address&lt;/p&gt;
&lt;a href=" http://www.devilsworkshop.org"&gt; &lt;h1&gt;http://www.devilsworkshop.org&lt;/h1&gt;&lt;/a&gt;
&lt;p&gt;Sorry for inconvenience... &lt;/p&gt;
&lt;/center&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

**Installation (WordPress Part):**

  1. Click <a href="http://wordpress.org/extend/plugins/blogger-to-wordpress-redirection/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/blogger-to-wordpress-redirection/', 'here']);" >here</a> to download <a href="http://wordpress.org/extend/plugins/blogger-to-wordpress-redirection/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/blogger-to-wordpress-redirection/', 'Blogger To WordPress 1-2-1 Redirection Plugin']);" >Blogger To WordPress 1-2-1 Redirection Plugin</a>. A file *rbBloggerToWordpress.zip *to your PC. Unzip it.
  2. Upload *rbBloggerToWordpress.php* into ***&#8216;wp-content/plugins&#8217; ***folder.
  3. Go to ***plugins ***option under wordpress&#8217;s Admin panel. You will see a &#8220;**Blogger To WordPress Redirector&#8221;** Plugin Listed there. [<img style="margin: 10px 0px" src="http://cdn.devilsworkshop.org/files/2008/01/image11.png" border="0" alt="Blogger_to_Wordpress_redirector" width="380" height="201" />][3]
  4. **WAIT!** Do NOT click ***Activate***. First Click ***Edit. ***
  5. On next screen put your old blogspot blog address next to **$oldBlogURL** variable! For ease search rb286.blogspot.com and replace it with your blogspot address. Sorry for this manual work, I will automate this step in next version.
  6. Then click ***Update File*** link their to save changes.
  7. Go back to ***plugins*** page and this time ***Activate*** the plugin!

That&#8217;s it! This plugin will now onwards map your old blogspot post to new wordpress posts on 1-to-1 basis.

**Known Issues:**

  * Popular desktop blogging client [**Windows Live Writer**][4] stops working if you use this plugin. But there is temporary workaround. Disable the plugin & paste following code into current templates ***index.php **[i.e. Main Index Template]* before everything else! ***[Path: Admin Dashboard >> Design >> Theme Editor]***

**#Code: [Note: **Replace** *rb286.blogspot.com* **with your old Blogspot address**]**

** **

<pre><code class="no-highlight">&lt;!--?php
&lt;span class="hiddenSpellError">oldBlogURL = "rb286.blogspot.com";
$ref = $_SERVER['HTTP_REFERER'];
$refarr = explode("/", $ref);
if ($refarr[2] == $oldBlogURL ){
  $bloggerurl = '/'.$refarr[3].'/'.$refarr[4].'/'.$refarr[5];
  $sqlstr = " SELECT wposts.guid FROM $wpdb-&gt;posts wposts, $wpdb-&gt;postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = 'blogger_permalink' AND wpostmeta.meta_value = '".$bloggerurl."' ";
  $wpurl = $wpdb-&gt;get_results($sqlstr, ARRAY_N);
  if ($wpurl){
      header( 'Location: '.$wpurl[0][0].' ') ;
      exit;
  }
}
?&gt;</code></pre>

**Example :: How this plugin works?**

First note that,  there are two parts &#8211; blogger part and wordpress part.

Also for the sake of simplicity lets assume **old.blogspot.com/cool-post** is mapped to **new-wordpress.com/cool-post**

**Now observe journey of a user&#8230;  
**

  1. User requests old post &#8211; **old.blogspot.com/cool-post**
  2. **old.blogspot.com** send user to **new-wordpress.com.**** **
  3. Now at **new-wordpress.com**, second parts get activated as visitor is coming from **old.blogspot.com**.
  4. Second part checks for HTTP Referrer information from where it finds URL of **old.blogspot.com/cool-post.**
  5. Using this information second part at wordpress finds **new-wordpress.com/cool-post** and sends it to browser.

In fact, the whole process is so transparent that if a user have address bar disabled he will never notice any sign of redirection process. 😉

About Javascript code at blogger end&#8230; its for non-standard browsers who don&#8217;t respect meta tags.

About NOINDEX FOLLOW, it tells crawler not to index blogspot page but FOLLOW redirect. Also NOINDEX will instruct crawler to drop already indexed version of page. We need to use NOINDEX because new wordpress post have same content as old blogspot post. This is to ensure that we explicitly handles duplicate content problem.

Let me know if I am missing something as this is my first wordpress plugin.

***Credits: **I am grateful to <a href="http://charles.gagalac.us/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://charles.gagalac.us/', 'Charles']);" >Charles</a> and <a href="https://addons.mozilla.org/en-US/firefox/addon/3829" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/3829', 'Live HTTP headers']);" >Live HTTP headers</a> firefox extension for their help while coding this plugin!*

*[Updated: 2008, July 20 &#8211; After my  <a href="http://www.libertyinteractivemarketing.com/blog" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.libertyinteractivemarketing.com/blog', 'Jimmy&#8217;s']);" >Jimmy&#8217;s</a> [comment][5]]*

 [1]: http://devilsworkshop.org/moving-from-blogger-to-wordpress-maintaining-permalinks-traffic-seo/
 [2]: http://cdn.devilsworkshop.org/files/2008/01/image15.png
 [3]: http://cdn.devilsworkshop.org/files/2008/01/image11.png
 [4]: http://devilsworkshop.org/2008/06/24/windows-live-writer-best-desktop-blogging-client-for-offline-blogging/
 [5]: http://devilsworkshop.org/2008/01/19/blogger-to-wordpress-redirection-plugin-with-1-to-1-mapping-between-old-and-new-blog-posts/#comment-51451
