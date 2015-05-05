---
title: How To Optimize Your Website For Printers Using A Separate Stylesheet
author: everblogger
date: 2009-03-30
url: /how-to-optimize-your-website-for-printers-using-a-separate-stylesheet/
views:
  - 99
dsq_thread_id:
  - 2947096633
categories:
  - Tips
tags:
  - Blogging
  - Developers
  - Optimization
  - Webmaster-tips
  - Wordpress
---
First of all I would like to explain what I mean by **Optimizing a website for Printing** using following screenshot.

<img class="size-full wp-image-5280 alignnone" src="http://cdn.devilsworkshop.org/files/2009/03/scr-1.png" alt="A highly optimized website for printing" width="577" height="264" />

Optimizing a website for printing means removing the extra stuff like logos, forms, navigation links, advertising, blog rolls, flash widgets, etc from the website while printing and give a clean preview of your website.

We can do this with the help of CSS. In CSS itself we have many ways but the most easy way is to use **<link> **element and add specify print as value for media attribute.

` <link rel="stylesheet" href="filename.css" media="print" />`

In the above example, we declared that stylesheet **&#8220;filename.css&#8221;** should be used whenever media is print. Thus it will be used while printing the document only. These styles will have no effect on the display of the document when viewed using a monitor,  handheld or any other non-printing device.

**We have CSS files for 10 different kinds of media like&#8230;**

  1. all
  2. aural
  3. braille
  4. embossed
  5. handheld
  6. print
  7. projection
  8. screen
  9. tty
 10. tv

For Optimizing your website paste the code below in between **<head>** tag.

`<link rel="stylesheet" href="filename.css" media="print" />`

**Note:** You can change the** filename.css** to any file name you wish but don&#8217;t change the extension.

Now you have to code the CSS part. If you know CSS well you can code it yourself if you don&#8217;t just copy-paste this code.

`body {<br />
font-family: arial,helvetica,sans;<br />
font-size: 13px;<br />
background:fff;<br />
color:000;<br />
}<br />
// This makes the backgroud white and text to 13px with black color<br />
a,a:visited,a:link {<br />
color:#0000ff;<br />
text-decoration:none<br />
}<br />
// Do no underline links and hyperlinks in blue<br />
.noprint {<br />
display:none<br />
}<br />
// This will hide the items<br />
`  
Copy the code above and give it a file name and paste it in the head section like this

`<link rel="stylesheet" href="filename.css" media="print" />`** ******

### How to use the code:

If you want to hide a image or flash widget use this code

`<span class="noprint"><br />
<em></em><<em></em>!<em></em>-- The embedded code should be enclosed by these tags --<em></em>><em></em><br />
</span>`

And if you want to hide big items like navigation, ad space and all which are in **div tags** use this

`<div id="navigation" class="noprint">Content</div>`****

**Note: **Change navigation to your own id I mean which is used in site.

And if you want to give your users a option like &#8220;Print this page&#8221; use this code.

`<form><br />
<input type="button" value="Print this page" onClick="window.print()"><br />
</form>`

or simple print link like this

`<a href="#" onClick="window.print(); return false">Print this page</a>`

### Usage:

  1. Users can save ink in their printers as many useless elements won&#8217;t get printed anymore.
  2. Print stylesheet encourages users to take printout of your page for offline reading. This may increase your traffic.

Hope this tutorial helps all of you to improve your site.

* * *

*[**Editors Note:** This post is by <a href="http://pageplug.blogspot.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pageplug.blogspot.com', 'Kranthi']);" rel="dofollow">Kranthi</a>. He blogs on Devils Workshop only about blogging and website optimization **tips**. You can <a href="http://twitter.com/EverBlogger" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://twitter.com/EverBlogger', 'follow Kranthi on Twitter']);" >follow Kranthi on Twitter</a>.** ** *</p> 

*If you too like to [write][1] for Devils Workshop, please [check this][1]. Details about our [revenue sharing programs][1] are [here][1].]*

 [1]: http://devilsworkshop.org/join-dw/
