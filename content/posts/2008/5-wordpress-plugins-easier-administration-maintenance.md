---
title: 6 WordPress Plugins for Easier Administration and Maintenance
author: rahul286
date: 2008-08-11
url: /5-wordpress-plugins-easier-administration-maintenance/
views:
  - 44
dsq_thread_id:
  - 2947091527
categories:
  - Reviews
tags:
  - Blogging
  - plugin
  - Plugins
  - Series
  - Web Hosting
  - Wordpress
  - Wordpress Plugins
---
Today I am listing wordpress plugins for easier administration and maintenance. Main goal is to automate tasks like database backup, upgrading, etc.

### 1. Database Backup Plugin

This is most important plugin you must use. It performs complete wordpress database backup and optionally send it to email address given, on daily or weekly basis.

Technically if you have your wordpress database backup with you, you can recover your blog from any disaster.

**Link: **<a href="http://www.ilfilosofo.com/blog/wp-db-backup/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ilfilosofo.com/blog/wp-db-backup/', 'WordPress Database Backup plugin']);" >WordPress Database Backup plugin</a> by <a href="http://www.ilfilosofo.com/blog/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ilfilosofo.com/blog/', 'Austin Matzko']);" >Austin Matzko</a>

### 2. Automatic Upgrade Plugin

This plugin allows you to automatically upgrade wordpress installation following official instructions listed here. It performs tasks: backing-up database, plugin deactivation, downloading latest wordpress version, upgrading files/database, etc all automatically. If anything goes wrong, it lets you roll back all the changes.

I use <a href="http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Installing/Updating_WordPress_with_Subversion', 'subversion installation of wordpress']);" >subversion installation of wordpress</a> so upgrading is really simplest task for me. But it requires knowledge of Linux and SVN, also shell access to your webhosting server.

If you don’t know anything about subversion, then best way is to use this plugin to upgrade wordpress.

**Link:** <a href="http://wordpress.org/extend/plugins/wordpress-automatic-upgrade/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wordpress-automatic-upgrade/', 'WordPress Automatic Upgrade Plugin']);" >WordPress Automatic Upgrade Plugin</a> by <a href="http://wordpress.org/extend/plugins/profile/keithdsouza" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/profile/keithdsouza', 'keithdsouza']);" >keithdsouza</a>, <a href="http://wordpress.org/extend/plugins/profile/ronalfy" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/profile/ronalfy', 'ronalfy']);" >ronalfy</a>

### 3. WordPress Security Scan

Many people think open-source is insecure. But I think security is something you should take care of yourselves. Of course wordpress is much robust and in my opinion best open source script ever made. This plugin, scans your wordpress installation for any misconfiguration or holes through which your blog can be compromised.

It generates report and also help you out correctly configure your blog from security point of view. This plugin is in very active development and continuously adding more security checks with each version being released.

**Link: **<a href="http://wordpress.org/extend/plugins/wp-security-scan/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/wp-security-scan/', 'WP Security Scan']);" >WP Security Scan</a> by <a href="http://wordpress.org/extend/plugins/profile/hallsofmontezuma" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/profile/hallsofmontezuma', 'Michael Torbert']);" >Michael Torbert</a>

### 4. Akismet Spam Protection

This could have been listed in [comments plugin][1] but I use it in general for fighting against spam. This uses wordpress community feedback about commentator to decide if a comment, pingback or trackback is spam or not. I think this is better way to fight against spam, compared to image verification you can alternatively put on your blog.

This plugin really makes moderating comments, etc really easy. It blocks almost all spam. [Akismet can be used with contact form too][2].

This plugin comes with your wordpress by default, so activate if you haven’t done that yet.

**Link: **<a href="http://akismet.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://akismet.com/', 'Akismet Spam Protection']);" >Akismet Spam Protection</a> by <a href="http://ma.tt/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ma.tt/', 'Matt Mullenweg']);" >Matt Mullenweg</a>

### 5. Broken Link Checker Plugin

As name suggests, this plugin checks periodically all your posts for broken links. It then generates summary of all broken links which you can either manually replace by correct link or remove at all.

A broken link is really bad for your reputation as a blogger. Imagine a first time visitor to your old post finding link it contains broken. Do you think he will come to your blog again?

**Link:** <a href="http://wordpress.org/extend/plugins/broken-link-checker/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/broken-link-checker/', 'Broken Link Checker Plugin']);" >Broken Link Checker Plugin</a> by <a href="http://wordpress.org/extend/plugins/profile/whiteshadow" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/profile/whiteshadow', 'Janis Elsts']);" >Janis Elsts</a>

### 6. Download Manager Plugin

WordPress as a CMS offers no way to track file download statistics. If you distribute various types of downloadable files on your blog, then you might be very well interested in tracking number of downloads they receive among other statistical data.

This plugins adds a very nice download manager functionality to your wordpress blog.

**Link:** <a href="http://lesterchan.net/wordpress/readme/wp-downloadmanager.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://lesterchan.net/wordpress/readme/wp-downloadmanager.html', 'WP Download Manager Plugin']);" >WP Download Manager Plugin</a> by <a href="http://lesterchan.net/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://lesterchan.net/', 'Lester &#8216;GaMerZ&#8217; Chan']);" >Lester &#8216;GaMerZ&#8217; Chan</a>

Apart from this, I strongly recommend using [one-click installer plugin][3]. It improved a lot recently, and it will really make trying and managing different plugins really easy.

**Feedback Please&#8230;**

So here I am done with my [first series writing experiment][4]. I would love to here your feedback/suggestions so that I can improve next series. I am yet to finalise a topic for it but I would love to hear about that.

I will post a summary post for entire series tomorrow. If you have any really nice plugin to share, please let me know via comments. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://devilsworkshop.org/best-wordpress-plugins-for-comments-wordpress-plugin-series/
 [2]: http://devilsworkshop.org/creating-contact-page-in-5-minutes-wordpress-plugin/
 [3]: http://devilsworkshop.org/plugins-to-make-ftp-clients-obsolete-wordpress-plugin-series/
 [4]: http://devilsworkshop.org/series-writing-a-new-blogging-experiment-editorial/
