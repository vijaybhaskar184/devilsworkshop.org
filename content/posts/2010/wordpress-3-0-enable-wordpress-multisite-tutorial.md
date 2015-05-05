---
title: 'WordPress 3.0 Tutorial: How to Enable WordPress MU into WordPress 3.0'
author: denharsh
date: 2010-06-18
url: /wordpress-3-0-enable-wordpress-multisite-tutorial/
views:
  - 611
dsq_thread_id:
  - 2947111363
categories:
  - Tips
tags:
  - Wordpress
  - Wordpress .htaccess
  - Wordpress 3.0
  - Wordpress MU
  - Wordpress Multiple blogs
  - Wordpress Super admin
  - Wordpress Tutorials
---
We have talked a lot about <a href="http://wpveda.com/tag/wordpress-3-0/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/tag/wordpress-3-0/', 'WordPress 3.0']);" >WordPress 3.0</a> and its capabilities. One of the major feature is ability to run multiple blogs from single WordPress installation. In this tutorial, I will guide you on how you can install multiple WordPress blog in WordPress 3.0. To get started with this <a href="http://wpveda.com/how-to-upgrade-wordpress-to-wordpress-3-0/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/how-to-upgrade-wordpress-to-wordpress-3-0/', 'upgrade your WordPress to 3.0']);" target="_blank">upgrade your WordPress to 3.0</a> and <a href="http://wpveda.com/how-to-enable-multiple-site-network-option-in-wordpress-3-0/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/how-to-enable-multiple-site-network-option-in-wordpress-3-0/', 'enable multiple site network option']);" target="_blank">enable multiple site network option</a>.

Once you have edited your wp-config.php file to enable multiple network settings, go to ***Tools > Network*** : You will see a screen like this:

[<img class="wp-image-51800" style="float: none;margin: 10px auto;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/subdomainsubdirectories_thumb.png" border="0" alt="subdomain-sub-directories" width="504" height="279" />][1] You have two options to select from

  * Sub-domain : site1.Wpveda.com
  * Sub-directories : wpveda.com/site1

In this case, site1 is your sub-domain.  First one is  working as a sub-domain and later one is sub directory. To make your sub-domain work, you need to play with DNS (A Name record). Where as for sub-directories, it is much easier to configure. In this tutorial we will be using Sub-directories.

  * Select Sub directories
  * Give a Name to your network: Ex: Thesis Customization Service Sites
  * Admin Email:

Once you click on Install, you will be taken to next page, where you need to play with your wp-config file and .htaccess file.

**1: Create blogs.dir directory **

Create a `blogs.dir` directory in `/thesiscustomizationservice.com/wp-content`. This directory is used to store uploaded media for your additional sites and must be writeable by the web server.

Login to your FTP  server and create a directory with name Blogs.dir under wp-content folder. This directory will be use to upload all the media files.

**2. Add codes to wp-config.php file**

[<img style="float: none;margin: 10px auto;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/addmultisitecodes_thumb.png" border="0" alt="add-multi-site-codes" width="504" height="129" />][2] Open your wp-config file and add this line of code into it.

**3. Add Authentication keys**

[<img style="float: none;margin: 10px auto;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/authenticationkeys_thumb.png" border="0" alt="authentication-keys" width="504" height="98" />][3]

Add authentication keys into your wp-config file. You might need to replace the old authentication keys. I will suggest take a backup of your wp-config file.

**4. Add .htaccess code:**

[<img style="float: none;margin: 5px auto;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/htaccess_thumb.png" border="0" alt="htaccess" width="504" height="239" />][4]

Last thing which you need to do is add few lines into your .htaccess file. If you don’t have .htaccess file by default, read this <a href="http://www.shoutmeloud.com/how-to-create-htaccess-file-for-wordpress-blog.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.shoutmeloud.com/how-to-create-htaccess-file-for-wordpress-blog.html', 'How to create .htaccess file for WordPress blog']);" target="_blank">How to create .htaccess file for WordPress blog</a>. Once you have done all this , click on log in at the lower right hand side and re login to your WordPress blog.

### Super Admin in WordPress 3.0

So if you have done every thing as guided in the above post, after re-login you will see  box for super admin at the top left hand side. See Image below

[<img style="float: none;margin: 10px auto;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/superadmin_thumb.png" border="0" alt="super-admin" width="227" height="409" />][5] That’s it, now your blog is MU compatible and you can add any no. of blogs with few clicks. I will be covering how to add more blogs into your WordPress 3.0 installation in the next post.

*Do share your views about this tutorial. If you have any query feel free to ask via comments. If you like this post, don’t forget to share it with your followers via Twitter and Facebook.*

 [1]: http://cdn.devilsworkshop.org/files/2010/06/subdomainsubdirectories.png
 [2]: http://cdn.devilsworkshop.org/files/2010/06/addmultisitecodes.png
 [3]: http://cdn.devilsworkshop.org/files/2010/06/authenticationkeys.png
 [4]: http://cdn.devilsworkshop.org/files/2010/06/htaccess.png
 [5]: http://cdn.devilsworkshop.org/files/2010/06/superadmin.png
