---
title: Automatically Install Android Apps to SD Card
author: richiesajan
date: 2011-05-27
url: /automatically-install-android-apps-sd-card/
dsq_thread_id:
  - 2947120991
categories:
  - Tips
tags:
  - Android
  - app
  - Mobile
---
<img class="alignleft size-full wp-image-40584" title="android-logo" src="http://cdn.devilsworkshop.org/files/2011/05/images-e1306473090726.jpeg" alt="image-android-logo" width="150" height="112" />The other day [Rajeel][1] posted a tutorial, about how you could move your previously installed apps from [phone memory to your SD card][2]. Although this is dead simple, there is a little more you can do, by which your apps get directly installed to your SD Card; thus speeding up the process a bit. This is a little advanced tutorial, but easy.

<!--more-->This is achieved using ADB on your computer. So please check that you have to following prerequisites:

  * An android phone (of course :P)
  * Android 2.2 (Froyo) on it
  * A USB cable to connect your phone to the computer
  * An SD card (inserted in your phone)
  * Drivers for your phone (check phone manufacturers site)
  * Java<sup>TM</sup> Platform, JDK installed (download from <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk-6u25-download-346242.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.oracle.com/technetwork/java/javase/downloads/jdk-6u25-download-346242.html', 'here']);" title="JDK">here</a>)
  * Android SDK (<a href="http://dl.google.com/android/installer_r11-windows.exe" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://dl.google.com/android/installer_r11-windows.exe', 'download']);" title="Android SDK download">download</a> and<a href="http://developer.android.com/sdk/installing.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://developer.android.com/sdk/installing.html', ' install instructions']);" title="Installing instructions"> install instructions</a>)

That&#8217;s it. Now for our actual tutorial:

  1. The first step is to go to your **Settings**in your android phone => **Applications** and check **USB Debugging**. When you check it you might get a warning message, but just click on OK, and your ready to go.<img class="aligncenter size-full wp-image-40585" title="USB debugging" src="http://cdn.devilsworkshop.org/files/2011/05/SC20110527-102959.png" alt="USB debugging" width="240" height="400" />
  2. Now connect your phone to your computer, via the USB cable. (**Note:** Don&#8217;t mount your SD card)
  3. Now open a command prompt window from your Windows by going to **Start** menu => **Run** and type *cmd* and then press the enter key.
  4. Now navigate to the &#8216;tools&#8217; folder in your Android SDK folder (eg. If installed in C:\Program Files\Android\android-sdk-windows then in command prompt window type *cd C:\Program Files\Android\android-sdk-windows\tools *)
  5. Now type the following command **adb devices**. You should get a serial number starting with “H” in return.
  6. Now just type in the following command: **adb shell pm setInstallLocation 2.  
    **
  7. Thats it!

The next time you install an application it will automatically be placed on your SD card. If you want to revert back on these changes follow the above steps. The only change is at step 6 use the following command instead of the one above:** adb shell pm setInstallLocation 0**.

** Note: **If you install any widget apps,, you might want to move them back to phone memory, so that they function properly.

If you&#8217;re having any problems please do comment.

 [1]: http://devilsworkshop.org/author/rajeelkp/ "Rajeek KP"
 [2]: http://devilsworkshop.org/move-android-apps-phone-memory-sd-card/ "Move Your Android Apps from Phone Memory to SD Card"
