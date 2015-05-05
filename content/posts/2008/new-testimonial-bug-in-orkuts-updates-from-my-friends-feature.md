---
title: New Orkut Bug in “Updates from my friends” Feature!
author: rahul286
date: 2008-06-26
url: /new-testimonial-bug-in-orkuts-updates-from-my-friends-feature/
views:
  - 71
categories:
  - News
tags:
  - Bing
  - Social Media
---
</p> </p> 

A new bug in Orkuts “Updates from my friends” feature redirects user to his/her own profile when link is supposedly pointing to some other profile on Orkut.

As part of updates from friends, an entry is displayed whenever your friend receives a testimonial from someone on orkut. Structure of this entry is like below:

[<img class="wp-image-52900" style="border-right: 0px;border-top: 0px;border-left: 0px;border-bottom: 0px" height="138" alt="Orkut “Updates from my friends” Feature - Testimonial Bug" src="http://cdn.devilsworkshop.org/files/2008/06/image-thumb50.png" width="475" border="0" />][1] </p> </p> </p> 

**It contains three links**

  1. Link to Profile of the person who **received** testimonial
  2. Link to testimonial itself
  3. Link to Profile of the person who **sent** testimonial

Out of above three, link to profile of sender is broken. In orkut, all profiles links have a **uid** parameter whose value uniquely identify a profile on orkut as shown below…

**First Link *(valid)***

[<img style="border-right: 0px;border-top: 0px;border-left: 0px;border-bottom: 0px" height="115" alt="Orkut “Updates from my friends” Feature - Testimonial Bug" src="http://cdn.devilsworkshop.org/files/2008/06/image-thumb51.png" width="494" border="0" />][2] 

**Last Link *(invalid)***</p> </p> </p> 

[<img style="border-right: 0px;border-top: 0px;border-left: 0px;border-bottom: 0px" height="164" alt="Orkut “Updates from my friends” Feature - Testimonial Bug" src="http://cdn.devilsworkshop.org/files/2008/06/image-thumb52.png" width="494" border="0" />][3] 

As you can see in above screenshots, value of **uid** is missing in link to testimonial senders profile. When a user click on such links, he is redirected to his own profile which is confusing as he was expecting someone’ else profile.</p> 

This bug is not at all severe from security point of view but it highlights *(again)* careless attitude of Orkut team towards their social-networking service. What is more embarrassing for Orkut team is timing of this bug, which coincides with <a href="http://en.blog.orkut.com/2008/06/what-are-your-friends-up-to-check-out.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.blog.orkut.com/2008/06/what-are-your-friends-up-to-check-out.html', 'recent announcement regarding same feature']);" >recent announcement regarding same feature</a> on official orkut blog.

Thanks <a href="http://www.imroz.co.cc/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.imroz.co.cc/', 'Imroz']);" >Imroz</a> for tip… <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related: **[Adding Custom Images to Orkut User Status Updates][4]

 [1]: http://cdn.devilsworkshop.org/files/2008/06/image57.png
 [2]: http://cdn.devilsworkshop.org/files/2008/06/image58.png
 [3]: http://cdn.devilsworkshop.org/files/2008/06/image59.png
 [4]: http://devilsworkshop.org/2008/06/23/adding-custom-images-to-orkut-user-status-updates-new-bug/
