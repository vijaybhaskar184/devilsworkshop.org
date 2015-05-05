---
title: Another Blow To Orkut! A new bug for spammers…
author: rahul286
date: 2008-02-26
url: /another-blow-to-orkut-a-new-bug-for-spammers/
views:
  - 16
dsq_thread_id:
  - 2946465264
categories:
  - News
tags:
  - Bing
  - Google
  - Internet Explorer
  - Security
---
<img class="wp-image-52543" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin: 0px 0px 0px 10px;border-right-width: 0px" height="88" alt="Orkut_Loves_Spam" src="http://cdn.devilsworkshop.org/files/2008/02/image8.png" width="420" border="0" /> 

Remember above image? Few weeks ago we published a [bug in Orkut&#8217;s click tracking mechanism][1] which let spammer send third party links bypassing image verification!

Now for those who missed that&#8230; A new bug is found in Google Video search history feature! Now Whats a big deal you might say? Well Google Videos and Orkut are both owned by Google Inc. So URL which contains **google.com** in domain part never encounters image verification!

**Now consider link below:**

`http://upload.video.google.com/searchhistory/url?url=//www.devilsworkshop.org`

&#160;

You can replace any site URL with **www.devilsworkshop.org** in it and put the link in scraps! Orkut will never ask for image verification!

This bug is more severe compared to [bug in Click Tracking mechanism][1]. Fixing this may be still simple but there are many Googles service and so there must be many bugs like this! All this means a lot more spam in coming month on Orkut&#8230; <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Credits: **<a href="http://testingdocs.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://testingdocs.blogspot.com/', 'Sumit Kalra']);" >Sumit Kalra</a> found this while analyzing a recent spam "VORUS VIDEO SCRAP" code!

 [1]: http://devilsworkshop.org/2008/02/03/new-orkut-bug-let-spammer-send-any-link-without-image-verification-orkut-loves-spam/
