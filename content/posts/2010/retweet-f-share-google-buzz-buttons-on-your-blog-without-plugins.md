---
title: 'Retweet, F Share & Google Buzz buttons on your Blog without plugins.'
author: saorabhkumar
date: 2010-03-14
url: /retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/
robotsmeta:
  - index,follow
views:
  - 2645
dsq_thread_id:
  - 2947108438
categories:
  - Tips
tags:
  - Blogging
  - Social Media
---
<p style="text-align: left;">
  <a rel="attachment wp-att-21749" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/test/"><img class="aligncenter size-full wp-image-21749" title="test" src="http://cdn.devilsworkshop.org/files/2010/03/test.jpg" alt="" width="341" height="213" /></a>The motive of all three popular buttons is to share our idea with a community, people and friends on twitter, facebook and other social networking sites. These buttons show a neat count of the number of times your blog post has been shared.
</p>

<!--more-->

## Why the available Plugins shouldn&#8217;t be used ?

  * Plugins have a bunch of codes and images, which inturn increases loading time of your site.
  * It takes some extra space on your server.
  * All plugins are based or we can say designed on **I Frame.** This I frame results into error when tested on W3C validator.
  * The customization of the share buttons is impossible with plugins.

## How to use share scripts?

Be sure to place the following code in your template page (within **index.php**, **single.php**, and /or **page.php**) or as per your requirement.

**1) For Retweet button: **

Go to** **home.php or** **index.php place the code before or after ** : ***<?php the_content() ?>*

<script type=&#8221;text/javascript&#8221;>

tweetmeme_source = &#8216;<the name what you want to display before retweet post>';

tweetmeme_style = &#8216;<size style>';

tweetmeme_url = &#8216;<the post permalink**>**&#8221;;

</script>

<script type=&#8221;text/javascript&#8221; src=&#8221;http://tweetmeme.com/i/scripts/button.js&#8221;></script>

For customization of the retweet button use the following scripts:

<table style="height: 428px;" border="1px" width="590">
  <tr>
    <td>
      <strong>Script</strong>
    </td>
    
    <td>
      <strong>Renders this button</strong>
    </td>
    
    <td style="text-align: center;">
      <strong>Size</strong>
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <script type=&#8221;text/javascript&#8221; src=&#8221;http://tweetmeme.com/i/scripts/button.js&#8221;></script>
    </td>
    
    <td>
      <a href="http://devilsworkshop.org/wp-content/uploads/2010/03/81.jpg"></a><a rel="attachment wp-att-21670" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/retweet-button-types-copy-copy/"><img class="aligncenter size-full wp-image-21670" title="retweet button types copy copy" src="http://cdn.devilsworkshop.org/files/2010/03/retweet-button-types-copy-copy.jpg" alt="" width="151" height="98" /></a>
    </td>
    
    <td style="text-align: center;">
      57&#215;57 pixels
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <script src=&#8221;http://www.twittlink.com/tools/button_b.js&#8221; type=&#8221;text/javascript&#8221;/></script>
    </td>
    
    <td>
      <a rel="attachment wp-att-21671" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/22-2/"><img class="size-full wp-image-21671 alignleft" title="22" src="http://cdn.devilsworkshop.org/files/2010/03/22.jpg" alt="" width="59" height="63" /></a>
    </td>
    
    <td style="text-align: center;">
      57&#215;57 pixels
    </td>
  </tr>
  
  <tr style="text-align: center;">
    <td style="text-align: left;">
      <script type=&#8221;text/javascript&#8221; src=&#8221;http://widgets.backtype.com/tweetcount.js&#8221;></script
    </td>
    
    <td>
      <em><a href="http://premium.greentechbytes.com/wp-content/uploads/2010/03/61.jpg" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://premium.greentechbytes.com/wp-content/uploads/2010/03/61.jpg', '']);" ></a><a rel="attachment wp-att-21672" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/attachment/33/"><img class="size-full wp-image-21672 alignleft" title="33" src="http://cdn.devilsworkshop.org/files/2010/03/33.jpg" alt="" width="60" height="75" /></a><br /> </em>
    </td>
    
    <td>
      57&#215;57 pixels
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <script src=&#8221;http://twittley.com/button/button.js&#8221;></script>
    </td>
    
    <td>
      <a rel="attachment wp-att-21673" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/44-2/"><img class="size-full wp-image-21673 alignleft" title="44" src="http://cdn.devilsworkshop.org/files/2010/03/44.jpg" alt="" width="74" height="88" /></a>
    </td>
    
    <td style="text-align: center;">
      57&#215;57 pixels
    </td>
  </tr>
</table>

**Changing the URL Shortener used**

We have also added the ability to use a URL shortener of your choice instead of our default one.

If you would like to do this then you need to include the “tweetmeme_service” parameter as shown below:

<script type=&#8221;text/javascript&#8221;>  
tweetmeme_service = &#8216;bit.ly';  
</script>  
<script type=&#8221;text/javascript&#8221; src=&#8221;http://tweetmeme.com/i/scripts/button.js&#8221;></script>

**2) For facebook share count buttons:**

<p style="text-align: left;">
  Again go to <strong>home.php </strong>or <strong>index.php, </strong>place the code before or after<em> <?php the_content() ?></em><strong></strong>
</p>

<p style="text-align: left;">
  <strong><br /> </strong><a name=&#8221;fb_share&#8221; type=&#8221;button_count&#8221; <strong>share_url=&#8221;<pots permalink>&#8221;</strong></a><br /> <script src=&#8221;http://static.ak.fbcdn.net/connect.php/js/FB.Share&#8221; type=&#8221;text/javascript&#8221;></script>
