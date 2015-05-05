---
title: Page Navigation Hack for Blogger (Blogspot)
author: arjunskumar47
date: 2008-10-14
url: /page-navigation-hack-for-blogger/
views:
  - 5772
dsq_thread_id:
  - 2947092535
categories:
  - Tips
tags:
  - Birthday
  - Blogger
  - Blogger(BlogSpot)
  - Blogging
  - Javascript
  - Mobile
---
Most of the people think that page navigation hack is only for who blogs at WordPress. But here is the hack for those who use blogger and want to add page navigation to their blog. This hack will show page number instead of text link *older posts*, as shown in following screenshot.

<img class="wp-image-50781" style="border: 1px solid black" src="http://1.bp.blogspot.com/_51DKpc-dUNY/SM-ltu9tFmI/AAAAAAAAAKY/rI8s7cDBCng/s400/page_navigation.jpg" alt="" width="265" height="58" />

You can see live demo <a href="http://pagenumber.blogspot.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pagenumber.blogspot.com', 'here.']);" >here.</a>

Now this involves two things &#8211; adding some CSS code and javascript code to your template. All steps are explained below.

### Steps:

  * Log in to your blogger account and navigate to Layout section. Now go to the **Edit HTML** tab.
  * Search for line` <strong>]]></b:skin></strong>`
  * Add [CSS in this file][1] above that line.
  * Now search for this code or related in your template (no need to expand widgets)

<pre><code class="no-highlight">&lt;b:section class='main' id='main' showaddelement='yes'&gt;
&lt;b:widget id='Blog1' locked='true' title='Blog Posts' type='Blog'/&gt;&lt;/b:section&gt;</code></pre>

  * Now add [javascript codes in this file][2] just after code: `<strong></b:section></strong>`
  * Thats&#8217;s it. Save changes and you go!**  
    **

[][2]

### Mods:

In [javascript codes in this file][2], find line&#8230; ****

**var pageCount =<span style="color: red">5</span>;**

The digit in red represents number of posts to be shown in single page. Change the digit to show as many pages you want.

**var displayPageNum = <span style="color: red">3</span>;**

Here the digit in red represents number of pages to be listed. Change the digit to list as many pages you want.

That&#8217;s it now we have added Page Navigation menu hack to our blog successfully

Your Comments are appreciated..  <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

***(Credits: **<a href="http://rias-techno-wizard.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rias-techno-wizard.blogspot.com/', 'Muhammed from RTW']);" >Muhammed from RTW</a>**)***

**Related:** [6 *WordPress Plugins for Better Navigation and User Experience*][3]

* * *

**[**Editor Note**: This is first post by <a href="http://www.orkutbuddy.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutbuddy.com/', 'Arjun Kumar']);" >Arjun Kumar</a> on this blog. Arjun is just 16 year old and that make him youngest Devil in team DW. He is working hard on our new project <a href="http://www.orkutbuddy.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutbuddy.com/', 'OrkutBuddy']);" >OrkutBuddy</a>, dedicated for orkut users.**</p> 

**If you like to [write][4] for Devils Workshop, please [check this][4]. Details about our [revenue sharing programs][4] are [here][4].]**

 [1]: http://cdn.devilsworkshop.org/files/2008/10/page1.txt
 [2]: http://cdn.devilsworkshop.org/files/2008/10/page2.txt
 [3]: http://devilsworkshop.org/wordpress-plugins-navigation-user-experience/
 [4]: http://devilsworkshop.org/join-dw/
