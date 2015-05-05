---
title: How to enable Hibernate Option in Windows Vista/Windows 7
author: hammad
date: 2010-03-29
url: /how-to-enable-hibernate-option-in-windows-vistawindows-7/
views:
  - 466
robotsmeta:
  - index,follow
dsq_thread_id:
  - 3271080740
categories:
  - Tips
tags:
  - 'Tips &amp; Hacks'
  - windows 7
  - Windows Vista
---
Hibernation is an excellent power management tool especially for laptops. When you hibernate your laptop, it saves everything you are doing so when you turn it on, you don’t have to wait for the Windows to boot from the beginning. When the laptop recovers from hibernation, it reloads everything you were doing before the laptop was hibernated.

<!--more-->

There are chances that there is no hibernate options on your laptop. In Windows Vista, when you perform disk cleanup, it might delete some of the hibernation files which causes the option to disappear from the power management options.

If you want to enable hibernate option, there are actually two methods which can be used to enable hibernation.

**<span style="text-decoration: underline">First Method</span>**

1. Go to **Start Menu** and type **cmd** in search field.

<img class="wp-image-51524" style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate1.jpg" border="0" alt="hibernate-1" width="279" height="508" />

2. Right click on **cmd.exe** and click **Run as Administrator**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate2.jpg" border="0" alt="hibernate-2" width="357" height="286" />

3. In the command prompt type “**powercfg /hibernate on**” and hit **Enter**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate3.jpg" border="0" alt="hibernate-3" width="543" height="160" />

You will have to restart your computer for the changes to take effect.

**Note:** this will work with Windows 7 as well.

**<span style="text-decoration: underline">Second Method</span>**

This doesn’t work for many people sometimes. So, if you are one of them, try using the alternative method.

1. Go to **Start Menu**, Type **cmd** and click **Run as Administrator**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate21.jpg" border="0" alt="hibernate-2" width="357" height="286" />

2. In the command prompt, type “**powercfg /hibernate on**” or “**powercfg -h on**” and hit Enter.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate31.jpg" border="0" alt="hibernate-3" width="543" height="160" />

3. Now, go to **Control Panel > Power Options**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate4.jpg" border="0" alt="hibernate-4" width="458" height="380" />

4. Click on **change plan settings** for the power options you are using. Then go to **Change Advanced Power Settings**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate5.jpg" border="0" alt="hibernate-5" width="571" height="348" />

5. Scroll down and find the **Sleep Options**. Under sleep options, expand **Allow hybrid sleep**. And change it to **OFF**.

[<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate6_thumb.jpg" border="0" alt="hibernate-6" width="434" height="464" />][1]

6. Now, scroll down and expand **Power Buttons and Lid options**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate7.jpg" border="0" alt="hibernate-7" width="443" height="465" />

8. Expand “**Sleep Button Action**” and change it to **Hibernate**.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/03/hibernate8.jpg" border="0" alt="hibernate-8" width="439" height="469" />

It will enable hibernate option for your latptop.

You can also check out our post on [How to Create shortcut button to hibernate computer][2].

 [1]: http://cdn.devilsworkshop.org/files/2010/03/hibernate6.jpg
 [2]: http://devilsworkshop.org/create-a-shortcut-to-shutdownrestartlockhibernate-your-computer/
