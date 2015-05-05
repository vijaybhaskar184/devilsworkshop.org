---
title: Enable Hibernate Option on Windows Vista
author: manpreetskhu
date: 2009-08-27
url: /enable-hibernate-option-on-windows-vista/
blogger_blog:
  - http://manpreetisking.blogspot.com
views:
  - 144
dsq_thread_id:
  - 2947100928
categories:
  - Tips
tags:
  - OS
  - Social Media
  - 'Tips &amp; Hacks'
  - Windows Vista
---
<img class="size-thumbnail wp-image-13069 alignright" src="http://cdn.devilsworkshop.org/files/2009/08/batt-150x150.jpg" alt="vista hibernate battery" width="150" height="150" />I am writing about this because I recently faced this problem and was not able to find anything on the internet which is needed to solve this problem.

For some vista users the &#8220;hibernate&#8221; option disappears mysteriously.

**There are 2 reasons for this:**

  1. That you may have less free disk space needed to store the hibernation file that is stored on the windows drive i.e. on which the OS is installed.
  2. You have done a disk cleanup and the hibernate file has been deleted.

**Solution:**

  1. Try to free up the space needed for the hiber.sys file that is if you have 2 GB RAM then free space should be more than 3 GB (to be on safer side) on that drive.
  2. If you are still not able to see the hibernate option in the shutdown menu then try this little trick. 
      * Click on vista start menu
      * Right click on command prompt and choose run as administrator.
      * Then type this command

> powercfg  -h on

OR

> powercfg /hibernate on

Any one of the above will do. This would work for you. Now you have your hibernate option restored.

It’s my first post on DW hope you like it.

* * *

***[Editor Note:** This is first post by Manpreet Singh. He blogs at  <a href="http://manpreetisking.blogspot.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://manpreetisking.blogspot.com', 'Singh is King']);" >Singh is King</a> about mobile phones and gaming consoles.*</p> 

<p style="line-height: 20px">
  <em>If you like to <a href="http://devilsworkshop.org/join-dw/">write</a> for Devils Workshop, please <a href="http://devilsworkshop.org/join-dw/">check this</a>. Details about our <a href="http://devilsworkshop.org/join-dw/">revenue sharing programs</a> are <a href="http://devilsworkshop.org/join-dw/">here</a>.</em><em><strong>]</strong></em>
</p>
