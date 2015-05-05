---
title: Change WordPress Permalink Structure With IIS 6 Server
author: nitunlanjewar
date: 2011-01-19
url: /change-permalink-structure-iis-6-server/
views:
  - 50
dsq_thread_id:
  - 2947117523
categories:
  - Tutorial
tags:
  - permalinks
  - Troubleshooting
  - Wordpress
---
**WordPress Permalink structure** is important with respect to the Search Engine Optimization (SEO). I observed that most of the WordPress blogs have a Permalink Structure which looks like `/index.php/%postname%/`. This post will help you to change your permalink structure using the **Microsoft IIS 6 server**.

  1. Create a &#8220;php&#8221; file, say &#8216;404_wp.php&#8217;, paste the below code and upload it to your wordpress root folder (i.e., in same folder/directory where &#8220;wp-config.php&#8221; file is located.
`<?php<br />
// Default file for WordPress site, generally "index.php"<br />
$wpdefault = 'index.php';<br />
// The name of this file.<br />
$tempfile = '404_wp.php';<br />
$_SERVER['SCRIPT_FILENAME'] = str_replace($tempfile, $wpdefault, $_SERVER['SCRIPT_FILENAME']);<br />
$_SERVER['ORIG_PATH_INFO'] = str_replace($tempfile, $wpdefault, $_SERVER['ORIG_PATH_INFO']);<br />
$_SERVER['SCRIPT_NAME'] = str_replace($tempfile, $wpdefault, $_SERVER['SCRIPT_NAME']);<br />
$_SERVER['PHP_SELF'] = str_replace($tempfile, $wpdefault, $_SERVER['PHP_SELF']);<br />
$_SERVER['PATH_INFO'] = false;<br />
$querystr =& $_SERVER['QUERY_STRING']; $requesturl =& $_SERVER['REQUEST_URI'];<br />
$position = strrpos($querystr, '://');<br />
$position = strpos($querystr, '/', $position + 4);<br />
$_SERVER['URL'] = $requesturl = substr($querystr, $position);<br />
$querystr = trim(stristr($requesturl, '?'), '?');<br />
// Required for WordPress 2.8+<br />
$_SERVER['HTTP_X_ORIGINAL_URL'] = $requesturl;<br />
// Fix GET vars<br />
foreach ( $_GET as $var => $val ) {<br />
if ( substr($var, 0, 3) == '404') {<br />
if ( strstr($var, '?') ) {<br />
$nv = substr($var, strpos($var, '?') + 1);<br />
$_GET[$nv] = $val;<br />
}<br />
unset($_GET[$var]);<br />
}<br />
break;<br />
include($wpdefault);<br />
?>`

  2. Download and Install **Internet Information Services** **(IIS) 6.0 Manager** for Windows XP from Microsoft Site. Alternatively, you can install this from your **Windows XP** Installation CD.  
    <a href="http://www.microsoft.com/downloads/en/details.aspx?familyid=f9c1fb79-c903-4842-9f6c-9db93643fdb7&displaylang=en" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.microsoft.com/downloads/en/details.aspx?familyid=f9c1fb79-c903-4842-9f6c-9db93643fdb7&displaylang=en', 'Download Link']);" target="_blank"><strong>Download Link</strong></a>
  3. Go to your Windows *Control Panel* -> *Administrative* Tools and open **Internet Information Services (IIS6) Manager**  
    [<img class="alignnone size-large  wp-image-50288" src="http://cdn.devilsworkshop.org/files/2011/01/11-520x390.png" alt="" width="520" height="390" />][1]
  4. Right click **Internet Information Services** and select **Connect**
  5. &#8220;Connect to Computer&#8221; dialog box will open, enter your IIS 6 Server IP Address, and Login Credentials  
    (In case, you can&#8217;t find the IP Address, you can open **Command Prompt** from Start Menu and ping your site to find IP Address) i.e. *ping wpveda.com*
[<img class="alignnone size-full wp-image-2008" src="http://cdn.devilsworkshop.org/files/2011/01/3.png" alt="" width="380" height="215" />][2]  
[<img class="alignnone size-large wp-image-2040" src="http://cdn.devilsworkshop.org/files/2011/01/41-520x262.png" alt="" width="520" height="262" />][3]

  6. Click **OK**, so as to connect to your server. The IIS manager will open as shown below.
  7. On left-hand side navigation, click on [+] before Your Server&#8217;s IP Address to expand
[<img class="alignnone size-large wp-image-2049" src="http://cdn.devilsworkshop.org/files/2011/01/51-520x346.png" alt="" width="520" height="346" />][4]

  8. Click on **[+]** to expand Web Sites
[<img class="alignnone size-large wp-image-2041" src="http://cdn.devilsworkshop.org/files/2011/01/61-520x346.png" alt="" width="520" height="346" />][5]

  9. Right click the name of website on which pretty permalinks need to be enable, and select **Properties**, which would open the Properties dialog box.
[<img class="alignnone size-full wp-image-2043" src="http://cdn.devilsworkshop.org/files/2011/01/72.png" alt="" width="461" height="458" />][6]

 10. Select **Custom Error** tabs, and find **404** from the grid.
[<img class="alignnone size-full wp-image-2014" src="http://cdn.devilsworkshop.org/files/2011/01/9.png" alt="" width="461" height="458" />][7]

 11. Click **Edit** button, you will be greeted by another dialog box. Select &#8220;URL&#8221; from Message Type Drop-Down, and for URL field, write relative path to &#8220;404_wp.php&#8221; file, that you have created and uploaded on your server (*in step 1*) and click **OK.**
[<img class="alignnone size-full wp-image-2013" src="http://cdn.devilsworkshop.org/files/2011/01/8.png" alt="" width="392" height="230" />][8]

 12. You can see the new &#8220;404&#8221; URL in Custom-Error Tab Grid. Close the dialog-box.
 13. Right click the web-site that you have connected to and select **Disconnect** and then close the Internet Information Services (IIS6) Manager
 14. Login to your **WordPress Admin-Panel** and change your permalink structure to  /%postname%/ or any other structure as shown below.
[<img class="alignnone size-large wp-image-2046" src="http://cdn.devilsworkshop.org/files/2011/01/101-520x304.png" alt="" width="520" height="304" />][9]</ol> 

This is how you can easily change your permalink structure using the **Microsoft IIS server** for a good **SEO** for your blog. Do write your feedback through your comments.

 [1]: http://cdn.devilsworkshop.org/files/2011/01/11.png
 [2]: http://cdn.devilsworkshop.org/files/2011/01/3.png
 [3]: http://cdn.devilsworkshop.org/files/2011/01/41.png
 [4]: http://cdn.devilsworkshop.org/files/2011/01/51.png
 [5]: http://cdn.devilsworkshop.org/files/2011/01/61.png
 [6]: http://cdn.devilsworkshop.org/files/2011/01/72.png
 [7]: http://cdn.devilsworkshop.org/files/2011/01/9.png
 [8]: http://cdn.devilsworkshop.org/files/2011/01/8.png
 [9]: http://cdn.devilsworkshop.org/files/2011/01/101.png
