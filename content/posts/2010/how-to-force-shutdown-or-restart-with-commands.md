---
title: How to Force Shutdown or Restart with commands
author: joseph
date: 2010-02-21
url: /how-to-force-shutdown-or-restart-with-commands/
views:
  - 1053
dsq_thread_id:
  - 2947107721
categories:
  - Tips
tags:
  - shut down
  - Shutdown
  - 'Tips &amp; Hacks'
  - Trick
  - Windows
---
<a rel="attachment wp-att-20559" href="http://devilsworkshop.org/how-to-force-shutdown-or-restart-with-commands/power-on/"><img class="alignright size-full wp-image-20559" title="power-on" src="http://cdn.devilsworkshop.org/files/2010/02/power-on.jpg" alt="" width="240" height="180" /></a>Your Windows Operating System does come with different ways to turn it off or restart. Whether you shutdown, restart or log off, the file that is responsible for this is *shutdown.exe* in the system32 directory of your Windows installation. We will now learn to play with *shutdown.exe* giving it different parameters 😉 To do this, we&#8217;ll be keying in shutdown.exe in the RUN command window (available from Start >> Run) along with its parameter(s).

#### Shutdown.exe

**Casual Shutdown**: When you run *shutdown.exe* with the parameter ***-s***, your system will turn off normally, just as it would shutdown when clicked from the Start menu. For this, you&#8217;ll run it as <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -s</span></strong></span>.

**Force Shutdown**: To forcefully shut down your PC, you&#8217;ll run *shutdown.exe* with the parameter ***-s -f***, i.e <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -f</span></strong></span>. This will forcefully terminate all of your running processes and initiates the shutting process. This saves your shutting time when you are in a hurry and you want to turn off your PC safely.

**Timed Force Shutdown**: Lets say you want to forcefully turn off your PC after 60 seconds, here is when the parameter ***-t*** comes to the rescue. When you run shutdown.exe with the parameters ***-s -f -t xx*** (where xx is the time in seconds), your PC will forcefully shutdown after the specified time. For instance, to turn off after 30 seconds, you will enter the parameters as ***-f -t 30*** and for 60 seconds, ***-f -t 60***. <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -f -t xx</span></strong></span>

**Restart** : If you are familiar with shutdown, it&#8217;s not much of a deal for restart. To restart, you&#8217;ll just replace ***-s*** with ***-r***. Confused? For Casual Restart, the command is <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -r</span></strong></span>, and for Force Restart, it is <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -r -f</span></strong></span>, and for Timed Force Restart, it is <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -r -f -t xx</span></strong></span>. Simple, right?

**Log Off**: When you run shutdown.exe without any parameter, it stands for log off, meaning, your PC will log off. You can also use ***-l*** as a parameter to log off. <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown</span></strong></span> or <span style="color: #008080"><strong><span style="font-family: Courier New">shutdown -l</span></strong></span>

**A Quick Recap:**

<table border="0" cellspacing="0" cellpadding="2" width="450">
  <tr>
    <td width="200" valign="top">
      <strong>shutdown.exe / shutdown</strong>
    </td>
    
    <td width="245" valign="top">
      the associated process. Logs off when used without a parameter
    </td>
  </tr>
  
  <tr>
    <td width="200" valign="top">
      <strong>-s</strong>
    </td>
    
    <td width="245" valign="top">
      shutdown
    </td>
  </tr>
  
  <tr>
    <td width="200" valign="top">
      <strong>-r</strong>
    </td>
    
    <td width="245" valign="top">
      restart
    </td>
  </tr>
  
  <tr>
    <td width="200" valign="top">
      <strong>-l</strong>
    </td>
    
    <td width="245" valign="top">
      Log off
    </td>
  </tr>
  
  <tr>
    <td width="200" valign="top">
      <strong>-f</strong>
    </td>
    
    <td width="245" valign="top">
      force
    </td>
  </tr>
  
  <tr>
    <td width="200" valign="top">
      <strong>-t xx</strong>
    </td>
    
    <td width="245" valign="top">
      timed. xx for seconds
    </td>
  </tr>
</table>
