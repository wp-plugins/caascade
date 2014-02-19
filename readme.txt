=== Caascade ===
Contributors: pmagunia
Tags: math
Requires at least: 2.7
Tested up to: 3.6.1
Stable tag: 1.0
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows the Wordpress public to perform Mathematical operations using Maxima and the Caascade API

== Description ==

The Caascade name is based on the acronym for Computations-as-a-Service. Using Shortcode, this plugin allows forms to be embedded for various mathematical operations into Wordpress pages and posts. Readers can enter expressions which are evaluated by a Caascade server. The output from running the operation is captured and returned as a MathJax formatted PNG.

For example, a page about determining whether a number is prime will more likely pique reader interest, if they can experiment with various number to determine primality. For a demonstration, scroll to bottom of the Wordpress plugin homepage:

`http://wp.tetragy.com/caascade`

In addition, the current version of the plugin provides the following forms for operations:

1. defint - Compute a definite integral
2. derivative - Compute the derivative of an expression n times
3. expand - Expand an expression
4. factor - Factor an expression
5. integrate - Compute an indefinite integral
6. limit - Compute the limit of an expression approaching from the left, right, or both
7. prime - Primality test
8. omega - Omega (raw Maxima command)

At your caascade.com settings page, you can adjust settings for:

1. Output exact fractions or approximations
2. Output format (TeX, 2D, or Linear)
3. exptdispflag (Maxima flag for exponents that are quotients)
4. Adjust floating point precision
5. Adjust the input and output base
6. Line length (for 2D and linear output)
7. negsumdispflag
8. Hide rational substitution messages
9. Display multiplication with the asterisk

You can get an idea for what may be possible by perusing the Maxima 5.31.3 manual (the link is provided in the FAQs.) 

Please send operation and feature requests, bug reports, feedback, and support questions to the Wordpress Caascade issue queue.

The Caascade free Basic subscription comes with 125 requests per month. Please note to format TeX output from the Caascade server a request is made to the MathJax SSL CDN. The output will be sent over a secure connection. If you are already using MathJax, don't worry; it checks whether it is loaded and won't consume additional resources. The MathJax CDN that you will find in the plugin is:

`https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js`

== Installation ==

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Register for a free Caascade.com account. Only a valid email address is required which will be verified. While you are there note your numeric user ID and whitelist the IP addresses you server is using in the account settings page.
3. Go to the Caascade Settings page of your site and save your unique numeric ID. This is available in the Wordpress Dashboard under the Settings menu.
4. Finally, when you are editing a page, tell Wordpress to include the operation form using shortcode syntax. The `com` atribute will be the lowercase filename of any operation in the Caascade plugin folder named html. Do not include `.html` at the end. Here is an example: `[caascade com=\"prime\"]`.

Thats it. When you preview or view the page, you can enter the operations arguments to receive output. If you do not enter a required argument you will get back a Maxima syntax error. You may need to add some CSS to help the form blend into your site. Some basic style is added already.


 
 


== Frequently Asked Questions ==

1. How come its not free ?

Maxima is GPL licensed, but Tetragy pays for each server by the hour. To make the service viable for the future there is a monthly charge for additional request beyond the allotted monthly limit. If you would like to experiment with additional requests please send an email to the Caascade admin. Bitcoin is also welcome as a form of payment.

2. How come I need a subscription for the Omega command ?

Maxima operations can be quite time-consuming depending on the request. To prevent other users from experiencing a lag in service, Omega subscribers are given their own dedicated server with custom hardware configuration. Omega servers can take up to 2 business days to setup though the alpha, beta, and gamma subsciption servers take only a few minutes to boot. The 125 free requests are available immediately after verifying an email address.


3. Will I get my own server ?

For the Omega and Gamma subsciptions, yes. Users are provided an unshared server. With the basic, alpha, and beta subscriptions you may get your own server depending on the system load at the time but most likely not.

All calls are routed through a central server whose responsibity is getting your particular request to the correct server for processing. Network traffic is monitored for bottlenecks. If your users are experiencing a delay of more than a few seconds, please contact the site admin.

4. What is the difference between a Gamma and Omega server ?

Though both subscriptions offer an unshared server, the Omega server is more capable as it is configured with additional RAM, disk space, and cores. The Omega server also has faster network connection.

The Gamma server is identical to what alpha and beta subscribers use though is is unshared.

5. Where can I go to find out more about the underlying software ?

- http://maxima.sourceforge.net
- http://www.latex-project.org
- http://www.mathjax.org
- https://api.jquery.com/jQuery.ajax/
- https://caascade.com/img/maxima.pdf
- https://caascade.com

== Screenshots ==

1. Test of primality operation using the 2012 theme

== Changelog ==
1.0 Initial commit

== Upgrade Notice ==

= 1.0 =
Initial commit

