---
title: What are proxies and How proxy work
author: pravinkenator
date: 2009-04-24
url: /proxies-what-do-they-really-do/
views:
  - 524
dsq_thread_id:
  - 2947097307
categories:
  - Analysis
tags:
  - Internet
  - proxy
---
Hello&#8230; This is my first post on Devils Workshop. I was thinking for quite some time on what topic to write, just when there came a bolt from the blue&#8230; PROXIES&#8230;!!!

Many of us must have heard of it or, could be having an overview of it already, so let&#8217;s dive deeper into the vast ocean of proxies&#8230;

To put in lay man&#8217;s words, a proxy is a server or you can better call it as a gateway with which we can access Internet in large organizations or institutions. It is some thing like this:

<p style="text-align: center">
  <img class="size-full  aligncenter wp-image-51462" src="http://cdn.devilsworkshop.org/files/2009/04/proxy-server-22.jpg" alt="proxy-server-22" width="520" height="308" />
</p>

A proxy can be considered as an entity which serves client requests on behalf of a original web server. A proxy usually provides some kind of caching.

### Let us walk through an example:

  * Say, you are surfing the Internet in your college and you are accessing the Internet through a Proxy, and you have entered [www.devilsworkshop.org][1] in your browser&#8230;
  * First, your browser establishes a TCP connection with your Proxy and it requests the webpage &#8211; www.devilsworkshop.org.
  * Your Proxy, first checks whether it has a copy of the webpage stored locally. If it has, it services your request by sending the webpage to you.
  * If not, your proxy in turn establishes a connection with the original web server (your ISP) and obtains the webpage, keeps a copy of the webpage locally and also sends you the requested page.

### So, what is the big deal in having a proxy?

The advantage comes when, another person say your friend, requests for the same page, the proxy will serve him quicker because, it is having the webpage stored locally. So, a proxy can substantially reduce the Internet traffic it accelerates the client&#8217;s web requests. But we know that the contents of the web pages usually changes pretty fast and using a proxy may result in having old pages with outdated content.

### How does a proxy deal with this?

Let us continue with the previous example&#8230; when a browser requests for the page http://www.devilsworkshop.org/projects/ , the following happens&#8230;

The browser sends the request to the Web Proxy. The proxy in turn (assuming that it does not have a cached copy of the page locally) sends a request to the original web server. The request message usually will be of this format:

GET /projects/

Host: www.devilsworkshop.org

The web server sends the requested page to the proxy. It will usually be of this format:

HTTP/1.1 OK

Date:Wed, 22 April 2009 09:45:33 GMT

Server: Apache/2.2.3 (CentOS)

Last Modified: Tues, 21 April 2009 10:53:48 GMT

Content-Type: text/html; charset=UTF-8

( data&#8230; data&#8230;&#8230;. data&#8230;&#8230; )

The proxy forwards the requested page to the client and also stores a copy of the page locally. The most important field in the response message stated above is the Last Modified field. The Proxy, periodically sends a conditional GET to update it&#8217;s local copy of the page. It will send a conditional GET request which will be of this format:

GET /projects/

Host: www.devilsworkshop.org

If-modified-since: Tues, 21 April 2009 10:53:48 GMT

The If-Modified-since will be same as the Last modified field in the response message from the web server. The proxy is instructing the server to send the requested page if it had been modified since the specified date. If the object has mot been modified, the web server sends a message to the proxy:

HTTP/1.1 304 Not Modified

Date: Wed, 22 April 2009 13:23:52 GMT

Server: Apache/2.2.3 (CentOS)

So, the proxy, by this method keeps the copies of the page up to date. A proxy, apart from this, also serves to authenticate the users from accessing the network resources, filtering the content and requests, intercepting user requests etc.

I just shared what little knowledge I had on proxies&#8230; Please feel free to comment on this article. After all, the ocean of knowledge is endless&#8230;

*(Image Credits: <a href="http://www.computerrepairmaintenance.com/images/proxy-sever.png" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.computerrepairmaintenance.com/images/proxy-sever.png', 'computer-repair-maintenance']);" target="_self">computer-repair-maintenance</a>)*

* * *

*[**Editor&#8217;s Note:** This article is submitted b*y *****Pravin Kenator*******.*** This is his first blog post on Devils Workshop.*</p> 

*If you, too would like to <a href="http://devilsworkshop.org/join-dw/" target="_blank">write</a> for Devils Workshop, please <a href="http://devilsworkshop.org/join-dw/" target="_blank">check this</a>. Details about our <a href="http://devilsworkshop.org/join-dw/" target="_blank">revenue sharing programs</a> are <a href="http://devilsworkshop.org/join-dw/" target="_blank">here</a>.]*

 [1]: http://www.devilsworkshop.org
