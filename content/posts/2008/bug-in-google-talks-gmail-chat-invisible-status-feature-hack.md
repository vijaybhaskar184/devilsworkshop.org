---
title: Bug in Google Talk’s Invisible Status Feature
author: rahul286
date: 2008-07-19
url: /bug-in-google-talks-gmail-chat-invisible-status-feature-hack/
views:
  - 22325
dsq_thread_id:
  - 2947091021
categories:
  - News
tags:
  - Gmail
  - Google
  - GoogleTalk
  - 'Tips &amp; Hacks'
---
Our reader, Anirudh Mehta, discovered a bug in [Google Talk&#8217;s invisible status feature][1] available in its Gmail Chat version. If use smartly, you can figure out if the girl next door is really invisible or avoiding you. 😛

### Here are steps:

  1. Set the chat as **off the record** with target user *(<a href="http://mail.google.com/support/bin/answer.py?hl=en&answer=29291" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mail.google.com/support/bin/answer.py?hl=en&answer=29291', 'how?']);" >how?</a>)*. This can be done only when the other user is online. *(*<a href="http://mail.google.com/support/bin/answer.py?hl=en&answer=29291" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://mail.google.com/support/bin/answer.py?hl=en&answer=29291', 'need help?']);" ><em>need help?</em></a>*)*
  2. Now try sending chat to that user when he is invisible or offline.
  3. If he is invisible, then he will receive chat.
  4. But if he Is offline, then you will receive error **&#8220;<username> did not receive your chat&#8221;**.

### Explanation:

**Point 1:** When a chat is set off the record, it will no longer get stored in your Gmail account.

**Point 2:** When you send a chat message to offline or invisible user, it gets delivered by default. At receiving end if user is online, a chat screen pops up showing him your message. **If he is offline, your chat message will go to inbox as a mail**.

Now if you put together above points then you will notice that, when you set chat off the record it can&#8217;t be delivered to inbox as mail, so it will be delivered only if user is **online (no matter if he is invisible).**

Now the only tricky part is finding a user online for once to set chat off the records. This doesn&#8217;t seem hard as invisible status is still limited to Gmail version of Google Talk and you may be in luck if your friend uses Google Talk desktop clients/gadgets or third party IM client to chat.

**Related:** <span style="line-height: normal"><a href="http://devilsworkshop.org/2008/03/01/check-who-is-invisible-online-on-yahoo-messenger-status-hacks/">Find Who is Invisible on Yahoo Messenger</a></span>

 [1]: http://devilsworkshop.org/2008/02/26/google-added-invisible-mode-to-gmail-chat-google-talk/
