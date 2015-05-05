---
title: Reduce Hibernate File Size in Windows 7
author: hammad
date: 2010-06-08
url: /reduce-hibernate-file-size-in-windows-7/
views:
  - 665
dsq_thread_id:
  - 2947110985
categories:
  - Tips
tags:
  - File Management
  - how-to
  - Windows
  - windows 7
---
Windows 7 is one of the best operating systems released by Microsoft. But if you just installed Windows 7 on your computer, you might have noticed that hibernation is disabled by default in Windows 7. But if you want to enable it, follow the [guide][1] we posted earlier. Now, as most of us know that it stores all the hibernation information in the hard disk which can be really large in size.

<!--more-->

You may want to reduce the size of hibernate file in order to free disk space. So, if you can reduce the size of hibernate file in Windows 7 by following the simple guide below:

1. Open **Command Prompt** by typing **CMD, **right click and select **Run As Administrator**.

<img class="wp-image-50488" style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/hibernatefilesize1.png" border="0" alt="hibernate-file-size-1" width="390" height="482" />

2. In Command Prompt, type the following line

> Powercfg –h –size percentsize

Percentsize refers to the percentage value so replace it with a value for instance, 70% but remember that the file size cannot be smaller than 50%

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/06/hibernatefilesize2.png" border="0" alt="hibernate-file-size-2" width="559" height="199" />

3. And you are done.

*Do let us know which operating system you are using? Are you using the Hibernate feature of your Operating system?*

 [1]: http://devilsworkshop.org/how-to-enable-hibernate-option-in-windows-vistawindows-7/
