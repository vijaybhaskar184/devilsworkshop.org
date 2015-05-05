---
title: Earning more with AdSense product referrals without viloating TOS
author: rahul286
date: 2007-03-21
url: /earning-more-with-adsense-product-referrals-without-viloating-tos/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/03/earning-more-with-adsense-product.html
views:
  - 180
dsq_thread_id:
  - 2946414930
categories:
  - Tips
tags:
  - Adsense
  - Firefox
  - Google
  - Internet Explorer
  - Javascript
  - Security
---
This is for all who are earning from Google Adsense.

As you might have noticed, Adsense product referrals can not be hyperlinked statically as they get loaded by javascript code which are added to site.

Consider this, you write a post about firefox where you can not hyperlink firefox with link to adsense firefox referral directly. But you do have a adsense button to download firefox in your blogs sidebar. Chances are it will not get noticed. Also a phrase like &#8220;download firefox&#8221; must point to the download link in tutorial but if you give direct link to Mozilla site you will loose the bucks!

Now to solve this dilemma, the trick is to use <a href="http://www.w3schools.com/html/html_links.asp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.w3schools.com/html/html_links.asp', 'HTML named anchor']);" >HTML named anchor</a>. You can hyperlink all keywords which can be monetized using Adsense referral without violating Google Adsense&#8217; terms of service!

As an example lets start with Firefox again. Very often we ask people to <a style="font-weight: bold" href="#FIREFOX">download firefox</a> for some reason while writing about an extension or some functionality which other browsers can not provide! Anyway the following tutorial similarly applies to other Google products viz [Google Pack][1], [Google Adsense][2] & [Google Adwords][3]!

It is assumed that every page of your site has some common area and you will be placing Google Ads there only! <span style="font-style: italic">e.g. Sidebar in blogs.</span>

<span style="font-weight: bold">Procedure:<br /> </span>1. Just add following one-line before firefox codes provided by Google Adsense

<blockquote style="color: #333399; font-weight: bold">
  <p>
    <a name=&#8221;FIREFOX&#8221;></a>
  </p>
</blockquote>

2. Now whenever you want to hyperlink word you can do something like this

<blockquote style="color: #333399; font-weight: bold">
  <p>
    <a href=&#8221;#FIREFOX&#8221;>firefox</a>
  </p>
</blockquote>

Thats it! Now whenever someone click on these kinda links they will get redirected to the part of page where product referral link/button *(in this case button to download firefox)* is placed!

Note that this redirection will go unnoticed as at the max clicking will scroll up/down a page little. Nonew page will get loaded&#8230; 😉

**Update: **Rupesh posted about javascript code which can save you from manually editing all your posts to hyperlink keywords. Details are <a href="http://fundubytes.blogspot.com/2007/11/tips-tricks-to-earn-more-through.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://fundubytes.blogspot.com/2007/11/tips-tricks-to-earn-more-through.html', 'here']);" >here</a>&#8230; <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<span style="font-weight: bold">Related Posts:<br /> </span>

  * [Google Adsense Hack: Automated Section Targeting][4]
  * [Blogger + Adsense Hack: Show ads after each post to earn more from your blogger beta blog!][5]

 [1]: #GOOGLEPACK
 [2]: #ADSENSE
 [3]: #ADWORDS
 [4]: http://devilsworkshop.org/2007/04/12/google-adsense-hack-automated-section-targetting-for-bloggers/
 [5]: http://devilsworkshop.org/2007/04/06/blogger-adsense-hack-show-ads-after-each-post-to-earn-more-from-your-blogger-beta-blog/
