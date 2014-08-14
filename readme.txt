=== Caascade ===
Contributors: Tetragy
Tags: math,education,shortcode
Requires at least: 2.7
Tested up to: 3.9.2
Stable tag: 1.3.0
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Caascade allows the Wordpress public to request output from the Maxima CAS.

== Description ==

New: Support for reCaptcha now included in v1.3.0.

Caascade follows the computation-as-a-service model. Using Wordpress Shortcode, this plugin allows forms to be embedded for various mathematical operations into Wordpress pages and posts. Readers can enter expressions which are evaluated by a Caascade server. The output from running the operation is captured and returned as a MathJax formatted PNG.

The current version of the plugin provides for the following operations:

- defint
- derivative
- expand
- factor
- integrate
- limit
- prime
- evaluate
- exponent
- add
- subtract
- multiply
- divide
- relational operators
- plot2D
- plot3D

Using your registered Caascade account, you can adjust settings for:

- Exact fractions
- Display Medium
- Output format
- Floating point precision
- Input base
- Output base
- Line length
- Maxima flags

== Installation ==

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Visit the Caascade settings page of your Wordpress site to configure your ID.
3. Whitelist your server IP address or disable enforcing.
4. Use shortcode in your posts to include a Caascade operation. For example, `[caascade com="prime"]`.

To prevent unauthorized use of your Caascade account, you may whitelist server IP addresses.

== Frequently Asked Questions ==

1. Do I need Maxima installed on my server ?

No, Maxima does not need to be installed on your server. Wordpress and the Caascade plugin are the only software requirements.

2. I've got public-facing Caascade forms. How do I prevent spam submissions ?

With reCaptcha keys you can help prevent spam and other abuse of your Caascade account requests. Configure the public and private key settings to automatically add a reCaptcha form to all your widgets. The Wordpress module also includes support for reCaptcha themes.

3. Why does my request hang after it says 'Computing...'

Check your router settings on the Caascade options page. The default address is 'https://route.tetragy.com'.

References

- http://maxima.sourceforge.net
- http://www.latex-project.org
- http://www.mathjax.org
- https://math.tetragy.com

== Screenshots ==

1. Test of primality operation on the integer '113'
2. plot2D screenshot of log(x) on (-1,1)
3. plot3D screenshot of log(x) on (-1,1)

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

=1.2.0 =
Add override feature so customized code is not lost with plugin upgrade
Support multiple operations on the same page
Remove tab whitespace for repository browsing
Improve class and and id attribute structuring
Update MathJax CDN address
Plot2D and Plot3D

=1.3.0 =
reCaptcha support
Summation and product operations

