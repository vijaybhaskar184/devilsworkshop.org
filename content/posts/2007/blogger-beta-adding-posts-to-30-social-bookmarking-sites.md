---
title: 'Blogger Beta: Adding Posts to 30+ Social Bookmarking Sites'
author: rahul286
date: 2007-02-23
url: /blogger-beta-adding-posts-to-30-social-bookmarking-sites/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/02/blogger-beta-adding-posts-to-30-social.html
views:
  - 146
dsq_thread_id:
  - 2946414983
categories:
  - Reviews
tags:
  - Blogger
  - Delicious
  - Firefox
  - Google
  - Internet Explorer
  - Security
  - Social Bookmarking
---
In this post I&#8217;m providing you with codes for adding more than <span style="font-weight: bold">30</span> <span style="font-weight: bold">&#8220;add-to&#8221;</span> buttons for blog post footer so visitor of ur site will be able to bookmark favorite posts on sites like delicious, technorati, digg, google, yahoo, furl, spurl, etc. There is absolutely no need to know HTML or anything else to make this work for you! Just note, this is only for <span style="font-weight: bold">blogger in beta</span> user. For other blogs read <a href="http://3spots.blogspot.com/2006/02/30-social-bookmarks-add-to-footer.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://3spots.blogspot.com/2006/02/30-social-bookmarks-add-to-footer.html', 'this post']);" >this post</a>.

Now lets start&#8230;

**A. Get Access To Codes&#8230;**

  1. Login to your blogger in beta account.
  2. Click on Layout link of blog in concern from dashboard.
  3. It will open &#8220;Page Elements&#8221; tab.
  4. There will be an option &#8220;Edit HTML&#8221;, click on that.
  5. Now find a checkbox saying &#8220;Expand Widget Templates&#8221;, check that.

**B. Editing HTML Code&#8230; (Getting Ready)**

Just Search for following codes&#8230;.

<pre><code class="no-highlight">
&lt;!-- quickedit pencil --&gt;
&lt;b:include data='post' name='postQuickEdit'/&gt;
&lt;/span&gt; &lt;span class='post-backlinks post-comment-link'&gt;
&lt;b:if cond='data:blog.pageType != "item"'&gt;
&lt;b:if cond='data:post.showBacklinks'&gt;
&lt;a class='comment-link' expr:href='data:post.url + "#links"'&gt;&lt;data:top.backlinkLabel/&gt;&lt;/a&gt;
&lt;/b:if&gt;
&lt;/b:if&gt;
&lt;/span&gt; &lt;/p&gt;

&lt;p class='post-footer-line post-footer-line-2'&gt;&lt;span class='post-labels'&gt;
&lt;b:if cond='data:post.labels'&gt;
&lt;data:postLabelsLabel/&gt;
&lt;b:loop values='data:post.labels' var='label'&gt;
&lt;a expr:href='data:label.url' rel='tag'&gt;&lt;data:label.name/&gt;&lt;/a&gt;&lt;b:if cond='data:label.isLast != "true"'&gt;,&lt;/b:if&gt;
&lt;/b:loop&gt;
&lt;/b:if&gt;
&lt;/span&gt; &lt;/p&gt;</code></pre>

Once you find above code, write following codes below that&#8230;

<pre><code class="no-highlight">
&lt;p class='post-footer-line post-footer-line-3'&gt;
&lt;span style="color: #006600;font-weight: bold">&lt;!-- Add Bookmarking Code Here--&gt;&lt;/span>
&lt;/p&gt;</code></pre>

Now you are ready to add bookmarking codes!

<span style="font-weight: bold">C. Editing HTML Code&#8230; (Final Step <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" /><br /> </span>  
You have two options now.  
If u like to add all 30+ bookmarking codes in one-shot.

  1. Just <a href="http://pub.rtcamp.com/BookmarkingCode.txt" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://pub.rtcamp.com/BookmarkingCode.txt', 'download this text file']);" >download this text file</a>.
  2. Copy entire codes as it is.
  3. Paste these codes below <span style="color: #006600"><span style="font-weight: bold"><!&#8211; Add Bookmarking Code Here&#8211;></span> </span>and before<span style="color: #000099;font-weight: bold"> </p></span>.
  4. Press &#8220;PREVIEW&#8221; button in the bottom to check if its working.
  5. If yes, click &#8220;SAVE TEMPLATE&#8221; and u r done!

Or if u r choosy then copy codes for ur favorite bookmarking site from following listing one by one and paste them between <!&#8211; Add Bookmarking Code Here&#8211;> and <span style="color: #000099;font-weight: bold"> </p></span>.

