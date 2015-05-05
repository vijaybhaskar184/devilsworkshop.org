---
title: How to disable User Control Account (UAC) in Windows Vista
author: hammad
date: 2010-04-04
url: /how-to-disable-user-control-account-uac-in-windows-vista/
views:
  - 159
robotsmeta:
  - index,follow
categories:
  - Tips
tags:
  - Disable
  - how-to
  - 'Tips &amp; Hacks'
  - Windows Vista
---
One of the most annoying features in Windows Vista and now Windows 7 is the user control account (UAC) popup window which starts every time you try to install any software or open any application or a folder.

<!--more-->

If you want to disable UAC feature, follow the steps below

1. Go to **Start > Control Panel**

<img class="wp-image-53469" style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/04/uacdisable1.jpg" border="0" alt="uac-disable-1" width="428" height="275" />

2. Go to **User Accounts** and there you will see an option “**Turn User Control Account on or off**”.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/04/uacdisable2.jpg" border="0" alt="uac-disable-2" width="594" height="282" />

3. Now, uncheck the box “**Use UAC to help protect your computer**” and click **OK**. And it will disable user control account on your computer.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/04/uacdisable3.jpg" border="0" alt="uac-disable-3" width="621" height="178" />

There is another way to disable it using registry editor but if you are not good with computers I recommend you use the guide above.

1. Go to **Start** menu and type **regedit** in the search field.

2. It will open the registry editor. Now, navigate to the following folder

> HKEY\_LOCAL\_MACHINESoftwareMicrosoftWindowsCurrentVersionPoliciesSystem

3. Find EnableLUA and give it a value of 0.

<img style="float: none;margin-left: auto;margin-right: auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/04/uacdisable4.jpg" border="0" alt="uac-disable-4" width="387" height="181" />

But before you make any changes in the registry, you should make a backup of your registry before making any changes to your registry.

4. Close the registry editor and reboot your computer for changes to take effect.

I remind you again to make a backup of your registry so if something goes wrong, you can restore the registry with the backup file. If you don’t know anything about the registry editing, then it is highly recommended that you use the other method posted above.
