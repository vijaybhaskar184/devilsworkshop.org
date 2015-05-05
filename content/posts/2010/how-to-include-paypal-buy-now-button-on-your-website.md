---
title: How to include Paypal “Buy Now” button on your website ?
author: parshwanemijain
date: 2010-03-15
url: /how-to-include-paypal-buy-now-button-on-your-website/
robotsmeta:
  - index,follow
views:
  - 1352
dsq_thread_id:
  - 2947108558
categories:
  - Tutorial
tags:
  - Codes
  - Developers
  - Paypal
---
In this tutorial, we will learn how to create Buy Now Button using <a href="https://www.paypal.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.paypal.com/', 'PayPal']);" title="PayPal">PayPal</a>.

I assume that you have basic knowledge of HTML.

See [Demo][1].

Source Code:

<pre><code class="html">
</code></pre>

Lets start from the beginning of the code.

To create a PayPal Buy Now Button, we need to specify few variables.

  * On Line #5 *business* tells PayPal where to deposit the money.
  * On Line #7 *cmd* is used to tell PayPal what type of transaction is being made. Since we are creating Buy Now button, its value is &#8220;_xclick&#8221;.
  * On Line #9 *item_name* is used to tell the product name to PayPal.
  * On Line #10 *amount* tells PayPal the price of the product.
  * On Line #11 *currency_code* tell PayPal the currency of price. The default is USD. List of allowable values of Currency Codes can be found <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes', 'here']);" >here</a>.
  * On Line #14 *quantity* tells PayPal the total number of product bought by the customer.

When a customer clicks on the Buy Now button, all these variables are passed to PayPal.

The process is shown in the following image (Copied from PayPal)  
<a rel="attachment wp-att-21182" href="http://devilsworkshop.org/how-to-include-paypal-buy-now-button-on-your-website/buy-now_basic-checkout-experience/"><img class="alignnone size-full wp-image-21182" title="buy-now_basic-checkout-experience" src="http://cdn.devilsworkshop.org/files/2010/03/buy-now_basic-checkout-experience.gif" alt="" width="510" height="681" /></a>

<a name="demo">Demo</a>

For more information on PayPal, you can refer the following link:

  * <a href="https://www.paypal.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://www.paypal.com/', 'PayPal']);" >PayPal</a>
  * <a href="https://developer.paypal.com/" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://developer.paypal.com/', 'PayPal Sandbox']);" >PayPal Sandbox</a>
  * PayPal Website Payments Standard Integration Guide: <a href="https://cms.paypal.com/cms_content/US/en_US/files/developer/PP_WebsitePaymentsStandard_IntegrationGuide.pdf" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/cms_content/US/en_US/files/developer/PP_WebsitePaymentsStandard_IntegrationGuide.pdf', 'PDF']);" title="PayPal Website Payments Standard Integration Guide">PDF</a> <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_html_wp_standard_overview" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_html_wp_standard_overview', 'HTML']);" title="PayPal Website Payments Standard Integration Guide">HTML</a>
  * PayPal Sandbox User Guide: <a href="https://cms.paypal.com/cms_content/US/en_US/files/developer/PP_Sandbox_UserGuide.pdf" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/cms_content/US/en_US/files/developer/PP_Sandbox_UserGuide.pdf', 'PDF']);" title="PayPal Sandbox User Guide">PDF</a> <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_testing_sandbox" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/howto_testing_sandbox', 'HTML']);" title="PayPal Sandbox User Guide">HTML</a>
  * Merchant Setup and Administration Guide: <a href="https://cms.paypal.com/cms_content/US/en_US/files/developer/PP_MerchantSetupAdministrationGuide.pdf" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/cms_content/US/en_US/files/developer/PP_MerchantSetupAdministrationGuide.pdf', 'PDF']);" >PDF</a> <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_admin_setup_SUA_admin_setup" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_admin_setup_SUA_admin_setup', 'HTML']);" >HTML</a>
  * <a href="https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_html_Appx_websitestandard_htmlvariables" onclick="_gaq.push(['_trackEvent', 'outbound-article', 'https://cms.paypal.com/us/cgi-bin/?&cmd=_render-content&content_ID=developer/e_howto_html_Appx_websitestandard_htmlvariables', 'HTML Variables for Website Payments Standard']);" title="HTML Variables for Website Payments Standard">HTML Variables for Website Payments Standard</a>

In the next tutorial, we will learn about PayPal Instant Payment Notification (IPN).

 [1]: #demo
