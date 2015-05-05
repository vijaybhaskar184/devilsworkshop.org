---
title: Top 10 Labels in Blogger Beta Layout!
author: rahul286
date: 2007-01-29
url: /top-10-labels-in-blogger-beta-layout/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/01/top-10-labels-in-blogger-beta-layout.html
views:
  - 140
dsq_thread_id:
  - 2946418483
categories:
  - Reviews
tags:
  - Blogger
  - Internet Explorer
  - Security
---
[<img class="wp-image-51492" src="http://cdn.devilsworkshop.org/files/2007/10/top10labels.JPG" align="right" />][1]This is my first post (and first workaround) for my blogger friends!  
Wel this is for only <span style="font-weight: bold">blogger beta users! </span>This is actually a modified version of <a href="http://hackosphere.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://hackosphere.blogspot.com/', 'Neo&#8217;s']);" >Neo&#8217;s</a> original work!

This does not require any coding knowledge, so all bloggers are free to experiment with this!

So coming to the point, if u scroll-down this page, then u can see Top 10 labels as wel as a drop-down box for labels. (also shown in this screenshot on RHS =>>)

The reason behind showing only Top 10 is there are many tags with just 1 or 2 posts. So instead show only Top 10 tags and then let the visitor choose rest of the tags from drop down menu!

U can change this 10 to any no. u like!

**#How To Add this?**

**Part 1: Edit HTML&#8230;**

  1. **<a href="http://pub.rtcamp.com/top_10_labels_in_blogger_beta.txt" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/top_10_labels_in_blogger_beta.txt', 'Click here']);" >Click here</a>** to open a plain-text code file. (Name: <span style="font-weight: bold">&#8220;top 10 labels in blogger beta.txt&#8221;</span>)
  2. Now log-into ur <span style="font-weight: bold">blogger beta </span>account.
  3. From ur Dashboard go to the layout of ur blog.
  4. Then click on **&#8220;EDIT-HTML&#8221;** tab. Also expand the code by checking checkbox above the codebox.
  5. Now find following code in section. [![][2]][2]
  6. Now copy entire text from <span style="font-weight: bold">&#8220;top 10 labels in blogger beta.txt&#8221; </span>file to bloggers HTML just below the above code.
  7. Now check out preview. U should see <s>Top</s> 10 Labels in Top-side of ur sidebar. Wait&#8230;! You can see just 10 Labels! Well thats fine upto this point! So trust me and save ur HTML template code.
  8. Now click on page-element tabs.

<span style="font-weight: bold">Part 2: Page Elements&#8230;</span>

  1. Now on page-elements tab, u shud see a widget named <span style="font-weight: bold">&#8220;Top Label&#8221;</span> in sidebar. It will also have a edit link.
  2. Click on edit-link.
  3. Just make one editing. By default, labels are shown <span style="font-weight: bold">alphabetically</span>, select <span style="font-weight: bold">&#8216;by frequency&#8221; </span>instead. And then press save changes! (as shown in screenshot) [![][3]][3]
  4. Its done now. U can move this widget to anywhere like any other widget! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<span style="font-weight: bold"># FAQ:</span>  
<span style="font-weight: bold">How to change Top-10 to Top-20 or something??<br /> </span>It needs one change in HTML code. Find

> if ( myCnt < <span style="color: #006600;font-weight: bold">10 </span>)

and change <span style="color: #006600;font-weight: bold">10</span> to anything u like. e.g. 20 for Top-20 labels, etc!

 [1]: http://cdn.devilsworkshop.org/files/2007/10/top10labels.JPG
 [2]: http://cdn.devilsworkshop.org/files/2007/10/code.JPG
 [3]: http://cdn.devilsworkshop.org/files/2007/10/labelwidget.jpg
