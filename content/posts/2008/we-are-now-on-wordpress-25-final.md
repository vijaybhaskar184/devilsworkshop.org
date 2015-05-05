---
title: We are now on WordPress 2.5 (Final)
author: rahul286
date: 2008-03-30
url: /we-are-now-on-wordpress-25-final/
views:
  - 2
categories:
  - Tips
tags:
  - Dreamhost
  - plugin
  - Wordpress
---
<a href="http://wordpress.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/', '']);" ><img class="wp-image-54565" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;margin: 0px 0px 0px 5px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/03/image65.png" border="0" alt="WordPress Logo" width="204" height="58" align="right" /></a> After going through many release candidates, final wordpress 2.5 is out. It has been 24 hours since its out, but I chose to do a upgrade myself before writing about it.

So here is my take on upgrading wordpress to 2.5 and my overall experience about it!

### Upgrading&#8230;.

Few days back there was a heated debate between wordpress founder <a href="http://ma.tt/2008/03/wordpress-is-open-source/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ma.tt/2008/03/wordpress-is-open-source/', 'Matt']);" >Matt</a> and <a href="http://www.movabletype.com/blog/2008/03/a-wordpress-25-upgrade-guide.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.movabletype.com/blog/2008/03/a-wordpress-25-upgrade-guide.html', 'Six Apart Guys']);" >Six Apart Guys</a>! Six Apart claimed that Upgrading wordpress is complex job, and so I guess I must write in detail how I get it done&#8230;

I use a <a href="http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion', 'subversion installation of wordpress']);" >subversion installation of wordpress</a>. And here are steps I have followed&#8230;

  1. I logged into my shell account on [Dreamhost][1], our webhost.
  2. Changed working directory to this blogs directory. **(cd command)**
  3. Typed and executed following command

`$ svn sw http://svn.automattic.com/wordpress/tags/2.5 `

Thats it! In few seconds we moved to 2.5. Sorry <a href="http://www.movabletype.com/blog/2008/03/a-wordpress-25-upgrade-guide.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.movabletype.com/blog/2008/03/a-wordpress-25-upgrade-guide.html', 'Anil']);" >Anil</a>&#8230; I could not make it more complex. 😉

### What&#8217;s Better in WordPress 2.5

There are so many things new out there that it will take time to figure out them completely. Still best things I found are&#8230;

  * Completely changed post-editor with better image & file uploading. Also added support for image galleries. I loved new AJAXified tagging support as I mentioned about it earlier too.
  * One-click upgrade to wordpress plugin. This is I guess can&#8217;t get any better now! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />
  * Tag-management support is added.
  * Dashboard can have widget now. Check <a href="http://wordpress.org/extend/plugins/stats/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/stats/', 'WordPress.com stats widget']);" >WordPress.com stats widget</a> for an example.

For more detailed list, check <a href="http://wordpress.org/development/2008/03/wordpress-25-brecker/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/development/2008/03/wordpress-25-brecker/', 'official entry']);" >official entry</a> at <a href="http://wordpress.org/news/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/news/', 'wordpress development blog']);" >wordpress development blog</a>!

### What&#8217;s Worse in WordPress 2.5

There aren&#8217;t many things I can complain about but&#8230;

  * Complete RSS feed still needs a plugin. I was expecting that bug to be rectified in WordPress 2.5.
  * Shocking bad widget management screen. My sidebar is divided into four areas and now I just can&#8217;t move widgets from one sidebar area to other.
  * I think aesthetically old look was better. Left-aligning of admin pages leaves hell lot of white space on wide-screen monitors.

Forget aesthetics but I just can&#8217;t tolerate new widget management screen at all.

Overall WordPress 2.5 impressed me more than my expectations. That&#8217;s why I was playing with it from 1AM to 7AM local time. Good they released it on Saturday&#8230; 😉

**Links:** <a href="http://codex.wordpress.org/Upgrading_WordPress" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Upgrading_WordPress', 'Upgrading WordPress']);" >Upgrading WordPress</a> (<a href="http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion', 'using Subversion']);" >using Subversion</a>)

 [1]: http://devilsworkshop.org/dreamhost
