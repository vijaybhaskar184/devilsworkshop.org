---
title: '[SVN] Simplest Way To Restore (Revert) Deleted Files/Directories'
author: rahul286
date: 2011-01-30
url: /svn-simplest-restore-revert-deleted-filesdirectories/
views:
  - 305
dsq_thread_id:
  - 3309564776
categories:
  - Tutorial
tags:
  - Developers
  - 'Tips &amp; Hacks'
  - Tutorial
---
SVN (Subversion) is a version control system that is used by WordPress and thus by all our developers at <a href="http://rtcamp.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://rtcamp.com/', 'rtCamp']);" >rtCamp</a>.

Many a times, while cleaning up our repositories, we end up deleting the wrong files and/or directories. If a top-level&nbsp;directory gets deleted accidentally, one usually starts sweating!

#### The simplest command to restore/revert deleted file/directory in SVN is:

<pre><code class="brush:plain">svn cp http://svn.example.com/path/to/deleted/dir/@REVNUM http://svn.example.com/path/to/deleted/dir/</code></pre>

In the above command,

  * ***cp*** is shorthand for ***copy*** command 😉
  * ***http://svn.example.com/*** is the location of SVN-repo
  * ***/path/to/deleted/dir/*** is actual path of file or directory to be restored (including filename/directory-name)
  * ***@REVNUM*** is the old revision number in which that file/directory was present last-time

Note that SVN paths for source and destination are same in such copy commands!

***Example:* **Below is an example usage

<pre><code class="brush:plain">svn cp http://svn.example.com/wordpress/themes/@286 http://svn.example.com/wordpress/themes/</code></pre>

#### Alternative Syntax:

If for some reason above command-syntax doesn&#8217;t work, try &nbsp;alternative syntax as below.

<pre><code class="brush:plain">svn cp -r REVNUM http://svn.example.com/path/to/deleted/dir/ http://svn.example.com/path/to/deleted/dir/</code></pre>

**FAQs**

### Q. How to find old REVNUM i.e. revision number?

There are many ways. The simplest one is, if you have noticed the accidental delete quickly enough, notice the current version number and try using a number smaller than one!

Alternatively, you can use SVN browser, just Google for one. If you are using NetBeans or any other nice IDE for&nbsp;development, try using for&nbsp;built-in&nbsp;SVN browser/tool in that IDE.

### Q. Why don&#8217;t we just use &#8216;revert&#8217; command in SVN?

&#8216;revert&#8217; command in SVN, rolls back local changes on local working copy only! Though I wish it should have been designed to roll-back changes in remote copies as well.

This unexpected behavior from revert command is one of reason why people starts sweating then they delete a folder in SVN accidentally.

Let me remind you, you can never loose data in SVN itself. So be calm and try some other article from Google search, just in case this doesn&#8217;t work for you! 😉
