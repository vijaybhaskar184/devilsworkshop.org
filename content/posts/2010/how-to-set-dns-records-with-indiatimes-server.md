---
title: How To Set DNS Records with IndiaTimes Server
author: anshuldixit
date: 2010-03-11
url: /how-to-set-dns-records-with-indiatimes-server/
views:
  - 325
dsq_thread_id:
  - 2947108411
categories:
  - Tips
tags:
  - DNS Tools
  - Domain
  - godaddy
  - Web Hosting
  - Webhosting
---
[<img class="wp-image-54135" style="margin-left: 0px;margin-right: 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/domain_registrar_thumb.jpg" border="0" alt="domain_registrar" width="240" height="222" />][1] After my last post on [my experience with Indiatimes domain service][2], I got a couple of questions asking how to change the dns settings for domains registered with Indiatimes.

As I already mentioned in that article, Indiatimes does not provide total dns control to its customers. There are, however, two ways you can get your dns settings done.

**1) ****Providing details to Indiatimes tech-support team**

**<span style="font-weight: normal">You can mail the Indiatimes web-support team at “websupport[at]indiatimes.co.in” with the required cname, aname and mx records. For me it took 5 days, 4 e-mails and 5 phone calls before the changes were finally made, but ideally you will get it done within 2 working days.</span>**

**2) ****Manage your dns through another domain vendor who provides total dns control**

**<span style="font-weight: normal">This is my preferred way, because you get full control of your dns settings. There are many registrars who provide this service for free. I will tell you how to do it with GoDaddy Offsite DNS.</span>**

**<span style="font-weight: normal">i. Login to your GoDaddy account and go to <a href="https://dcc.godaddy.com/default.aspx?activeview=offsitedns&sa=" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://dcc.godaddy.com/default.aspx?activeview=offsitedns&sa=', 'https://dcc.godaddy.com/default.aspx?activeview=offsitedns&sa=']);" >https://dcc.godaddy.com/default.aspx?activeview=offsitedns&sa=</a></span>**

**<span style="font-weight: normal"><a href="https://dcc.godaddy.com/default.aspx?activeview=offsitedns&sa=" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://dcc.godaddy.com/default.aspx?activeview=offsitedns&sa=', '']);" ></a>ii. Click Add Off-Site DNS.</span>**

**<span style="font-weight: normal"><a href="http://cdn.devilsworkshop.org/files/2010/03/OffsiteDNS1.jpg"><img style="float: none;margin-left: auto;margin-right: auto" src="http://cdn.devilsworkshop.org/files/2010/03/OffsiteDNS_thumb1.jpg" alt="Off-site DNS" width="640" height="229" /></a> </span>**

**<span style="font-weight: normal"> </span>**iii. Enter your domain name in the domain name field and click OK.

iv. Wait for a couple of minutes (refresh the screen if required).

[<img style="float: none;margin-left: auto;margin-right: auto" src="http://cdn.devilsworkshop.org/files/2010/03/status_thumb.jpg" alt="domain_status" width="640" height="346" />][3]

That’s the first part. To complete the process you will have to update the domains NameServer’s.

v. Login to your Indiatimes domain manager.

vi. Click on Name Servers.

vii. Update the nameservers with  
mns01.domaincontrol.com  
mns02.domaincontrol.com and save settings.[][4]

<img style="float: none;margin-left: auto;margin-right: auto" src="http://cdn.devilsworkshop.org/files/2010/03/changenameserver_thumb.jpg" alt="change nameserver" width="587" height="480" />

That’s it. Within 24-48 hours your nameservers will be modified and then you can enjoy full dns control through GoDaddy. *Thanks Bisomber for the tip.*

 [1]: http://cdn.devilsworkshop.org/files/2010/03/domain_registrar.jpg
 [2]: http://devilsworkshop.org/my-experience-with-indiatimes-domain-service-tdis/
 [3]: http://cdn.devilsworkshop.org/files/2010/03/status.jpg
 [4]: http://cdn.devilsworkshop.org/files/2010/03/changenameserver.jpg
