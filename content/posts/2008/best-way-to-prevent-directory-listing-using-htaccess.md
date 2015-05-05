---
title: Best Way to Prevent Directory Listing Using .htaccess
author: rahul286
date: 2008-10-15
url: /best-way-to-prevent-directory-listing-using-htaccess/
views:
  - 362
dsq_thread_id:
  - 2947092647
categories:
  - Tips
tags:
  - Developers
  - 'Tips &amp; Hacks'
  - Wordpress
---
Directory listing allows a person to see list of files and folders of a targeted directory on your website. This is something not serious itself but may help someone to launch attack on your site.

So it is good practice to turn-off or prevent directory listing by default and then, if needed, allow directory listing selectively. Yes, there are times when you want to enable directory listing for some directories. I will come to this later. Before that…

## To Turn-off or Prevent Directory Listing Sitewide…

  1. Open **.htaccess** file in your websites **root (/)** directory. If it is not present, then create one. DO NOT forget **. (dot)** in the name of **.htaccess**. 
  2. Add just one line in the beginning as follows and save/close .htaccess file. 

`Options –Indexes`

That’s it. With just one line of code in one file, sitewide directory listing is disabled. Next…

## To Turn-on or Allow Directory Listing…

  1. Go to the folder for which you want to allow directory listing. 
  2. Open **.htaccess** file in that directory. If it is not present, then create one. 
  3. Add just one line in the beginning as follows and save/close .htaccess file. 

`Options +Indexes`

That’s it. Now the directory and all sub-directories under it will have *directory listing* enabled.

If you have well organized website structure, you will only need 2 .htaccess files. At Devils Workshop, I prevented directory listing sitewide by creating a .htaccess file in it. And then I created another .htaccess file under <a href="http://pub.rtcamp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/', '/pub']);" >/pub</a> directory as I keep all publicly accessible file under it.

I feel all bloggers who are using self-hosted WordPress setup should follow this. WordPress is quite secure, but plugins you are using on WordPress may have some security flaws. Now a person can use directory listing to get list of plugins you are using and depending on it, can launch an attack on your site. So its better to play safe… 😉

If you do not have permission to create or edit .htaccess files on your webserver, you can still secure your sensitive directories by creating a blank file named index.html in them. This way remember to create such index.html files for each directory you want to protect. I know it sounds a lot of work and chances are you may miss some sub-directories on the way. But that is what makes .htaccess method best!

**Related:**&#160;[Check our WordPress plugins series][1]

 [1]: http://devilsworkshop.org/series/wordpress-plugins-series/
