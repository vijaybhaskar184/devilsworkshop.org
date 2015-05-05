---
title: How to Login as a root user in Ubuntu 10.04
author: jeyanthan
date: 2010-07-18
url: /how-to-login-as-a-root-user-in-ubuntu-10-04/
views:
  - 975
  - 975
dsq_thread_id:
  - 2947112093
categories:
  - Tips
tags:
  - Linux
  - 'Tips &amp; Hacks'
  - ubuntu
---
The following steps are very simple and especially for newbies who are completely new to Linux. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> By logging in as root user, you are making your operating system more vulnerable. Root user has all the administrator privileges so whenever you need to edit system files or configuration from within Gnome, you will feel the need to login to Ubuntu as a root user. There are 2 methods to login as a root user

  * Graphical Method (GUI Method)
  * Command Line Method (CLI Method)

### **Method 1: GUI Method**

Following are the steps to be followed to login as a root user in GUI Mode,

  1. Go to **Applications -> Accessories -> Terminal**<img class="size-medium wp-image-28374 aligncenter" src="http://cdn.devilsworkshop.org/files/2010/07/Screenshot-600x528.jpg" alt="" width="420" height="370" />
  2. Type: **sudo passwd root**
  3. Enter your *password *of the current user
  4. When you see the prompt that says “Enter new UNIX password”, enter the *password* you want for the root userand confirm it. [My suggestion is to assign its pswd as &#8220;root&#8221;]
  5. Type** exit** to exit the terminal
<p style="text-align: center;">
  <img class="alignnone size-medium wp-image-28376" src="http://cdn.devilsworkshop.org/files/2010/07/Screenshot-ijeyanthan@ubuntu--600x394.png" alt="" width="480" height="315" />
</p>

  6. Restart Ubuntu and wait for the login screen to appear<a rel="attachment wp-att-28378" href="http://devilsworkshop.org/how-to-login-as-a-root-user-in-ubuntu-10-04/ubuntu10artwork-large_006b/"><img class="aligncenter size-medium wp-image-28378" src="http://cdn.devilsworkshop.org/files/2010/07/ubuntu10artwork-large_006b-600x449.jpg" alt="" width="480" height="359" /></a>
  7. Click **other..** and type User name : **root** and Password : **root**

This should work fine and you are done.!

### **Method 2: CLI Mode**

Following are the steps to be followed to login as a root user in CLI Mode,

  1. Go to **Applications -> Accessories -> Terminal**
  2. Type **sudo su** (Meaning: superuserdo superuser) <a rel="attachment wp-att-28381" href="http://devilsworkshop.org/how-to-login-as-a-root-user-in-ubuntu-10-04/screenshot-rootubuntu-home-ijeyanthan-3/"><img class="aligncenter size-medium wp-image-28381" src="http://cdn.devilsworkshop.org/files/2010/07/Screenshot-root@ubuntu-home-ijeyanthan1-600x378.png" alt="" width="480" height="302" /></a>
  3. Now you are into root dircetory, You may modify whatever you wish from here if you are familiar with commands.
  4. NOTE: You can also login into other Users from root directory via terminal window by typing the following command **login *username <span style="font-weight: normal;"><span style="font-style: normal;">and</span></span> Password** <span style="font-weight: normal;"><span style="font-style: normal;">of the corresponding User you wish to login. </span></span>******<a rel="attachment wp-att-28382" href="http://devilsworkshop.org/how-to-login-as-a-root-user-in-ubuntu-10-04/screenshot-ijeyanthanubuntu-1/"><img class="aligncenter size-medium wp-image-28382" src="http://cdn.devilsworkshop.org/files/2010/07/Screenshot-ijeyanthan@ubuntu-1-600x394.png" alt="" width="480" height="315" /></a> ***
  5. Use the above method with Caution.Read this post for assistance <a href="https://help.ubuntu.com/community/RootSudo" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://help.ubuntu.com/community/RootSudo', 'https://help.ubuntu.com/community/RootSudo']);" >https://help.ubuntu.com/community/RootSudo</a>

**Note**: Always take a backup of the file  that you wish to alter, so that you may set them back if anything went wrong.
