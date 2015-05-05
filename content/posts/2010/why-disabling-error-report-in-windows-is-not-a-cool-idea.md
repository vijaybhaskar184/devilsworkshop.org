---
title: Why Disabling Error Report in Windows is Not a Cool Idea?
author: anshuldixit
date: 2010-09-02
url: /why-disabling-error-report-in-windows-is-not-a-cool-idea/
views:
  - 234
dsq_thread_id:
  - 2947113615
categories:
  - Tips
tags:
  - Microsoft
  - Windows
---
[<img class="wp-image-51967" style="margin: 0px 10px 10px 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/09/errorreport_thumb.jpg" border="0" alt="error report" width="204" height="175" />][1]

In order to make Windows stable, Microsoft comes with an error reporting tool which is enabled by default. Every time a program crashes, a window pops up asking you to send diagnostic information to Microsoft. For those lucky souls who have never come face to face with it, this is what it looks like:

[<img style="float: none;margin: 10px auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/09/ErrorReportingWindow_thumb.jpg" border="0" alt="Error Reporting Window" width="340" height="240" />][2]As if the crashed program was not enough to irritate you, Windows throws up this pop-up on your face driving you to extreme limits of exasperation. Cursing under your breath, you click on “Don’t Send”. But that does not please you enough. So you decide to take a revenge on Windows for irritating you. You look for ways to disable this feature permanently. A quick Google search introduces you to thousands of sites that are happy to help you out with this. Five minutes later, you are giving a mocking smile to Windows. Revenge completed. Windows will not dare to annoy you in future.

**But wait! Was this really a cool thing to do?**

No, it wasn’t. You wasted your vote by clicking on “Don’t Send”. And you gave away the right to vote in future by disabling this feature. A vote that could have helped fix a bug.

You might be wondering if reporting an error has any effect on Microsoft. Because the same program keeps on crashing again and again, even when you reported about it the first time. This has led to a general perception of Microsoft’s error reporting tool as:

[<img style="float: none;margin: 10px auto;border: 0px" src="http://cdn.devilsworkshop.org/files/2010/09/complaintbox_thumb.jpg" border="0" alt="complaint box" width="344" height="188" />][3]But actually that is not the case. Every error that is reported is taken very seriously by Microsoft. They have a team dedicated for this purpose-WER (Windows Error Reporting) team, which analysis each error that is submitted. A common adage is that 80 percent of the errors and crashes in Windows are caused by 20 percent of the bugs detected. When you report a crash, the WER team analyses it to find the bug that caused it. To optimally utilize the resources, bugs that are responsible for most number of crashes are fixed first.

Same applies for third party software that you install on your computer. These software makers have the option to sign up to access the Windows Error Reporting data, using which they can find where their program is failing, and fix it in subsequent releases.

Thus when you send a diagnostic report to Microsoft, you are actually voting for a bug. More number of votes that a bug gets more is the chances of it getting fixed.

So next time when you get a thought of disabling the error report, think again. You might unknowingly contribute in making the Windows experience better for yourself and others by sending the error report.

Have you ever reported errors to Microsoft? Did you see any improvement after that? What are your chief reasons for not using the reporting tool? We’ll love to hear your views on this topic.

<a href="http://www.nicholsoncartoons.com.au/cartoon_413.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.nicholsoncartoons.com.au/cartoon_413.html', 'Image Credit']);" target="_blank">Image Credit</a>

 [1]: http://cdn.devilsworkshop.org/files/2010/09/errorreport.jpg
 [2]: http://cdn.devilsworkshop.org/files/2010/09/ErrorReportingWindow.jpg
 [3]: http://cdn.devilsworkshop.org/files/2010/09/complaintbox.jpg
