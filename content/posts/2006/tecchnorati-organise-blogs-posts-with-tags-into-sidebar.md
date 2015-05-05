---
title: 'Tecchnorati: Organise Blogs Posts With Tags Into Sidebar!'
author: rahul286
date: 2006-09-29
url: /tecchnorati-organise-blogs-posts-with-tags-into-sidebar/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/09/tecchnorati-organise-blogs-posts-with.html
views:
  - 193
dsq_thread_id:
  - 2946412779
categories:
  - Reviews
tags:
  - Blogger
  - Internet Explorer
  - Javascript
  - Security
---
This is for all bloggers from all domains having <a href="http://www.technorati.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.technorati.com/', 'technorati']);" >technorati</a> account!

One problem old blogger felt that there was no way to categorize post according to tag! Mostly after each post we used to add <a href="http://www.technorati.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.technorati.com/', 'technorati']);" >technorati</a> tags! Then came blogger in beta with this option right into blogger itself! Still instead of tagging all the posts again, you can use <a href="http://www.technorati.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.technorati.com/', 'technorati']);" >technorati</a> API&#8217;s to take care of this! (For live example scroll down to see "TOP 10 TAGS" in this blogs sidebar itself!)

Don&#8217;t worry if you don&#8217;t know how to use technorati API&#8217;s (Even I don&#8217;t know 😉 ! <a href="http://www.vijayhacks.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.vijayhacks.net/', 'Vijay Bhaskar']);" >Vijay Bhaskar</a> already done some great work regarding this! So just listing here what you need to do!

<span style="font-weight: bold">1. Copy Following javascript code!</span>

<textarea readonly="readonly" rows="3" cols="40" onclick="this.select()"><script type="text/javascript" src="http://myjavaserver.com/~tomorrowist/generateTags.jsp?userName=<YourTechnoratiUsername>&url=<Your BlogURL>&limit=<NumberofTags>"></script></textarea>

<span style="font-weight: bold">2. Now Replace Following Fields: </span>

  * <span style="font-weight: bold"></span><Your Technorati Username> 
  * <Your Blog URL> 
  * <Number of Tags> 

<span style="font-weight: bold">After Modifying your code will look like&#8230;</span>

<textarea readonly="readonly" rows="3" cols="40" onclick="this.select()"> <script type="text/javascript" src="http://myjavaserver.com/%7Etomorrowist/generateTags.jsp?userName=rahul286&url=http://www.devilsworkshop.org&limit=10"></script> </textarea> 

<span style="font-weight: bold">Just Paste modified code into your blog! That&#8217;s it!</span>   
<span style="font-weight: bold; font-family: georgia"> <br />Notes:</span>

  1. You must have <a href="http://www.technorati.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.technorati.com/', 'Technorati']);" >Technorati</a> Account For this! 
  2. You must have tagged your posts beforehand! 
  3. Number of Tags can be set to 100 at the max! 

&#160;

I have switched already to blogger in beta! Still I like <a href="http://www.technorati.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.technorati.com/', 'technorati']);" >technorati</a> tags over blogger&#8217;s label because when somebody clicks on technorati tags, it shows partial content of all the post tagged under that particular tag, while blogger shows full posts!   
I feel <a href="http://www.technorati.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.technorati.com/', 'technorati&#8217;s']);" >technorati&#8217;s</a> way is better as some of tags have large no. of posts tagged under them which make loading of those pages time-consuming!
