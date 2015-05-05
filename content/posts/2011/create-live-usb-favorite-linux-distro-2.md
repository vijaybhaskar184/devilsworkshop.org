---
title: '[How To] Create a Live USB of your Favorite Linux Distro'
author: urbngeek
date: 2011-02-07
excerpt: Here is a quick tutorial which will help you run or install a linux distro using a Flash/Pen Drive.
url: /create-live-usb-favorite-linux-distro-2/
views:
  - 182
dsq_thread_id:
  - 3145572601
categories:
  - Tips
tags:
  - Installation
  - Linux
  - OS
  - 'Tips &amp; Hacks'
  - ubuntu
  - USB
---
<img class="wp-image-71090" src="http://polishlinux.org/wp-content/uploads/2007/11/01-usb-linux.jpg" alt="" width="276" height="182" align="right" />

Well, after enjoying the power of Windows 7, I decided to go back to some of my favorite Linux flavors. I like testing out different flavors of Linux and my favorite is <a href="http://ubuntu.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ubuntu.com', 'Ubuntu']);" target="_blank">Ubuntu</a>. I like it because it&#8217;s robust, the community is large enough to provide you with help and the software is easily available.

With the new release of Fedora 14, came many online debates about which one is better- Ubuntu or Fedora? So I decided to try out Fedora.

If you have never tried any Linux, I would recommend you to do so now! Here is a quick tutorial which will help you run or install a linux distro using a Flash/Pen Drive.

### Things You Need

  1. A good computer with a fast internet connection to download the disk image of the Linux you want to try. Distros are usually 600-700 Mb
  2. A Pen Drive(1GB minimum)
  3. A Brain! (just kidding, it&#8217;s as simple as 1-2-3)

**NOTE**: The USB key will be formatted, so don’t forget to backup the data in the USB you’re going to use.

### <a href="http://www.linuxliveusb.com/en/download" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.linuxliveusb.com/en/download', 'Install Linux Live USB Creator']);" >Install Linux Live USB Creator</a>

There are many ways to make a USB drive bootable, but the simplest way to do so is using a tool called **Linux Live USB Creator** which will not only make your Flash Drive bootable, but will also help you extract ISO image and make the Flash Drive ready for Linux Installation. Download Linux Live USB Creator from <a href="http://www.linuxliveusb.com/en/download" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.linuxliveusb.com/en/download', 'here']);" ><strong>here</strong></a> and open the software

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px" title="liliusb" src="http://cdn.devilsworkshop.org/files/2011/02/liliusb_thumb.png" border="0" alt="liliusb" width="216" height="359" />][1]

### Follow the Steps below:

  1. **Choose your Flash Drive/ Pen Drive &#8211; **If it’s not listed, make sure that your Pen/Flash Drive is connected to your computer and then click on the Refresh button on the side).
  2. **Choose a Source &#8211;** If you’ve downloaded the ISO Image, then click on ISO/IMG/ZIP and browse to select your ISO Image(example- Fedora.ISO). If you have the CD of the Linux Distro then click on CD. If you want to download the distro, then click on Download and choose the Linux Distro you want to download and then choose between Manual and Automatic Download.
  3. **Persistence mode** is used to store the application, log files, information on the USB so that you don’t have to install applications every time you insert the USB in a new computer. This mode can be used by few of the Linux Distros. If you want to install the Distro in your computer then there is no need to use persistence mode.
  4. If you want to Hide the Linux files on the USB then check on the **Hide Created Files on Key **Option. Check the **Format the key in FAT32 format** option. If you want to try the Linux without rebooting your computer, check the third option, this will download some files from it’s server and will run the Linux distro in a Virtual Box.
  5. Click on The **lightning icon** to start the installation process. Now, LiLi will extract the files from the ISO image and then your USB will be ready to use.
  6. After this, **shut down** the computer and then start it with USB Key connected to the drive. As soon as the Splash Screen of your motherboard appears, press **F2 **( Or the key used to access BIOS settings).
  7. Now, go to **BOOT** Option and then Enable **Boot From USB First** or anything similar to this term. After enabling it, Save and Exit from the BIOS and now, you’re done! You will now see the booting screen of your Linux Distro and then run the install (if you want to install), and if you don’t want to install it, then start exploring it using the live mode. After you install, don’t forget to revert back the changes you did with the BIOS.

**NOTE**: Many Linux Flavors allow you to install the Linux side by side of Windows. If you want to use Ubuntu, then try Wubi. <a href="http://www.ubuntu.com/desktop/get-ubuntu/windows-installer" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.ubuntu.com/desktop/get-ubuntu/windows-installer', 'Wubi']);" target="_blank">Wubi</a> is a free application which lets you install Ubuntu side by side of Windows without the hassle of booting from a CD or USB Key.

**Link**: <a href="http://www.linuxliveusb.com/en/download" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.linuxliveusb.com/en/download', 'Linux Live USB Creator']);" ><strong>Linux Live USB Creator</strong></a>

 [1]: http://cdn.devilsworkshop.org/files/2011/02/liliusb.png
