---
title: How to Create a ‘Recent Comments with Gravatar’ Widget
author: manishsongirkar
date: 2011-02-05
excerpt: "Today I'm going to help you to code a simple widget with which you can display the Recent Comments with the Author Gravatar in Sidebar."
url: /create-widgetrecent-comments-gravatar/
views:
  - 19
dsq_thread_id:
  - 2947118951
categories:
  - Tutorial
tags:
  - Plugins
  - Scrapboy
  - widget
  - Wordpress
  - Wordpress Comments
  - Wordpress Tutorials
---
[<img class="wp-image-50285" style="padding-left: 0px; padding-right: 0px; padding-top: 0px; border: 0px;" src="http://cdn.devilsworkshop.org/files/2011/02/sidebar-widget_thumb1.jpg" alt="sidebar-widget" width="604" height="339" border="0" />][1]

Many people new to the WordPress community seem to have a common question &#8211; &#8220;How to create a WordPress Widget?&#8221;. Today I&#8217;m going to help you to code a simple widget with which you can display the **Recent Comments with the Author Gravatar** in Sidebar.

WP has given the feature to extend the default functionality of widgets. We can achieve this by extending the **WP_Widget** class.

when we extend the **WP_Widget** Class we need not repeat the code and thus the features of this class are available to our class say &#8220;**rt\_comments\_widget&#8221; **(custom class).

First we will create the skeleton of our widgets in *functions.php :*

<pre><code class="no-highlight">&lt;?php
class rt_comments_widget extends WP_Widget {

    function rt_comments_widget() {
    //Constructor
    }

    function widget($args, $instance) {
    // prints the widget
    }

    function update($new_instance, $old_instance) {
    //save the widget
    }

    function form($instance) {
    //widgetform in backend
    }
}

add_action( 'widgets_init', create_function( '', 'return register_widget("rt_comments_widget");' ) );
?&gt;</code></pre>

As seen in the code above, we have created a class **rt\_comments\_widget**, which inherits the properties and methods of the **WP_Widget** class (extends).

Further, we have called four functions &#8211;

  1. The **rt\_comments\_widget** function which acts as a constructor
  2. The** widget** function which prints the widget
  3. The **update** function which saves the widget
  4. The **form** function which handles the widget form in the backend.
  5. The function **add_action** is used to register the widget.

Let&#8217;s fill up our widget.

**Step 1:**

<pre><code class="no-highlight">&lt;?php
function rt_comments_widget() {
    $widget_ops = array( 'classname' =&gt; 'widget_rt_comments_widget', 'description' =&gt; __( 'Widget for Show Recent Comment with Author Gravatar in Sidebar.' ) );
    $this-&gt;WP_Widget( 'rt-comments-widget', __( 'RT: Comments with Gravatar' ), $widget_ops );
} // end of function rt_comments_widget()
?&gt;</code></pre>

In the code above, we now describe the **rt\_comments\_widget** where in you can give a class to your widget to style your widget, give a description to your custom widget and give your widget a title which is showed in the widget area of the admin panel.

In our example &#8220;**RT: Comments with gravatar**&#8221; is our widget title.

**Step 2:**

