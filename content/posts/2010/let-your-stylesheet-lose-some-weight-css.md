---
title: 'Trim Your Stylesheet To Lose Some Weight [CSS Usage]'
author: huzaifadarbar
date: 2010-11-23
excerpt: 'In one of my previous article “Remove all unused CSS selector” I wrote about  how one can remove unused selector from his stylesheet using Dust-Me-Selectors, similarly I found an Addon which has few benefit over Dust me selectors. CSS Usage is a Mozilla extension which finds unused selectors and can be exported a new file. '
url: /let-your-stylesheet-lose-some-weight-css/
views:
  - 396
dsq_thread_id:
  - 2947115433
categories:
  - Tips
tags:
  - Birthday
  - Browsers
  - Firefox Addons
  - web design
---
<a rel="attachment wp-att-32595" href="http://devilsworkshop.org/let-your-stylesheet-lose-some-weight-css/css-stamp/"><img class="size-full wp-image-32595 alignright" title="css-stamp" src="http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png" alt="" width="188" height="188" /></a>In one of my previous article “[Remove all unused CSS selector][1]” I wrote about  how one can remove unused selector from his stylesheet using [Dust-Me-Selectors][1], similarly I found an Addon which has few benefit over Dust me selectors. **CSS Usage** is a Mozilla extension which finds unused selectors and can be exported in a new file.

## Steps to go about it :

  * Open the **Firebug** interface.
  * Select **CSS Usage** at extreme right of the Firebug interface.
  * Click **Scan** as shown in the below image.
  * Now you will find the selectors in Green and Red colors. **Green **and** Red** color indicates Seen and Unseen selectors in the stylesheet respectively.
  * Then you can click **export cleaned CSS **that exports the cleaned CSS in a new tab, copy it and edit it in your original stylesheet.

[<img style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border-width: 0px;" title="image" src="http://cdn.devilsworkshop.org/files/2010/11/image_thumb9.png" border="0" alt="image" width="584" height="301" />][2]

Paste it in your stylesheet and you will find “UNUSED” prefix  to the selectors in your file, where you can delete those selectors according to your specification.

[<img style="background-image: none; padding-left: 0px; padding-right: 0px; display: inline; padding-top: 0px; border-width: 0px;" title="image" src="http://cdn.devilsworkshop.org/files/2010/11/image_thumb10.png" border="0" alt="image" width="584" height="355" />][3]

If you have any ideas about similar stuff you can share it through the comments.

**Link : **<a href="https://addons.mozilla.org/en-US/firefox/addon/10704/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/en-US/firefox/addon/10704/', 'CSS Usage']);" >CSS Usage</a>.

Go to [Parent Post][4]

 [1]: http://devilsworkshop.org/remove-all-unused-css-selector-and-keep-your-stylesheet-clean/
 [2]: http://cdn.devilsworkshop.org/files/2010/11/image10.png
 [3]: http://cdn.devilsworkshop.org/files/2010/11/image11.png
 [4]: http://devilsworkshop.org/18-firefox-addons-web-designers/
