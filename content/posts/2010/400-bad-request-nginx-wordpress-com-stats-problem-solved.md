---
title: '400 Bad Request Nginx: WordPress.com Stats Problem [Solved]'
author: denharsh
date: 2010-06-20
url: /400-bad-request-nginx-wordpress-com-stats-problem-solved/
views:
  - 48
dsq_thread_id:
  - 2947111442
categories:
  - Tutorial
tags:
  - 400 bad request
  - Nginx
  - Wordpress
  - Wordpress Stats
  - Wordpress Troubleshooting
  - Wordpress Tutorials
  - Wordpress.com Stats
---
I recently updated one of my <a href="http://www.callingallgeeks.org" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.callingallgeeks.org', 'Gadgets blo']);" title="Gadgets Blog">Gadgets blo</a>g to <a href="http://wpveda.com/tag/wordpress-3-0/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/tag/wordpress-3-0/', 'WordPress 3.0']);" >WordPress 3.0</a>. After updating the blog to latest 3.0 version, I enabled <a title="Wordpress 3.0 multiple=">multiple site network option</a> and for that I had to disable all the WordPress plugins. After making my <a href="http://wpveda.com/wordpress-3-0-enable-wordpress-multisite-tutorial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/wordpress-3-0-enable-wordpress-multisite-tutorial/', 'WordPress 3.0 blog WordPress MU compatible blog']);" >WordPress 3.0 blog WordPress MU compatible blog</a>, I reactivated all the plugins.  To make my WordPress.com stats plugin work, I had to add the WordPress API key again and once I added it, I started getting 400 Bad request Nginx error. Earlier I thought it&#8217;s because this plugin is not compatible with WordPress 3.0.<figure id="attachment_454" style="width: 520px;" class="wp-caption aligncenter">

[<img class="size-large  wp-image-52785" src="http://cdn.devilsworkshop.org/files/2010/06/wordpress.com-stats-400-bad-request-520x77.jpg" alt="400 bad request nginx" width="520" height="77" />][1]<figcaption class="wp-caption-text">400 bad request nginx</figcaption></figure> 

After bit of research I realize this 400 bad request error is because of error in putting API key. I have added one extra space after the API key and that&#8217;s why it is giving the error. If you face the similar issue, here is workaround for the same:

  * Deactivate WordPress.com stats plugin
  * Activate WordPress.com stats plugin
  * Add WordPress API key (Take care of space or any extra character)<figure id="attachment_455" style="width: 520px;" class="wp-caption aligncenter">

[<img class="size-large wp-image-455" src="http://cdn.devilsworkshop.org/files/2010/06/wordpress-stats-plugin-520x196.jpg" alt="Wordpress.com Stats plugin" width="520" height="196" />][2]<figcaption class="wp-caption-text">Wordpress.com Stats plugin</figcaption></figure> 

Your WordPress.com will not be giving any error after this. Do let us know if this helped you or you still getting the same error?

 [1]: http://cdn.devilsworkshop.org/files/2010/06/wordpress.com-stats-400-bad-request.jpg
 [2]: http://cdn.devilsworkshop.org/files/2010/06/wordpress-stats-plugin.jpg