</p>

<p style="text-align: left;">
  The above script will render a normal share count button within a post.
</p>

<p style="text-align: left;">
  You can also try this,
</p>

<table style="height: 329px;" border="1" width="588">
  <tr>
    <td>
      <strong>Using this code</strong>
    </td>
    
    <td style="text-align: left;">
      <strong>Renders this button</strong>
    </td>
    
    <td style="text-align: center;">
      <strong>Size</strong>
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <a name=&#8221;fb_share&#8221; type=&#8221;box_count&#8221; share_url=&#8221;YOUR_URL&#8221;></a>
    </td>
    
    <td>
      <a rel="attachment wp-att-21693" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/share_boxcount/"><img class="aligncenter size-full wp-image-21693" title="Share_boxCount" src="http://cdn.devilsworkshop.org/files/2010/03/Share_boxCount.png" alt="" width="64" height="66" /></a>
    </td>
    
    <td style="text-align: center;">
      57&#215;57 pixels
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <a name=&#8221;fb_share&#8221; type=&#8221;button_count&#8221; share_url=&#8221;YOUR_URL&#8221;></a>
    </td>
    
    <td>
      <a title="Image:share_buttonCount.png" href="/index.php/Image:Share_buttonCount.png"><br /> </a><a rel="attachment wp-att-21695" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/share_buttoncount/"><img class="aligncenter size-full wp-image-21695" title="Share_buttonCount" src="http://cdn.devilsworkshop.org/files/2010/03/Share_buttonCount.png" alt="" width="107" height="27" /></a>
    </td>
    
    <td style="text-align: center;">
      96&#215;18 pixels
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <a name=&#8221;fb_share&#8221; type=&#8221;button&#8221; share_url=&#8221;YOUR_URL&#8221;></a>
    </td>
    
    <td>
      <a title="Image:share_button.png" href="/index.php/Image:Share_button.png"><br /> </a><a rel="attachment wp-att-21694" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/share_button/"><img class="aligncenter size-full wp-image-21694" title="Share_button" src="http://cdn.devilsworkshop.org/files/2010/03/Share_button.png" alt="" width="64" height="24" /></a>
    </td>
    
    <td style="text-align: center;">
      56&#215;18 pixels
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <a name=&#8221;fb_share&#8221; type=&#8221;icon_link&#8221; share_url=&#8221;YOUR_URL&#8221;>Share</a>
    </td>
    
    <td>
      <a rel="attachment wp-att-21692" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/icon_link/"><img class="aligncenter size-full wp-image-21692" title="Icon_link" src="http://cdn.devilsworkshop.org/files/2010/03/Icon_link.png" alt="" width="60" height="26" /></a>
    </td>
    
    <td style="text-align: center;">
      51&#215;15 pixels
    </td>
  </tr>
  
  <tr>
    <td style="text-align: left;">
      <a name=&#8221;fb_share&#8221; type=&#8221;icon&#8221; share_url=&#8221;YOUR_URL&#8221;></a>
    </td>
    
    <td>
      <a rel="attachment wp-att-21691" href="http://devilsworkshop.org/retweet-f-share-google-buzz-buttons-on-your-blog-without-plugins/icon/"><img class="aligncenter size-full wp-image-21691" title="Icon" src="http://cdn.devilsworkshop.org/files/2010/03/Icon.png" alt="" width="19" height="19" /></a>
    </td>
    
    <td style="text-align: center;">
      18&#215;15 pixels
    </td>
  </tr>
</table>

<p style="text-align: left;">
  As for example<br /> <strong>share_url= <?php the_permalink() ?></strong>
</p>

<p style="text-align: left;">
  Now its depends up to you that where you want to place the buttons. For doing this<br /> Just put all the code within a <strong><div> </div> </strong>and apply some<strong> CSS </strong>according to its placement.<br /> <strong> </strong>
</p>

<p style="text-align: left;">
  <strong>3: ) How to use Google buzz</strong>
</p>

<p style="text-align: left;">
  Go to<strong> home.php</strong> or <strong>index.php, </strong>place the code before or after<em><strong> <?php the_content() ?></strong></em>
</p>

<p style="text-align: left;">
  <a href=&#8221;http://www.google.com/reader/link?url=<post permalink>&title=<?php the_title(); ?>&src<strong>URL=<?php bloginfo(&#8216;url&#8217;); ?>&#8221; </strong>target=&#8221;_blank&#8221; rel=&#8221;nofollow external&#8221;>
</p>

<p style="text-align: left;">
  <img alt=&#8217;Buzz It&#8217; src=&#8217;http://i46.tinypic.com/ouprt1.jpg&#8217;/>
</p>

<p style="text-align: left;">
  The following code will display the compact size of google buzz button.<br /> The only thing is that make sure that URL have your post permalink.<br /> As For Example: &#8211;<br /> <strong>url=<?php the_permalink() ?></strong>
</p>

<p style="text-align: left;">
  You can change the default image according to your requirement, For high Resoultion Google Buzz Icons <a href="http://www.chethstudios.net/2010/02/google-buzz-social-icons-for-bloggers.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.chethstudios.net/2010/02/google-buzz-social-icons-for-bloggers.html', 'click']);" title="Google Buzz Buttons With diffrent Styles"  target="_blank">click</a> here.
</p>

<p style="text-align: left;">
  <em>This is my first post, thanks for reading. Suggestions and feedback&#8217;s  are most welcome.</em>
</p>
