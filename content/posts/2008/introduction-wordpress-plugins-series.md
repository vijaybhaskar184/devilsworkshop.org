---
title: Introduction – WordPress Plugins
author: rahul286
date: 2008-08-04
url: /introduction-wordpress-plugins-series/
views:
  - 27
dsq_thread_id:
  - 2947091275
categories:
  - Tips
tags:
  - Blogging
  - Dreamhost
  - Firefox
  - plugin
  - Series
  - Windows
  - Wordpress
  - Wordpress Plugins
---
This is my first post in first [series][1] about wordpress plugins.

In this post I am covering few things to remember while using wordpress plugins and different ways to upload a wordpress plugin. Actual plugin listing will start from tomorrow.

### Some things to remember about wordpress plugins&#8230;

  * Best thing about wordpress is, power it offers via countless plugins developed for it. But please keep in my mind that every plugin adds some overhead to wordpress. So if you use too many plugins, they will end up slowing your blog to the extent that your visitor gets irritated.
  * There are things which can be often accomplished by other ways. Like there is a plugin which allow you to post your updates to twitter from wordpress dashboard. Try to use alternative like twitter desktop clients, Firefox extension, etc. This way you can trim your plugin list really well.
  * Whenever possible try to download and use plugins from official wordpress plugin repository. That way wordpress plugins automatic update feature can discover when a update to your plugin becomes available.
  * While deactivating a plugin, if you are sure that you will never use it again then better delete files/folders associated with it.
  * If you are using any caching plugins, then either deactivate it or flush your cache entirely after you activates a plugin which is supposed to alter your blogs front-end.
  * Never activate/deactivate too many plugins at once, specially if you are using them for the first time. A plugin may not break your blog directly, but it may conflict with other plugins.
  * There are many plugins which do almost same job. Never test them all at once. They are more prone to conflicting with each other.

### Ways to upload WordPress plugins&#8230;

Yes, there are many ways to upload a wordpress plugin and you should choose the best to save your time.

**Official Way&#8230;**

  * The most conventional way is to download plugin file(s) to your disk.
  * Then unzip them if they are in compressed format.
  * Finally upload them to wordpress plugin directory using a FTP client.

<a href="http://codex.wordpress.org/Managing_Plugins#Plugin_Installation" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Managing_Plugins#Plugin_Installation', 'More details are here']);" >More details are here</a>.

**Online FTP Client&#8230;**

Another better way is to use online FTP client like <a href="http://www.net2ftp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.net2ftp.com/', 'net2ftp']);" >net2ftp</a>. Some webhosts offers custom FTP scripts. The only advantage of this approach is that you can upload compressed file(s) directly. Such scripts automatically uncompress them after uploading. This saves some work and bandwidth. Also transfer time is considerably less.

**Using Shell&#8230;**

This is my favorite way. But to use this shell access must be supported by your webhost. <a href="http://www.dreamhost.com/r.cgi?302379" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.dreamhost.com/r.cgi?302379', 'Dreamhost']);" >Dreamhost</a> offers this feature. <a href="http://wiki.dreamhost.com/Enabling_Shell_Access" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wiki.dreamhost.com/Enabling_Shell_Access', 'Detail on enabling shell access on Dreamhost are here']);" >Detail on enabling shell access on Dreamhost are here</a>.

Once you have shell access, you terminal on Linux/Mac or putty on windows to login via shell. Then&#8230;

  * Change your current working directory to wordpress plugins folder. (cd command)
  * Use **wget** command to download plugin file. *syntax: $wget <plugin\_file\_url>*
  * If downloaded file is in zip format, use **unzip** command.

This save most bandwidth and good for slow dial up users since no data is downloaded to their hard-drive. Also in this case, as your webhost is downloading plugin directly, the speed is amazing.

**Warning:** Use this only if you are familiar with Linux/Unix and also comfortable with command-line interface. One wrong command can wipe out your entire blog. Of course, there are complex ways to recover your blogs from such mistakes but more about it later sometime.

**Using Plugin:**

There are many wordpress plugins which can help you upload/manage other plugins. More about them in next article, to be published tomorrow.

 [1]: http://devilsworkshop.org/2008/08/04/series-writing-a-new-blogging-experiment-editorial/
