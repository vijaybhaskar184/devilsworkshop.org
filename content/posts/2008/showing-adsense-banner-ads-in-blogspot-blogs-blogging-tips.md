---
title: 'Showing Adsense Banner Ads in Blogspot Blogs [Blogging Tips]'
author: rahul286
date: 2008-03-29
url: /showing-adsense-banner-ads-in-blogspot-blogs-blogging-tips/
views:
  - 341
dsq_thread_id:
  - 2947088417
categories:
  - Tips
tags:
  - Adsense
  - Blogger
  - Blogging
  - Google
  - Javascript
---
One of our reader <a href="http://mobilegyaan.blogspot.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mobilegyaan.blogspot.com', 'Deepak Jain']);" >Deepak Jain</a> wants to add Adsense banner ads in his blogspot blog. 

While its simple to add any HTML/Javascript code in blogspot blogs using HTML/Javascript new element, option to add such element is by default disabled in **header** menu.

The problem can be easily seen in following two screenshots which are taken from **Layout >> Page Element** panel&#8230;

**A. Default&#160; Options..**

[<img class="wp-image-51766" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" height="175" alt="blogspot blog without add a page element option in header" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb27.png" width="510" border="0" />][1] 

**B. After Enabling "Add a Page Element" Option&#8230;**

[<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" height="201" alt="blogspot blog with add a page element option in header" src="http://cdn.devilsworkshop.org/files/2008/03/image-thumb28.png" width="508" border="0" />][2]

Once **Add a Page Element **option comes there, you can edit blogs header as simply as editing sidebar. Putting Google Adsense ads in header won&#8217;t be any different than doing same in sidebar!

**\# Steps to Enable Add a Page Element Option&#8230;**

**1. **Go to **Layout >> Edit HTML** Option

**2.** Search following codes in **Edit Template** box&#8230;

`&#160;&#160;&#160; <div id='header-wrapper'>    <br />&#160;&#160;&#160;&#160;&#160; <b:section class='header' id='header' maxwidgets='1' showaddelement='no'> ` 

**3.** Make following **two changes**

  * <div>
      Change <strong>maxwidgets=&#8217;1&#8242;</strong> to <strong>maxwidgets=&#8217;2&#8242;</strong>&#160; or any number greater than 1.
    </div>

  * <div>
      Change <strong>showaddelement=&#8217;no&#8217; </strong>to <strong>showaddelement=&#8217;yes&#8217;.</strong>
    </div>

**4.** Click on **Save Template**!

That it! Just go back to **Page Elements **tab and you will see **Add a Page Element **Option there! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related:** [Show Adsense Ads After Each Post in Blogspot Blog][3]

 [1]: http://cdn.devilsworkshop.org/files/2008/03/image60.png
 [2]: http://cdn.devilsworkshop.org/files/2008/03/image61.png
 [3]: http://devilsworkshop.org/2007/04/06/blogger-adsense-hack-show-ads-after-each-post-to-earn-more-from-your-blogger-beta-blog/
