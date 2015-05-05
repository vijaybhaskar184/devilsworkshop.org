---
title: How to use wp_handle_upload() to upload files in WordPress
author: umeshnevase
date: 2010-10-08
excerpt: Most of the time in theme options or in plugins we give option to upload files. Wordpress wp_handle_upload() function makes it easy to upload the files.
url: /how-to-use-wp_handle_upload-to-upload-files-in-wordpress/
views:
  - 251
dsq_thread_id:
  - 2946622301
categories:
  - Tutorial
tags:
  - Developers
  - files
  - Plugins
  - Wordpress
---
Most times in theme option or in plugins we give option to upload files. WordPress **wp\_handle\_upload()** function makes it easy to upload these files. Function **wp\_handle\_upload() **has proper error handling and uploads file to current month upload directory.

WordPress uses this function to upload media, upload import file, upload header background and upload background image. In this post I will show how to use **wp\_handle\_upload()**.

<pre><code class="no-highlight">php code:
&lt;code>
&lt;?php
$overrides = array( 'test_form' =&gt; false);
$file=wp_handle_upload($_FILES['rt_file'], $overrides);
?&gt;
</code>&lt;/code></pre>

**wp\_handle\_upload()** accepts two parameters. **$\_FILES[&#8216;rt\_file&#8217;]** is single element of **$_FILES** and the second parameter is array to override default file upload options. Parameter **$overrides** is optional but always set **$overrides** with value **test_form=false** else it will return form submission error.

On success **wp\_handle\_upload()** returns an associative array of file attributes. The returned array has the absolute path of an uploaded file, URL of an uploaded file & type of uploaded file.

On failure **wp\_handle\_upload()** returns array which has error message.

We can use our own error handling function by passing function name in **$overrides[&#8216;upload\_error\_handler&#8217;]** as shown below:

<pre><code class="no-highlight">$overrides = array( 'test_form' =&gt; false,'upload_error_handler' =&gt;rt_handle_upload_error );</code></pre>

**&#8216;rt\_handle\_upload_error&#8217;** is our defined function to handle upload error.

There is no need to override default **wp\_handle\_upload** options except **test_form**.

You can add more mime types for upload using **upload_mimes** filter.

You will find **wp\_handle\_upload()** in wp-admin/includes/file.php.

Hope it helps handling uploading files in WordPress. <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" /> Feel free to share your views or queries through your comments.
