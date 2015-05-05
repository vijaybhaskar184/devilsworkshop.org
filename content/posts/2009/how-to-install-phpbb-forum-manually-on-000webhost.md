---
title: How to Install phpBB Forum Manually on 000webhost
author: smartin
date: 2009-07-23
excerpt: There is a limitation for every webmaster is to create and update his blog/website regularly. But user generated content like that in forums and social networking sites is automatic and a little moderation and selection would result in extremely targeted traffic and revenue. There are different kind of forum softwares available in internet, both free and paid. Every good webhost will be having auto script installers which includes free forum softwares like phpbb and SMF (simple machines forum). But its difficult for a newbie to understand the installation process and it gets more complex in free web hosting services like 000webhost. So here we will discuss the manual installation procedure of phpBB forum software on 000webhost.
url: /how-to-install-phpbb-forum-manually-on-000webhost/
views:
  - 2508
dsq_thread_id:
  - 2947100149
categories:
  - Tutorial
tags:
  - Blogging
---
<img class="size-thumbnail wp-image-12506 alignleft" src="http://cdn.devilsworkshop.org/files/2009/07/phpBB-forums-150x91.jpg" alt="phpBB forums" width="127" height="67" /> There is a limitation for every webmaster is to create and update his blog/website regularly. But user generated content like that in forums and social networking sites is automatic and a little moderation and selection would result in extremely targeted traffic and revenue. There are different kind of forum softwares available in internet, both free and paid. Every good webhost will be having auto script installers which includes free forum softwares like phpbb and SMF (simple machines forum). But its difficult for a newbie to understand the installation process and it gets more complex in free web hosting services like 000webhost. So here we will discuss the manual installation procedure of phpBB forum software on 000webhost.

Sign up with 000webhost <a href="http://www.000webhost.com/170238.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.000webhost.com/170238.html', 'here']);" rel="nofollow">here</a>.

First we need to point nameservers of the target domain to 000wehost account. Go to your control panel provided by domain registrar and enter nameservers as ns01.000webhost.com and ns02.000webhost.com.

Now Wait for 24 hours for the complete DNS transfer.

<div class="mceTemp mceIEcenter">
  <dl>
    <dt>
      <img class="size-full wp-image-12489" src="http://cdn.devilsworkshop.org/files/2009/07/Create-new-website-on-000webhost.png" alt="Create new website on 000webhost" width="283" height="55" />
    </dt>
  </dl>
</div>

After this open your 000webhost account and click on create new button on top left.

Now you need a sub domain to which phpbb forum can be installed.

As shown in the above screenshot , go to control panel and select sub domain from domains option.

<div class="mceTemp mceIEcenter">
  <dl>
    <dt>
      <img class="size-full wp-image-12490" src="http://cdn.devilsworkshop.org/files/2009/07/Create-sub-domain-in-000webhost.jpg" alt="Create sub domain in 000webhost" width="259" height="156" />
    </dt>
  </dl>
</div>

Crete a sub domains shown above.

Now go down through control panel and select &#8220;another file manager &#8220;, and double click on public\_html folder. Here as shown above, I have created a sub domain com.thodupuzha.co.in .  In my case it will create a new directory in public\_html folder as shown below. This com folder is where we are going to install phpBB software.

<img class="aligncenter size-full wp-image-12492" src="http://cdn.devilsworkshop.org/files/2009/07/000webhost-public_HTML-folder1.jpg" alt="000webhost public_HTML folder" width="313" height="191" />

So in browser the forum will out put as www.thodupuzha.co.in/com . You can alternatively use forums instead of com.

Lets start installation by downloading phpbb forum software <a href="http://www.phpbb.com/downloads/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.phpbb.com/downloads/', 'here']);" title="download phpBB"  target="_blank">here</a>.

Unzip the files to desktop.

Upload the files to forums folder using a free FTP software like CoreFTP.

Use View FTP details from Control panel to fill FTP options on CoreFTP. You can use this <a href="http://www.techknowl.com/2009/06/coreftp-upload-wordpress-files-via-ftp.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.techknowl.com/2009/06/coreftp-upload-wordpress-files-via-ftp.html', 'tutorial']);" title="Use CoreFTP with 000webhost">tutorial</a> if you are new to CoreFTP software.

Make sure that you have uploaded all files from the unzipped archive.

Run  phpbb installation by typing http://www.mydomain.tld/phpBB3/install/  or browser URL bar.

Now phpBB installation window will appear. Click on continue.

In next page the phpBB  software will check for compatibility issues with server and file types and shows few errors.

<img class="aligncenter size-medium wp-image-12495" src="http://cdn.devilsworkshop.org/files/2009/07/php-test-600x261.png" alt="php test" width="600" height="261" />

The above files in the phpBB installation directory are unwritable. Open com(sub domain ) folder > phpBB3>  Now you will see a set of files associated with phpBB installation.  Find the above unwritable files from above pic and change its permissions as shown below.

<img class="aligncenter size-medium wp-image-12497" src="http://cdn.devilsworkshop.org/files/2009/07/cache-change-permissions-600x309.png" alt="cache change permissions" width="600" height="309" />

Make all file writable and proceed with installation.

Next step is to create databases.

Open 000webhost control panel and click on MySQL. Create a new mySQL database for phpBB installation.

<img class="aligncenter size-full wp-image-12500" src="http://cdn.devilsworkshop.org/files/2009/07/new-MYSQL-database.PNG" alt="new MYSQL database" width="426" height="225" />

Now you will be redirect to a summary page with details of  database.  Use these details to fill  create database process in phpBB installation. No need to enter database server port.

<img class="aligncenter size-medium wp-image-12501" src="http://cdn.devilsworkshop.org/files/2009/07/database-settings-in-phpBB-installation-600x328.PNG" alt="database settings in phpBB installation" width="600" height="328" />

Now the process of installation of phpBB is 000webhost is almost over. Click on continue and complete the general forums settings, admin user name, password etc.  In final page you will see a warning message. This is because we gave write permission to sensitive files in phpbb installation directory. Revert back them to original one,  and then login to your new phpBB forum .

* * *

**[**Editor&#8217;s Note**:* This post is submitted by our guest blogger ****Smartin. **Smartin is a Blogger, web designer and SEO enthusiast from Kerala, India. You can know more about him at his website <a href="http://www.smartin.in" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.smartin.in', 'www.smartin.in']);" >www.smartin.in</a> or @smartinjose on Twitter .*</p> 

*If you, too would like to [write][1] for Devils Workshop, please [check this][1]. Details about our [revenue sharing programs][1] are [here][1].]*

 [1]: http://devilsworkshop.org/join-dw/
