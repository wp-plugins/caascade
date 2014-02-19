=== Caascade ===
Contributors: pmagunia
Tags: math
Requires at least: 2.7
Tested up to: 3.6.1
Stable tag: 1.0
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows the Wordpress public to perform Mathematical operations using the Maxima Computer Algebra System and the Caascade Remote Computation API.

== Description ==

The Caascade name is based on the acronym for Computations-as-a-Service. Some technical Wordpress blogs would benefit from being able to allow there users to interact with the mathematics on the page. With Caascade, they don't have to leave the page and they get instant formatted output to their computational questions. For example, a page about determining whether a number is prime will more likely engage reader interest, if the reader actually receives a definitive answer to reinforce the validity of their guess. The prime number operation has been recreated as a demonstration at the page with URL:

`http://wp.tetragy.com/caascade`

Near the bottom is a simple form to enter and submit the number and is displayed as a screenshot.

In addition, the current version of the plugin provides the following forms for operations:

1. defint - Compute a definite integral
2. derivative - Compute the derivative of an expression n times
3. expand - Expand an expression
4. factor - Factor an expression
5. integrate - Compute an indefinite integral
6. limit - Compute the limit of an expression approaching from the left, right, or both
7. prime - Primality test
8. omega - Omega (raw Maxima command)

Requests are routed to a Caascade server and output is sent back using AJAX (no page refresh necessary.)

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

You can get an idea for what may be possible by perusing the Maxima 5.31.3 manual provided in the FAQs. Please send operation requests, bug reports, feedback, and support requests to the Wordpress Caascade issue queue.

The Caascade free Basic subscription comes with 125 requests per month. Please note to format TeX output from the Caascade server a request is made to the MathJax SSL CDN. The output will be sent over a secure connection. If you are already using MathJax, don't worry; it checks whether it is loaded and won't consume additional resources. The MathJax CDN that you will find in the plugin is:

`https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js`

== Installation ==

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Register for a free Caascade.com account. (Note your numeric user ID and whitelist the IP addresses you server is using while you are there.)
3. Go to the Caascade Settings page on your site and save your unique numeric ID. This is available in the Wordpress Dashboard under Settings menu.
4. When you are editing a page, tell Wordpress to include the operation form using shortcode syntax. The com atribute will be the lowercase filename of any operation in the Caascade plugin folder named html. Do not include .html at the end. Here is an example: `[caascade com=\"prime\"]`.
5. Thats it. When you preview or view the page, you can enter the operations arguments to receive output (usually in a few seconds). If you do not enter a required argument you will get back a Maxima syntax error. You may need to add some CSS to help the form blend into your site. Some basic style is added already.


 
 


== Frequently Asked Questions ==

1. How come I need a subscription for the Omega command ?

Maxima operations can be quite time-consuming. To prevent other users from experiencing a lag in service, Omega subscribers are given their own dedicated server with custom hardware configuration. Omega servers can take up to 2 business days to setup though the alpha, beta, and gamma subsciption servers take only a few minutes to boot. The 125 free requests are available immediately after verifying an email address.

2. How come its not free ?

Maxima is GPL licensed, but Tetragy pays for each server by the hour. To make the service viable for the future there is a monthly charge. If you would like to experiment with additional requests please send an email to the Caascade admin. Bitcoin is also welcome as a form of payment.

3. Will I get my own server ?

For the Omega and Gamma subsciptions, yes. Users are provided an unshared server. With the basic, alpha, and beta subscriptions you may get your own server depending on the system load at the time but most likely not.

All calls are routed through a central server whose responsibity is getting your particular request to the correct server for processing. Network traffic is monitored for bottlenecks. If you users are experiencing a delay of more than a few seconds, please contact the site admin.

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

