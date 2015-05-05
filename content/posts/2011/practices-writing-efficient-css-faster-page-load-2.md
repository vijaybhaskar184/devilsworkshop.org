---
title: Best Practices – Writing Efficient CSS For Faster Page Load
author: huzaifadarbar
date: 2011-01-13
excerpt: In my previous CSS post I wrote about how one can remove unwanted CSS using Tech 1 and Tech 2. And this article contains few CSS tips that every CSS developer must know. Avoiding inefficient key selectors that match large numbers of elements can speed up page rendering.
url: /practices-writing-efficient-css-faster-page-load-2/
views:
  - 236
dsq_thread_id:
  - 3589393968
categories:
  - Analysis
tags:
  - Birthday
  - Developers
  - 'Tips &amp; Hacks'
---
[<img class="alignright size-full wp-image-32595" title="css-stamp" src="http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png" alt="" width="188" height="188" />][1]In my previous CSS post I wrote about how one can remove unwanted CSS using [Tech 1][2] and [Tech 2][3]. And this article contains few CSS tips that every CSS developer must know.

Avoiding inefficient key selectors that match large numbers of elements can speed up page rendering.

## **How to use CSS selectors Efficiently**

ID&#8217;s is the most efficient Selector whereas Universal Selector is the least efficient. There are four kinds of key selectors. Each of them are rendered with different efficiencies.

  1. ID                        (Fastest to)
  2. Class
  3. Tag
  4. Universal             (Slowest)

The browser reads the selector from **right to left**. It means that in the selector  **ul > li a** the first thing interpreted is “a”. This first part is also referred to as the &#8220;key selector&#8221;, it is the element being selected. Now below is few examples generally we use in our Stylesheet.  
`#sidebar {  }                 /* ID  */<br />
.side-nav{  }                 /* Class */<br />
ul {  }                       /* Tag */<br />
* {  }                        /* Universal */<br />
body.home #container {  }     /* Descendent selectors class and ID*/<br />
ul li a.current {  }          /* Descendent selectors-class *<br />
ul li a {  }                  /* Descendent selectors-Tag */<br />
#content [title='home']      /* Universal */`

When we use the child selector it is not very efficient to use, as it takes a lot of time to interpret.

`#sidebar > li { } /* Slower than it might seem */`

Since ID&#8217;s are so efficient we would think the browser could just find that ID quickly and then find the li children quickly. But actually, the relatively slow li tag selector is run first.

**Tag qualify technique ** should be avoid** ** because ID&#8217;s are unique, they don&#8217;t need a tag name to go along with it. It makes the selector less efficient. And it is better to avoid with the classes too even though they are not unique. We can make use of it in exceptional cases like **li.first** but that&#8217;s pretty rare.

`ul#custom-list { }`

**Descendant selectors** are the worst technique and most expensive. In other words it is the least efficient, for each element the CSS engine matches the key selector, the browser also have to traverse up the DOM tree, evaluating every ancestor element until it finds a match for the root element. The less specific the key, the greater the number of nodes that is to be evaluated.

`html body ul li a {  }`

**Font-family cascades**, so you may not need a selector to specify like specified in the 1st example. The 2nd one is as effective and far more efficient than the 1st one.

`</p>
<li><span style="font-family: monospace;">#container li a { font-family: Georgia, Serif; }</span></li>
<li><span style="font-family: monospace;">#container { font-family: Georgia, Serif; }</span></li>
<p>`

` `

` `

Do you find this article useful? Do let me know through your comments.

 [1]: http://cdn.devilsworkshop.org/files/2010/11/css-stamp.png
 [2]: http://devilsworkshop.org/let-your-stylesheet-lose-some-weight-css/
 [3]: http://devilsworkshop.org/remove-all-unused-css-selector-and-keep-your-stylesheet-clean/
