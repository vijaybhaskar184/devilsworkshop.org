---
title: Trick to Find All Communities Owned by Any Orkut User!
author: rahul286
date: 2008-01-18
url: /trick-to-find-all-communities-owned-by-any-orkut-user/
views:
  - 349
dsq_thread_id:
  - 2946463425
categories:
  - Tips
tags:
  - Bing
  - Javascript
  - 'Tips &amp; Hacks'
  - Windows
---
Yep. Its tricky job to find all communities **owned** by any orkut users! When you got to any orkut users profile its shows communities joined by that user as well as **[mutual communities][1]**. But there is no direct way of knowing how to find communities **owned** by orkut users.

So you need to use following trick&#8230;

  1. Navigate to any orkut users profile whose communities you want to find 
  2. Paste following codes into the address bar and hit enter 

<textarea rows="rows" cols="cols">javascript:nb=document.all[0].innerHTML.match(/[0-9]*.jpg)/g);nb=parseInt(nb);window.location.href="http://www.orkut.com/UniversalSearch.aspx?searchFor=C&q="+nb;</textarea> 

Above code will take you to a community search page where you will list of community owned by above user (step 1)

[<img class="wp-image-52790" style="border-right: 0px;border-top: 0px;margin: 0px 0px 0px 10px;border-left: 0px;border-bottom: 0px" height="251" alt="Communities Owned by A Orkut User" src="http://cdn.devilsworkshop.org/files/2008/01/image-thumb7.png" width="430" border="0" />][2] 

Thanks to <a href="http://www.orkut.com/Profile.aspx?uid=9304873766227395319" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Profile.aspx?uid=9304873766227395319', 'Arunim']);" >Arunim</a> and <a href="http://www.orkut.com/Profile.aspx?uid=14512257052619570340" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Profile.aspx?uid=14512257052619570340', 'Mr Nobody']);" >Mr Nobody</a> who discovered this trick. (via <a href="http://www.orkutplus.net/2008/01/hack-find-owned-communities-of-any.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutplus.net/2008/01/hack-find-owned-communities-of-any.html', 'Gaurav']);" >Gaurav</a>)

 [1]: http://devilsworkshop.org/2007/08/23/mutual-communities-know-how-alike-you-and-your-friends-are-orkut-dating-tips/
 [2]: http://cdn.devilsworkshop.org/files/2008/01/image10.png
