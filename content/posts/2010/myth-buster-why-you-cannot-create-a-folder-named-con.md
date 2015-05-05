---
title: '[Myth Buster] Why you cannot create a folder named ‘CON’'
author: anshuldixit
date: 2010-07-07
url: /myth-buster-why-you-cannot-create-a-folder-named-con/
views:
  - 1305
dsq_thread_id:
  - 2947111860
categories:
  - Analysis
tags:
  - Email
  - folders
  - 'Tips &amp; Hacks'
  - Windows Tips and Tricks
---
Today I got an interesting mail that claims

> *nobody can create a FOLDER anywhere on the computer which can be named as &#8220;CON&#8221;.  
> This is something pretty cool&#8230;and unbelievable&#8230; At Microsoft the whole Team, including Bill Gates, couldn&#8217;t answer why this happened!  
> TRY IT NOW !!*

This is not the first time I got this mail, and I’m sure most of you must have received it too. If you try creating a folder named CON, as the mail claims, it’ll get renamed automatically to New Folder. But there is no mystery behind this, and the team at Microsoft very well knows the reason for this. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

### Why is it not possible to create a folder named CON?

Before we proceed further, let me tell you a small secret you can’t even create a folder named PRN, AUX, NUL and many others.

The reason you can’t create a folder with these names is because these are reserved keywords used by DOS. The below screen-shot taken from Microsoft’s website shows a list of reserved keywords in DOS.

[<img class="wp-image-52497" style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/07/reservedkeywords_thumb.jpg" border="0" alt="reserved keywords" width="392" height="272" />][1]

If you try creating a folder with any of these names, the name automatically changes back to the default “New Folder”. And this is what has caused the confusion. Instead of automatically renaming the folder, had an explanatory warning message popped up, we would have had one less hoax mail to deal with. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

### You can actually create a folder named CON !!

There is actually a way to create a folder named CON, or any other name from the above list of reserved keywords. This can be done through command prompt. But it is advisable not to do so, as it might result in your system becoming unstable.

  * To create a folder named CON, go to command prompt and type “*MD \.D:CON*” (without quotes). This will create a folder named CON in D:. See the screenshot of my machine.

[<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/07/foldercon_thumb.jpg" border="0" alt="folder con" width="633" height="219" />][2]

  * You cannot delete this folder by normal delete. To delete the folder, again go to command prompt and type “RD \.D:CON” without quotes.
  * I’ll again recommend you not to try this on your system, as it might become unstable. In case you can’t stop yourself, don’t do it on a drive on which Windows is installed (generally C:).

Next time when you get such a mail, reply to the sender and direct him or her to this page. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

Have you ever come across such hoax mails? Do let us know what do you do to tackle them through your comments.

(via <a href="http://www.knowledgehub.co.in/search/label/Hoax%20Mails" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.knowledgehub.co.in/search/label/Hoax%20Mails', 'knowledgehub']);" >knowledgehub</a>)

 [1]: http://cdn.devilsworkshop.org/files/2010/07/reservedkeywords.jpg
 [2]: http://cdn.devilsworkshop.org/files/2010/07/foldercon.jpg
