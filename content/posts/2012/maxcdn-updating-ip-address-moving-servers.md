---
title: MaxCDN – Updating IP Address when moving servers
author: rahul286
date: 2012-04-23
excerpt: MaxCDN Stores IP address of your origin server permanently. You need to manually update IP-address using steps described in this article.
url: /maxcdn-updating-ip-address-moving-servers/
dsq_thread_id:
  - 2952145489
categories:
  - Tutorial
tags:
  - blog
  - Developers
  - IP-Addess
  - MaxCDN
  - Tutorials
  - Wordpress
---
If you use <a href="http://rt.cx/maxcdn" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rt.cx/maxcdn', 'MaxCDN']);" >MaxCDN</a> to [speed-up your WordPress blog/site][1], then you may face one issue during server migration. The issue is &#8211; IP-address of new server will not get updated in MaxCDN automatically. You need to do this manually like below:

### Steps to Update IP Address on MaxCDN:

  1. Login to MaxCDN account. Go to &#8220;Manage Zones&#8221;.
  2. Go to &#8220;Pull Zone&#8221; which you like to update.
  3. Then go to &#8220;Settings&#8221; tab.
  4. You will see a section titled &#8220;Origin Information&#8221;.  That will contain IP address of your old server. Click the &#8220;Edit&#8221; button in that section. *(see screenshot) <a href="http://devilsworkshop.org/maxcdn-updating-ip-address-moving-servers/maxcdn-ip-address-change-1/" rel="attachment wp-att-57045"><img class="alignnone size-full wp-image-57045" title="MaxCDN - IP Address Change-1" src="http://cdn.devilsworkshop.org/files/2012/04/MaxCDN-IP-Address-Change-1.png" alt="" width="547" height="359" /></a>*
  5. Then enter new IP-address in &#8220;Origin IP&#8221; field and click the &#8220;Update&#8221; button.  *(see screenshot) <a href="http://devilsworkshop.org/maxcdn-updating-ip-address-moving-servers/maxcdn-ip-address-update/" rel="attachment wp-att-57046"><img class="alignnone size-full wp-image-57046" title="MaxCDN - IP Address Update" src="http://cdn.devilsworkshop.org/files/2012/04/MaxCDN-IP-Address-Update.png" alt="" width="515" height="207" /></a>*

### Why don&#8217;t MaxCDN update IP address manually?

Its common to perform some testing on a test server, and then use another server, a different one, for production site. So IP-address change is not something very uncommon.

MaxCDN uses IP address to serve content faster. But rather than automatically updating their cache, say daily, they keep it forever! While I like the manual option to &#8220;Update&#8221; IP address is settings area, which gives advance users some control, it would be better if MaxCDN combine this manual option with automated cache-update.

**Smart Auto-Update: **A smart solution would be to update IP-Address when &#8220;Origin Server&#8221; starts returning HTTP 404-error. When there will be too many 404-errors, it may mean the server has been moved. Of course, CDN misconfiguration or origin server-downtime can also result in 404-error but &#8220;Smart&#8221; programs supposed too handle such cases as well!

**Recommended Reading:** [How to Setup MaxCDN on WordPress using W3 Total Cache Plugin][2]

 [1]: http://devilsworkshop.org/maxcdn-setup-on-wordpress-using-w3-total-cache-plugin-wpmu-tutorial/ "How to Setup MaxCDN on WordPress using W3 Total Cache Plugin"
 [2]: http://devilsworkshop.org/maxcdn-setup-on-wordpress-using-w3-total-cache-plugin-wpmu-tutorial/
