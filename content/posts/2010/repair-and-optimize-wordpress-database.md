---
title: Repair and optimize WordPress database
author: ksantoshp
date: 2010-09-23
excerpt: |
  It is always good practice to optimize your blog's database to improve blog's performance. Many are not aware about WordPress's built-in database repair and optimize functionality, as it is not available in admin back-end.
  You can check this by visiting http://yourdomain.com/wp-admin/maint/repair.php (replace http://yourdomain.com/ with your actual blog/site url ).
  Here is a step by step guide one how to go about repair and optimizing WordPress database.
url: /repair-and-optimize-wordpress-database/
views:
  - 33
dsq_thread_id:
  - 2947114119
categories:
  - Tips
tags:
  - database
  - optimze
  - repair
  - Troubleshooting
  - Wordpress
---
It is always good practice to optimize your blog&#8217;s database to improve blog&#8217;s performance. Many are not aware about WordPress&#8217;s built-in database repair and optimize functionality, as it is not available in admin back-end.

You can check this by visiting ***http://yourdomain.com/wp-admin/maint/repair.php*** (replace http://yourdomain.com/* *with your actual blog/site url ).

### Below is a step by step guide on how to optimize WordPress database :

  1. First login to admin section of WordPress blog by visiting http://yourdomain.com/wp-login.php .
  2. Then go to http://yourdomain.com/wp-admin/maint/repair.php .You can see screen as show below. It ask you to add a line of code to WordPress&#8217;s wp-config.php file.
  3. Add below code to your WordPress wp-config.php file and reload/refresh page.
`define('WP_ALLOW_REPAIR', true); `

<a href="http://wpveda.com/repair-and-optimize-wordpress-database/wordpress-%e2%80%ba-database-repair/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/repair-and-optimize-wordpress-database/wordpress-%e2%80%ba-database-repair/', '\n']);" rel="attachment wp-att-808"><br /> </a><a href="http://wpveda.com/repair-and-optimize-wordpress-database/wordpress-%e2%80%ba-database-repair/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/repair-and-optimize-wordpress-database/wordpress-%e2%80%ba-database-repair/', '']);" rel="attachment wp-att-808"><img class="aligncenter size-large  wp-image-51470" src="http://cdn.devilsworkshop.org/files/2010/09/WordPress-›-Database-Repair-520x141.jpg" alt="" width="520" height="141" /></a>

  4. After refreshing you can see page with options to &#8216;Repair Database&#8217; and to &#8216;Repair and Optimize Database&#8217;. Just click on one of the option.
<a href="http://wpveda.com/repair-and-optimize-wordpress-database/wordpress-%e2%80%ba-database-repair-1/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/repair-and-optimize-wordpress-database/wordpress-%e2%80%ba-database-repair-1/', '']);" rel="attachment wp-att-821"><img class="aligncenter size-large wp-image-821" src="http://cdn.devilsworkshop.org/files/2010/09/WordPress-›-Database-Repair-1-520x232.jpg" alt="" width="520" height="232" /></a>

  5. If you click on &#8216;Repair Database&#8217; button,  WordPress can automatically look for some common database problems and repair them. Internally it executes two *sql* queries on each WordPress database tables in loop and these queries are CHECK TABLE  *table_name *and REPAIR TABLE  *table_name .*
  6. If you click on &#8216;Repair and Optimize Database&#8217; button, WordPress can also attempt to optimize the database. This improves performance in some situations. Repairing and optimizing the database can take a long time and the database will be locked while optimizing. Internally it executes four *sql* queries along with above two queries on each WordPress database tables in loop and other two queries are ANALYZE TABLE  *table_name *and OPTIMIZE TABLE  *table_name .*

Hope this will improve your WordPress blog&#8217;s performance. Drop in your comments!

*(P.S. : Please take backup of your WordPress database before making any action on database)*
