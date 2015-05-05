---
title: Orkut Community Search Feature is Broken
author: rahul286
date: 2008-05-08
url: /orkut-community-search-feature-is-broken/
views:
  - 206
dsq_thread_id:
  - 2947089453
categories:
  - News
tags:
  - Bing
  - Blogger
  - Orkut
---
Looks like orkut is having really tough time maintaining their codes after [quick][1] [launch][2] of so [many][3] [new][4] [feature][5] in last few days.

After recent [bug in communities page][6], another related feature, community search is broken. Following is screenshot of a <a href="http://www.orkut.com/CommMembers.aspx?tab=0&cmm=19587001&q=pune" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/CommMembers.aspx?tab=0&cmm=19587001&q=pune', 'community search I performed']);" >community search I performed</a>&#8230;

<img class="wp-image-54123" src="http://cdn.devilsworkshop.org/files/2008/05/orkut-community-search-feature.jpg" alt="orkut - Community Search Feature.jpg" width="480" height="212" />

If you have noticed it, the navigation links are missing, so you can not check all search results. Shown below is screenshot of working navigation links&#8230;

<img src="http://cdn.devilsworkshop.org/files/2008/05/orkut-community-members-navigation.jpg" alt="orkut - Community Members Navigation.jpg" width="480" height="200" />

**Technical Stuff&#8230;**

Problem is in <span style="line-height: normal;font-family: Helvetica"><strong>CommMembers.aspx</strong> file which is responsible for navigating and searching community members. Also there seems small error in code, as navigation works with <a href="http://www.orkut.com/CommMembers.aspx?cmm=19587001" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/CommMembers.aspx?cmm=19587001', 'view all members']);" >view all members</a> options but it breaks only when you do a <a href="http://www.orkut.com/CommMembers.aspx?tab=0&cmm=19587001&q=pune" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.orkut.com/CommMembers.aspx?tab=0&cmm=19587001&q=pune', 'search on members list']);" >search on members list</a>.</span>

<span style="line-height: normal;font-family: Helvetica"><strong>Related: </strong></span>[Check][7] [some][8] [new][9] [features][10] [launched][11] [by][12] [orkut][13] [recently][14]

 [1]: http://devilsworkshop.org/2008/05/05/add-co-owners-to-orkut-communities/
 [2]: http://devilsworkshop.org/2008/05/04/orkut-added-new-settings-create-filters-for-notification/
 [3]: http://devilsworkshop.org/2008/05/04/orkut-users-can-add-comments-on-photos/
 [4]: http://devilsworkshop.org/2008/05/04/orkut-allows-10000-photo-uploads-in-albums/
 [5]: http://devilsworkshop.org/2008/05/04/orkut-added-facebook-like-status-updates-feature/
 [6]: http://devilsworkshop.org/2008/05/07/orkut-showing-unjoined-communities-in-my-communities-list-new-bug/
 [7]: http://devilsworkshop.org/../2008/05/04/orkut-added-facebook-like-status-updates-feature/
 [8]: http://devilsworkshop.org/../2008/02/11/orkuts-new-bulk-photo-uploader-feature/
 [9]: http://devilsworkshop.org/../2008/05/04/orkut-users-can-add-comments-on-photos/
 [10]: http://devilsworkshop.org/../2008/04/15/orkut-new-album-features-edit-all-captions-at-once-reorder-photos/
 [11]: http://devilsworkshop.org/../2008/05/04/orkut-allows-10000-photo-uploads-in-albums/
 [12]: http://devilsworkshop.org/../2008/04/12/orkut-low-bandwidth-version-good-for-dial-up-and-slow-gprs-users/
 [13]: http://devilsworkshop.org/../2008/04/15/post-images-videos-and-other-html-in-orkut-communities/
 [14]: http://devilsworkshop.org/../2008/04/14/orkut-goes-on-mobile-silently-morkutcom/