<img class="wp-image-53947" src="http://www.stumbleupon.com/favicon.ico" alt="digg" height="16" width="16" /> Stumbleupon (New)  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.stumbleupon.com/submit?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Stumble This!&#8217;><img alt=&#8217;Stumble&#8217; height=&#8217;16&#8217; src=&#8217; http://www.stumbleupon.com/favicon.ico&#8217; width=&#8217;16&#8217;/></a></textarea>

<img src="http://www.indianpad.com/favicon.ico" alt="digg" height="16" width="16" />IndianPad (New)  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.indianpad.com/submit?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Bookmark to IndianPad and get paid!&#8217;><img alt=&#8217;Indianpad&#8217; height=&#8217;16&#8217; src=&#8217; http://www.indianpad.com/favicon.ico&#8217; width=&#8217;16&#8217;/></a></textarea>

<img src="http://www.exploding-boy.com/images/logos/digg.gif" alt="digg" height="16" width="16" /> Digg  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href='&#8221;http://digg.com/submit?phase=2&url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title&#8217; target=&#8217;_blank&#8217;> <img alt=&#8217;DiggIt&#8217; height=&#8217;16&#8217; src=&#8217;http://www.exploding-boy.com/images/logos/digg.gif&#8217; width=&#8217;16&#8217;/> </a></textarea>

