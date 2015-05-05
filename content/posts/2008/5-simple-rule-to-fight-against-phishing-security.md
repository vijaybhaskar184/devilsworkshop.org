---
title: '5 Simple Rules To Fight Against Phishing [Security]'
author: rahul286
date: 2008-05-20
url: /5-simple-rule-to-fight-against-phishing-security/
views:
  - 284
dsq_thread_id:
  - 2947089610
categories:
  - Tips
tags:
  - Bing
  - Firefox
  - Gmail
  - Google
  - Internet
  - 'Tips &amp; Hacks'
---
<img class="wp-image-51869" style="border-right: 0px;border-top: 0px;border-left: 0px;border-bottom: 0px" src="http://cdn.devilsworkshop.org/files/2008/05/image25.png" border="0" alt="Phishing" width="200" height="204" align="right" /> I often receive phishing emails, mostly claiming to be from PayPal, ICICI or similar sites where money involved. Yesterday, I received an email claiming to be from PayPal. Of course, I didn&#8217;t fall for it, but it looked so genuine that I thought about sharing few simple rules which I follow for my own safety.

### Rule 0: Be Skeptical

Please remember, your credit-card and other banking information such as login ID, passwords, ATM PIN, etc are very sensitive data. So always be skeptical when someone ask them to enter it.

Don&#8217;t look at <span style="font-style: italic"><strong>why</strong></span> they are asking your data, just care about <span style="font-style: italic"><strong>what</strong></span> data they are asking!

### Rule 1: Always Look at Link URL before Clicking

Thanks to HTML, any text can point to any website. Ex: <a href="http://www.vatican.va/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.vatican.va/', 'Britney Spears Naked']);" >Britney Spears Naked</a>. *Don&#8217;t shout me if you led to Vatican Site&#8230; 😉*

Ok now how to look at the link URL before clicking it?

Most standard browsers show actual link URL in status bar when you point your mouse to the linked text.

As shown below, if you just point your mouse to <span style="font-style: italic">Get Verified</span> text, you can see a link <span style="font-style: italic">not</span> pointing to paypal.com.

<img src="http://cdn.devilsworkshop.org/files/2008/05/look-at-link-url-before-clicking.jpg" alt="Look at Link URL before Clicking.jpg" width="480" height="217" />

Make this URL checking part of your habit as this will save you from lots of troubles in future.

One more example I would like to share is: <a href="http://www.microsoft.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.microsoft.com/', 'http://www.yahoo.com']);" >http://www.yahoo.com</a>. If you noticed it, its pointing to Microsoft&#8217;s website. Yes, text which looks like URL itself, can point to any other URL in background!

### Rule 2: Check Email Headers for Actual Sender

Most people don&#8217;t know that **FROM** field in emails can be changed by sender. I can send you email from bill@microsoft.com. The technique is called email forging and is used in almost all phishing emails.

So how to check if email you received is not forged? Most trusted method is to check email headers. But email headers are quite long and complex, so checking them manually is pain. Also technique differs slightly for each email service providers.

I use Gmail and on Gmail things are always easy. So whenever you receive a mail on Gmail, look for show details option.

<img src="http://cdn.devilsworkshop.org/files/2008/05/gmail-show-details-option-1.jpg" alt="Gmail - show details option-1.jpg" width="470" height="53" />

When you click on it, first line will be expanded and you will see a <span style="font-style: italic"><strong>mailed-by</strong></span> line as shown below&#8230;

<img src="http://cdn.devilsworkshop.org/files/2008/05/gmail-mailed-by-info-1.jpg" alt="Gmail - mailed-by info-1.jpg" width="389" height="146" />

Now this is quite different compare to ***paypal.com. ***Moreover a ***signed-by*** line is completely missing! Emails by large organizations also have a ***signed-by ***line which protect them against misuse of their domain name. Now have a look at a genuine email from PayPal&#8230;

<img src="http://cdn.devilsworkshop.org/files/2008/05/gmail-show-option-a-genuine-mail.jpg" alt="Gmail - show option - a genuine mail.jpg" width="419" height="150" />

