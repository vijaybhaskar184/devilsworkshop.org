---
title: Setup a Sub-domain of your Blogger Domain to any Free/Premium Host using NS or CName
author: swashata
date: 2009-07-21
url: /setup-a-sub-domain-of-your-blogger-domain-to-any-freepremium-host-using-ns-or-cname/
views:
  - 1246
dsq_thread_id:
  - 2947100087
categories:
  - Tips
tags:
  - Blogger
  - Free Services
---
<p align="justify">
  <img class="alignright wp-image-51936" style="border: 0pt none;margin: 0px 0px 5px 20px" src="http://cdn.devilsworkshop.org/files/2009/07/domainsanddomainswhataboutsubdomains.png" border="0" alt="Domains and Domains! What about subdomains" width="156" height="121" align="right" /> Do you have a blogger blog with your own custom domain and would like to use a particular sub-domain of it in a Free or Premium Web host? Well, unlike WordPress, Blogger does not let us upload any files on their server! While using WordPress (of course self hosted) we have the total freedom to add as many sub domains in the same hosting account! The reason is that we have already set the <strong>N</strong>ame<strong>S</strong>erver[NS] of our domain to the web-host we are using. But if we are using <a href="http://www.intechgrity.com/search/label/Blogging%20Tips" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.intechgrity.com/search/label/Blogging%20Tips', 'Blogger']);" >Blogger</a> then we in general set up a <strong>CName</strong> of the <strong>www</strong> alias pointing to <em>ghs.google.com</em> and forward the root level domain (<strong>mydomain.com</strong>) on <strong><a href="http://www.mydomain.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.mydomain.com', 'www.mydomain.com']);" >www.mydomain.com</a></strong>.
</p>

<p align="justify">
  Now as our network grows we soon feel like having at-least a free web-hosting to upload and host some html/php/JS files of our tutorials and then comes the difficulty! Setting the NameServer of your domain to any Free web host can really be risky and a downtime from them can really pull down the reputation of your blog. So today we are going to learn how to add a specific sub-domain of your Blogger Domain into any (yes! any) Free Web hosting services without actually changing the NameServer of your root level domain. We shall see the following two cases:
</p>

  1. Using <span style="text-decoration: underline"><strong>N</strong>ame<strong>S</strong>erver</span> [NS] for a particular sub-domain when your domain is unlocked;
  2. Using **<span style="text-decoration: underline">CName</span>** for a particular sub-domain when your domain is locked;

## Setting up the Sub Domain using NS for a Particular sub-domain:

Here I pre-assume that

  * You have a Blog hosted on BlogSpot and having a domain **<span style="text-decoration: underline">www.myblog.com</span>**. Your root level domain is forwarded to **<span style="text-decoration: underline">http://yourname.blogspot.com</span>** which ultimately redirects to **<span style="text-decoration: underline">www.myblog.com</span>**
  * Now you want to add a particular subdomain, say **abc.myblog.com** to a free web host!
  * Your **Domain in unlocked** and you are able to take total control over the DNS Management!

By default, most of the domain hosts like <a href="http://www.godaddy.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.godaddy.com', 'godaddy']);" >godaddy</a>, <a href="http://www.name.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.name.com', 'name.com']);" >name.com</a> gives Total control over the DNS Management! Also the status of a domain is set as unlocked by default. On the following example we shall see adding a particular subdomain (**<span style="text-decoration: underline">ourlife.intechgrity.com</span>**) of my domain (**<span style="text-decoration: underline">intechgrity.com</span>**) to a Free Web hosting provider <a href="http://www.zymic.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.zymic.com', 'Zymic.com']);" >Zymic.com</a>. As I have bought my domain from <a href="http://www.name.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.name.com', 'name.com']);" >name.com</a> so the screenshots will contain the control panel of it! You can obviously find similar thing on your  godaddy control panel (if you are using it). So now lets get into the work…