<pre><code class="no-highlight">&lt;?php
function widget( $args, $instance ) {
    extract( $args, EXTR_SKIP );
    $title = empty( $instance['title'] ) ? 'Recent Comments' : apply_filters( 'widget_title', $instance['title'] );
    $gravatar = !empty( $instance['gravatar'] ) ? $instance['gravatar'] : 64;
    $count = !empty( $instance['count'] ) ? $instance['count'] : 3;
    $alternative = !empty( $instance['alternative'] ) ? $instance['alternative'] : '';

    echo $before_widget;
        if ( $title )
            echo $before_title . $title . $after_title;
                global $wpdb;
                $total_comments = $wpdb-&gt;get_results( "SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb-&gt;comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );

                $comment_total = count($total_comments);

                echo '&lt;ul&gt;';

                for ( $comments = 0; $comments &lt; $count; $comments++ ) {

                    if( $alternative == "on" ) {
                        $right_grav = $comments % 2 ? 'style="float:right"' : '' ;
                        $left_readmore = $comments % 2 ? 'style="float:left"' : '' ;
                    } else {
                        $right_grav = '';
                        $left_readmore = '';
                    }

                    echo '&lt;li&gt;';
                        echo "&lt;div class='comment-container clearfix'&gt;";

                            echo "&lt;div class='author-vcard' $right_grav title='".$total_comments[$comments]-&gt;comment_author."'&gt;";
                                echo get_avatar( $total_comments[$comments]-&gt;comment_author_email, $gravatar, $default='&lt;path_to_url&gt;' );
                            echo "&lt;/div&gt;";

                            echo "&lt;div class='comment-section'&gt;";

                                echo '&lt;div class="comment-date"&gt;';
                                    echo '&lt;a title="'. mysql2date( 'F j, Y - g:ia', $total_comments[$comments]-&gt;comment_date_gmt) .'" href="'. get_permalink($total_comments[$comments]-&gt;comment_post_ID) . '#comment-' . $total_comments[$comments]-&gt;comment_ID . '"&gt;';
                                    echo mysql2date( 'F j, Y - g:ia', $total_comments[$comments]-&gt;comment_date_gmt);
                                    echo '&lt;/a&gt;';
                                echo '&lt;/div&gt;';

                                echo "&lt;div class='author-comment'&gt;";
                                    $str = wp_html_excerpt ( $total_comments[$comments]-&gt;comment_content,65 );
                                    if( strlen( $str ) &gt;= 65 ) {
                                        echo $str.'...';
                                    } else {
                                        echo $str;
                                    }
                                echo "&lt;/div&gt;";

                                echo '&lt;div class="sidebar-readmore" '.$left_readmore.' &gt;';
                                    echo '&lt;a title="Reply" href="'. get_permalink($total_comments[$comments]-&gt;comment_post_ID) . '#comment-' . $total_comments[$comments]-&gt;comment_ID . '"&gt;';
                                    echo 'Reply &rarr;';
                                    echo '&lt;/a&gt;';
                                echo '&lt;/div&gt;';

                            echo '&lt;/div&gt;'; //end of .comment-section

                        echo '&lt;/div&gt;'; //end of .comment-container
                    echo '&lt;/li&gt;';
                }
                echo '&lt;/ul&gt;';

     echo $after_widget;
} // end of function widget()
?&gt;</code></pre>

Now we describe the **widget** function. In our example above, I fetched the date of the posted comment, author comments, author Gravatar, and reply to that comment from the database.

Here are the code snippets in the **widget** function:

  1. date: 
    <pre><code class="no-highlight">&lt;?php mysql2date( 'F j, Y - g:ia', $total_comments[$comments]-&gt;comment_date_gmt ); ?&gt;</code></pre>

  2. author gravatar: 
    <pre><code class="no-highlight">&lt;?php get_avatar( $total_comments[$comments]-&gt;comment_author_email, $gravatar, $default='&lt;path_to_url&gt;' ); ?&gt;</code></pre>

  3. author comment: 
    <pre><code class="no-highlight">&lt;?php $total_comments[$comments]-&gt;comment_content; ?&gt;&lt;br />( With Word Count '65' )</code></pre>

  4. reply link: 
    <pre><code class="no-highlight">&lt;?php echo '&lt;a title="Reply" href="'. get_permalink( $total_comments[$comments]-&gt;comment_post_ID ) . '#comment-' . $total_comments[$comments]-&gt;comment_ID . '"&gt;Reply &rarr;&lt;/a&gt;'; ?&gt;</code></pre>

**Step 3:**

<pre><code class="no-highlight">&lt;?php
function update($new_instance, $old_instance) {
    global $wpdb;
    $total_comments = $wpdb-&gt;get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb-&gt;comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );
    $comment_total = count($total_comments);
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['gravatar'] = strip_tags($new_instance['gravatar']);
    $instance['count'] = strip_tags($new_instance['count']) &gt; $comment_total ? $comment_total : strip_tags($new_instance['count']);
    $instance['alternative'] = strip_tags($new_instance['alternative']);
    return $instance;
} // end of function update()
?&gt;</code></pre>

With the help of code in the **update** function you can save your widget or update your data which is changed in admin panel.

**Step 4:**

