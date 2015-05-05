---
title: How to Set Background Image For A Folder In Windows Xp
author: praveen
date: 2009-09-12
url: /how-to-set-background-image-for-a-folder-in-windows-xp/
robotsmeta:
  - index,follow
views:
  - 2057
dsq_thread_id:
  - 2947101590
categories:
  - Tips
tags:
  - Windows
---
In my previous post I have said **[How To Add Background Image For Pendrive][1]**. Now lets see a **similar hack **of setting **background image** for a folder in Xp.

Here are **2 simple methods**,

**Method 1:**

  * Just download and install **<a href="http://www.sodabush.com/products/windowpaperxp/downloads.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.sodabush.com/products/windowpaperxp/downloads.php', 'Windowpaper XP v2.0 Beta 2']);" >Windowpaper XP v2.0 Beta 2</a>**
  * **Run** the application.
  * It is highly custamizable appz you can **set image**,Change **folder Icon**,**Text colour**.<img class="alignnone size-full wp-image-14089" src="http://cdn.devilsworkshop.org/files/2009/09/Windowpaper-XP.jpg" alt="Windowpaper XP" width="450" height="441" />

  * That&#8217;s it!!! Simple way to set the image.

**Method 2:**

  * Click **Start&#8211;>Run**
  * Type **cmd **and hit** enter**.
  * Suppose you wish to set background for a folder** &#8220;Devilsworkshop&#8221;** in **E:\** Drive
  * Type the following in command prompt

**attrib +s E:\Devilsworkshop**

  * Hit **Enter**
  * **Close** the command prompt.

**Now open Notepad and paste following code:**

[ExtShellFolderViews]  
{BE098140-A513-11D0-A3A4-00C04FD706EC} = {BE098140-A513-11D0-A3A4-00C04FD706EC}

[{BE098140-A513-11D0-A3A4-00C04FD706EC}]  
Attributes=1  
IconArea_Image=Your Wallpaper Path  
IconArea_Text=0x000000

Now change **&#8220;Your Wallpaper Path&#8221;** to the exact path of the wallpaper which you wish to set as background. Suppose the wallpaper is stored in **&#8220;F:\Wallpaper\Dw.jpg&#8221;**, then the code will be as following:

[ExtShellFolderViews]  
{BE098140-A513-11D0-A3A4-00C04FD706EC} = {BE098140-A513-11D0-A3A4-00C04FD706EC}

[{BE098140-A513-11D0-A3A4-00C04FD706EC}]  
Attributes=1  
IconArea_Image=F:\Wallpaper\Dw.jpg  
IconArea_Text=0x000000

**NOTE: **If you copy the wallpaper in the same folder which you are** editing**, then you can simply put the wallpaper name in the file. e.g. if you copy the **&#8220;Dw.jpg&#8221;** file in **&#8220;Devilsworkshop&#8221;** folder, then the code will be as following:

[ExtShellFolderViews]  
{BE098140-A513-11D0-A3A4-00C04FD706EC} = {BE098140-A513-11D0-A3A4-00C04FD706EC}

[{BE098140-A513-11D0-A3A4-00C04FD706EC}]  
Attributes=1  
IconArea_Image=Dw.jpg  
IconArea_Text=0x000000<img class="alignnone size-full wp-image-14090" src="http://cdn.devilsworkshop.org/files/2009/09/BG.jpg" alt="BG" width="550" height="386" />

**&#8220;IconArea_Text&#8221;** stands for the **text color**, you can change it to** white,** **yellow, blue, black** or any other color. Just replace the code in **&#8220;IconArea_Text&#8221;** section. A few most used color codes are:

Black &#8211; 0x000000  
White &#8211; 0xFFFFFF  
Green &#8211; 0x00FF00  
Blue &#8211; 0xFF0000  
Red &#8211; 0x0000FF

Now save the file with name** &#8220;Desktop.ini&#8221;** (including quotes) and copy the file in the **desired folder w**hich is** &#8220;Devilsworkshop&#8221;** in our example.** Re-open **the folder. Now it should show the wallpaper as background.

* * *

*[**Editor&#8217;s Note**: This post is submitted by our guest blogger Praveen Kumar. He blogs on technology and internet at <a href="http://praveenkumarg.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://praveenkumarg.blogspot.com/', 'Computer Tips and Tricks']);" >Computer Tips and Tricks</a>*</p> 

*If you, too would like to [write][2] for Devils Workshop, please [check this][2]. Details about our [revenue sharing programs][2] are [here][2].]*

 [1]: http://devilsworkshop.org/add-background-image-for-your-pendrive/
 [2]: http://devilsworkshop.org/join-dw/
