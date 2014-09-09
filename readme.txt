=== Caascade ===
Contributors: pmagunia
Tags: math,education,shortcode
Requires at least: 3.9.2
Tested up to: 4.0
Stable tag: 1.3.1
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Caascade allows the Wordpress public to request output from the Maxima CAS.

== Description ==

Caascade is a Computation-as-a-Service API. Using Wordpress Shortcode, this plugin allows forms to be embedded for various mathematical operations into Wordpress pages and posts. Users can enter expressions which are evaluated by a Caascade server. The output from running the operation is captured and returned in a format chosen by the plugin admin. Notable features include PDF and reCaptcha support. The Caascade plugin may be useful to bloggers and other web publishers who would like their readers to interact with site content.

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
- greatest common factor (v1.3.2)

Using your Caascade account, you can adjust settings for:

- Exact fractions
- Output format
- Floating point precision
- Input base
- Output base
- Line length
- Maxima flags

== Installation ==

A Caascade ID is necessary and may be obtained from https://math.tetragy.com

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Whitelist your server IP addresses or disable enforcing for your account at the Caascade project website.
3. Visit the Caascade settings page of your Wordpress site to configure your ID.
4. Use Shortcode in your posts to include a Caascade operation. The following is sample Shortcode you can include in a post: `[caascade com="prime"]`.

== Frequently Asked Questions ==

1. Do I need Maxima installed on my server ?

No, Maxima does not need to be installed on your server. Wordpress and the Caascade plugin are the only software requirements. Configuring your Caascade account with a dedicated IP address is recommended to prevent unauthorized use of your Caascade ID.

2. How do I prevent spam submissions ?

With reCaptcha you can help prevent spam and other abuse of your Caascade account. Configure the public and private key settings to automatically add a reCaptcha form to all your widgets. This plugin also includes support for reCaptcha themes.

3. Is Caascade free ?

For light users- yes. Server-side, Caascade makes use of the Drupal Userpoints module to replenish the free monthly computation limit. Currently, +250 points are alotted with signup. Then, on the first of each of month, an additional +250 points are granted. Additional points may be purchased to match your website's computing needs.

References

- http://maxima.sourceforge.net
- http://www.latex-project.org
- http://www.mathjax.org
- http://www.google.com/recaptcha
- https://www.drupal.org/project/userpoints
- https://math.tetragy.com

== Screenshots ==

1. Test of primality operation on the integer '113'
2. plot3D screenshot of log(x) on (-1,1)
3. plot2D screenshot of log(x) on (-1,1)

== Changelog ==

= 1.3.2 =
* Greatest common factor

= 1.3.1 =
* Fix bug where reCaptcha keys with hypen may not be saved 

= 1.3.0 =
* reCaptcha support
* Summation and product operations
* Inline PDF support

= 1.2.0 =
* Add override feature so customized code is not lost with plugin upgrade
* Support multiple operations on the same page
* Remove tab whitespace for repository browsing
* Improve class and and id attribute structuring
* Update MathJax CDN address
* Plot2D and Plot3D

= 1.1.2 =
* Add arithmetic operators

= 1.1.1 =
* Fix Author URI
* Clarify README.txt
* Add MathJax as a dependency for the `caascade.js` script

= 1.1 = 
* Add PDF functionality
* CSS improvements
* add evaluate operation

= 1.0 = 
* Initial commit


== Upgrade Notice ==

= 1.3.2 =
New operations

= 1.3.1 =
Necessary for certain reCaptcha users

= 1.3.0 =
Recommended for users who need recaptcha and inline PDF options

= 1.2.0 =
Recommended for users who want to display multiple blocks. New plotting operations.

= 1.1.2 =
Arithmetic operators

= 1.1.1 =
No functional changes. Minor improvement to documentation and JS enqueue

= 1.1 =
Recommended for all users. New features and stability improvements.

= 1.0 =
Initial commit

