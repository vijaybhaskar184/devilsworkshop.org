---
title: 5 Best Blogspot Blogger Hacks Everyone Should Use!
author: alokchaudhari
date: 2008-12-01
url: /5-best-blogspot-blogger-hacks/
views:
  - 1337
dsq_thread_id:
  - 2947093302
categories:
  - Tips
tags:
  - Adsense
  - Blogger
  - Blogger(BlogSpot)
  - Blogging
  - Mobile
  - Related Posts
  - Security
---
Well I started blogging around three month ago using blogger and it turned out to be quite interesting experience. In my view, the best way to improve your blog is to see what other are doing?

So I started observing some very nicely formatted blogs and noticed what kind of hacks and modification they use for successful blogging and tried to implement them in my own template. Voila! After hours of research and browsing, I have made a list of all hacks which are must have for a professional blog.

### Back up first

It is important to backup your Blogger template (especially before attempting any template customizations). Download a copy of your template to your computer, which you can access in the future if you need to restore your theme (or your entire blog).

<span>For Blogger XML based templates (Layouts):</span>

<p style="center">
  <span style="underline"><a href="http://cdn.devilsworkshop.org/files/2008/11/2.jpg"></a><a href="http://cdn.devilsworkshop.org/files/2008/11/5.bmp"><img class="alignnone size-medium wp-image-2671" src="http://cdn.devilsworkshop.org/files/2008/11/5.bmp" alt="" width="632" height="177" /></a></span>
</p>

Go to **Layout > Edit HTML** in your Blogger dashboard, then click on the link near the top of the page which says ***&#8220;Download Full Template&#8221;***. This will save a copy of your full template as an XML file to your computer.

Now lets go for some best Blogger hacks&#8230;

## Expandable post hack&#8230;

<p style="center">
  <img class="alignnone" src="http://4.bp.blogspot.com/_xn2gmPb9TfM/SL_dTUFR9zI/AAAAAAAACLY/mqLCXbyt2dA/s400-R/blogger-excerpts-2.png" alt="" width="400" height="107" />
</p>

This hacks gives your blog a professional look by shrinking your full post to few lines and displaying a ***read more*** or ***continue reading*** link. In many ways this hack is unique. It increases your page impressions and it also helps your blog to load quickly by just loading summaries instead of full posts. This hack has many variations. Many bloggers have modified it in their own way. Let&#8217;s see some good variations&#8230;

### Variation 1

Ramani on<a href="http://hackosphere.blogspot.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://hackosphere.blogspot.com', ' hackosphere']);" > hackosphere</a> was one of first who promoted this hack. In this version of hack, it uses insertion of codes around various location of your template. This hack is good for people who use a simple template with many hacks.

One drawback is: your have to edit each of your earlier post and insert codes between them to apply this hack uniformly. <img src="http://devilsworkshop.org/wp-includes/images/smilies/frownie.png" alt=":-(" class="wp-smiley" style="height: 1em; max-height: 1em;" />

The problem with this is if you use other hacks it may get disturbed which may result in the read more link disappearing or sometimes appearing after post.Codes for this hack are linked below

<a href="http://hackosphere.blogspot.com/2006/11/selective-expandable-posts.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://hackosphere.blogspot.com/2006/11/selective-expandable-posts.html', 'Install this hack ']);" >Install this hack </a>

### Variation 2

I used Ramani&#8217;s hacks for quite a time which required editing around the ***<post:data.body/>*** section. It created some problems for me so I found this variation.

Amanda on <a href="http://www.bloggerbuster.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bloggerbuster.com', 'bloggerbuster ']);" >bloggerbuster </a>offers a better version of this hack. This is better in many ways. You can use (install) it easily and after installing you don&#8217;t have to add separate code between and at end of posts. This automatically shrinks your post and adds ***read more*** link. Have a look at codes you need to add&#8230;

`<b:if cond='data:blog.pageType != "item"'><br />
<div class='excerpt post-body entry-content'><br />
<data:post.body/><br />
<div style='clear: both;'/> <!-- clear for photos floats --><br />
</div><br />
<b:else/><br />
<div class='post-body entry-content'><br />
<span style="line-through"> <data:post.body/></span><br />
<div style='clear: both;'/> <!-- clear for photos floats --><br />
</div><br />
</b:if>`

This is the best hack for expandable post summaries and it is also hassle free. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<a href="http://www.bloggerbuster.com/2008/09/elegant-post-summaries-for-blogger-with.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bloggerbuster.com/2008/09/elegant-post-summaries-for-blogger-with.html', 'Install this hack']);" >Install this hack</a>

## Paged navigation hack

<p style="center">
  <img class="alignnone" src="http://i263.photobucket.com/albums/ii150/mohamedrias/PageNavigationMenuWidgetforBlogger.jpg" alt="" width="480" height="80" />
</p>

This is really a simple and useful widget. It adds a paged navigation at the end of your posts. Nice way to increase your page impression and it also give option to reader to visit more of your posts in random order.

