=== Caascade ===
Contributors: Tetragy
Tags: math,education
Requires at least: 2.7
Tested up to: 3.6.1
Stable tag: 1.1.2
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows the Wordpress public to request output from the Maxima CAS

== Description ==

Caascade is based on the acronym for Computations-as-a-Service. Using Shortcode, this plugin allows forms to be embedded for various mathematical operations into Wordpress pages and posts. Readers can enter expressions which are evaluated by a Caascade server. The output from running the operation is captured and returned as a MathJax formatted PNG.

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
11. Four relational operations

Using your registered Caascade account, you can adjust settings for:

1. Output exact fractions or approximations
2. Output format (TeX, 2D, or Linear)
3. exptdispflag (Maxima flag for exponents that are quotients)
4. Adjust floating point precision
5. Adjust the input and output base
6. Line length (for 2D and linear output)
7. negsumdispflag
8. Hide rational substitution messages
9. Display multiplication with the asterisk

== Installation ==

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Go to the Caascade settings page of your Wordpress site to configure your unique numeric ID. This ID can be found under your Caascade profile once registered.
3. Use shortcode on your blog page to include a Caascade operation. For example, `[caascade com="prime"]`.

Make any CSS changes as necessary to suite your blog.

Also, whitelist your server's IP address on your Caascade profile page to prevent unauthorized use of your numeric ID. This feature is disabled by default.

== Frequently Asked Questions ==

Do I need Maxima installed on my server ?

No, Maxima does not need to be installed on your server. Wordpress and the Caascade plugin are the only software requirements.

References

http://maxima.sourceforge.net
http://www.latex-project.org
http://www.mathjax.org
https://math.tetragy.com
https://math.tetragy.com/img/maxima.pdf (5 MB PDF)

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

=1.2.0 =
Add override feature so customized code is not lost with plugin upgrade
Support multiple operations on the same page
Remove tab whitespace for repository browsing
Improve class and and id attribute structuring

