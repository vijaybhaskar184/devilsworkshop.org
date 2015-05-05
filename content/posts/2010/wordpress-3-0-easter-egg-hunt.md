---
title: WordPress 3.0 Easter Egg Hunt!
author: rahul286
date: 2010-06-17
url: /wordpress-3-0-easter-egg-hunt/
views:
  - 23
dsq_thread_id:
  - 2947111164
categories:
  - News
tags:
  - Easter Egg
  - Wordpress
  - Wordpress 3.0
  - Wordpress Easter egg
---
Easter eggs fascinates me a lot and since I read about presence of new easter eggs in latest wordpress 3.0, I am continuously hunting for them since last few hours.

Below is stuff I have found and conclusions I have made. Not sure if we can call them easter egg(s), but one of them is definitely a bug!  Reason for putting my *uncertain* findings here is &#8211; some like-minded easter eggs lover may cook an omelet out of this! 😉

### #1 &#8211; Easter Egg hint must be in text&#8230;

First thing I noticed was, Matt asked to look for <a href="http://wordpress.tv/2010/06/17/introducing-wordpress-3-0/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.tv/2010/06/17/introducing-wordpress-3-0/', 'HD video']);" ><strong>HD video</strong></a> when he hinted about easter eggs. HD videos are high in quality and one big difference between HD/non-HD screen-casts is that **text** in HD videos is readable.

So I think Easter egg hint must be in text somewhere but after watching that video more than 10 times and reading almost every character in that video I noticed very few things.

### #2 &#8211; Easter egg could be introduced in WordPress 3.o-RC3-15241 Release

While watching that video, I noticed that WordPress 3.o-RC3-15241 release is used in video. *(see screenshot below)*

[<img class="size-full  alignnone wp-image-51399" src="http://cdn.devilsworkshop.org/files/2010/06/wordpress-3-easter-egg-hunt.png" alt="" width="548" height="283" />][1]

For easter egg to be present in video, easter egg must be introduced in WordPress revision <= 15241. This lead me to check changes in code between 15241 and its previous revisions. WordPress 3.0-RC2 has revision @15204. I ran a simple SVN command to get code difference between these two revisions like below&#8230;

<pre><code class="no-highlight">svn diff http://core.svn.wordpress.org/@15204 http://core.svn.wordpress.org/@15241 &gt; wp-egg.patch</code></pre>

I opened ***wp-egg.patch*** file in vim for ease of readability but after checking codes for long time, I couldn&#8217;t find any egg to feed my hunger! <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

### #3 &#8211; Easter egg must be on screens/features shown in Video

Backtracking to words by Matt, I started video again N-th time, this time exploring screens/features highlighted in Video. If easter egg is present in video, then it must be one of screen shown in video where we can discover it!

Again, I couldn&#8217;t find anything after struggling a lot with post-editor, new centralize update option, custom menu, custom background, etc stuff shown in video. I do believe that easter egg must *not* be in any theme related file/feature. As themes, even default twenty ten theme, cannot be considered to be part of WordPress core.

### Finally I have found something&#8230; But it must be a bug!

While exploring ***Dashboard >> update*** submenu options, I became curious about old way of upgrading plugin.

I jumped to ***Plugins*** menu. On page, where all plugins are listed, I noticed a new entry in drop-down menu called &#8220;upgrade&#8221;. I clicked on that &#8220;upgrade&#8221; option, without selecting any plugin from list and contradictory to my expectation, I was redirected to upgrade process!

**See following screenshots for details&#8230;**

** **<figure id="attachment_383" style="width: 497px;" class="wp-caption alignnone">

****[<img class="size-full wp-image-383" src="http://cdn.devilsworkshop.org/files/2010/06/Plugins-WordPress.png" alt="" width="497" height="495" />][2]****<figcaption class="wp-caption-text">Clicking "Upgrade" without selecting any plugin from list</figcaption></figure> <figure id="attachment_384" style="width: 590px;" class="wp-caption alignnone">****[<img class="size-large wp-image-384" src="http://cdn.devilsworkshop.org/files/2010/06/Upgrade-Plugins-WordPress-590x250.png" alt="" width="590" height="250" />][3]****<figcaption class="wp-caption-text">Upgrade Plugin Process ran without a plugin name</figcaption></figure> 

** **

**Why this doesn&#8217;t seem to be an easter egg?**

As bulk upgrade option is introduced in WordPress 3.0, to me it seems a validation bug.

When you select other options like activate/deactivate/delete, without selecting a plugin from list, nothing happens. I guess with newly introduced upgrade option, this check is missing.

Also, if you look at <a href="http://wpveda.com/video-wordpress-easteregg-on-post-revision-feature/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/video-wordpress-easteregg-on-post-revision-feature/', 'previous easter egg which pops-up on self-comparison']);" >previous easter egg which pops-up on self-comparison</a>, this bug looks too simple to be assumed as easter egg.

I believe, the easter egg must be more whacky and stylish in nature! 😉

By the way, if you find easter egg yourself, please let us know!

 [1]: http://cdn.devilsworkshop.org/files/2010/06/wordpress-3-easter-egg-hunt.png
 [2]: http://cdn.devilsworkshop.org/files/2010/06/Plugins-WordPress.png
 [3]: http://cdn.devilsworkshop.org/files/2010/06/Upgrade-Plugins-WordPress.png
