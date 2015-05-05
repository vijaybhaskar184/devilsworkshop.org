---
title: '[Tip] How To Fix Printer Offline Error on Windows!'
author: djshankey
date: 2011-04-19
url: /fix-printer-offline-error-windows-platform/
views:
  - 92
dsq_thread_id:
  - 2947120459
categories:
  - Tips
tags:
  - Printer
  - 'Tips &amp; Hacks'
  - Windows Tips and Tricks
---
Many a times our printer just won&#8217;t print and it happens all the time for me. My printer is of HP Deskjet series 3940 and the frequent problem I encounter in it is that it suddenly goes offline in the middle of printing. The Printer Offline Error is quite frustrating. Thankfully I have found a couple of solutions helpful and thought I will share them with you.

[<img class="alignnone size-full wp-image-39659" title="printer_offline_error" src="http://cdn.devilsworkshop.org/files/2011/04/printer_offline_error.png" alt="" width="300" height="300" />][1]

## Check your Printer

  * Make sure your printer is switched on.
  * Ink cartridges are installed correctly(refilled cartridges may cause some problems ).
  * See that the printer is not out of paper.

If you are still getting &#8220;Printer Offline Error&#8221; then there is a chance that there is a communication problem between your Printer and the computer. This is managed by the Spool service in Windows and we need to restart it.

## How to Restart Printer Spool?

  * Click on Start button and Click on Run.
  * In the Run window type &#8220;services.msc&#8221; without the quotes. Press Enter.

<a rel="attachment wp-att-39227" href="http://devilsworkshop.org/fix-printer-offline-error-windows-platform/untitled1-3/"><img class="alignnone size-full wp-image-39227" title="untitled1" src="http://cdn.devilsworkshop.org/files/2011/03/untitled1.jpg" alt="" width="347" height="221" /></a>

  * A services window will pop up, scroll down and find a service called Print Spooler.
  * Click on it and two options (Stop / Restart the service) will appear on the left top corner.

<a rel="attachment wp-att-39228" href="http://devilsworkshop.org/fix-printer-offline-error-windows-platform/untitled1d/"><img class="alignnone size-medium wp-image-39228" title="untitled1d" src="http://cdn.devilsworkshop.org/files/2011/03/untitled1d-600x355.jpg" alt="" width="600" height="355" /></a>

  * Click on &#8221; Restart the service&#8221; or &#8220;Stop&#8221; and then &#8221; Start&#8221; the service any one.
  * The Printer Spooler will Restart and the frozen printing will resume.

This method should work 9 times out of 10 when you get the Printer Offline Error while using Windows and a HP Printer. Do drop in your comments any more quick tips to resolve this issue.

 [1]: http://cdn.devilsworkshop.org/files/2011/04/printer_offline_error.png
