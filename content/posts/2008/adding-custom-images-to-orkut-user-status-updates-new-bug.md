---
title: 'Adding Custom Images to Orkut User Status Updates! [New Bug]'
author: rahul286
date: 2008-06-23
url: /adding-custom-images-to-orkut-user-status-updates-new-bug/
views:
  - 1893
dsq_thread_id:
  - 2947090362
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Hacking
  - Social Media
  - 'Tips &amp; Hacks'
---
### **Update: **This bug is fixed now. Details are [here][1]. I am closing comments to avoid unnecessary comments.

* * *A bug in orkut let you add custom images to Orkut&#8217;s status update feature as shown below…</p> 

[<img class="wp-image-51244" style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/06/image-thumb42.png" border="0" alt="image" width="510" height="172" />][2]

As you can see <a href="http://www.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/', 'OrkutFeeds logo']);" >OrkutFeeds logo</a> in above screenshot is not a standard smiley which orkut users can add as part of their status updates messages.

### Here are steps to to use this bug…

1. Go to your orkut profile and find status update field. Click on edit button…

2. Next put code shown below in it and click update.

`<img<br />
src="http://img4.orkut.com/img/smiley/../../images/medium/607105044/71300207/pt.jpg">`

Above will add <a href="http://www.orkutfeeds.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkutfeeds.com/', 'OrkutFeeds logo']);" >OrkutFeeds logo</a>. Now to add image of your choice…

  * It must be on orkut.
  * It must be on orkuts image server ex: img4.orkut.com, img3.orkut.com

Now here is the simplest way to put an image on orkuts image server. Upload any image as your profile display-pic or community pic and it will go on orkuts image server of our interest. *(**Note: **Uploading to community is recommended)*

Once you find image you are looking for on say orkut community, get its URL. Firefox users can simply right-click on an image and select **Copy Image Location **option from context menu. [**Note:** this will not work on profile pictures.]

[<img style="border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px" src="http://cdn.devilsworkshop.org/files/2008/06/image-thumb43.png" border="0" alt="image" width="412" height="316" />][3]

Now once you have URL where host name is like img4.orkut.com copy entire path from first slash (/) onwards.

**Ex.**

For URL:

<pre><code class="no-highlight">http://img2.orkut.com/&lt;strong>images/mittel/1203938171/19587001.jpg&lt;/strong></code></pre>

Copy only:

<pre><code class="no-highlight">images/mittel/1203938171/19587001.jpg</code></pre>

Now paste copied part between :

<pre><code class="no-highlight">&lt;strong>&lt;img src=”http://img4.orkut.com/img/smiley/../../   &lt;/strong>and   &lt;strong>”&gt;&lt;/strong></code></pre>

So final code will be**:**

<pre><code class="no-highlight">&lt;strong>&lt;img src=”http://img4.orkut.com/img/smiley/../../images/mittel/1203938171/19587001.jpg”&gt;&lt;/strong></code></pre>

You can put anything before and after final codes. Those who know HTML can easily recognize this img tag.

Copying profile picture requires opening HTML source code or using <a href="https://addons.mozilla.org/en-US/firefox/addon/1853" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/1853', 'Backgroundimage Saver']);" >Backgroundimage Saver</a> addon (<a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'firefox']);" >firefox</a> only).

### Technical Details…

Some of you have noticed strange /../.. in URL. This is a standard hacking technique known as <a href="http://en.wikipedia.org/wiki/Directory_traversal" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Directory_traversal', 'Directory Traversal attack']);" >Directory Traversal attack</a>. The goal of this attack is to order an application to access a computer file that is not intended to be accessible. More details about this technique are <a href="http://en.wikipedia.org/wiki/Directory_traversal" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Directory_traversal', 'here']);" >here</a>.

Now although directory traversal is not so sever thing, its presence may catch eyes of hacker community. As always in past, this may lead to a new XSS hole on orkut. Strangely in my analysis I have found many HTML tags are allowed in status update filed than desired from security point of view!

*(Credit: The bug is discovered by <a href="http://www.orkut.co.in/Profile.aspx?uid=14289564746886969717" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.co.in/Profile.aspx?uid=14289564746886969717', 'Pranav Pareek']);" >Pranav Pareek</a>)*

 [1]: http://devilsworkshop.org/2008/07/03/end-of-orkuts-status-update-message-image-hack/
 [2]: http://cdn.devilsworkshop.org/files/2008/06/image48.png
 [3]: http://cdn.devilsworkshop.org/files/2008/06/image49.png
