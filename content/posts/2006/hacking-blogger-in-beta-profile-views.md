---
title: 'Hacking: Blogger in Beta Profile Views'
author: rahul286
date: 2006-09-20
url: /hacking-blogger-in-beta-profile-views/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/09/hacking-blogger-in-beta-profile-views.html
views:
  - 69
dsq_thread_id:
  - 3364029317
categories:
  - Tips
tags:
  - Blogger
  - Hacking
  - Internet Explorer
  - Javascript
  - Security
  - Software
---
This is for all blogger in beta users!  
You can increase your blogger profile-views with javascript!  
Of course this was not possible for old blogger users!  
As it has been said, <span style="font-style: italic">correction of an error, may introduce new errors! </span>It seems blogger is bugged this time!

So when you view a blogger in beta user profile (it does not need to be yours), u can just hit your browsers refresh button and the profile view get increased as profile gets reloaded!

Here come javascript to automate this!

`javascript: function rb286(){document.location.reload();}; void(setInterval(rb286, <span style="color: #3366ff">1000</span>));`

<span style="color: #000000; font-family: georgia">Procedure:<br /> </span>

  1. <span style="color: #990000; font-family: courier new"><span style="color: #000000; font-family: georgia">Open the profile first!</span></span><span style="color: #990000; font-weight: bold; font-family: courier new"><span style="font-weight: bold; font-family: georgia"><span style="color: #000000"></span></span></span>
  2. Just copy-n-paste above javascript in <span style="color: #990000">maroon</span> color in your browsers address bar!
  3. This will start refreshing the page! It can be used with any page!

U can change value in <span style="color: #3366ff">blue</span> which is time-interval as per your connection speed!

U can also install greasemonkey script by <a href="http://www.vijayhacks.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.vijayhacks.net/', 'Vijay Bhaskar']);" >Vijay Bhaskar</a> for this!  
<span style="font-style: italic">s<br /> </span>