Thanks to Rias he managed to make this hack as an widget so you can add it to your blog without any hassles. This is so perfect that no variation is needed for this one. Still if you want one, you can check this one posted on [Devils Workshop][1] by [Arjun][2].

<a href="http://rias-techno-wizard.blogspot.com/2008/07/page-navigation-menu-widget-for-blogger.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rias-techno-wizard.blogspot.com/2008/07/page-navigation-menu-widget-for-blogger.html', 'Install this hack']);" >Install this hack</a>

## Related post hack

This is very useful and productive hack. It adds a list of related posts after your post content. This is the best way to make your visitor spend more time on your blog without annoying them at all. It also increases impressions and earnings. Also as a visitor spend more time on your blog, he is more likely to subscribe to your RSS feed.

### Variation 1

Rias again offers a way to do this but his method is quite complex but offers flexibility. You can try it but it involves lot of editing. Good for bloggers who are comfortable with codes!

<a href="http://rias-techno-wizard.blogspot.com/2008/08/related-posts-widget-for-blogger-bugs.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rias-techno-wizard.blogspot.com/2008/08/related-posts-widget-for-blogger-bugs.html', 'Install this hack']);" >Install this hack</a>

### Variation 2

This is more comfortable way to install this hack on your blogger template. In this version, you need to put a section of code around ***<post.data:body/>*** section and its done!

Its a very easy to use and credit goes to Jackbook for this version of hack.

<a href="http://www.jackbook.com/blogger-hack-blogspot-hack-blogger-templates-customizing/related-posts-entries-on-blogger-blogspot" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.jackbook.com/blogger-hack-blogspot-hack-blogger-templates-customizing/related-posts-entries-on-blogger-blogspot', 'Install this hack']);" >Install this hack</a>

## Social bookmarking

Social bookmarking services are a great way to drive more visitor to your blog and find many potential readers. Services like Digg, Stumble upon, Technorati has helped many bloggers succeed. There are methods which allows you put a set of icons that link to popular social bookmarking services.

### Variation 1

Well this hack is designed by <a href="http://www.bloggerplugins.org" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bloggerplugins.org', 'Annesh']);" >Annesh</a> and Beautiful beta. This hack is simple to use.

Just a two step process and you can add a set of booking icons that will appears at the end of your each post. You can add/remove social bookmarking icons that as per your choice.

<a href="http://www.bloggerplugins.org/2007/09/social-bookmarking-elements-after-each.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bloggerplugins.org/2007/09/social-bookmarking-elements-after-each.html', 'Install this hack']);" >Install this hack</a>

### Variation 2* (Added by Editor)*

[Rahul][3] created this hack when he was on Blogger. This supports around 30 top social boomarking services and also provide option to add all of them once or one-by-one.

[Install this hack][4]

## AdSense after each post

Using AdSense after each post is best way to increase your AdSense revenue. It helps in getting more clicks on ads. I used Rahul&#8217;s method to do it.

This is good for people who do not use expandable post hack. The problem is, ad appears on home page as well the post pages. Look at screen shot below&#8230;

<p style="center">
  <a href="http://cdn.devilsworkshop.org/files/2008/11/3.bmp"><img class="alignnone size-medium wp-image-2667" src="http://cdn.devilsworkshop.org/files/2008/11/3.bmp" alt="" /></a>
</p>

If you are using expandable post hack then it doesn&#8217;t look good to show ads on homepage. You can avoid this by adding two lines of code around codes provided in Rahul&#8217;s post&#8230;

`<b:if cond='data:blog.pageType == "item"'><br />
"Modified  Google AdSense Ad Code"<br />
</b:if>`

The above lines add a condition which prevent this hack frrom working on homepage, label(category) or archive pages. Look at following screenshot for some help&#8230;

[<img class="alignnone size-medium wp-image-2669" src="http://cdn.devilsworkshop.org/files/2008/11/4.bmp" alt="" />][5]

That&#8217;s All! If you have any really good hack, please share via comments!

Thanks for reading&#8230; <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

* * *

***[Editor Note:** This is first post by <a href="http://www.freewaresnbeta.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.freewaresnbeta.com/', 'Alok Chaudhari']);" >Alok Chaudhari</a>. He blogs at <a href="http://www.freewaresnbeta.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.freewaresnbeta.com/', 'Freewares n Beta']);" >Freewares n Beta</a> about best freeware stuff.*</p> 

*If you like to [write][6] for Devils Workshop, please [check this][6]. Details about our [revenue sharing programs][6] are [here][6].****]***

 [1]: http://devilsworkshop.org/page-navigation-hack-for-blogger/
 [2]: http://devilsworkshop.org/author/arjunskumar47/
 [3]: http://devilsworkshop.org/author/admin/
 [4]: http://devilsworkshop.org/blogger-beta-adding-posts-to-30-social-bookmarking-sites/
 [5]: http://cdn.devilsworkshop.org/files/2008/11/4.bmp
 [6]: http://devilsworkshop.org/join-dw/