### Step 1: Setting up the NS for the Subdomain:

  * Just register your self at <a href="http://www.zymic.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.zymic.com', 'Zymic.com']);" >Zymic.com</a>. Then add a Web hosting account! They may give you a particular subdomain from them as **yourname.uuuq.com** or **yourname.vndv.com** etc! We are now going to add our own subdomain on it!
  * Go to your *Name.com (or godaddy)* **Control Panel** > **Select Your Domain** and Click on **DNS Management[<img style="float: none;margin-left: auto;margin-right: auto" src="http://cdn.devilsworkshop.org/files/2009/07/gotothednsmanagement-thumb.png" border="0" alt="Go to the DNS management" width="500" height="128" />][1] **
  * Now on “**Add a Record**” Dropdown menu select “**NS**”. Just beside it on the **Record Host** area, type “**ourlife**” *[or what ever subdomain you want to use] *and on the **Record Answer** Input box type the NameServer of your web-host [Check to their documentation to get to know about their NameServer].<img style="float: none;margin-left: auto;margin-right: auto" src="http://cdn.devilsworkshop.org/files/2009/07/addthens.png" border="0" alt="Add the NS" width="500" height="49" /> For Zymic I was having a NS ns1.uuuq.com and ns2.uuuq.com. After adding both the NS to the same **Record Host** the result was looking something like this…<img style="float: none;margin-left: auto;margin-right: auto" src="http://cdn.devilsworkshop.org/files/2009/07/thensresult.png" border="0" alt="The NS result" width="502" height="55" />

### Step 2: Adding the Domain on your Web host:

In this step we just need to add the Domain to our web host! If you are using Web hosts like <a href="http://www.07x.net" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.07x.net', 'www.07x.net']);" >www.07x.net</a> then you can add an “**Addon**** Domain**” from the Vista panel. For most general Control Panel, we just need to add the domain using the default option! Below is an illustration of adding the sub-domain on Zymic…

  * Go to your **Zymic control panel** > Login to your existing account [ie, **yourname.uuuq.com**] and click on “**Add A Custom Domain Name**”<img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/addacustmdomainonzymic.png" border="0" alt="Add a custm domain on Zymic" width="450" height="285" />
  * Now type in the name of the sub-domain which you have created on Step 1. Basically the key thing is that we are adding the sub-domain as another Domain on Zymic!<img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/addthedomaintozymichost.png" border="0" alt="Add the domain to Zymic host" width="445" height="188" />
  * Once done, open up Command Prompt (*Start Menu > Run > Type “cmd” and hit enter*). Now on the command prompt screen type “**ping your-subdomain.your-domain.com**” [*without the quotes*]. If you have done everything correctly then you should see the following result:<img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/pingresultforns.png" border="0" alt="Ping result for NS" width="500" height="140" />
  * Now start uploading files to the same place as that of **yourname.uuuq.com** [or yourname.vndv.com or whatever] and access it from **http://your-subdomain.your-domain.com**

And you are done! Enjoy your own domain on a Free Web-Host! You can obviously use this trick on any Premium web host! If you are using Godaddy control panel then just add a NameServer [NS] from the **Total DNS control** panel. Rest all the processes are same.

## Setting up the Sub Domain using CName:

Well, using NameServer is not the only way of adding sub-domains in such way! We can do this using <span style="text-decoration: underline"><strong>C</strong>anonical <strong>N</strong>ame</span> or in short **<span style="text-decoration: underline">CName</span>**. This becomes useful if

  * Your domain is locked and you really don’t want to or don&#8217;t know how to unlock
  * Don&#8217;t feel like using a NameServer 😛

So what ever the reason may be, below I have illustrated how I added my Sub-Domain **itg.intechgrity.com** to another popular Free Web-host – <a href="http://www.awardspace.com" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.awardspace.com', 'Awardspace']);" >Awardspace</a>.

### Step 1: Setting up the CName for the Sub Domain:

