---
title: Storing Data On SVN(subversion) Repository For Windows OS
author: huzaifadarbar
date: 2010-12-25
excerpt: While coding, we come across a situation where we need to revert back some heavy changes to the source code, but we could not find it anymore, eventually it becomes difficult to trackback and we end up wasting a lot of time and energy, this is where SVN comes to our rescue. In this article I am going to assist you how to manage data on SVN.
url: /storing-data-svnsubversion-repository-windows-os/
views:
  - 17
dsq_thread_id:
  - 2947116538
categories:
  - Tutorial
tags:
  - Developers
  - Online Storage
  - Subversion client
  - SVN Repository
  - SVN tortoise
  - Windows OS
  - Wordpress
---
While coding, we come across a situation where we need to revert back some heavy changes to the source code, but we could not find it anymore, eventually it becomes difficult to trackback and we end up wasting a lot of time and energy, this is where SVN comes to our rescue. In this article I am going to assist you how to manage data on SVN.

**SVN or Subversion** is an open source tool used for revision control or in other words it&#8217;s an online repository in which data can me stored. It is widely used by popular open source project as their version control program. I use it for my WordPress projects.

**Tortoise SVN** is a Subversion client, easy to use revision control, implemented as a windows shell extension. Since it is not integrated with specific IDE will be using it with NetBeans.

## How to go about it

  * Download and install <a href="http://tortoisesvn.net/downloads" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://tortoisesvn.net/downloads', 'tortoise SVN']);" >tortoise SVN</a>.

<a href="http://tortoisesvn.tigris.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://tortoisesvn.tigris.org/', '']);" ><img class="wp-image-53979" style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/tortoiseSVN.png" border="0" alt="tortoiseSVN" width="88" height="68" /></a>

  * Restart your computer if required.
  * Extract WordPress to a folder say D**emoFolder.**
  * Create a folder on SVN repository say SVN-data.

<a href="http://wpveda.com/storing-data-svnsubversion-repository-windows-os/creatin-svn-folder_thumb/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/storing-data-svnsubversion-repository-windows-os/creatin-svn-folder_thumb/', '']);" rel="attachment wp-att-1684"><img class="alignnone size-full wp-image-1684" src="http://cdn.devilsworkshop.org/files/2010/12/creatin-svn-folder_thumb.png" alt="" width="404" height="257" /></a>

  * Create a folder trunk in SVN-data.
  * Export default twentyten theme to trunk, which is under Theme folder (local machine –> SVN repository).

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/export_thumb.png" border="0" alt="export" width="304" height="280" />][1]

  * Now SVN checkout to your local machine under theme folder.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/checkout_thumb.png" border="0" alt="checkout" width="244" height="292" />][2]

<a href="http://wpveda.com/storing-data-svnsubversion-repository-windows-os/checkout-path_thumb/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/storing-data-svnsubversion-repository-windows-os/checkout-path_thumb/', '']);" rel="attachment wp-att-1683"><img class="alignnone size-full wp-image-1683" src="http://cdn.devilsworkshop.org/files/2010/12/checkout-Path_thumb.png" alt="" width="244" height="191" /></a>

  * Create <a href="http://wpveda.com/how-to-create-a-wordpress-project-in-netbeans/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/how-to-create-a-wordpress-project-in-netbeans/', 'NetBeans project']);" >NetBeans project</a> with existing source and you are done.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/netbeans-existing-src_thumb.png" border="0" alt="netbeans-existing-src" width="244" height="176" />][3]

  * After any changes you can commit the data so that it can be stored on the online repository. Now you can see there is .svn folder is in your twenty ten theme with all green folder icon.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border-width: 0px" src="http://cdn.devilsworkshop.org/files/2010/11/svn-files_thumb.png" border="0" alt="svn-files" width="404" height="119" />][4]

Do drop in your comments.

 [1]: http://cdn.devilsworkshop.org/files/2010/11/export.png
 [2]: http://cdn.devilsworkshop.org/files/2010/11/checkout.png
 [3]: http://cdn.devilsworkshop.org/files/2010/11/netbeans-existing-src.png
 [4]: http://cdn.devilsworkshop.org/files/2010/11/svn-files.png