<pre><code class="no-highlight">&lt;?php
function form( $instance ) {
    $title = isset( $instance['title'] ) ? ( $instance['title'] ) : '';
    $gravatar = !empty( $instance['gravatar'] ) ? $instance['gravatar'] : 64;
    $count = !empty( $instance['count'] ) ? $instance['count'] : 3;
    $alternative = !empty( $instance['alternative'] ) ? $instance['alternative'] : ''; ?&gt;
    &lt;p&gt;
        &lt;label for="&lt;?php echo $this-&gt;get_field_id( 'title' ); ?&gt;"&gt;Title: &lt;/label&gt;
        &lt;input class="widefat" id="&lt;?php echo $this-&gt;get_field_id( 'title' ); ?&gt;" name="&lt;?php echo $this-&gt;get_field_name( 'title' ); ?&gt;" type="text" value="&lt;?php echo esc_attr( $title ); ?&gt;" /&gt;
    &lt;/p&gt;

    &lt;p&gt;
        &lt;label for="&lt;?php echo $this-&gt;get_field_id( 'gravatar' ); ?&gt;"&gt;Gravatar Size: &lt;/label&gt;
        &lt;select id="&lt;?php echo $this-&gt;get_field_id( 'gravatar' ); ?&gt;" name="&lt;?php echo $this-&gt;get_field_name( 'gravatar' ); ?&gt;" style="float: right;width: 100px;"&gt;
            &lt;option value="32" &lt;?php selected( '32', $gravatar ); ?&gt;&gt;32x32&lt;/option&gt;
            &lt;option value="40" &lt;?php selected( '40', $gravatar ); ?&gt;&gt;40x40&lt;/option&gt;
            &lt;option value="48" &lt;?php selected( '48', $gravatar ); ?&gt;&gt;48x48&lt;/option&gt;
            &lt;option value="56" &lt;?php selected( '56', $gravatar ); ?&gt;&gt;56x56&lt;/option&gt;
            &lt;option value="64" &lt;?php selected( '64', $gravatar ); ?&gt;&gt;64x64&lt;/option&gt;
            &lt;option value="72" &lt;?php selected( '72', $gravatar ); ?&gt;&gt;72x72&lt;/option&gt;
        &lt;/select&gt;
    &lt;/p&gt;

    &lt;p&gt;
        &lt;label for="&lt;?php echo $this-&gt;get_field_id( 'count' ); ?&gt;"&gt;Show Comments: &lt;/label&gt;
        &lt;input class="widefat show-comments" id="&lt;?php echo $this-&gt;get_field_id( 'count' ); ?&gt;" name="&lt;?php echo $this-&gt;get_field_name( 'count' ); ?&gt;" type="text" value="&lt;?php echo $count; ?&gt;" /&gt;
    &lt;/p&gt;&lt;?php
        global $wpdb;
        $total_comments = $wpdb-&gt;get_results("SELECT comment_date_gmt,comment_content, comment_author, comment_ID, comment_post_ID, comment_author_email, comment_date_gmt FROM " . $wpdb-&gt;comments . " WHERE comment_approved = '1' and comment_type != 'trackback' ORDER BY comment_date_gmt DESC" );
        $comment_total = count($total_comments);
        echo "&lt;div style='color: #444444;font-size: 11px;padding: 0 0 12px;'&gt;You have total '" . $comment_total . "' comments to display&lt;/div&gt;"; ?&gt;
    &lt;p&gt;
        &lt;label for="&lt;?php echo $this-&gt;get_field_id( 'alternative' ); ?&gt;"&gt;Show Alternate Comments: &lt;/label&gt;
        &lt;input name="&lt;?php echo $this-&gt;get_field_name( 'alternative' ); ?&gt;" type="hidden" value="off" /&gt;
        &lt;input class="alternate" id="&lt;?php echo $this-&gt;get_field_id( 'alternative' ); ?&gt;" value="on" name="&lt;?php echo $this-&gt;get_field_name( 'alternative' ); ?&gt;" type="checkbox" &lt;?php echo checked( 'on', $alternative ); ?&gt; /&gt;
    &lt;/p&gt;

    &lt;script type="text/javascript"&gt;
        jQuery( '.show-comments' ).keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g,'' );
        });
    &lt;/script&gt;
    &lt;?php
} // end of function form()
?&gt;</code></pre>

With the form function you can develop widgetform in the back end(admin panel) such as &#8211; entering a widget title, showing Gravatar size in the dropdown list, choosing the number of comments shown in sidebar and showing alternate comments. *(refer 2nd screnshot below)*

The simple javascript (jQuery) at the end of the code above is to validate your form field.

Your widget will now be appear in Admin Panel > Appearance > Widgets > Available Widgets

[<img style="padding-left: 0px; padding-right: 0px; padding-top: 0px; border: 0px;" src="http://cdn.devilsworkshop.org/files/2011/02/widget-area_thumb1.jpg" alt="widget-area" width="454" height="261" border="0" />][2]

Here is the screenshot of your widget in the back end:

[<img style="padding-left: 0px; padding-right: 0px; padding-top: 0px; border: 0px;" src="http://cdn.devilsworkshop.org/files/2011/02/backend_thumb1.jpg" alt="backend" width="354" height="221" border="0" />][3]

Here is the Final Screenshot of your widget: Normal View and Alternate View

[<img style="padding-left: 0px; padding-right: 0px; padding-top: 0px; border: 0px;" src="http://cdn.devilsworkshop.org/files/2011/02/normal-view_thumb1.jpg" alt="normal-view" width="204" height="342" border="0" />][4][<img style="padding-left: 0px; padding-right: 0px; padding-top: 0px; border: 0px;" src="http://cdn.devilsworkshop.org/files/2011/02/alternate-view_thumb1.jpg" alt="alternate-view" width="204" height="342" border="0" />][5]

Hope with the help of this widget you can easily show your &#8220;**Recent Comments with Gravatar**&#8221; in Sidebar. Do drop in your opinions and comments below <img src="http://devilsworkshop.org/wp-includes/images/smilies/simple-smile.png" alt=":)" class="wp-smiley" style="height: 1em; max-height: 1em;" />

<a href="http://cdn.devilsworkshop.org/files/2011/02/recent_comments_with_gravatar.txt" target="_blank">Download the Complete code of Widget Here.</a>

 [1]: http://cdn.devilsworkshop.org/files/2011/02/sidebar-widget1.jpg
 [2]: http://cdn.devilsworkshop.org/files/2011/02/widget-area1.jpg
 [3]: http://cdn.devilsworkshop.org/files/2011/02/backend1.jpg
 [4]: http://cdn.devilsworkshop.org/files/2011/02/normal-view1.jpg
 [5]: http://cdn.devilsworkshop.org/files/2011/02/alternate-view1.jpg
