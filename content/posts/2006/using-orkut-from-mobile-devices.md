---
title: Using Orkut From Mobile Devices!
author: rahul286
date: 2006-11-11
url: /using-orkut-from-mobile-devices/
blogger_blog:
  - rb286.blogspot.com
blogger_permalink:
  - /2006/11/using-orkut-from-mobile-devices.html
views:
  - 4036
dsq_thread_id:
  - 2946417498
categories:
  - Reviews
tags:
  - Bing
  - Blogger
  - Google
  - Internet Explorer
  - Javascript
  - Security
  - Windows
---
<span style="color: #800000"><strong>Important Update:</strong></span> [Orkut is officially accessible on mobile now][1], so this post will be marked outdated.

* * *Recently I have seen lots of people talking about orkutting from mobile devices!Before going ahead here is an excerpt from Orkut Help page!</p> 

> *** Why can&#8217;t I access orkut from my mobile device? ***
> 
> *We&#8217;re sorry to hear about any difficulty you&#8217;ve experienced accessing orkut.com. Currently, orkut.com isn&#8217;t compatible with mobile devices. To access your orkut profile, please try logging in using your computer&#8217;s web browser.*

So today I&#8217;m posting about how to use orkut from mobile devices! Before going ahead lemme tel u few things about my environment! I have Nokia N-70 with opera 8.62 installed!  
U may use opera mini or any version of opera which support javascript!  
With these assumptions lets start the ride!

<span style="font-size: 130%;color: #cc0000">Login Issue! <em>(updated: 2007, August 30)</em></span>  
You can use original address http://orkut.com from opera MINI nut the page have some problems in OPERA MOBILE. But don&#8217;t worry as you can use following address to log into orkut! Its a very long address so better bookmark it with name like Orkut Login! In fact you can use the following address from PC for fast login on orkut!

<code style="overflow: scroll">https://www.google.com/accounts/ServiceLoginBox?service=orkut&nui=2&skipll=true&skipvpage=true&continue=http%3A%2F%2Fwww.orkut.com%2FRedirLogin.aspx%3Fmsg%3D0%26page%3Dhttp%253A%252F%252Fwww.orkut.com%252F&followup=http%3A%2F%2Fwww.orkut.com%2FGLogin.aspx&hl=en-US</code>

Also you can use **o.devilsworkshop.org** which is configured to redirect you to the above link only!

**<span style="color: #cc0000">Clicking on button does not work!</span>**

As of now u log into orkut but experiencing problem while clicking on buttons! The most common problem I have seen button like submit, delete, yes, no, accept, reject does not work!

There are two solution. First is for opera mobile user and second lies in JavaScript!

<span style="font-size: 130%;color: #cc0000">Opera solution </span><span style="font-size: 130%;color: #cc0000"><a title="Opera_solution" name="Opera_solution"></a>(For Nokia and Windows based Mobiles Only)</span>

