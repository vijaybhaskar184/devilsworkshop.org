---
title: 'Blogger + Adsense Hack: Show ads after each post to earn more from your blogger beta blog!'
author: rahul286
date: 2007-04-06
url: /blogger-adsense-hack-show-ads-after-each-post-to-earn-more-from-your-blogger-beta-blog/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2007/04/blogger-adsense-hack-show-ads-after.html
views:
  - 4105
dsq_thread_id:
  - 2946413840
categories:
  - Tips
tags:
  - Adsense
  - Blogger
  - Blogging
  - Google
  - Internet Explorer
  - Javascript
  - Security
---
**Update: **Blogger allows this officially now. Check [this guide][1] for easier instructions.

* * *This trick surprisingly increased my earnings 4 times from last few days! I have modified my blog code to put adsense ads between post title and post body!

  
Well this kind of ad placement will surely result in higher payout! But I&#8217;m demonstrating how to do that for blogger beta only! You can apply similar hack for other blogging platform! Google for help&#8230; 😉</p> 

<span style="font-weight: bold;"><strong>#Steps for placing ads in every post!</strong><br /> </span>1. Log in to your blogger beta account!  
2. From your dashboard, click on <span style="font-weight: bold">&#8220;Layout&#8221;<br /> </span>3. Next click<span style="font-weight: bold"> &#8220;Edit HTML&#8221;<br /> </span>4. Now Check<span style="font-weight: bold"> &#8220;</span><span style="font-weight: bold">Expand Widget Templates&#8221; </span>(by default it is unchecked)  
5. Now search for <span style="font-weight: bold; font-family: courier new;">post.body </span>in codes. (Better use your browsers built-in search feature)  
6. By default it should appear in your layout code only for once and you should reach the line&#8230;

> <p><data:post.body></data:post.body></p>

7. Now if you want to put your adsense codes between post title and post body paste it above the line you found in step 6 or below the line to show ads after posts!  
8. Wait its not over yet! You have to modify adsense codes a little-bit. But don&#8217;t worry about the TOS as this modification will not be visible after template gets saved. (In-fact I&#8217;m doing this only)  
9. Your Google Adsense Codes will have following lines!

<blockquote style="font-family: courier new; font-weight: bold">
  <p>
    <script> type=&#8217;text/javascript&#8217;><span style="color: #cc0000;"><</span>!&#8211;<br /> &#8230;..<br /> //&#8211;<span style="color: #cc0000;">></span><br /> </script>
  </p>
</blockquote>

just replace highlighted<span style="font-weight: bold"> <span style="color: #cc0000;"><</span></span> with <span style="color: #cc0000;"><</span> and <span style="font-weight: bold"><span style="color: #cc0000;">></span></span> with<span style="color: #cc0000;"> ></span><span style="font-weight: bold"><span style="color: #cc0000;"><br /> </span></span>If you have any doubt about this please read note at the end!<span style="font-weight: bold"><span style="color: #cc0000;"><br /> </span></span>10. Its time to hit preview button! <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<span style="font-weight: bold; ">#Tips: Using Blend template for Adsense!</span>  
<span>From day one, I have been using Blend template for Google Adsense. But in above hack you must use that! I feel so because your ads will appear in every post and end-user experience may degrade if your color scheme is annoying!</span>

<span style="font-weight: bold">#Note: How modification to the Adsense code is not against its TOS?</span>  
First you can open your blog and cross-check its source code using browsers &#8220;view source&#8221; option to see Adsense Codes back to what you have got!  
Now if you know about HTML then in HTML language, we just used <a href="http://www.w3schools.com/html/html_entities.asp" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.w3schools.com/html/html_entities.asp', 'HTML Character Entities']);" style="font-style: italic">HTML Character Entities</a>.  
What gets stored in blogger database is actual code!  
So don&#8217;t worry be happy & rich 😉

<span style="font-weight: bold">Related Posts:<br /> </span>

  * [Google Adsense Hack: Automated Section Targeting][2]
  * [Earning more with AdSense product referrals without violating TOS][3]

 [1]: http://devilsworkshop.org/2007/08/22/simplest-guide-to-show-adsense-ads-after-each-blog-post/
 [2]: http://devilsworkshop.org/2007/04/12/google-adsense-hack-automated-section-targetting-for-bloggers/
 [3]: http://devilsworkshop.org/2007/03/21/earning-more-with-adsense-product-referrals-without-viloating-tos/
