---
title: '5 WordPress MySQL Queries For Year Ending Summary Posts & Cleanup'
author: rahul286
date: 2008-12-30
url: /wordpress-mysql-queries/
views:
  - 374
dsq_thread_id:
  - 2947093849
categories:
  - Tutorial
tags:
  - Blogging
  - Developers
  - MySQL
  - Wordpress
---
[<img class="wp-image-52247" style="border-right: 0px;border-top: 0px;margin-left: 0px;border-left: 0px;margin-right: 0px;border-bottom: 0px" height="224" alt="Wordpress Logo Love" src="http://cdn.devilsworkshop.org/files/2008/12/image-thumb22.png" width="240" align="right" border="0" />][1] Below I am posting some MySql queries for power WordPress bloggers. This queries will come handy if you are planning to write [annual summary][2] and analysis posts like most bloggers do at the end of year.

All queries are direct SQL and assumes standard table prefix **‘wp_’** for tables. If you are using different table prefix, please modify queries accordingly.

We strongly suggest you to back up your database as we will not be responsible for any loss or damage caused by using our code directly or indirectly. I also assume you know PhpMyAdmin or any other interface to execute MySql queries, because if you send me any question like ***how to use following MySql queries***, I will simply reply – ***“Google it!” ***😉

I guess I have scared you enough by now, so enjoy real stuff before you make your mind to go away… 

## Yearly Stats…

### To get number of posts published in entire year…

``SELECT * FROM `wp_posts` WHERE `post_date` <= '2008-12-31 23:59:59' AND `post_date` >= '2008-01-01 00:00:00' AND `post_status` = 'publish'``

### To get number of comments approved in entire year…

``SELECT * FROM `wp_comments`&#160; WHERE `comment_date` <= '2008-12-31 23:59:59' AND&#160; `comment_date` >= '2008-01-01 00:00:00' AND `comment_approved` = 1 AND `comment_type` = ''``

Change **comment_type **equal to **‘pingback’** or **‘trackback’** to get number of pingbacks and trackback respectively.

### To get number of users registered in entire year…

``SELECT * FROM `wp_users`&#160; WHERE `user_registered` <= '2008-12-31 23:59:59' AND&#160; `user_registered` >= '2008-01-01 00:00:00'``

This is useful for only blogs who allows user to register, like Devils Workshop! 

<font color="#ea0000"><strong>WARNING</strong>: Following query performs WRITE operation on database!</font>

## Cleanup Time!

Starting from WordPress 2.5, a revision featured was introduced which eats up lots of space in database. In case you want to perform some clean-up which is good idea, you can shoot following query!

### To Delete Post Revision from WordPress Database&#8230;

``DELETE FROM `wp_posts` WHERE `post_type` = ‘revision’ AND `post_date` <= '2008-12-20 23:59:59'``

This will delete all post revisions created before December 21, 2008. This is to retain revisions created in last 10 days. If you remove ***AND \`post_date\` <= &#8216;2008-12-20 23:59:59&#8242; ***from above query it will delete all revisions.

On executing this query, it removed 758 revisions from our database. I forgot to calculate how much space it freed, but its always good to have unwanted data out of database.

### To Delete All Comments awaiting moderation…

Yes, this may sound crazy, but if for some reason your blog has been hit by comment spam, just when you forgot to put anti-spam measures in place, you must be needing something like. Its really good idea delete all unmoderated comment for one-time so you can start-over again… <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

``DELETE from `wp_comments` WHERE `comment_approved` = '0';``

You can also add DATE range to above query, in case you have idea about when comment spam hit your blog.</p> </p> 

Thats All! If you want any particular MySQL query, please send details via following comments. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

**Related:** [WordPress Plugin Series – Reviews of Top WordPress Plugins][3]

*(image credit: *<a href="http://designsimply.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://designsimply.com/', 'Design Simply']);" ><em>Design Simply</em></a>*)*

 [1]: http://cdn.devilsworkshop.org/files/2008/12/image24.png
 [2]: http://devilsworkshop.org/best-of-devils-workshop-in-year-2008/
 [3]: http://devilsworkshop.org/introduction-wordpress-plugins-series/
