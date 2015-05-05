---
title: Equal Height and Width for WordPress Widgets Using JQuery
author: manishsongirkar
date: 2011-05-11
url: /equal-height-width-wordpress-widgets-jquery/
dsq_thread_id:
  - 2947120689
categories:
  - Tutorial
tags:
  - Javascript
  - jQuery
  - Wordpress
  - Wordpress Tutorials
---
[<img class="wp-image-51069" style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2011/04/equal-width-height-post-image_thumb1.jpg" alt="equal width height post image" width="604" height="339" border="0" />][1]

There are situations when a developer needs to set equal height and width to child div’s that contain dynamic content. I came across such a situation, in which I had to place more than one widget in a single horizontal row. If I applied static heights and widths to the divs, there was a possibility of breaking the div after a certain number of widgets. To overcome this situation, I came up with a solution using jQuery wherein the divs which contain these widgets will get equal heights and widths depending on the size of the content.

This function automatically calculates the size of the content that is going to be inserted into the div, and applies the height of the div whose height is largest from all the other divs. The width of parent div is divided by the number of widgets and then applied to each widget.

## Example:

Assume we have a parent div “#sidebar_1” of width 960px. I insert three divs into parent div of variable height and width. Using the below function, each widget will be applied with the width that is obtained after dividing the parent div from the number of widgets (960/3). Each widget’s height is calculated and the greatest height is applied to all the widgets.

Here is my html code,

<pre><code class="no-highlight">&lt;div&gt;
    &lt;div class="child1"&gt;my custom content 1&lt;/div&gt;
    &lt;div class="child2"&gt;my custom content 2&lt;/div&gt;
    &lt;div class="child3"&gt;my custom content 3&lt;/div&gt;
&lt;/div&gt;</code></pre>

Here is my CSS which I applied,

<pre><code class="no-highlight">#sidebar_1 { width: 960px; overflow: hidden; }
.child1, .child2, .child3 {
border-right: 1px solid #EDEDED;
float: left;
overflow: hidden;
padding: 5px 10px; }</code></pre>

jQuery Function to dynamically apply equal height and width

<pre><code class="no-highlight">// to div's present in a parent div
function rt_equalHeightWidth( group ) {

// Get parent div width
    var rt_group_width = group.width();

// Get child div's
    var rt_group_child = group.children();

// Get size of child div present in the parent div
    var rt_group_child_size = group.children().size();

// Remove left padding from the first child div
    rt_group_child.first().css( { 'padding-left': '0' } );

// Remove right padding and right border from the last child div
    rt_group_child.last().css( { 'border-right': '0', 'padding-right': '0' } );

// Function to apply equal width for all child div's
        rt_group_child.each( function() {
// Calculate width for each child div
            var rt_group_child_width = rt_group_width / rt_group_child_size;

// Count extra padding and border width
            var rt_extra_width = parseInt( jQuery( this ).css( 'padding-left' ) ) + parseInt( jQuery( this ).css( 'padding-right'  ) ) + parseInt( jQuery( this ).css( 'border-right-width' )+ rt_group_child_size );

// Remove extra padding and border width from width
            var rt_group_child_actual_width = rt_group_child_width - rt_extra_width;

// Apply actual width to each child div
            jQuery( this ).css( { 'width' : rt_group_child_actual_width + 'px' } );
        } );

// Equal height for all child div's
        var rt_height = 0;

// Function to apply equal height for all child div's using jQuery each
        rt_group_child.each( function() {

// Get height for each widget
            var thisHeight = jQuery( this ).height();

// Get height for widget and apply equal height's to all widget
            if ( thisHeight &gt; rt_height ) { rt_height = thisHeight; }
        } );
        rt_group_child.height( rt_height );
}

// Apply parent selector by replacing '#sidebar_1' selector
rt_equalHeightWidth( jQuery( '#sidebar_1' ) );</code></pre>

Here are the resultant screenshots of div’s where the above code is used to apply equal height and width.

[<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2011/04/1_widget_thumb.jpg" alt="1_widget" width="194" height="55" border="0" />][2][<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2011/04/2_widgets_thumb.jpg" alt="2_widgets" width="194" height="55" border="0" />][3][<img style="padding-left: 0px;padding-right: 0px;padding-top: 0px;border: 0px" src="http://cdn.devilsworkshop.org/files/2011/04/3_widgets_thumb.jpg" alt="3_widgets" width="194" height="55" border="0" />][4]

Besides sidebar widgets the above code can be used for any div’s that has dynamic content, and you want them to have equal height and width. You just need to apply parent selector by replacing ‘#sidebar_1’ selector.

Hope this helps and saves your time, do drop in your opinions and comments below.

 [1]: http://cdn.devilsworkshop.org/files/2011/04/equal-width-height-post-image2.jpg
 [2]: http://cdn.devilsworkshop.org/files/2011/04/1_widget.jpg
 [3]: http://cdn.devilsworkshop.org/files/2011/04/2_widgets.jpg
 [4]: http://cdn.devilsworkshop.org/files/2011/04/3_widgets.jpg
