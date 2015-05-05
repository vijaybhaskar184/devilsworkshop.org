---
title: '[Editorial] Scheduled Downtime for Maintenance'
author: rahul286
date: 2010-06-26
url: /editorial-scheduled-downtime-for-maintenance/
views:
  - 44
dsq_thread_id:
  - 2947111695
categories:
  - Editorial
tags:
  - Announcements
  - Downtime
  - Editorial
---
[<img class="alignright size-full wp-image-27426" title="maintenance" src="http://cdn.devilsworkshop.org/files/2010/06/maintenance.gif" alt="" width="222" height="222" />][1]Hi All!

We will be upgrading our servers for things listed below tonight (after 1 hour).

We are expecting downtime from **30 minutes to 1 hour**. As we have so many things to upgrade/improve, downtime is unavoidable. <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

All guest bloggers requested to save their posts/work before **3AM** if they are planning to write tonight.

### Things we will be doing!

  * Upgrade Ubuntu 9 to Ubuntu 10 (LTS)
  * Upgrade WordPress MU 2.9.2 to WordPress 3.0
  * Turn on <a href="http://wiki.nginx.org/NginxHttpFcgiModule#fastcgi_cache" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wiki.nginx.org/NginxHttpFcgiModule#fastcgi_cache', 'nginx fastcgi_cache']);" >nginx fastcgi_cache</a>
  * Migrate from php-fastcgi to <a href="http://php-fpm.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://php-fpm.org/', 'php-fpm']);" >php-fpm</a>
  * Say bye-bye to Wp-Super-Cache and <a href="http://wpveda.com/nginx-rewrite-rules-for-w3-total-cache-plugin/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/nginx-rewrite-rules-for-w3-total-cache-plugin/', 'use w3TotalCache with nginx']);" >use w3TotalCache with nginx</a>
  * Enable <a href="http://wpveda.com/maxcdn-setup-on-wordpress-using-w3-total-cache-plugin-wpmu-tutorial/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/maxcdn-setup-on-wordpress-using-w3-total-cache-plugin-wpmu-tutorial/', 'CDN']);" >CDN</a> on other blogs
  * Remove <a href="http://wordpress.org/extend/plugins/wordpress-mu-domain-mapping/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wordpress-mu-domain-mapping/', 'domain-mapping plugin']);" >domain-mapping plugin</a> (we don&#8217;t need it anymore for domain mapping to work, in our case at least! <a href="http://wordpress.org/support/topic/404711?replies=8" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/support/topic/404711?replies=8', 'See this post']);" >See this post</a>)
  * Enable APC and memcache and configure w3Total Cache to use these high-performance extensions (will post about this later on wpveda)

### Following blogs/sites will be affected&#8230;

  * rtCamp
  * <a href="http://rtblogs.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtblogs.com/', 'rtBlogs']);" >rtBlogs</a>
  * [Devils Workshop][2]
  * <a href="http://wpveda.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/', 'WpVeda']);" >WpVeda</a>
  * <a href="http://fbknol.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://fbknol.com/', 'FacebookKnol']);" >FacebookKnol</a>
  * <a href="http://orkutdiary.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://orkutdiary.com/', 'OrkutDiary']);" >OrkutDiary</a>
  * <a href="http://crictalks.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://crictalks.com/', 'CricTalks']);" >CricTalks</a>
  * <a href="http://bloggertowp.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/', 'Blogger To Wp Migration']);" >Blogger To Wp Migration</a>
  * <a href="http://mediabp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mediabp.com/', 'Media Bp']);" >Media Bp</a>

Also if any other sites in our network or hosted/managed by rtCamp goes down please bear with us.

We will be coming back with faster server! Really&#8230; 😉

**Update:** Maintenance is over with 20 minutes downtime total. Items striked out are skipped for various reasons.

*(Image credit: *<a href="http://www.chaufkipeut.fr/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.chaufkipeut.fr/', 'chaufkipeut']);" ><em>chaufkipeut</em></a>*)*

 [1]: http://cdn.devilsworkshop.org/files/2010/06/maintenance.gif
 [2]: http://devilsworkshop.org/
