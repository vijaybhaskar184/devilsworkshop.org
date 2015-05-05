---
title: Adding custom fields to WordPress media gallery upload
author: prasadnevase
date: 2010-11-03
excerpt: WordPress provides rich interface for adding images to gallery. These gallery images then can be inserted into posts. Further, different plugins are available to customize the end result of uploaded gallery images. But what if you want to have an additional custom field while uploading images to gallery, say link for the image being uploaded. WordPress has provided filters with the help of which we can achieve the same.
url: /adding-custom-fields-to-wordpress-media-gallery-upload/
views:
  - 217
dsq_thread_id:
  - 2947114900
categories:
  - Tutorial
tags:
  - custome fields
  - Developers
  - Wordpress
  - WordPress Media Gallery
---
WordPress provides rich interface for adding images to gallery. These gallery images then can be inserted into posts. Further, different plugins are available to customize the end result of uploaded gallery images. But what if you want to have an additional custom field while uploading images to gallery, say link for the image being uploaded. WordPress has provided filters with the help of which we can achieve the same.<figure id="attachment_1127" style="width: 520px;" class="wp-caption alignnone">

<a href="http://wpveda.com/adding-custom-fields-to-wordpress-media-gallery-upload/custom_field_in_media_upload/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://wpveda.com/adding-custom-fields-to-wordpress-media-gallery-upload/custom_field_in_media_upload/', '']);" rel="attachment wp-att-1127"><img class="size-large   wp-image-53574" src="http://cdn.devilsworkshop.org/files/2010/11/Custom_field_in_media_upload-520x206.png" alt="Custom Field in media upload" width="520" height="206" /></a><figcaption class="wp-caption-text">Newly added custom field in media gallery.</figcaption></figure> 

## Which are these filter hooks?

1) &#8216; attachment\_fields\_to_edit &#8216; : We will attach a function to this hook which will do the job of adding a custom field to Media Gallery.

<pre><code class="no-highlight">/* For adding custom field to gallery popup */
function rt_image_attachment_fields_to_edit($form_fields, $post) {
	// $form_fields is a an array of fields to include in the attachment form
	// $post is nothing but attachment record in the database
	//     $post-&gt;post_type == 'attachment'
	// attachments are considered as posts in WordPress. So value of &lt;strong>post_type&lt;/strong> in &lt;strong>wp_posts&lt;/strong> table will be &lt;strong>attachment
&lt;/strong>	// now add our custom field to the $form_fields array
	// input type="text" name/id="attachments[$attachment-&gt;ID][custom1]"
	$form_fields["rt-image-link"] = array(
		"label" =&gt; __("Custom Link"),
		"input" =&gt; "text", // this is default if "input" is omitted
		"value" =&gt; get_post_meta($post-&gt;ID, "_rt-image-link", true),
                "helps" =&gt; __("To be used with special slider added via [rt_carousel] shortcode."),
	);
   return $form_fields;
}
// now attach our function to the hook
add_filter("attachment_fields_to_edit", "rt_image_attachment_fields_to_edit", null, 2);</code></pre>

2) &#8216; attachment\_fields\_to_save &#8216; : This in turn will accept and save the user input.

<pre><code class="no-highlight">function rt_image_attachment_fields_to_save($post, $attachment) {
	// $attachment part of the form $_POST ($_POST[attachments][postID])
        // $post['post_type'] == 'attachment'
	if( isset($attachment['rt-image-link']) ){
		// update_post_meta(postID, meta_key, meta_value);
		update_post_meta($post['ID'], '_rt-image-link', $attachment['rt-image-link']);
	}
	return $post;
}
// now attach our function to the hook.
add_filter("attachment_fields_to_save", "rt_image_attachment_fields_to_save", null , 2);</code></pre>

And that&#8217;s it, we are done&#8230;! Refer the following video to know what you get after carrying out the steps above. Also do drop in your comments.