<img src="http://www.exploding-boy.com/images/logos/digg.gif" alt="digg" height="16" width="16" /> Digg  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href='&#8221;http://digg.com/submit?phase=2&url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title&#8217; target=&#8217;_blank&#8217;> <img alt=&#8217;DiggIt&#8217; height=&#8217;16&#8217; src=&#8217;http://www.exploding-boy.com/images/logos/digg.gif&#8217; width=&#8217;16&#8217;/> </a></textarea>  
<img src="http://www.exploding-boy.com/images/logos/delicious.gif" alt="delicious" height="16" width="16" /> Delicious  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href='&#8221;http://del.icio.us/post?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title&#8217; target=&#8217;_blank&#8217;> <img alt=&#8217;Add to Del.icio.us&#8217; height=&#8217;16&#8217; src=&#8217;http://www.exploding-boy.com/images/logos/delicious.gif&#8217; width=&#8217;16&#8217;/> </a></textarea><span style="font-style: italic"> </span>  
<img alt="Technorati" src="http://img2.imagepile.net/images/ycc2106/78708502.png" height="16" width="16" />Technorati  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://technorati.com/faves?add=&#8221; + data:post.url &#8216; title=&#8217;Add this page to Technorati Favorites&#8217;><img alt=&#8217;Technorati&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/78708502.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Spurl" src="http://img2.imagepile.net/images/ycc2106/83344081.png" height="16" width="16" /> Spurl  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.spurl.net/spurl.php?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Spurl This!&#8217;><img alt=&#8217;Spurl&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/83344081.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Google" src="http://img2.imagepile.net/images/ycc2106/35814433.png" height="16" width="16" />Google  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.google.com/bookmarks/mark?op=add&bkmk=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Bookmark to Google&#8217;><img alt=&#8217;Google&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/35814433.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="BlinkList" src="http://img2.imagepile.net/images/ycc2106/89442389.png" height="16" width="16" />BlinkList  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.blinklist.com/index.php?Action=Blink/addblink.php&Url=&#8221; + data:post.url + &#8220;&Title=&#8221; + data:post.title &#8216; title=&#8217;Add To BlinkList&#8217;><img alt=&#8217;BlinkList&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/89442389.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Blogmarks" src="http://img2.imagepile.net/images/ycc2106/7577931.png" height="16" width="16" /> Blogmarks  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://blogmarks.net/my/new.php?mini=1&title=&#8221; + data:post.title + &#8220;&url=&#8221;+ data:post.url &#8216; title=&#8217;Bookmark This to Blogmarks&#8217;><img alt=&#8217;Blogmarks&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/7577931.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="askjeeves" src="http://img2.imagepile.net/images/ycc2106/96479491.png" height="16" width="16" />Askjeeves  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://myjeeves.ask.com/mysearch/BookmarkIt?v=1.2&t=webpages&title=&#8221; + data:post.title + &#8220;&url=&#8221; + data:post.url &#8216; title=&#8217;bookmark to Jeeves&#8217;><img alt=&#8217;askjeeves&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/96479491.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Wink" src="http://img2.imagepile.net/images/ycc2106/95672969.png" height="16" width="16" />Wink  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.wink.com/_/tag?url=&#8221; + data:post.url + &#8220;&doctitle=&#8221; + data:post.title &#8216; title=&#8217;Wink This!&#8217;><img alt=&#8217;Wink&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/95672969.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'Feedmarker'" src="http://img2.imagepile.net/images/ycc2106/95971882.png" height="16" width="16" />Feedmarker  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.feedmarker.com/admin.php?do=bookmarklet_mark&url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Add to feedmarker&#8217;><img alt=&#8217;Feedmarker&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/95971882.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'Mojo" src="http://www.rojo.com/rojo-static/images/favicon.ico" height="16" width="16" /> Rojo  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.rojo.com/submit/?title=&#8221; + data:post.title + &#8220;&url=&#8221; + data:post.url &#8216; title=&#8217;Bookmark This to Blogmarks&#8217;><img alt=&#8217;Mojo this page at Rojo&#8217; src=&#8217; http://www.rojo.com/rojo-static/images/favicon.ico&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'Buddymarks'" src="http://www2.blogger.com/%27http://img2.imagepile.net/images/ycc2106/69894407.png%27" height="16" width="16" /> Buddymarks  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://buddymarks.com/add_bookmark.php?bookmark_title=&#8221; + data:post.title + &#8220;&bookmark_url=&#8221;+ data:post.url &#8216; title=&#8217;bookmark to Buddymarks&#8217;><img alt=&#8217;Buddymarks&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/69894407.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'diigo'" src="http://www2.blogger.com/%27http://www.diigo.com/images/ii_blue.gif%27" height="16" width="16" />Diggo  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.diigo.com/post?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Diigo&#8217;><img alt=&#8217;diigo&#8217; height=&#8217;16&#8217; src=&#8217;http://www.diigo.com/images/ii_blue.gif&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="ma.gnolia" src="http://img2.imagepile.net/images/ycc2106/44917000.png" height="16" width="16" />Ma.galina  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://ma.gnolia.com/bookmarklet/add?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title&#8217; title=&#8217;Add to ma.gnolia&#8217;><img alt=&#8217;ma.gnolia&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/44917000.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img src="http://www2.blogger.com/%27http://www.netvouz.com/web/images/netvouz16.gif%27" height="16" width="16" />Netvouz  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.netvouz.com/action/submitBookmark?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title + &#8220;&popup=yes&#8221; &#8216; title=&#8217;Bookmark to Netvouz&#8217;><img height=&#8217;16&#8217; src=&#8217;http://www.netvouz.com/web/images/netvouz16.gif&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'Newsvine'" src="http://www2.blogger.com/%27" height="16" width="16" />Newsvine  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.newsvine.com/_tools/seed&save?u=&#8221; + data:post.url + &#8220;&h=&#8221; + data:post.title &#8216; title=&#8217;Bookmark to Newsvine&#8217;><img alt=&#8217;Newsvine&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/61968867.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'Nextaris'" src="http://www2.blogger.com/%27http://img2.imagepile.net/images/ycc2106/92909732.png%27" height="16" width="16" />Nextaris  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.nextaris.com/servlet/com.surfwax.Nextaris.Bookmarkletscmd=addurlrequest&v=1&url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216;> <img alt=&#8217;Nextaris&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/92909732.png&#8217; width=&#8217;16&#8217;/> </a></textarea><span style="font-style: italic"> </span>  
<img alt="'Nowpublic'" src="http://www2.blogger.com/%27http://img2.imagepile.net/images/ycc2106/38451081.png%27" height="16" width="16" />Nowpublic  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://view.nowpublic.com/?src=&#8221; + data:post.url + &#8220;&t=&#8221; + data:post.title &#8216;><img alt=&#8217;Nowpublic&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/38451081.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'reddit'" src="http://www2.blogger.com/%27http://img2.imagepile.net/images/ycc2106/33092456.png%27" height="16" width="16" />Reddit  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://reddit.com/submit?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Add to reddit&#8217;><img alt=&#8217;reddit&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/33092456.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'rawsugar'" src="http://www2.blogger.com/%27http://img2.imagepile.net/images/ycc2106/56440303.png" height="16" width="16" />RawSugar  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.rawsugar.com/pages/tagger.faces?turl=&#8221; + data:post.url + &#8220;&tttl=&#8221; + data:post.title &#8216; title=&#8217;Bookmark to RawSugar&#8217;><img alt=&#8217;rawsugar&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/56440303.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="'HOLM'" src="http://www2.blogger.com/%27http://img2.imagepile.net/images/ycc2106/67303319.png%27" height="16" width="16" />HOLM  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.hyperlinkomatic.com/lm2/add.html?LinkTitle=&#8221; + data:post.title + &#8220;&LinkUrl=&#8221; + data:post.url &#8216; title=&#8217;Add to HLOM&#8217;><img alt=&#8217;HOLM&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/67303319.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Scuttle" src="http://img2.imagepile.net/images/ycc2106/50964829.png" height="16" width="16" />Scuttle  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://scuttle.org/bookmarks.php/pass?action=add&address= &#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Bookmark to Scuttle&#8217;><img alt=&#8217;Scuttle&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/50964829.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Shadows" src="http://img2.imagepile.net/images/ycc2106/30177473.png" height="16" width="16" />Shadows  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.shadows.com/features/tcr.htm?url= &#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Tag to Shadows&#8217;><img alt=&#8217;Shadows&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/30177473.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Simpy" src="http://img2.imagepile.net/images/ycc2106/70286063.png" height="16" width="16" />Simpy  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.simpy.com/simpy/LinkAdd.do?href= &#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Add to Simpy&#8217;><img alt=&#8217;Simpy&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/70286063.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Smarking" src="http://img2.imagepile.net/images/ycc2106/21598036.png" height="16" width="16" />Smarking  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://smarking.com/editbookmark/?url=&#8221; + data:post.url + &#8220;&description=&#8221; + data:post.title &#8216; title=&#8217;Bookmark This to Smarking&#8217;><img alt=&#8217;Smarking&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/21598036.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Yahoo! Myweb" src="http://img2.imagepile.net/images/ycc2106/41626225.png" height="16" width="16" />Yahoo  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://myweb2.search.yahoo.com/myresults/bookmarklet?t= &#8221; + data:post.title + &#8220;&u=&#8221; + data:post.url &#8216; title=&#8217;Bookmark To Yahoo! MyWeb&#8217;><img alt=&#8217;Yahoo! Myweb&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/41626225.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Addtoany" src="http://img2.imagepile.net/images/ycc2106/10418375.png" height="16" width="16" />AddToAny  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.addtoany.com/?linkname=&#8221; + data:post.title + &#8220;&linkurl=&#8221; + data:post.url + &#8220;&type=page&#8221; &#8216;><img alt=&#8217;Addtoany&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/10418375.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="onlywire" src="http://img2.imagepile.net/images/ycc2106/2315000.png" height="16" width="16" />OnlyWire  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://www.onlywire.com/b/?u=&#8221; + data:post.url + &#8220;&t=&#8221; + data:post.title &#8216; title=&#8217;Bookmark with Onlywire&#8217;><img alt=&#8217;onlywire&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/2315000.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Socializer" src="http://img2.imagepile.net/images/ycc2106/67456207.png" height="16" width="16" />Socializer  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8221; http://ekstreme.com/socializer/?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Bookmark with Socializer:If your buttons not there try this&#8217;><img alt=&#8217;Socializer&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/67456207.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Squidoo" src="http://img2.imagepile.net/images/ycc2106/53248495.png" height="16" width="16" />Squidoo  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.squidoo.com/lensmaster/bookmark?&#8221; + data:post.url &#8216;><img alt=&#8217;Squidoo&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/53248495.png &#8216; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Tailrank" src="http://img2.imagepile.net/images/ycc2106/47382617.png" height="16" width="16" />Tailrank  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://tailrank.com/share/?text=&link_href=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Add to TailRank&#8217;><img alt=&#8217;Tailrank&#8217; height=&#8217;16&#8217; src=&#8217;http://img2.imagepile.net/images/ycc2106/47382617.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Unalog" src="http://img2.imagepile.net/images/ycc2106/19300886.png" height="16" width="16" />Unalog  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://unalog.com/my/stack/link?url=&#8221; + data:post.url + &#8220;&title=&#8221; + data:post.title &#8216; title=&#8217;Add to Unalog&#8217;><img alt=&#8217;Unalog&#8217; height=&#8217;16&#8217; src=&#8217; http://img2.imagepile.net/images/ycc2106/19300886.png&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>  
<img alt="Furl button" src="http://www.furl.net/i/favicon.gif" height="16" width="16" />Furl  
<textarea cols="40" rows="5" readonly="readonly"><a expr:href=&#8217; &#8220;http://www.furl.net/storeIt.jsp?u=&#8221; + data:post.url + &#8220;&t=&#8221; + data:post.title &#8216; title=&#8217;Bookmark To Furl&#8217;><img alt=&#8217;Furl button&#8217; height=&#8217;16&#8217; src=&#8217;http://www.furl.net/i/favicon.gif&#8217; width=&#8217;16&#8217;/></a></textarea><span style="font-style: italic"> </span>

Well if u like my work, spread it&#8230; buttons are below <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />  
If you have <span style="font-weight: bold">ANY </span>kind of difficulty, feel free to post a comment or mail me!
