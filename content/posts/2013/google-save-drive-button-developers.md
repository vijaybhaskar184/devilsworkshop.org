---
title: Google introduces “Save to Drive” Button for Developers
author: adityakane
date: 2013-05-11
excerpt: Google introduces a new "Save to Drive" button for web developers which will allow website visitors to save images, documents and files on their Drive account automatically.
url: /google-save-drive-button-developers/
dsq_thread_id:
  - 3354363334
categories:
  - Reviews
tags:
  - Developers
  - Google Drive
---
If you are a web developer than Google has created something very useful for you. It is the &#8220;Save to Drive&#8221; button which can be used on your webpage. This button allows users to save a document or image right into their Google Drive.

<p style="text-align: center;">
  <a href="http://cdn.devilsworkshop.org/files/2013/05/Save-to-Drive-Button.png"><img class="aligncenter size-full wp-image-74008" style="border: 2px solid black;" title="Save to Drive Button from Google Drive" alt="Save to Drive - Button" src="http://cdn.devilsworkshop.org/files/2013/05/Save-to-Drive-Button.png" width="549" height="383" /></a>
</p>

### How &#8220;Save to Drive&#8221; button works?

It really requires a developer to only post a small amount of script and HTML code. Basically copy-paste the code below into your webpage. (Reproduced from <a href="http://googledevelopers.blogspot.in/2013/05/an-easier-way-to-save-files-to-google.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://googledevelopers.blogspot.in/2013/05/an-easier-way-to-save-files-to-google.html', 'here']);" >here</a>)

<pre><code class="json">&lt;script src="https://apis.google.com/js/plusone.js"&gt;&lt;/script&gt;
&lt;div class="g-savetodrive"
 data-filename="My Statement.pdf"
 data-sitename="My Company Name"
 data-src="/path/to/myfile.pdf"&gt;
&lt;/div&gt;</code></pre>

For more advanced options you can also use <a href="https://developers.google.com/drive/savetodrive#javascript_api" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://developers.google.com/drive/savetodrive#javascript_api', 'Google Drive JavaScript API']);" >Google Drive JavaScript API</a>.

### &#8220;Save to Drive&#8221; from a user perspective

For users this is going to be a great idea. I already use [their Chrome extension to save images and webpages on Google Drive][1] whenever I need to save a print-out of a ticket or even keep an image stored.

With Google Drive syncing on phone and other platform it makes sense for webmasters to integrate it onto their site.

I am not a developer but I would love hear if someone is bringing Google Drive&#8217;s &#8220;Save to Drive&#8221; as a WordPress plugin? That would be hugely useful.

What are your views on &#8220;Save to Drive&#8221; button? Will you have this on your website? Do drop in your comments.

 [1]: http://devilsworkshop.org/news/google-drive-introduces-save-image-drive-extension-adding-comments-images/69169/ ""Save Image to Drive" Chrome Extension allows users to save images and webpages on their Google Drive account."
