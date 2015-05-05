---
title: Add tweetmeme/ Retweet button in your blogger blog
author: sauravjit
date: 2009-10-01
url: /add-tweetmeme-retweet-button-in-your-blogger-blog/
robotsmeta:
  - index,follow
views:
  - 816
dsq_thread_id:
  - 2947102751
categories:
  - Tips
tags:
  - Blogger
  - Blogger(BlogSpot)
  - Blogging
  - Social Media
  - Twitter
---
Recently Devilsworkshop has added a very important &#8216;tweetmeme&#8217; button which you can see with every post. After using this button, I thought of installing it in my blog which is hosted on blogger.com (blogspot). Unfortunately there&#8217;s no direct widget which can be used for blogger but you can still use it in your blog, just follow the steps given below.

  1. Open your blogger dashboard.
  2. Go to &#8216;Layout&#8217; >> &#8216;Edit Html&#8217;.
  3. Check the &#8216;Expand Widget Templates&#8217;
  4. Now find this html code there,

*<p><data:post.body/>*

Just after the above code and before

* </p>*

copy and paste,

*<script type=&#8221;text/javascript&#8221;>  
tweetmeme_url = &#8216;<data:post.url/>**&#8216;;  
tweetmeme_source = &#8216;<span style="color: #ff0000">twitterusername</span>&#8216;;  
</script>*

*<script type=&#8221;text/javascript&#8221; src=&#8221;http://tweetmeme.com/i/scripts/button.js&#8221;></script>*

Save Changes and see the retweet button on your blog with every post.

<img class="aligncenter size-full wp-image-15162" src="http://cdn.devilsworkshop.org/files/2009/09/RT.jpg" alt="RT" width="572" height="232" />

**CHANGES:**

In the above code change &#8216;twitterusername&#8217; in red to your twitter&#8217;s username. This change is required to use your username in every RT or Retweer else it will use @tweetmeme. in the above code the RT will be RT @twitterusername.

That&#8217;s it, now all you need to do is change the placement of the button and select which suits best to your blog.

**SOURCE: **<a href="http://help.tweetmeme.com/2009/04/07/integrating-the-tweetmeme-button-into-blogger/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://help.tweetmeme.com/2009/04/07/integrating-the-tweetmeme-button-into-blogger/', 'tweetmeme blog']);" target="_self">tweetmeme blog</a>
