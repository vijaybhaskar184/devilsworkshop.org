---
title: JavaScript to Unmask Password on Web Pages!
author: rahul286
date: 2006-11-30
url: /javascript-to-unmask-password-on-web-pages/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/11/javascript-to-unmask-password-on-web.html
views:
  - 5701
dsq_thread_id:
  - 2946412435
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Internet Explorer
  - Javascript
  - Security
  - 'Tips &amp; Hacks'
  - Windows
---
If you ever come across a page like below, then this is for you!

<img class="wp-image-52629" src="http://cdn.devilsworkshop.org/files/2007/10/scrren1.jpg" />

U might have heard about <a href="http://www.snadboy.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.snadboy.com/', 'Sandboy&#8217;s Revelation']);" >Sandboy&#8217;s Revelation</a> who unmask password fields like this!

But Revelation works with only windows based application and fails with <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" >Firefox</a>! Once again thanks to open-source for <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" >Firefox</a>!

Now lets do it in Geekish way so it will work with all kinda browsers and of course independent of platform!

Here comes javascript which is tested on <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" >Firefox</a> & IE!

` javascript: alert(document.getElementById('Passwd').value); `

Just copy above code and paste it in ur browsers address bar (navigation bar or url bar).

![][1]

They press enter and you will see a prompt like this!

![][2]

Of course your password may be different!

There is one more similar script! This will change HTMLs <span style="font-weight: bold"><input></span> tags <span style="font-weight: bold">&#8220;type&#8221;</span> attribute from <span style="font-weight: bold">&#8220;password&#8221;</span> to <span style="font-weight: bold">&#8220;text&#8221;</span>!

` javascript: alert(document.getElementById('Passwd').type='text'); `

On hitting enter you will see a prompt, just ignore it and look at screen&#8230; The password field will be unmasked any now and look like this&#8230;

![][3]

The above script may fail on hotmail when opened in <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'firefox']);" >firefox</a>! But don&#8217;t worry, as you are in Devil&#8217;s Workshop!

Try following code in the same way! This does not work with antique IE 6.0 and with release of <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'firefox']);" >firefox</a> 2.0, I did not bothered to give IE 7.0 a try!

This will again prompt password like above!

` javascript: function getElementsByAttribute(oElm, strTagName, strAttributeName, strAttributeValue){ var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName); var arrReturnElements = new Array(); var oAttributeValue = (typeof strAttributeValue != "undefined")? new RegExp("(^|\s)" + strAttributeValue + "(\s|$)") : null; var oCurrent; var oAttribute; for(var i=0; i< ocurrent =" arrElements[i];" oattribute =" oCurrent.getAttribute" oattribute ="="> 0){ if(typeof strAttributeValue == "undefined" || (oAttributeValue && oAttributeValue.test(oAttribute))){ arrReturnElements.push(oCurrent);}}} return arrReturnElements; } alert(  getElementsByAttribute(document.body, "input", "type", "password")[0].value);`

And this will unmask password filed like above!

` javascript: function getElementsByAttribute(oElm, strTagName, strAttributeName, strAttributeValue){ var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName); var arrReturnElements = new Array(); var oAttributeValue = (typeof strAttributeValue != "undefined")? new RegExp("(^|\s)" + strAttributeValue + "(\s|$)") : null; var oCurrent; var oAttribute; for(var i=0; i< ocurrent =" arrElements[i];" oattribute =" oCurrent.getAttribute" oattribute ="="> 0){ if(typeof strAttributeValue == "undefined" || (oAttributeValue && oAttributeValue.test(oAttribute))){ arrReturnElements.push(oCurrent);}}} return arrReturnElements; } ;  alert(  getElementsByAttribute(document.body, "input", "type", "password")[0].type="text" ) ; `

Above scripts successfully tested on gmail, yahoo, hotmail, rediff login pages! Orkuts login pages have frames so the above may fail! In fireox you can also right-click on any frame and can open that frame separately in different window or tab and then can use any of above script!

Also any password field can be unmasked using DOM Inspector in firefox! Please don&#8217;t make false assumption that firefox is insecure! There is a feature called <span style="font-weight: bold">&#8220;master password&#8221;</span> in firefox! That will protect your passwords against all javascript, DOM Inspectors, etc!

Who needs revelation (at least for web pages) &#8230; Enjoi!!!

<span style="font-weight: bold">Related Link:</span>  
<a href="https://addons.mozilla.org/firefox/434/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://addons.mozilla.org/firefox/434/', 'Inspect Element with DOM Inspector']);" >Inspect Element with DOM Inspector</a>  
(Please note that the DOM Inspector must be installed. (Select &#8220;Developer Tools&#8221; during custom setup of <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" >Firefox</a>)

<a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Click here to download Firefox']);" >Click here to download Firefox</a><span style="font-weight: bold">!</span>

<span style="font-weight: bold">Credits:</span> Thanx to <a href="http://javascript.internet.com/snippets/getelementsbyattribute.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://javascript.internet.com/snippets/getelementsbyattribute.html', 'Robert Nyman for getElementsByAttribute']);" >Robert Nyman for getElementsByAttribute</a>! I wish a function like this should be included in standard!

 [1]: http://cdn.devilsworkshop.org/files/2007/10/screen2.jpg
 [2]: http://cdn.devilsworkshop.org/files/2007/10/screen3.jpg
 [3]: http://cdn.devilsworkshop.org/files/2007/10/screen4.jpg
