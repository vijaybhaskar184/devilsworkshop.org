---
title: 'Hide Complete Orkut Profile! [New Orkut Bug]'
author: rahul286
date: 2008-03-12
url: /hide-complete-orkut-profile-new-orkut-bug/
views:
  - 4083
dsq_thread_id:
  - 2946466332
categories:
  - News
tags:
  - Bing
  - Firefox
  - Google
  - 'Tips &amp; Hacks'
---
**<span style="font-size: small">Important Update:</span> This is fixed NOW. So I am closing comments for this post**

* * *Long time back I wrote about 

[hiding your profile name on orkut][1]. Yes it was something to write about as by default you can not left your orkut profiles&#8217; first and last name field empty.</p> 

Now comes a simple bug which hides complete orkut profile as shown below&#8230;

[<img class="wp-image-53878" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/03/invisible-orkut-profile-thumb.jpg" border="0" alt="invisible orkut profile" width="484" height="232" />][2]

**\# Steps To Hide: **

  1. Go to Orkuts <a href="http://www.orkut.com/MyApps.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/MyApps.aspx', 'manage stuff']);" >manage stuff</a> page or click <a href="http://www.orkut.com/MyApps.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/MyApps.aspx', 'here']);" >here</a>.
  2. You will see a **URL** field on that page. Enter **http://oa.addons.googlepages.com/hideme.xml** in that field.
  3. Press Add button. That it!

Here comes screenshot&#8230;

[<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/03/hide-orkut-profile-thumb.jpg" border="0" alt="Hide Orkut Profile" width="485" height="279" />][3]

**\# Steps To UnHide: *(works in <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'firefox 2.x']);" >firefox 2.x</a> only)***

  1. Go to Orkuts <a href="http://www.orkut.com/MyApps.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/MyApps.aspx', 'manage stuff']);" >manage stuff</a> page or click <a href="http://www.orkut.com/MyApps.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/MyApps.aspx', 'here']);" >here</a>.
  2. You will see a **My Feeds **section at the bottom of that page.
  3. Click the **remove **button next to feed we have added above!

Here comes screenshot&#8230;

[<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/03/unhide-orkut-profile-thumb.jpg" border="0" alt="UnHide Orkut Profile" width="500" height="129" />][4]

**\# Technical Details**

If you look at source of <a href="http://oa.addons.googlepages.com/hideme.xml" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://oa.addons.googlepages.com/hideme.xml', 'hideme.xml']);" >hideme.xml</a> you can see **title **field have a script tag!

<p class="code">
  <title><script>prompt(&#8216;Hi&#8217;,&#8217;Hello&#8217;)</script></title>
</p>

Next all contents are there if you look at source code of hidden profile pages, then&#8230;

**>> Here is what exactly went wrong:**

  * First thing **feeds** have no restriction on their **title** length.
  * On profile pages orkut shows feeds added to that account in **left sidebar**.
  * Now left sidebar is of fixed width so orkut has to truncate long feed titles. So if feed title is longer than **13 character**, then only first 13 character is displayed from feed title followed by ellipsis [&#8230;]
  * So in <a href="http://oa.addons.googlepages.com/hideme.xml" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://oa.addons.googlepages.com/hideme.xml', 'hideme.xml']);" >hideme.xml</a> case first 13 characters are &#8211; **<script>promp**
  * Now while parsing browser encounters a **<script>** tag but no matching **</script>** tag and thus HTML source rendering stops in left sidebar only. Thus main portion of profile is not parsed at all!

**>> Solution:**

  * A very simple but highly costly solution is too validate feeds when user adds them! This I guess will not be acceptable by user as well due to delay caused by validations. Also while working at orkutfeeds I see today&#8217;s valid feed may become invalid tomorrow and so vice-versa!
  * So next solution is to do **HTML entity escape** on selected feed title portion as there is nothing wrong is truncating long feed title.
  * In PHP this can be easily achieved using a function <a href="http://in2.php.net/htmlspecialchars" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://in2.php.net/htmlspecialchars', 'htmlspecialchars']);" >htmlspecialchars</a>. I hope there must be an equivalent in ASP also.

**>> Implications**

  * As you can manage your stuff only this is not serious as of now!
  * But use of script tag in title field suggest somebody discovered this bug while trying to find a XSS hole.
  * Now I guess orkut is lucky this time as truncation saved them. Otherwise this could have been ground for a perfect XSS attack! May be it is&#8230; 😉

**Credits: **<a href="http://orkutaddons.blogspot.com/2008/03/hide-your-orkut-profile.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://orkutaddons.blogspot.com/2008/03/hide-your-orkut-profile.html', 'Orkut Addons']);" >Orkut Addons</a> blog by <a href="http://orkutaddons.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://orkutaddons.blogspot.com/', 'Bean']);" >Bean</a>!

 [1]: http://devilsworkshop.org/2007/02/24/hide-your-orkut-profile-name-again/
 [2]: http://cdn.devilsworkshop.org/files/2008/03/invisible-orkut-profile.jpg
 [3]: http://cdn.devilsworkshop.org/files/2008/03/hide-orkut-profile.jpg
 [4]: http://cdn.devilsworkshop.org/files/2008/03/unhide-orkut-profile.jpg
