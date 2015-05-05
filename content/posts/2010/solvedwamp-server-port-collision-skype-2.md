---
title: '[Solved]WAMP server Port Collision with Skype'
author: prasadnevase
date: 2010-12-09
excerpt: "We all use Skype as a way to communicate these days. Don't we? At times I get error when I start WAMP server keeping my Skype on. You would have also experienced this problem if you need both Skype and WAMP."
url: /solvedwamp-server-port-collision-skype-2/
views:
  - 189
dsq_thread_id:
  - 2952125568
categories:
  - Tips
tags:
  - skype
  - 'Tips &amp; Hacks'
---
We all use Skype as a way to communicate these days. Don&#8217;t we? At times I get error when I start WAMP server keeping my Skype on. You would have also experienced this problem if you need both Skype and WAMP.

Actually, WAMP server needs port 80 and so does Skype. On such an error, I usually quit my Skype, start WAMP server and then start Skype. Since, Skype can dynamically select other port if port 80 is not available. But this is not a valid solution. Is it? <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" /><a rel="attachment wp-att-34251" href="http://devilsworkshop.org/solvedwamp-server-port-collision-skype/skype-2/"><img class="aligncenter size-full wp-image-34251" title="skype" src="http://cdn.devilsworkshop.org/files/2010/12/skype.jpg" alt="" width="520" height="446" /></a>

## How to solve this ?

Follow these steps:

  1. Open Skype > Tools > Options > Advanced > Connection.
  2. Uncheck &#8220;use port 80&#8230;&#8221;.
  3. Restart WAMP and then Skype.

Now, you can run both at the same time, no matter which one you start first. Phew!

The bottom line of the story is that Skype developers should not have used port 80 as its default port since many web servers use it as their default port. This can always lead to a lot of problem. If you have any other way to solve this do let me know through your comments below.
