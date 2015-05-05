---
title: Remotely Accessing Linux via Windows
author: rahool
date: 2010-04-27
excerpt: Remotely Accessing Linux via Windows with the help of VNC server software which is widely available on most Linux OS and also can be installed on a Windows System
url: /remotely-accessing-linux-via-windows/
views:
  - 239
categories:
  - Tips
tags:
  - Desktops
  - OS
  - 'Tips &amp; Hacks'
  - Windows
---
There are situations when you want to access a system remotely. If both the systems have Windows OS then it&#8217;s not a problem but what if one system has Windows & the other has LINUX/Mac. 😛

**The solution is to use VNC server.**

**<a rel="attachment wp-att-24147" href="http://devilsworkshop.org/remotely-accessing-linux-via-windows/vnc_server_logo/"><img class="alignnone size-full wp-image-24147" title="VNC_server_logo" src="http://cdn.devilsworkshop.org/files/2010/04/VNC_server_logo.png" alt="" width="300" height="213" /></a>  
**

**Virtual Network Computing** (**VNC**) is a graphical desktop sharing system that uses the RFB protocol to remotely control another computer. VNC is platform-independent.

**Linux**

Almost all Linux OS have inbuilt VNC server. For connecting Linux system to Windows you need to install VNC viewer which you can download from <span style="color: #000080;"><span style="text-decoration: underline;"><a href="http://www.realvnc.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.realvnc.com/', 'www.realvnc.com']);" target="_blank">www.realvnc.com</a></span></span> or <span style="color: #000080;"><span style="text-decoration: underline;"><a href="http://www.tightvnc.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.tightvnc.com/', 'www.tightvnc.com']);" target="_blank">www.tightvnc.com</a></span></span>

**Windows**

  * You need to install VNC server from above mentioned sites on your system.
  * Steps to connect Windows viewer to Linux server
  * Start VNC server on linux system using command VNC Server
  * Click on Start and Run VNC viewer on Windows system.

<div class="mceTemp mceIEcenter">
  <p>
    <a rel="attachment wp-att-24083" href="http://devilsworkshop.org/remotely-accessing-linux-via-windows/1-22/"><img class="size-full wp-image-24083 alignnone" title="VNC server" src="http://cdn.devilsworkshop.org/files/2010/04/1.png" alt="" width="342" height="139" /></a>
  </p>
  
  <dl id="attachment_24083" class="wp-caption aligncenter" style="width: 352px;">
    <dd class="wp-caption-dd">
      VNC server
    </dd>
  </dl>
</div>

  * Type the IP Address of the system to which you want to connect and then click OK.
  * Now you can access the remote (Linux) system.

The only problem which I came across  is that when you completely maximize the screen it locks  & you have to manually close session from remote system to gain the access again.

If you liked this post you might also find [how to troubleshoot a friends desktop remotely][1] and how to [control a Linux PC with a blue-tooth Mobile as remote][2] very useful. Do let us know your views with your comments to let us know if you found this post useful.

 [1]: http://devilsworkshop.org/remotely-troubleshooting-friends-pc-straight-from-your-desktop/ "how to troubleshoot a friends desktop remotely"
 [2]: http://devilsworkshop.org/anyremote-control-linux-pc-using-bluetooth-mobile-as-remote/ "control a Linux PC with a blue-tooth Mobile as remote"
