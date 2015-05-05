---
title: Add Background Image For Your Pendrive
author: praveen
date: 2009-09-01
url: /add-background-image-for-your-pendrive/
views:
  - 5101
dsq_thread_id:
  - 2946632617
categories:
  - Tips
tags:
  - Windows
---
We all might have** set background images** for the** Local drives in Windows Xp**.But you might not have set **background picture** for your **pendrive**.It’s a** very simple hack** so give it a try after reading this post,

All you need to do is, just **Copy & Paste** the below code to **notepad**,then save it as** “desktop.ini”**

[.ShellClassInfo]  
IconFile=%SystemRoot%system32SHELL32.dll  
IconIndex=127  
ConfirmFileOp=0

[{BE098140-A513-11D0-A3A4-00C04FD706EC}]  
Attributes=1  
IconArea_Image=”YourPictureName.jpg”  
IconArea_Text=”0xFFFFFF”  
VeBRA sources – don’t delete the tag above, it’s there for XXXXX purposes &#8211;  
[ExtShellFolderViews]  
{BE098140-A513-11D0-A3A4-00C04FD706EC}={BE098140-A513-11D0-A3A4-00C04FD706EC}  
{5984FFE0-28D4-11CF-AE66-08002B2E1262}={5984FFE0-28D4-11CF-AE66-08002B2E1262}

[{5984FFE0-28D4-11CF-AE66-08002B2E1262}]  
PersistMoniker=Folder.htt  
PersistMonikerPreview=%WebDir%folder.bmp

**Some Information On Above Code:**

<p style="text-align: center">
  <ul>
    <li>
      Where <strong>“YourPictureName.jpg” </strong>is, delete that and replace with your picture name for example<strong> “FreeBSD.bmp”</strong>
    </li>
  </ul>
  
  <p style="text-align: center">
    <strong><img class="wp-image-52732" src="http://farm3.static.flickr.com/2427/3873961478_d0e4d2744b.jpg" alt="How To Add Background Wallpaper On Your Pendrive" width="319" height="232" /></strong>
  </p>
  
  <p>
    <strong>Note:</strong><br /> Please check that <strong>Picture format (.jpg , .bmp, .gif)</strong> properly else this hack won’t work.
  </p>
  
  <ul>
    <li>
      If your Picture is <strong>white colour</strong> then folder names will not be clear so change the IconArea_Text=”0x<strong>FFFFFF</strong>” to IconArea_Text=”0x<strong>000000</strong>”
    </li>
    <li>
      Save the notepad as<strong> “desktop.ini”</strong>.
    </li>
    <li>
      Place both your notepad file (i.e)<strong> desktop.ini</strong> and your <strong>picture</strong> in Pendrive.
    </li>
    <li>
      Set the above files attributes as <strong>Hidden</strong>.
    </li>
    <li>
      <strong>Refresh(F5)</strong> and Enjoy with your new background.
    </li>
    <li>
      You can also this on your<strong> windows Xp Local drives(C,D,E,F…).</strong>
    </li>
  </ul>
  
  <p>
    I hope you like this trick.
  </p>
  
  <hr />
  
  <em>[<strong>Editor&#8217;s Note</strong>: This post is submitted by our guest blogger Praveen Kumar. He blogs on technology and internet at <a href="http://praveenkumarg.blogspot.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://praveenkumarg.blogspot.com/', 'Computer Tips and Tricks']);" >Computer Tips and Tricks</a></em>
</p>

*If you, too would like to [write][1] for Devils Workshop, please [check this][1]. Details about our [revenue sharing programs][1] are [here][1].]*

 [1]: http://devilsworkshop.org/join-dw/
