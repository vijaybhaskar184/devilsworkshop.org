---
title: 'Google Adsense Hack: Automated Section Targetting for bloggers!'
author: rahul286
date: 2007-04-12
url: /google-adsense-hack-automated-section-targetting-for-bloggers/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/04/google-adsense-hack-automated-section.html
views:
  - 2039
dsq_thread_id:
  - 2946413980
categories:
  - Tips
tags:
  - Adsense
  - Blogger
  - Blogging
  - Google
  - Internet Explorer
  - Security
  - Wordpress
---
If you are a blogger showing Google Adsense ads, then this time I really got a awesome trick which worked well for me! This increased my Adsense earning with the help of <a href="https://www.google.com/adsense/support/bin/answer.py?answer=23168&ctx=en:search&query=section+targeting&topic=&type=" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.google.com/adsense/support/bin/answer.py?answer=23168&ctx=en:search&query=section+targeting&topic=&type=', 'section targeting']);" >section targeting</a>!

<span style="font-weight: bold">Some Basics:</span>  
Adsense ads are loaded dynamically according to content of page! Now post people comes to your page to read post (probably they are coming via Google searching for some information). In this regard ads should be targeted to content of your post!

<span style="font-weight: bold">The Newbies Way&#8230;</span>  
Google provides following HTML comment tags to implement section targeting,  
<span style="font-weight: bold; font-family: courier new"></span>

> <span style="font-weight: bold; color: #990000; font-family: courier new"><!&#8211; google_ad_section_start &#8211;></span>  
> <span style="font-weight: bold; font-family: courier new">&#8230;&#8230;.. your post &#8230;&#8230;.</span>  
> <span style="font-weight: bold; color: #990000; font-family: courier new"><!&#8211; google_ad_section_end &#8211;></span>

<span style="font-weight: bold; color: #990000; font-family: courier new"></span>So at every time you are writing a post you have to make sure that you write your post between above two HTML comment tags!

<span style="font-weight: bold">You can automate this in two ways!</span>  
There are two ways to do this as explained below. The first way will work for all blogspot blogger while second one is for blogger beta user! Similar hacks can be applied for any blogging platform (e.g. wordpress, movableType, Typepad, etc).<span style="font-weight: bold"></span>

<span style="font-style: italic">#1. Formatting Post Template: </span>(for all blogspot blogger)

  * Go to <span style="font-weight: bold"><span style="font-style: italic">Settings >> Formatting >> Post Template</span></span>
  * In text box there add following codes as it is!  
    > <textarea cols="40" rows="2" readonly="readonly" onclick="this.focus(); this.select();"><!&#8211; google_ad_section_start &#8211;><br /><!&#8211; google_ad_section_end &#8211;></textarea>
