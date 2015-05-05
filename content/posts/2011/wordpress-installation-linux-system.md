---
title: WordPress Installation on Linux System
author: nitunlanjewar
date: 2011-01-08
excerpt: Easy guide for WordPress installation on Linux system.
url: /wordpress-installation-linux-system/
views:
  - 16
dsq_thread_id:
  - 2947117054
categories:
  - Tutorial
tags:
  - Linux
  - Wordpress
  - wordpress installation
  - Wordpress Tutorials
---
### Steps to install WordPress on Linux system:

  1. You first need to download the <a href="http://sourceforge.net/projects/xampp/files/XAMPP%20Linux/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://sourceforge.net/projects/xampp/files/XAMPP%20Linux/', 'Xampp Server']);" ><strong>Xampp Server</strong></a> in Linux system.
  2. Extract it into **/opt** folder in your system files. The best way is to use Terminal to do the same. Type the command in terminal : &#8211; 
    <pre><code class="no-highlight">sudo tar xvfz xampp-linux-1.7.3a.tar.gz -C /opt</code></pre>

  3. After succesful installation of Xampp in your local system, you need to start a server that works in the local system. Type the command in terminal : &#8211; 
    <pre><code class="no-highlight">sudo /opt/lampp/lampp start</code></pre>

  4. Then, just to cross check that everything is working fine, type the URL in browser http://localhost/ , if you will get welcome message of Xampp then your done with Xampp installation process. (*see screen-shot below*).
[<img class="alignnone size-full  wp-image-50291" src="http://cdn.devilsworkshop.org/files/2011/01/XAMPP_1294464802863.png" alt="" width="486" height="168" />][1]

  5. Now download WordPress from <a href="http://wordpress.org/download/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/download/', 'WordPress.org']);" >WordPress.org</a>.
  6. Extract it into **/opt/lampp/htdocs/** folder.
Create a Database for your WordPress site. Go to http://localhost/phpmyadmin

[<img class="alignnone size-full wp-image-1873" src="http://cdn.devilsworkshop.org/files/2011/01/phpmyadmin.png" alt="" width="544" height="185" />][2]

  7. One more thing you can do to avoid extra work is to change permission of *wp-config.php* file and also avoid to add the database info in the same. Just type the command below in teminal to give read-write permission to the WordPress folder inside /htdocs. 
    <pre><code class="no-highlight">sudo chmod a+rw /opt/lampp/htdocs/wordpress/ -R</code></pre>

  8. Now go to the WordPress site http://localhost/wordpress/ and add all the information there like WordPress database name that you just created  in step 8. (Note: username should be **root** and no need to write the password) see the image below.
[<img class="alignnone size-full wp-image-1879" src="http://cdn.devilsworkshop.org/files/2011/01/Wpveda-Setup.png" alt="" width="436" height="319" />][3]</ol> 

You are now done with the manual work. Next, enter the info required in the further steps such as the WordPress username and other information.

Hope you will love to work on WordPress with your Linux system. You can also find some useful <a href="http://wpveda.com/category/wordpress-plugins/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/category/wordpress-plugins/', 'plugins']);" >plugins</a> and <a href="http://bloggertowp.org/series/blogger-to-wordpress-user-guide/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://bloggertowp.org/series/blogger-to-wordpress-user-guide/', 'WordPress User Guide']);" >WordPress User Guide</a> on our wpVeda blog, keep checking wpveda.com for regular updates by **<a href="http://feeds.wpveda.com/wpveda" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://feeds.wpveda.com/wpveda', 'subscribing to us']);" >subscribing to us</a>**.

 [1]: http://cdn.devilsworkshop.org/files/2011/01/XAMPP_1294464802863.png
 [2]: http://cdn.devilsworkshop.org/files/2011/01/phpmyadmin.png
 [3]: http://cdn.devilsworkshop.org/files/2011/01/Wpveda-Setup.png
