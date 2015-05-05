---
title: How To View Passwords Hidden Behind Asterisk Character
author: himanshuyadav
date: 2010-06-08
url: /how-to-view-passwords-hidden-behind-asterisk-character/
views:
  - 2409
dsq_thread_id:
  - 2947110986
categories:
  - Tips
tags:
  - Asterisk
  - Passwords
  - 'Tips &amp; Hacks'
  - Tutorial
  - Tutorials
---
Whenever you fill your credentials while login into your online account, due to security reasons it shows only asterisk characters instead of your original password.

In browsers there is a feature to save your passwords. It automatically fills up the login credentials whenever you opened up the login page. But in this case also you can’t see the password of your account. However you can see the password by visiting the options panel of your browser.

Read: [Top 5 free softwares to Reveal your Asterisk Hidden Password][1]

Now consider the scenario where you are using public computer where your browser can&#8217;t help you by reminding you the passwords. Many web services such as online banking or mail services come with security login feature (https), these services give you only few chance (3 to 5 times) to enter the correct password. If you fail to do so then it may be possible that your account get banned or locked.

If at first time you know what you password are entering inside the login field, you can easily avoid bad situations. The easiest way to know what is hidden behind asterisk character is using bookmarklet. I found a nice bookmarklet on <a href="http://www.hacktrix.com/2-bookmarklets-to-view-passwords-hidden-behind-those-asterisks" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.hacktrix.com/2-bookmarklets-to-view-passwords-hidden-behind-those-asterisks', 'Hacktrix']);" >Hacktrix</a> blog. Here I am explaining one of it.

Drag the below given bookmarklet into your bookmark bar. Below given screenshot describes you how to drag it.

[**View Passwords**][2]

**<a rel="attachment wp-att-26361" href="http://devilsworkshop.org/how-to-view-passwords-hidden-behind-asterisk-character/password-bookmarklet/"><img class="alignnone size-full wp-image-26361" title="password-bookmarklet" src="http://cdn.devilsworkshop.org/files/2010/06/password-bookmarklet.png" alt="" width="440" height="300" /></a>**

Now visit any webpage in which login is required. For example, let&#8217;s say Gmail.com. Enter your [Gmail ID][3] and [password][4]. Now click on the bookmarklet on the bookmark bar which you dragged in previous step.

<p style="text-align: center;">
  <a rel="attachment wp-att-26362" href="http://devilsworkshop.org/how-to-view-passwords-hidden-behind-asterisk-character/gmail-login/"><img class="size-full wp-image-26362 aligncenter" title="gmail-login" src="http://cdn.devilsworkshop.org/files/2010/06/gmail-login.png" alt="" width="330" height="392" /></a>
</p>

A small dialog box appears displaying the password of your account. Here my password is *toxicbird. *Don&#8217;t try to login with this password in my account. Obviously it won&#8217;t work. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<a rel="attachment wp-att-26364" href="http://devilsworkshop.org/how-to-view-passwords-hidden-behind-asterisk-character/gmail-password-2/"><img class="alignnone size-full wp-image-26364" title="gmail password" src="http://cdn.devilsworkshop.org/files/2010/06/gmail-password1.png" alt="" width="583" height="272" /></a>

That&#8217;s how you can easily check the password behind asterisk characters. However this method is limited to web pages only. If you want to check the asterisk characters of tools such as Filezilla, FireFTP etc then check out our previous article [Top 5 Free Softwares to Reveal your Asterisk hidden password][1]. If you are a JavaScript geek and love Firefox you might like reading up on [How to use Java Script for unmasking passwords on Firefox][5].

What do you think about services that unmasking passwords? Have you ever had a account blocked because of entering the wrong password 2-3 times inadvertently? Do let us know through your comments.

 [1]: http://devilsworkshop.org/top-5-free-softwares-to-reveal-your-asterisk-hidden-password/
 [2]: javascript:(function(){var%20s,F,j,f,i;%20s%20=%20"";%20F%20=%20document.forms;%20for(j=0;%20j<F.length;%20++j)%20{%20f%20=%20F[j];%20for%20(i=0;%20i<f.length;%20++i)%20{%20if%20(f[i].type.toLowerCase()%20==%20"password")%20s%20+=%20f[i].value%20+%20"\n";%20}%20}%20if%20(s)%20alert("Passwords%20in%20forms%20on%20this%20page:\n\n"%20+%20s);%20else%20alert("There%20are%20no%20passwords%20in%20forms%20on%20this%20page.");})();
 [3]: http://devilsworkshop.org/domain-hijacking-menace-is-still-on-flaws-in-gmail/ "Gmail ID"
 [4]: http://devilsworkshop.org/5-best-password-managers-to-manage-your-passwords-securely/ "password"
 [5]: http://devilsworkshop.org/javascript-to-unmask-password-on-web-pages/
