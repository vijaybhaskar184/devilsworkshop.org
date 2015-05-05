---
title: Orkut Album Bug is Fixed. Details are here!
author: rahul286
date: 2008-04-18
url: /orkut-album-bug-is-fixed-details-are-here/
views:
  - 379
dsq_thread_id:
  - 2947088854
categories:
  - News
tags:
  - Bing
  - 'Tips &amp; Hacks'
---
Few hours back, I wrote about [latest orkut album bug which enabled any user to delete anyone&#8217;s photo][1]. Looked like orkut is reading this blog as a bug open from 4 days is now fixed <span style="text-decoration: line-through;">temporarily</span>.

Anyway I feel its safe to unveil details now. As most of the stuff below is technical in nature, you can skip it if you want&#8230;

**Where was the bug?**

The bug was in **EditPhotos.aspx, **a program which handles orkut new album feature, [editing all photos at once][2].

Now have a look at following URL structure&#8230;

`http://www.orkut.com/EditPhotos.aspx?uid=NUM1&aid=NUM2&full=1`

It takes three parameters. uid as most already know is a user id which is also in profile, scrapbook and user specific URL&#8217;s.

aid is for album id. Its relatively new and identifies each orkut album uniquely. It was introduced with the [launch of album feature][3] into orkut. Before that there was a single album only for all photos.

I don&#8217;t know more about **full=1** but it has to be there in every request I observed.

**How it was used?**

uid is easy to get but we need aid to target an album. Also all combination of uid and aid are not valid, even if they exist separately.

So best way was to go to album first. A URL to an album is like

`http://www.orkut.com/Album.aspx?uid=1545095170420763194&aid=1200558782`

Now use values of uid and aid from URL like above and construct a URL for **EditPhotos.aspx** which is like below, in this case&#8230;

`http://www.orkut.com/EditPhotos.aspx?uid=1545095170420763194&aid=1200558782&full=1 `

Now opening link like above just few hours back could give you EDIT access to the <a href="http://www.orkut.com/Profile.aspx?uid=1545095170420763194" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/Profile.aspx?uid=1545095170420763194', 'Tanmay&#8217;s']);" >Tanmay&#8217;s</a> album which we used in this example! 😉

**But what about locked or private album?**

Yeah, the question is valid as in order to gain EDIT access to album you need to **view **them first and if album is locked, you can not view them.

Now coming back to the event when [orkut launched album feature][3], if you remember, there was a default album created for you by orkut. All such album have **aid=1**. And uid is something not secret at all!

So even if a user choose to lock albums, first album could be viewed and edited! And barring one exception in my own test all locked album shown in content of first album. Of course I haven&#8217;t edited them! 😉

**What the hell is this EDIT access I am talking about?**

Put in simple terms, anyone can do to your albums things you think only you could do&#8230; 😉

**Where things might went wrong?**

As I mentioned in earlier post, it looked to me Orkut relayed upon authentication handled by parent program. **EditPhotos.aspx** have only direct link from **Album.aspx.** **Album.aspx** do authenticate a user in order to show/hide uploading option and some other features. But **EditPhotos.aspx** seemed to count on it, which is wrong thing to do. Every program where thing can be written back must authenticate content owner separately!

**Is this bug really fixed?**

<span style="text-decoration: line-through;">One word answer is NO. But orkut has taken down <strong>EditPhotos.aspx</strong> as of now so it will come back with fix hopefully. So as of now neither you, nor anyone else can use edit all photo feature at once!</span>

YES, the bug is fixed and **EditPhotos.aspx **is back. So there is nothing to worry for a while!

But I repeat, never count on orkut for your safety! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

 [1]: http://devilsworkshop.org/2008/04/18/alert-new-bug-in-orkut-albums-let-user-edit-anyones-image-captions-delete-photos-and-more/
 [2]: http://devilsworkshop.org/2008/04/15/orkut-new-album-features-edit-all-captions-at-once-reorder-photos/
 [3]: http://devilsworkshop.org/2008/01/04/organize-photos-into-album-on-orkut-new-feature/