If you are on Gmail, use can use this **show details** option to verify sender of email. I don&#8217;t know about its counterpart on Yahoo or Hotmail, but if you know it, please share.

### Rule 3: Use Google Toolbar or any other anti-phishing technique/filter

Yes, <a href="http://www.google.com/tools/firefox/toolbar/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.google.com/tools/firefox/toolbar/', 'Google Toolbar']);" >Google Toolbar</a> is not just for making your life easier while using Googles&#8217; services. It comes with built-in anti-phishing filters which warns you whenever you open malicious sites.

Following is screenshot of Google Toolbar warning when I opened site pointed by <span style="font-style: italic">Get Verified</span> text as discussed in Rule 1.

<img src="http://cdn.devilsworkshop.org/files/2008/05/google-toolbar-suspeted-web-forgery-warning.jpg" alt="Google Toolbar - Suspeted Web Forgery Warning.jpg" width="449" height="322" />

Google Toolbar gave me almost 100% protection against phishing sites. Still if you just don&#8217;t like Google Toolbar, you can still use Google search to find a good anti-phishing filter for free! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

### Rule 4: Use a secure browser like Firefox

All major services authenticate users over secure channels. Even services which uses unsecure channels normally, process login pages via secure channels. Some famous examples, Gmail, Facebook, Orkut, Yahoo. While banking sites are normally use secure channels through-out the session.

A small difference between secure and unsecure channels is, secure URL stats **HTTPS** while unsecure starts with **HTTP**. Note the missing **&#8216;S&#8217;. ***(<a href="http://en.wikipedia.org/wiki/Https" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Https', 'Read more on HTTPS']);" >Read more on HTTPS</a>)*

Now when you encounter a genuine login page in browser like <a href="http://www.spreadfirefox.com/node&id=199011&t=1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.spreadfirefox.com/node&id=199011&t=1', 'Firefox']);" >Firefox</a>, you can note following changes&#8230;

  * Navigation bar background changes to yellow. Also a lock icon is shown indicating a secure site. Here you should also check domain name, which we often overlook.

<img src="http://cdn.devilsworkshop.org/files/2008/05/firefox-navigation-bar-2.jpg" alt="Firefox - Navigation Bar-2.jpg" width="435" height="56" />

  * Status bar also shows lock icon along with domain name for which digital certificate is issued.

<img src="http://cdn.devilsworkshop.org/files/2008/05/send-money-money-transfer-paypal.jpg" alt="Send Money, Money Transfer - PayPal.jpg" width="454" height="60" />

These two things can not be forged so look at them whenever in doubt.

### Rule 5: Report Phishing&#8230;

Great you saved your ass. Its time to save others&#8217; now&#8230; 😉

Gmail users can simply use Report Phishing option as shown below.

<img src="http://cdn.devilsworkshop.org/files/2008/05/gmail-report-phishing-1.jpg" alt="Gmail -Report Phishing-1.jpg" width="341" height="212" />

Rest if you have free time and energy, you can <a href="http://www.us-cert.gov/nav/report_phishing.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.us-cert.gov/nav/report_phishing.html', 'report phishing to authorities']);" >report phishing to authorities</a>.

This rule is important as anti-phishing filters uses sites user report as phishing. So more you contribute, better security we all get&#8230; <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

Remember, phishing is a serious crime and creating a phishing site can easily put you behind the bars. On the other hand, if you become victim of phishing somehow, you can not sue your bank or service provider for compensation. They have made it clear in their terms of service (ToS) which nobody reads!

Its your responsibility to fight for yourself. Others at the most can help you. Don&#8217;t expect more! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**More info: **<a href="http://en.wikipedia.org/wiki/Phishing" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Phishing', 'Wikipedia']);" >Wikipedia</a> | <a href="http://computer.howstuffworks.com/phishing.htm" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://computer.howstuffworks.com/phishing.htm', 'Howstuffworks']);" >Howstuffworks</a>

*(Photo Credit: *<a href="http://www.thesecryption.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.thesecryption.com/', 'http://www.thesecryption.com/']);" ><em>http://www.thesecryption.com/</em></a>)
