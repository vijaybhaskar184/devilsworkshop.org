---
title: '[Alert] Gawker’s Source Code & 1.4 Million Users Database is on Torrent for Download'
author: rahul286
date: 2010-12-15
url: /alert-gawkers-source-code-user-database-download-torrent/
views:
  - 744
dsq_thread_id:
  - 2947116044
categories:
  - News
tags:
  - Download
  - Hack
  - privacy
  - Security
  - 'Tips &amp; Hacks'
  - Torrent
---
<figure id="attachment_34566" style="width: 333px;" class="wp-caption alignright"><a rel="attachment wp-att-34566" href="http://devilsworkshop.org/alert-gawkers-source-code-user-database-download-torrent/gawker_alert_torrent_download/"><img class="size-full wp-image-34566" title="gawker_alert_torrent_download" src="http://cdn.devilsworkshop.org/files/2010/12/gawker_alert_torrent_download.png" alt="" width="333" height="312" /></a><figcaption class="wp-caption-text">Alert Gawker passwords </figcaption></figure> 

I read somewhere longtime back that Internet is **write-only** medium, i.e you cannot delete once anything goes on the web!

Unfortunately, for Gawker medias more than 1,400,000 registered users, above statement seem to be getting true.

If you search for &#8220;gawker&#8221; keyword on any top [torrent-search engines][1] you will see list of torrents with all leaked data. Tough such torrents are getting deleted by torrent sites, new torrents with same content are coming up much faster.

## So what does this hacked *stuff* contains?

It contains, source code of Gawker Media&#8217;s blogging platform (I personally do not interest in its code as I always believed they should have moved to WordPress long time back!)

It contains database dump which includes user-info including encrypted passwords. As passwords are encrypted you *may* feel safe.

Reason for putting emphasis on word &#8220;may&#8221; is &#8211;  I am yet to check Gawker code&#8217;s to see how password&#8217;s were encrypted. But if they were really &#8220;encrypted&#8221; and not &#8220;hashed&#8221; in pure technical terms, they can be decrypted. Also if they are hashed using simple md5, without any <a href="http://en.wikipedia.org/wiki/Salt_(cryptography)" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Salt_(cryptography)', 'cryptographic salt']);" >cryptographic salt</a>, they are vulnerable to attack using widespread techniques like <a href="http://en.wikipedia.org/wiki/Rainbow_table" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://en.wikipedia.org/wiki/Rainbow_table', 'rainbow table']);" >rainbow table</a>.

**Update:** Torrent I downloaded contains decrypted password of entire Gawker media staff. This surely means our passwords can be very well decrypted!

## Do we need to worry?

One word answer is &#8211; **Yes**!

Considering overall panic around us, it seems that user passwords could be recovered. LinkedIn&#8217;s forcing their users to reset their passwords, limited to users who were part of 1.4 million leaked database, could be viewed as their proactive security measure or simply their figuring out what the worst could happen!

My next line could be considered as an overstatement, but developers who works on closed-source system often rely more on &#8220;close&#8221; nature of codes for security rather than taking efforts to use best cryptographic techniques. So I really won&#8217;t be surprised if a hacker managed to decrypt atleast some of them password&#8217;s from Gawker&#8217;s leaked database.

**Related:** [List of 5 Top Torrent-Search Engines][1]

 [1]: http://devilsworkshop.org/5-best-torrent-search-engines-google-trick-for-torrent-search/