This great solution is found by one of my Doctor friend <span style="font-weight: bold">Rahul Talele</span> (Shame on us engineers. <img class="wp-smiley wp-image-52581" src="http://devilsworkshop.org/wp-includes/images/smilies/icon_wink.gif" alt=";-)" />  
Best thing about this it works for all buttons without any coding effort!!!(Really great na)!!!

Now after logging into orkut using opera,  
Go to <span style="font-weight: bold">Options >> Navigation >> Find in page</span>

Put caption of button means <span style="font-weight: bold">&#8216;submit&#8217; , delete&#8217;, yes&#8217;, no&#8217;, etc </span>in text to be found.  
The moment text on button starts highlighting exit from Find wizard pressing roght-selection key (which have <span style="font-weight: bold">Stop </span>option).  
Now clicking on that button works!

<span style="font-weight: bold">Extra tip: </span>Assign a shortcut key to<span style="font-weight: bold"> Find in Page </span>option by going to <span style="font-weight: bold">Option >> Settings</span>

<span style="color: #cc0000">JavaScript solutions (for others)</span>

**Submitting Scrap! *<span style="color: #ff1010">(updated 2007, August 30)</span>***  
First thing If u want to scrap someone u hv to go into his/her scrapbook! (The code following are not for orkut&#8217;s new reply feature!)  
After opening intended scrapbook, write scrap with optional formatting the way u usually write!  
In next step, without leaving that page(or tab if u r using opera with tab browsing) go to this address:

For scrapbooks with new features

`javascript: _submitForm(document.getElementById('scrapInputContainer').getElementsByTagName('a')[0], 'submit', 'true');`

Similarly.

<span style="font-weight: bold">Delete Scrap:</span>

This will delete first scrap from ur scrapbook. For 2nd scrap replace <span style="font-weight: bold">b6²</span> by <span style="font-weight: bold">b9²</span> , for 3rd scrap replace<span style="font-weight: bold"> b6²</span> by<span style="font-weight: bold"> b12²</span> ans so on  
Same code can be used to delete scraps from others scrapbook (of course scraps dent by you).

In this case replace <span style="font-weight: bold">b6² </span>by <span style="font-weight: bold">b3² </span>(for 1st delete button), <span style="font-weight: bold">b4² </span>(for 2nd) and so on

`javascript: var rb = document.getElementById('b6²).onclick  ; var strrb = rb.toString(); var rbparts = strrb.split('{'); var rbfinal = rbparts[1].split('}') ; location.href=javascript: + rbfinal[0];`

<span style="font-weight: bold">New Friend: Accept<br /> </span><span>To accept new friend request which is shown on ur orkut home page! Note, this will work for first request if u have too many! u can increment </span><span style="font-weight: bold">b0²</span> by 2 for next request and so on if u hv multiple requests and directly want to accept other than first request!

e.g. b2² for 2nd, b4² for 3rd.  
`javascript: var rb = document.getElementById('b0²).onclick  ; var strrb = rb.toString(); var rbparts= strrb.split('); location.pathname=rbparts[1];`

<span style="font-weight: bold">New Friend: Decline</span><span> Works in the opposite way of new friend accept Executing this wil decline first request..<br /> increment </span><span style="font-weight: bold">b1²</span> in the script by 2 for 2nd request and so on  
e,g, b3² for 2nd, b5² for 3rd.  
`javascript: submitForm(document.getElementById('b1²),  declineFriend', );`

<span style="font-weight: bold">Friend: Confirm yes</span><span>: You will need to confirm whenever you are accepting a new friend request or sending a new friend request to someone</span>

`javascript: _submitForm(document.getElementById('b1²), yes',);`

<span style="font-weight: bold">Community: New Topic<br /> </span><span>While on a community, execute this to start a new topic</span>`javascript: window.location.href = window.location.href.replace (/Community/,'CommMsgPost');`

<span style="font-weight: bold">Community: Reply to Topic<br /> </span><span>While reading a topic on a community, execute this to </span><span style="font-weight: bold">reply</span> to that topic

`window.location.href = window.location.href.replace (/CommMsgs/,'CommMsgPost');`

<span style="font-weight: bold">Community: Submit Post<br /> </span><span>After writing ur new post or reply, execute this to submit it</span>`javascript: _submitForm(document.getElementById('b2²), 'submit')`

<span style="font-weight: bold">Community: Confirm Join</span>  
`javascript: submitForm(document.getElementById('b1²), join');`  
<span style="font-weight: bold">Profile: UPDATE button while editing profile</span>

`javascript: submitForm(document.getElementById('b1²), update', );`

Actually this is not a web address but javascript which will execute submit button!

Again bookmark this address by naming Submit Scrap or something! The advantage of bookmarking is that u can directly open the bookmark after writing scrap!

<span style="font-weight: bold">Steps for bookmarking above codes into ur mobile browser:</span>

  1. Copy content in text-box to say notepad and send that file to ur mobile.
  2. Open that file in any editor in mobile!
  3. Copy the script on clipboard! (using edit key in Nokia).
  4. Open ur browser and go to Add Bookmarks Option!
  5. Chose a name u like and paste the script in address field!<span style="font-weight: bold"> OR </span>U can manually create the bookmark by entering the script instead of copy-paste n sending a file to mobile!

Now once u have created these bookmarks, u can log into orkut fast as well as scrap someone!

In future will write code for other buttons if i found people interested in this cumbersome orkutting from mobile! U can subscribe to this blog to get updates automatically!

 [1]: http://devilsworkshop.org/2008/04/14/orkut-goes-on-mobile-silently-morkutcom/
