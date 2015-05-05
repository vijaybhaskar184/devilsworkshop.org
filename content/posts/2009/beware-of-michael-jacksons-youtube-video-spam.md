---
title: Beware of Michael Jackson’s YouTube Video Spam
author: swati
date: 2009-06-26
excerpt: "Following Michael Jackson’s sudden death, a malicious campaign around Michael Jackson's death is on the run. It’s indeed disheartening to know that cybercriminals often rely on some of the most unfortunate events to promote their ill motives and agendas."
url: /beware-of-michael-jacksons-youtube-video-spam/
views:
  - 90
dsq_thread_id:
  - 2947099793
categories:
  - Tips
tags:
  - Internet
  - 'Tips &amp; Hacks'
  - Video
  - YouTube
---
<img class="alignright wp-image-53252" style="border: 0pt none;margin-left: 0px;margin-right: 0px" src="http://cdn.devilsworkshop.org/files/2009/06/image70.png" border="0" alt="Screenshot of the malicious file masquerading as a video" width="240" height="189" align="right" /> Following Michael Jackson’s sudden death, a malicious campaign around Michael Jackson&#8217;s death is on the run. It’s indeed disheartening to know that cybercriminals often rely on some of the most unfortunate events to promote their ill motives and agendas.

According to <a href="http://securitylabs.websense.com/content/Alerts/3426.aspx" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://securitylabs.websense.com/content/Alerts/3426.aspx', 'Websense Security Labs ThreatSeeker Network']);" >Websense Security Labs ThreatSeeker Network</a>, cybercriminals are sending spam emails, claiming to offer links to YouTube videos of Michael Jackson.

However, what it really does is, sends the recipient to a Trojan Downloader hosted on a malicious Website.

### The Malicious Website

  * The file offered is called *Michael.Jackson.videos.scr. *
  * This file is located on a legitimate Website hosted in Australia belonging to a radio broadcasting station.
  * Upon executing the file, a legitimate Website at http://musica.uol.com.br/ultnot/2009/06/25/michael-jackson.jhtm is opened by the default browser in order to distract the user by presenting a news article for them to read.

### What does it do?

  * It downloads and installs three information-stealing components on the victims PC. Websense’s Security labs says that one of the downloaded files is called *michael.gif*, which has low AV detection rates.
  * The malware then installs a malicious BHO that is registered with this file *%windir%Dynamic.dll* and this GUID {FCADDC14-BD46-408A-9842-CDBE1C6D37EB}.
  * Another component is bound to startup at *%windir%system32kproces.exe*.
  * Another malicious file installed by the malware is *%windir%system32fotos.exe*.

So be careful while you watch MJ videos! Ironically, now is not the right time.
