---
title: '[How to] Force Filtered HTML for Editors on WordPress'
author: adityakane
date: 2011-01-13
url: /filtered-html-securing-wordpress/
views:
  - 5
dsq_thread_id:
  - 3514587104
categories:
  - Tips
tags:
  - Editor Rights
  - Plugins
  - Wordpress
---
In WordPress, unfiltered HTML can be edited and published by Admins and Editors. Unfiltered HTML is not allowed for Authors and Contributors is basically for security. This is because Java Script might create problems if injected inside post content.

This might worry some WordPress Admins who might not want users with Editor rights to insert unfiltered HTML.

We can use Force Filtered HTML for Editors, a WordPress plugin to make sure that users with Editor rights are have access to only filtered html.

<a href="http://wpveda.com/filtered-html-securing-wordpress/filtered_html_editors/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/filtered-html-securing-wordpress/filtered_html_editors/', '']);" rel="attachment wp-att-1996"><img class="alignnone size-full  wp-image-52195" src="http://cdn.devilsworkshop.org/files/2011/01/Filtered_html_editors.png" alt="" width="413" height="299" /></a>

## <a href="http://wordpress.org/extend/plugins/filtered-html-for-editors" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/filtered-html-for-editors', 'Force Filtered HTML for Editors']);" >Force Filtered HTML for Editors</a> &#8211; Plugin

  * In WordPress Dashboard, Click on &#8220;Add New &#8221; under Plugins.
  * Now search for &#8216;Filtered HTML for Editors&#8217; and select the plugin.
  * Click on &#8220;Install&#8221; and activate the plugin.

This Plugin will not work for Multisite with WordPress. This is because by default in mulitsite, only Super Admins can have edit and publish unfiltered HTML.

In case you want no-one including the Admins to be able to publish unfiltered HTML then just add a single like to wp-config.php

> <pre><code class="no-highlight">define( 'DISALLOW_UNFILTERED_HTML', true );</code></pre>

This will disallowed unfiltered html for every user your WordPress blog. If you want to learn more about Filtered HTML for Editors read about it <a href="http://wpdevel.wordpress.com/2010/12/31/the-published-exploit-for-wordpress-3-0-4-isnt-accurate/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpdevel.wordpress.com/2010/12/31/the-published-exploit-for-wordpress-3-0-4-isnt-accurate/', 'here']);" >here</a>.

Do drop in you comments.

**Link:** <a href="http://wordpress.org/extend/plugins/filtered-html-for-editors" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wordpress.org/extend/plugins/filtered-html-for-editors', 'WordPress Plugin for Filtered HTML for Editors']);" >WordPress Plugin for Filtered HTML for Editors</a>
