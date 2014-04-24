=== Caascade ===
Contributors: Tetragy
Tags: math,education
Requires at least: 2.7
Tested up to: 3.6.1
Stable tag: 1.1.2
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows the Wordpress public to perform Mathematical operations using Maxima and the Caascade API.

== Description ==

Caascade is based on the acronym for Computations-as-a-Service. Using Shortcode, this plugin allows forms to be embedded for various mathematical operations into Wordpress pages and posts. Readers can enter expressions which are evaluated by a Caascade server. The output from running the operation is captured and returned as a MathJax formatted PNG. The Wordpress Caascade plugin homepage contains additional information about Maxima and also a demonstration: 

`http://wp.tetragy.com/caascade`

The current version of the plugin provides the following forms for operations:

1. `defint` - Compute a definite integral
2. `derivative` - Compute the derivative of an expression `n` times
3. `expand` - Expand an expression
4. `factor` - Factor an expression
5. `integrate` - Compute an indefinite integral
6. `limit` - Compute the limit of an expression approaching from the left, right, or both
7. `prime` - Primality test
8. `omega` - Omega (raw Maxima command)
9. `evaluate` - evaluate expression at expression
10. Five arithmetic operators

At your `caascade.com` settings page, you can adjust settings for:

1. Output exact fractions or approximations
2. Output format (TeX, 2D, or Linear)
3. exptdispflag (Maxima flag for exponents that are quotients)
4. Adjust floating point precision
5. Adjust the input and output base
6. Line length (for 2D and linear output)
7. negsumdispflag
8. Hide rational substitution messages
9. Display multiplication with the asterisk

You can get an idea for what may be possible by perusing the Maxima 5.31.3 manual.

The Caascade free Basic subscription comes with 125 requests per month. Please note that to format TeX output from the Caascade server, a request is made to the MathJax SSL CDN. The output will be sent over a secure connection. The MathJax CDN that you will find in the plugin is:

`https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js`

Please send operation and feature requests, bug reports, feedback, and support questions to the Wordpress Caascade issue queue.

== Installation ==

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Register for a free Caascade.com account. After you have verified your email address, note your numeric user ID and whitelist the IP addresses your server is using in the account settings page.
3. Go to the Caascade settings page of your Wordpress site and save your unique numeric ID. This is available in the Wordpress dashboard under the settings menu.
4. Finally, when you are editing a page, tell Wordpress to include the operation form using shortcode syntax. The `com` atribute will be the lowercase operation name. Here is an example: `[caascade com="prime"]`.

Thats it. When you preview or view the page, you can enter the operations arguments to receive output. If you do not enter a required argument you will get back a Maxima syntax error. CSS may need to be added to help the form blend into your particular site. Some basic style is added already.


 
 


== Frequently Asked Questions ==

Why do I get a message saying 'IP not whitelisted' ?

All users are required to list their server's IP address in their `caascade.com` user settings page. This prevents spam requests and also unauthorized requests using your account.

Do I need Maxima installed on my server ?

No, Maxima does not need to be installed on your server. Wordpress and the Caascade plugin are the only software requirements.


How come I need a subscription for the Omega command ?

Maxima operations can be quite time-consuming depending on the request. To prevent other users from experiencing a lag in service, Omega subscribers are given their own dedicated server with custom hardware configuration. Omega servers can take up to 2 business days to setup. Gamma subsciption servers take only a few minutes to boot once payment is received. The 125 free requests included in the Basic subscription are available immediately after verifying an email address.


Where can I go to find out more about the underlying software ?

- http://maxima.sourceforge.net
- http://www.latex-project.org
- http://www.mathjax.org
- https://api.jquery.com/jQuery.ajax/
- https://caascade.com/img/maxima.pdf (5 MB PDF)
- https://caascade.com

== Screenshots ==

1. Test of primality operation using the 2012 theme

== Changelog ==
1.0 Initial commit

1.1 Add PDF functionality, CSS improvements, add evaluate operation

1.1.1 Fix Author URI, clarify README.txt, add MathJax as a dependency for the `caascade.js` script

== Upgrade Notice ==

= 1.0 =
Initial commit

=1.1 =
Recommended for all users. New features and stability improvements.

=1.1.1 =
No functional changes. Minor improvement to documentation and JS enqueue

=1.1.2 =
Arithmetic operators
