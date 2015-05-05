---
title: How to add Chrome Frame to your website?
author: adityakane
date: 2009-09-24
excerpt: |
  Today I am writing about how to get Chrome Frame BHO into Internet Explorer. I am also writing about a comparative test of the IE8 browser with and without Chrome Frame.
  How to get 'Chrome Frame prompt' on your webpage?
  
  Simply include the following script within the body of the webpage.
url: /how-to-add-chrome-frame-to-your-website/
robotsmeta:
  - index,follow
views:
  - 725
dsq_thread_id:
  - 2947102099
categories:
  - Tips
tags:
  - 'Tips &amp; Hacks'
---
Today I am writing about how to get Chrome Frame BHO into Internet Explorer. I am also writing about a comparative test of the IE8 browser with and without Chrome Frame.

### How to get &#8216;Chrome Frame prompt&#8217; on your webpage?

Simply include the following script within the body of the webpage.

<pre><code style="font-family: monospace;color: #007000;font-size: 9pt;background-color: #fafafa;line-height: 15px;margin-top: 1em;margin-right: 0px;margin-bottom: 0px;margin-left: 0px;padding: 0.99em;border: 1px solid #bbbbbb">&lt;span style="color: #000000">&lt;body&gt;&lt;/span>&lt;span style="color: #000000">
&lt;script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"&gt; &lt;/span>&lt;span style="color: #000000">&lt;/script&gt;&lt;/span>&lt;span style="color: #000000">

&lt;/span>&lt;span style="color: #000000">&lt;div&lt;/span>&lt;span style="color: #000000"> &lt;/span>&lt;span style="color: #000000">id&lt;/span>&lt;span style="color: #000000">=&lt;/span>&lt;span style="color: #000000">"placeholder"&lt;/span>&lt;span style="color: #000000">&gt;&lt;/div&gt;&lt;/span>&lt;span style="color: #000000">

&lt;/span>&lt;span style="color: #000000">&lt;script&gt;&lt;/span>&lt;span style="color: #000000">
 &lt;/span>&lt;span style="color: #000000">CFInstall&lt;/span>&lt;span style="color: #000000">.&lt;/span>&lt;span style="color: #000000">check&lt;/span>&lt;span style="color: #000000">({&lt;/span>&lt;span style="color: #000000">
    node&lt;/span>&lt;span style="color: #000000">:&lt;/span>&lt;span style="color: #000000"> &lt;/span>&lt;span style="color: #000000">"placeholder"&lt;/span>&lt;span style="color: #000000">,&lt;/span>&lt;span style="color: #000000">
    destination&lt;/span>&lt;span style="color: #000000">:&lt;/span>&lt;span style="color: #000000"> &lt;/span>&lt;span style="color: #000000">"http://www.waikiki.com"&lt;/span>&lt;span style="color: #000000">
  &lt;/span>&lt;span style="color: #000000">});&lt;/span>&lt;span style="color: #000000">
&lt;/span>&lt;span style="color: #000000">&lt;/script&gt;&lt;/span>&lt;span style="color: #000000">
&lt;/span>&lt;span style="color: #000000">&lt;/body&gt;&lt;/span></code></pre>

Any one using Internet Explorer looks up the page with this script, they will get a prompt for downloading Chrome Frame as show in image below.

<img class="alignnone size-full wp-image-14815" style="border: 1px solid black" src="http://cdn.devilsworkshop.org/files/2009/09/chromeframe2.PNG" alt="chromeframe2" width="550" height="223" />

<span style="font-weight: normal">Once the user clicks on &#8220;Get Google Chrome Frame&#8221; it automatically downloads the Chrome Frame BHO as a plug-in for Internet Explorer.</span>

<span style="font-weight: normal">This basically allows Internet Explorer to use Chrome&#8217;s rendering engine for better and faster performance. Chrome starts running inside your Internet Explorer.<br /> </span>

### <a href="http://acid3.acidtests.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://acid3.acidtests.org/', 'The Acid 3 Test']);" >The Acid 3 Test</a>

I have Internet Explorer 8 which is the the latest from Microsoft and decided to test it with the <a href="http://acid3.acidtests.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://acid3.acidtests.org/', 'Acid 3 test']);" >Acid 3 test</a>. This was to check how well it conformed to web standards for Document Object Model and Java Script.

Acid 3 Test with IE8 without the Chrome Frame plug-in.

<img class="alignnone size-full wp-image-14811" src="http://cdn.devilsworkshop.org/files/2009/09/acid3testIEfail.PNG" alt="acid3testIEfail" width="550" height="415" />

It is pretty clear that my Internet Explorer 8 failed the test. <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

Acid 3 Test with IE8 with the Chrome Frame plug-in.

<img class="alignnone size-full wp-image-14813" src="http://cdn.devilsworkshop.org/files/2009/09/acid3testIEpass.PNG" alt="acid3testIEpass" width="550" height="415" />

Here my Internet Explorer Browser passed the Acid 3 test because of Chrome Frame. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

### How to let IE know when to switch over to Chrome?

For users the easiest way for switching over to Chrome Frame with Internet Explorer is to add &#8220;cf:&#8221; before &#8220;http://&#8221; on your address bar.

Example:  
<a href="http://acid3.acidtests.org/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://acid3.acidtests.org/', '']);" ></a>

> cf:http://acid3.acidtests.org/

For Developers all you need to do is just add this tag to the top of the page.

> <meta http-eqiv=&#8221;X-UA-Compatible&#8221; content=&#8221;chrome=1&#8243;>

The tag makes Internet Explorer switch over to Chrome Frame automatically.

Developers who are limiting the performance of HTML5 apps or Java Script to make their website more compliant with Internet Explorer do not need to do so any more. All they need to do is to tag their website for Chrome Frame.

The tag for Chrome Frame does not affect the performance of the website if you are not using Internet Explorer as browser.

Do remember this is still meant for testing purposes for developers. 😉

Link: <a href="http://code.google.com/chrome/chromeframe/developers_guide.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://code.google.com/chrome/chromeframe/developers_guide.html', 'Developers Guide for Chrome Frame']);" >Developers Guide for Chrome Frame</a>
