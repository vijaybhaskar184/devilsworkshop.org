---
title: Devils' Workshop goes static & geekish!
author: rahul286
date: 2015-05-06
excerpt: Devils Workshop moves away from WordPress to Hugo Static Site Generator. Reasons and analysis.
url: /devils-workshop-static-geekish/
categories:
  - Editorial
tags:
  - Hugo
  - WordPress
  - Static Site Generator
---

It has been more than a year since I published my [last post](http://devilsworkshop.org/activate-dnd-disturb-check-status/) on this blog.

No, I am not planning to get back to full-time blogging or reboot this blog (network). 

## So what we did and why?

Yesterday, we moved Devils' Workshop from our beloved [WordPress](http://wordpress.org/) platform to [Hugo](http://gohugo.io/) - a static site generator, I fell in love with!

By moving to Hugo, or a static site generator for that matter, we don't need to maintain WordPress and a server for this site anymore. 

Well managing an extra site at [rtCamp](https://rtcamp.com/) may not sound like a big deal, afterall rtCamp is a WordPress company which is behind the incredible [EasyEngine](https://rtcamp.com/easyengine).

But at rtCamp we are trying to sharpen our focus and managing a blog network is not on the list!

So by moving to static site generator, we can keep entire blog, content + theme in a [github repo](https://github.com/rtCamp/devilsworkshop.org) and host it on a CDN or plain simple HTML hosting. We are hosting DW content on Amazon AWS and CDN77 as of now.

There are more beneifts like:

1. No spam/security issues
2. Offline editing - this wil help me write more often. So you may see some posts on this blog in future again!
3. Writing in markdown - most of my techie notes stored on localhost are in markdown format only.
4. Any future "guest posts" will need to come via Github pull request (I hope spammners are not good at sending pull requests)
5. As complete site is static and on CDN, load-time is very less. Google might love us for this but we are not really caring anymore! :P


## Why Choose Hugo?

If you are aware of world of [static site generators](http://www.staticgen.com/), you are aware that there are many!

Jekyll is most famous so we tried Jekyll first. But Jekyll and other static site generators simply failed to built this huge blog (approx 5000 posts + pages) or took forever!

Only hugo can build this giant blog in less than 10 seconds. Even after theme customizations and adding features like [adsense-revenue sharing](http://devilsworkshop.org/posts-adsense-ads-revenue-sharing-program/)! Yep. We still have adsense-revenue sharing and all old post authors will see their ads on their old posts. 

With hugo's datafiles feature we managed to maintain not only adsense info but also other profile details for each author. If you were an author on DW, you can update your profile from by editing a plain-text toml file [here](https://github.com/rtCamp/devilsworkshop.org/tree/master/data/authors)!

Hugo is so good that I am planning to move many sites, including one which we update continuously. We are just waiting this [Hugo issue](https://github.com/spf13/hugo/issues/465) to get resolved.

## Guest Blogging on DW

We will keep open the blog but as I explained above, all posts need to be submitted via Github pull requests. 

I hope this submission itself will limit content to technical posts for which this blog orignally started.


While I can not say anything about my own frequency of writing here, I will certainly respond to any pull request in less than 24 hours (unless I am totally offline which is rare!) 


## About rahul286.com?

Some people though with [rahul286.com](http://rahul286.com), I might share all my future stuff there only.

Well, that blog is personal and non-technical. I will prefer to share all techie stuff here only. At the moment, outside rtCamp, I am only exploring Android world. I have some notes on localhost which I plan to publish here!

## Thank You!

I really wonder if anyone reads this blog anymore. But if you are reading this, I just want to thank you for following Devil.

I am doing really well in my life but it all started with this blog. So this blog and all its old readers will always have a special place in my heart!

Thank you everyone! :-)
