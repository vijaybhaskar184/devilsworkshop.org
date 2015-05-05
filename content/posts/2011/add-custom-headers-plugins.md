---
title: Add Custom Headers to your WordPress.org plugins
author: gajanansapate
date: 2011-12-27
url: /add-custom-headers-plugins/
categories:
  - Tutorial
tags:
  - Developers
  - Tutorials
  - Wordpress
  - Wordpress Plugins
  - Wordpress Tutorials
---
<a href="http://wpdevel.wordpress.com/2011/12/21/been-giving-a-lot-of-thought-to-how/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpdevel.wordpress.com/2011/12/21/been-giving-a-lot-of-thought-to-how/', 'Matt Mullenweg']);" title="Matt Mullenweg">Matt Mullenweg</a> announced few days ago that, plugin authors will be able to put custom headers on their plugin pages. Soon the geeks across the globe got started with designing and customizing their header images.

Developers are happy as they have got an opportunity for a little branding. Our creative heads from rtCamp too got down to design the banners. You can see them here (For <a href="http://wordpress.org/extend/plugins/blogger-to-wordpress-redirection/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/blogger-to-wordpress-redirection/', 'Bloggertowp redirection plugin']);" title="Blogger to WordPress Redirection Plugin">Bloggertowp redirection plugin</a> and <a href="http://wordpress.org/extend/plugins/rtsocial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/rtsocial/', 'rtSocial Plugin']);" title="rtSocial Plugin">rtSocial Plugin</a>)

### How to change the header image:

You can also customize your plugin custom headers, as it&#8217;s a pretty simple process. All you need is to follow the steps below:

(this tutorial was written while developing the header image for our BloggertoWordPress Redirection Plugin)

**Step 1**: Design  a 772×250 pixel jpeg or png image. (No animated GIFs)

**Step 2**: Adding it to plugin&#8217;s SVN Directory:

  * Create a directory in your system: mkdir b2w-plugin
  * Checkout the code from WordPress plugin Directory:

svn co http://plugins.svn.wordpress.org/blogger-to-wordpress-redirection/ b2w-plugin

<a href="http://devilsworkshop.org/add-custom-headers-plugins/bloggerto-wordpress-redirection/" rel="attachment wp-att-48923"><img class="size-medium wp-image-48923 " title="Bloggerto WordPress redirection" src="http://cdn.devilsworkshop.org/files/2011/12/Bloggerto-WordPress-redirection-600x327.png" alt="Bloggerto WordPress redirection" width="600" height="327" /></a>

<div class="mceTemp">
  <dl id="attachment_48923" class="wp-caption alignnone" style="width: 610px;">
    <dd class="wp-caption-dd">
      Bloggerto WordPress redirection
    </dd>
  </dl>
</div>

  * Move it inside the directory: cd b2w-plugin
  * Create one more folder into it. : svn mkdir assets
  * Move inside that folder. : cd assets
  * Store the Image which you want to display for your plugin inside assets folder.
  * Use this command: svn add *
  * Now Commit the code from your system to WordPress plugin directory : svn ci -m “Added Banner”.
  * It will ask you for the svn username and password. Give it the proper authentication and you are done with the new banner updates for your plugin.

So, lets start getting creative and write your plugin links in the comment area for other readers to see.
