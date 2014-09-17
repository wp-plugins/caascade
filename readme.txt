=== Caascade ===
Contributors: pmagunia
Tags: math,education,shortcode
Requires at least: 3.9.2
Tested up to: 4.0
Stable tag: 1.3.2
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Caascade allows users to request output from the Maxima CAS.

== Description ==

Caascade is a Computation-as-a-Service API. Using Wordpress Shortcode, this plugin allows forms to be embedded for various mathematical operations into Wordpress pages and posts. Users can enter expressions which are evaluated by a Caascade server. The output from running an operation is captured and returned in a format chosen by the site admin. Notable features include PDF and reCaptcha support. The Caascade plugin may be useful to bloggers and other web publishers who would like their readers to interact with site content.

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

A Caascade ID is necessary and may be obtained from tetragy.com

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Whitelist your server IP addresses or disable enforcing at `math.tetragy.com/user`.
3. Visit the Caascade settings page of your Wordpress site to configure your ID.
4. Use Shortcode in your posts to include a Caascade operation. For example: `[caascade com="prime"]`.

== Frequently Asked Questions ==

1. How much does it cost ?

$0.0025 per request.

2. Do I need Maxima installed on my server ?

No, Maxima does not need to be installed on your server. Wordpress and the Caascade plugin are the only software requirements. Configuring your Caascade account with a dedicated IP address is recommended to prevent unauthorized use of your Caascade ID.

3. How do I prevent spam submissions ?

With reCaptcha you can help prevent spam and other abuse of your Caascade account. Configure the public and private key settings to automatically add a reCaptcha form to all your widgets. This plugin also includes support for reCaptcha themes.

4. Why is it recommended to whitelist my IP address ?

To prevent unauthorized use of your Tetragy account. If IP enforcing is disabled, Caascade requests made with your ID will be deducted from your account.

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

= 1.4.0 =
* Greatest common divisor
* Switch from POST to GET and jsonp
* Clarify README.txt

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

= 1.4.0 =
New operations
Under-the-hood changes
No bug fixes

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

