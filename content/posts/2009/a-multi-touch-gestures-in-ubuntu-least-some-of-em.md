---
title: Multi-touch gestures in Ubuntu (least some of em…)
author: shyamb17
date: 2009-07-29
url: /a-multi-touch-gestures-in-ubuntu-least-some-of-em/
views:
  - 3419
dsq_thread_id:
  - 2948156530
categories:
  - Tips
tags:
  - OS
  - ubuntu
---
<img class="aligncenter size-full wp-image-12384" src="http://cdn.devilsworkshop.org/files/2009/07/multitouch-in-linux.jpg" alt="multitouch-in-linux" width="311" height="298" />Well when used my friend&#8217;s Rahul Macbook pro i found the multi-touch gestures . Though might look very minor as feature but it&#8217;s overall usability is quite nice. so being a ubuntu fresher. I googled up and few links having tweaking to accept few gestures. I was able find out two of the multitouch gestures specifically two finger horizontal and vertical scrolling . more gestures are available in the code bit I am yet to find em. Happy Tweaking 😉 I am using Dell 1525

Create new file

<pre><code class="no-highlight">gksudo gedit /etc/hal/fdi/policy/11-x11-synaptics.fdi</code></pre>

Paste the following code into the file and save it.

<pre><code class="no-highlight">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
&lt;deviceinfo version="0.2"&gt;
 &lt;device&gt;
   &lt;match key="info.capabilities" contains="input.touchpad"&gt;
       &lt;merge key="input.x11_driver" type="string"&gt;synaptics&lt;/merge&gt;
       &lt;merge key="input.x11_options.SHMConfig" type="string"&gt;On&lt;/merge&gt;
       &lt;merge key="input.x11_options.EmulateTwoFingerMinZ" type="string"&gt;90&lt;/merge&gt;
       &lt;merge key="input.x11_options.VertTwoFingerScroll" type="string"&gt;1&lt;/merge&gt;
       &lt;merge key="input.x11_options.HorizTwoFingerScroll" type="string"&gt;1&lt;/merge&gt;
       &lt;merge key="input.x11_options.TapButton1" type="string"&gt;1&lt;/merge&gt;
       &lt;merge key="input.x11_options.TapButton2" type="string"&gt;3&lt;/merge&gt;  &lt;!--two finger tap -&gt; middle clieck(3) --&gt;
       &lt;merge key="input.x11_options.TapButton3" type="string"&gt;2&lt;/merge&gt;  &lt;!--three finger tap -&gt; right click(2). almost impossible to click --&gt;
   &lt;/match&gt;
 &lt;/device&gt;

&lt;/deviceinfo&gt;</code></pre>

Restart hal and enjoy multitouch touchpad.

<pre><code class="no-highlight">sudo /etc/init.d/hal restart</code></pre>

<div id="{CFFE27DE-3F41-4087-AE08-E0CA4130E429}" class="sponser" style="margin-bottom: 25px">
  <h3>
    Update: Diagnosing your touchpad for multi-finger-sensing-capability
  </h3>
  
  <p>
    Few people have problem with this not working, while it works for few others. This is posted in <a href="http://ubuntuforums.org/showpost.php?p=6967145&postcount=6" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ubuntuforums.org/showpost.php?p=6967145&postcount=6', 'ubuntu forums']);" >ubuntu forums</a>
  </p>
  
  <pre><code class="no-highlight">synclient -m 100</code></pre>
</div>

<div id="{F14371D2-AE40-4BE9-B496-1617A8D270EF}" class="sponser" style="margin-bottom: 25px">
  Fifth column in the output <strong>f</strong> is <strong>number of fingers</strong> on your touchpad. Put two or more fingers on your touchpad and watch the column. If you see it more than one, this should work for you.
</div>

**Source:** <a href="http://ubuntu-snippets.blogspot.com/2009/03/multi-touch-for-anyall-synaptics.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://ubuntu-snippets.blogspot.com/2009/03/multi-touch-for-anyall-synaptics.html', 'Ubuntu Snippets']);" >Ubuntu Snippets</a>