Just create an account on awardspace and they will give you a free site like **yourname.awardspace.biz** or yourname. Like mine is swashata.awardspace.biz. Save the website URL in Notepad and keep it handy for future use! Now just follow the steps below:

  * Go to your **Name.com [or Godaddy] Control panel > DNS Management** [Just as illustrated before]
  * This time we shall add a **CName** instead of a NS in the same way. Fill in the form in the way shown exactly on the image!<img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/addingthecnameondnspanel.png" border="0" alt="Adding the CName on DNS Panel" width="502" height="90" /> You have to enter the URL of your website. [For my case it is *swashata.awardspace.biz*] and save the settings
  * Now we need to check whether the CName is set properly or not! Open up Command prompt [*Start Menu > Run > Type “cmd” and hit enter*] and type “**ping your-subdomain.your-domain.com**”. If you have done everything correctly then the result should be similar to this [*Note the difference b/w the two ping results. Here although we ping **itg.******intechgrity******.com** the result shows **swashata.awardspace.biz**. This the function of a CName*] <img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/pingresultoncname.png" border="0" alt="Ping result on CName" width="500" height="184" />

Now that you are done creating the CName lets add your sub-domain to your hosting account.

### Step 2: Adding the domain on your Web Host:

Pretty much easy. Only a few important steps to follow and a few points to remember:

  * Simply go to your Awardspace account and Under **Website Manager**, click on **Domain Manager**. <img class="aligncenter" style="border: 0pt none" src="http://cdn.devilsworkshop.org/files/2009/07/gotothedomainmanageronawardspace.png" border="0" alt="Go to the Domain Manager on awardspace" width="397" height="163" />
  * Now just enter the subdomain whose CName record you have created before. [Don’t include www; It should be only ***itg.intechgrity.com*** (say) not ***<span style="text-decoration: underline"><span style="color: #ff0000">www.</span></span>itg.intechgrity.com***].
  * Just add the domain and you are done!
  * Start Uploading the files to the **your-subdomain.yourdomain.com** folder [**<span style="text-decoration: underline"><span style="color: #ff0000">Not</span></span>** the **yourname.awardspace.com** folder]

And you are done! Enjoy your Free host on your domain 😉 .

If you are using Godaddy then you can easily add a CName from the **Total DNS Control** area! As I don&#8217;t have a Godaddy domain so I cant put the screenshots. But you should be able to find it easily! Also check the FAQs and Documentation of the web-hosts you are using to get detailed help on the NameServer you should use and the folder where you should upload your site. Also you may use <a href="http://filezilla-project.org/download.php" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://filezilla-project.org/download.php', 'FileZilla Client']);" >FileZilla Client</a> for uploading files using FTP. Also check the documentation of your Web hosts to find the username, server and password of your FTP account!

**Note** that using NameServer for your different Sub-Domain is always recommended and preferred over using CName. Some Free hosts like Zymic will not even add a domain if it is a CName. So you should check whether your Web-Host supports it or not! My recommendation is to use different NS for different Sub-Domain! BTW, I hope after reading the CName way, you should now be able to understand how the CName ghs.google.com works 😉

Well, that was a detailed tutorial on using Subdomains of your Blogger domain [Now, I have already explained why in WP we don’t need to take such pain] to any Free/Premium web hosts! I hope you have found it useful! If I have missed any point or if you have some query then feel free to ask us!

*(Source: I discovered the CName trick after reading loads of documentation from both GoDaddy and name.com and of-course by some trial and error experiments.)*

*(Image credit: <a href="http://www.bv-afghanistan.com/domain.html" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.bv-afghanistan.com/domain.html', 'bv-afghanistan']);" target="_blank">bv-afghanistan</a>)*

* * *

*[**Editor&#8217;s Note**: This post is submitted by our guest blogger **Swashata Ghosh. **Swashata authors the blog <a href="http://www.intechgrity.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'http://www.intechgrity.com/', 'InTechgrity']);" >InTechgrity</a>, and is a student at RCCIIT, Kolkata. Programming is his hobby and is interested in CSS/xHTML web-designing.*</p> 

*If you, too would like to [write][2] for Devils Workshop, please [check this][2]. Details about our [revenue sharing programs][2] are [here][2].]*

 [1]: http://cdn.devilsworkshop.org/files/2009/07/gotothednsmanagement.png
 [2]: http://devilsworkshop.org/join-dw/
