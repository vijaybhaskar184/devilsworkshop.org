---
title: 4 Ways To Scan Suspicious Files/Email Attachments Online Using Virus Total
author: rahul286
date: 2009-04-03
url: /4-ways-to-scan-suspicious-files-email-attachments-online-using-virus-total/
views:
  - 468
dsq_thread_id:
  - 2947096724
categories:
  - Reviews
tags:
  - Anti-Virus
  - Interesting Links
  - Internet
  - Online Tools
  - Software
  - 'Tips &amp; Hacks'
  - Windows
---
<a href="http://www.virustotal.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.virustotal.com/', '']);" ><img class="alignright size-full wp-image-5480" title="virustotal-logo" src="http://cdn.devilsworkshop.org/files/2009/04/virustotal-logo.png" alt="virustotal-logo" width="252" height="107" /></a>Many times we receive an email containing some attachments which look suspicious. You might have come across some unknown files in your USB pen drive. Such files gets created automatically when transfer data to/from your USB drive at public places colleges, cyber cafes, etc.

Having a good and updated antivirus program running on your PC is nice but its not wise to play with suspicious files, particularly when your system have important data. In such situations you can use an online service &#8211; VirusTotal.

### About VirusTotal

Virustotal is a free and independent service that analyzes suspicious files and try to detect viruses, worms, trojans, and all kinds of malware detected by other antivirus engines. They use multiple antivirus engines (**36** at the time of writing this post) to scan submitted files.

### Four Ways To Use VirusTotal

### #1. Online Uploader

This is what you will see on their homepage. A simple file upload form. Good options to use with suspicious files on your hard-drive or USB.

<img class="alignnone size-full wp-image-5479" style="border: 1px solid black;" title="virustotal-online-file-uploader" src="http://cdn.devilsworkshop.org/files/2009/04/virustotal-online-file-uploader.png" alt="virustotal-online-file-uploader" width="559" height="235" />

Just select a file and hit upload. Your file will be sent to their server for analysis.

<img class="alignnone size-full wp-image-5478" title="virus-total-file-upload-progress" src="http://cdn.devilsworkshop.org/files/2009/04/virus-total-file-upload-progress.png" alt="virus-total-file-upload-progress" width="296" height="179" />

If submitted file is large you will see upload progress bar as well.

Once file is uploaded, you will be redirected to analysis report page for that file. Here is an example <a href="http://www.virustotal.com/analisis/4ba7745103bb6fd5803007d21f3042d1" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.virustotal.com/analisis/4ba7745103bb6fd5803007d21f3042d1', 'report page']);" >report page</a>.

Scanning and reporting happens instantly in most cases! Reason will be explained shortly. 😉

### #2. Email Files As Attachment

You can use send files as email attachment to their email address: **scan@virustotal.com**. Write word **&#8220;SCAN&#8221;** *(without quotes)* in email subject line and keep body part of your email blank.

This is good option to use with email attachments you receive online. Just forward your email to **scan@virustotal.com**. Do not forget to edit subject line to &#8220;**SCAN**&#8221; and remove body-part completely. It will be foolish to download suspicious files to your PC and then upload again them to VirusTotal using way #1.

Only limitation of this way is you can not send files larger than **20MB**.

### #3. VirusTotal Uploader Tool *(for windows only)*

This is small utility, just 80KB in size, available for windows only.

After installing this, you can directly submit any file to VirusTotal using context-menu as shown below.

<img class="alignnone size-full wp-image-5485" title="virustotal-uploader" src="http://cdn.devilsworkshop.org/files/2009/04/virustotal-uploader.png" alt="virustotal-uploader" width="365" height="213" />

### #4. Hash Search *(Geeks way!)*

I mentioned above that in most cases, scanning and reporting happens instantly. This is because file you are submitting might be submitted already in past by someone else.

VirusTotal computes <a href="http://en.wikipedia.org/wiki/Checksum" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Checksum', 'checksum']);" >checksum</a> values for each submitted file using MD5, SHA-1, SHA-256 and SHA-512 functions. These checksum values are unique for each file. So when you submit a file, VirusTotal first compute checksum for it. For common files, these hash values will likely match with another hash values from database. In that case, you will be redirected to results page directly.

Now if you have large file, you can save your time by computing hash locally using MD5 or openssl command on Linux/Mac. For Windows there must be some software to compute MD5/SHA hash values. Just google it.

`Snytax: $ MD5 <filename>`

Once you get hash value, copy it,  just go to <a href="http://www.virustotal.com/buscaHash.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.virustotal.com/buscaHash.html', 'this page']);" >this page</a>, paste it there and hit search!

If you do not find any result, then that only means, file you are having is never submitted for analysis in past. In this case, just try any of above method.

**Links:** <a href="http://www.virustotal.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.virustotal.com/', 'VirusTotal']);" >VirusTotal</a> | <a href="http://www.virustotal.com/vtsetup.exe" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.virustotal.com/vtsetup.exe', 'VirusTotal Uploader']);" >VirusTotal Uploader</a> | <a href="http://www.virustotal.com/buscaHash.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.virustotal.com/buscaHash.html', 'Hash Search']);" >Hash Search</a>
