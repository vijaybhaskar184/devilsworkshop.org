---
title: Upgrade WordPress to version 3.0.2
author: huzaifadarbar
date: 2010-12-01
excerpt: |
  The latest WordPress version 3.0.2 is available now, and it is a mandatory security update for all previous WordPress versions. You can download it from the official site. It is advisable to update the latest version immediately. The latest stable release is available in two formats  .zip and tar.gz, for more details you can visit the download page.
  
  If you have no idea what to do with the download, you can sign up with one of the web hosting partners that offers a one click install of WordPress or getting a free account on WordPress.com.
url: /upgrade-wordpress-3-0-2-2/
views:
  - 2
categories:
  - Tips
tags:
  - News
  - solar station
  - Wordpress
  - WordPress 3.0.2
  - WordPress users
---
The latest WordPress version 3.0.2 is available now, and it is a mandatory security update for all previous WordPress versions. You can download it from the <a href="http://wordpress.org/download/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/download/', 'official site']);" >official site</a>. It is advisable to update the latest version immediately. The latest stable release is available in two formats .zip and tar.gz, for more details you can visit the <a href="http://wordpress.org/download/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/download/', 'download page']);" >download page</a>.

[<img class="alignnone wp-image-50338" style="border: 0px initial initial" src="http://cdn.devilsworkshop.org/files/2010/12/WordPress_3.0.2_logo_thumb2_thumb.png" border="0" alt="WordPress_3.0.2_logo_thumb[2]" width="150" height="149" />][1]

If you have no idea what to do with the download, you can sign up with one of the <a href="http://wordpress.org/hosting/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/hosting/', 'web hosting partners']);" >web hosting partners</a> that offers a one click install of WordPress or <a href="http://wordpress.com/?ref=wporg-download" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.com/?ref=wporg-download', 'getting a free account on WordPress.com']);" >getting a free account on WordPress.com</a>.

**Steps to Upgrade WordPress version to 3.0.2**

As you can see in the below image there is an **update** option available click it to get updated with the latest version.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px initial initial" src="http://cdn.devilsworkshop.org/files/2010/12/image_thumb.png" border="0" alt="update WordPress to version 3.0.2" width="554" height="178" />][2]

While having an upgrade it is always good to have a database backup first and then you have a choice to update WordPress automatically or you can download latest version.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px initial initial" src="http://cdn.devilsworkshop.org/files/2010/12/image_thumb1.png" border="0" alt="update WordPress to version 3.0.2-db" width="554" height="232" />][3]

Showing WordPress Update in progress.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px initial initial" src="http://cdn.devilsworkshop.org/files/2010/12/image_thumb2.png" border="0" alt="updating" width="554" height="254" />][4]

WordPress is now Updated and ready you can visit the dashboard.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px initial initial" src="http://cdn.devilsworkshop.org/files/2010/12/image_thumb3.png" border="0" alt="updated" width="554" height="274" />][5]

Here is your dashboard for updated WordPress 3.0.2

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px initial initial" src="http://cdn.devilsworkshop.org/files/2010/12/image_thumb4.png" border="0" alt="dashboard" width="554" height="255" />][6]

Though it is expected that WordPress 3.1 stable version will be released in early 2011, anyways it’s the time to download latest release.

**List of fixes WorPress version 3.0.2**

  * Fix moderate security issue where a malicious Author-level user could gain further access to the site. (<a href="http://core.trac.wordpress.org/changeset/16625" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/changeset/16625', 'r16625']);" title="http://core.trac.wordpress.org/changeset/16625">r16625</a>)

Other bugs and security hardening:

  * Remove pingback/trackback blogroll whitelisting feature as it can easily be abused. (<a href="http://core.trac.wordpress.org/ticket/13887" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/ticket/13887', '#13887']);" title="http://core.trac.wordpress.org/ticket/13887">#13887</a>)
  * Fix canonical redirection for permalinks containing %category% with nested categories and paging. (<a href="http://core.trac.wordpress.org/ticket/13471" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/ticket/13471', '#13471']);" title="http://core.trac.wordpress.org/ticket/13471">#13471</a>)
  * Fix occasional irrelevant error messages on plugin activation. (<a href="http://core.trac.wordpress.org/ticket/15062" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/ticket/15062', '#15062']);" title="http://core.trac.wordpress.org/ticket/15062">#15062</a>)
  * Minor XSS fixes in request\_filesystem\_credentials() and when deleting a plugin. (<a href="http://core.trac.wordpress.org/changeset/16367" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/changeset/16367', 'r16367']);" title="http://core.trac.wordpress.org/changeset/16367">r16367</a>, <a href="http://core.trac.wordpress.org/changeset/16373" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/changeset/16373', 'r16373']);" title="http://core.trac.wordpress.org/changeset/16373">r16373</a>)
  * Clarify the license in the readme (<a href="http://core.trac.wordpress.org/changeset/15534" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/changeset/15534', 'r15534']);" title="http://core.trac.wordpress.org/changeset/15534">r15534</a>)
  * Multisite: Fix the delete_user meta capability (<a href="http://core.trac.wordpress.org/changeset/15562" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/changeset/15562', 'r15562']);" title="http://core.trac.wordpress.org/changeset/15562">r15562</a>)
  * Multisite: Force current\_user\_can\_for\_blog() to run map\_meta\_cap() even for super admins (<a href="http://core.trac.wordpress.org/ticket/15122" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/ticket/15122', '#15122']);" title="http://core.trac.wordpress.org/ticket/15122">#15122</a>)
  * Multisite: Fix ms-files.php content type headers when requesting a URL with a query string (<a href="http://core.trac.wordpress.org/ticket/14450" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/ticket/14450', '#14450']);" title="http://core.trac.wordpress.org/ticket/14450">#14450</a>)
  * Multisite: Fix the usage of the SUBDOMAIN_INSTALL constant for upgraded WordPress MU installs (<a href="http://core.trac.wordpress.org/ticket/14536" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://core.trac.wordpress.org/ticket/14536', '#14536']);" title="http://core.trac.wordpress.org/ticket/14536">#14536</a>)

You can find more details about Revised files on <a href="http://codex.wordpress.org/Version_3.0.2" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://codex.wordpress.org/Version_3.0.2', 'WordPress.org']);" >WordPress.org</a>  
Explore latest WordPress version 3.0.2 and share it through your comments.

**Link:** <a href="http://wordpress.org/download/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/download/', 'WordPress 3.0.2']);" >WordPress 3.0.2</a>

 [1]: http://cdn.devilsworkshop.org/files/2010/12/WordPress_3.0.2_logo_thumb2.png
 [2]: http://cdn.devilsworkshop.org/files/2010/12/image.png
 [3]: http://cdn.devilsworkshop.org/files/2010/12/image1.png
 [4]: http://cdn.devilsworkshop.org/files/2010/12/image2.png
 [5]: http://cdn.devilsworkshop.org/files/2010/12/image3.png
 [6]: http://cdn.devilsworkshop.org/files/2010/12/image4.png
