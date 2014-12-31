=== Caascade ===
Contributors: pmagunia
Tags: math,education,shortcode
Requires at least: 3.9.2
Tested up to: 4.1
Stable tag: trunk
License: GPLv2  or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Caascade allows users to request output from the Maxima CAS.

== Description ==

New: The MathJax-LaTeX plugin with 'Force Load' option checkmarked is now required for TeX rendering. Otherwise, choose the 'Linear' or '2D' output format from your Caascade account to view Maxima output.

Caascade is a Computation-as-a-Service API. Using Wordpress Shortcode, this plugin allows forms to be embedded for various mathematical operations. Users can enter expressions which are evaluated by a Caascade server. The output from running an operation is captured and returned in a format chosen by the site admin. Notable features include PDF and Recaptcha support. The Caascade plugin may be useful to bloggers and other web publishers who would like their readers to interact with mathematical site content.

Tetragy welcomes requests for new operations that may be specific to a user or organization. The current version of the plugin provides for the following operations:

Arithmetic

- add
- subtract
- multipliy
- divide
- exponent
- factorial
- double factorial
- beta & gamma functions
- is greater than
- is greater than or equal to
- is less than
- is less than or equal to

Algebra

- expand
- factor
- evaluate
- distribute over
- absolute value
- factor out
- polynomial divide
- square root
- solve
- allroots

Number Theory

- prime
- greatest common divisor
- isint
- isodd
- iseven
- asksign

Plotting

- plot2d
- plot3d
- contour plot
- implicit plot
- parametric plot

Calculus

- defint
- derivative
- integrate
- limit
- summation
- product
- La Place transform

Trigonometry

- arc cosine
- hyperbolic arc cosine
- arc cotangent
- hyperbolic cotangent
- arc secant
- hyperbolic arc cosecant
- arc secant
- hyperbolic arc secant
- arc sine
- hyperbolic arc sine
- arc cotangent
- hyperbolic arc cotangent
- cosine
- hyperbolic cosine
- cotangent
- hyperbolic cotangent
- cosecant
- hyperbolic cosecant
- exponential function
- natural logarithm
- secant
- hyperbolic secant
- sine
- hyperbolic sine
- tangent
- hyperbolic tangent

Miscellaneous

- floor
- ceiling
- random

Using your Caascade account, you can adjust settings for:

- exact fractions
- output format
- display medium
- input base
- output base
- negsumflag

== Installation ==

A Caascade ID is necessary and may be obtained from https://tetragy.com/. Accounts are necessary to allocate resources and prevent abuse of user and network services. Links to the Tetragy Limited privacy policy and terms of service may be found at the bottom of all .tetragy.com pages.

1. Download and expand the Wordpress Caascade zip file to your `/wp-content/plugins/` directory.
2. Whitelist your server IP addresses or disable enforcing at `math.tetragy.com/user`.
3. Visit the Caascade settings page of your Wordpress site to configure your ID.
4. Use Shortcode in your posts to include a Caascade operation. For example: `[caascade com="prime"]`.

A demonstration of select operations can be found at http://wp.tetragy.com/.

== Frequently Asked Questions ==

= How much does it cost ? =

$0.00105 per request.

= Can I try out the services ? =

Yes, 250 points are awarded with signup, and another 250 points are awarded the first of every month.

= How does the point system work ? =

Tetragy offers three distinct web services and uses a point system to create a digital currency between services. Points may be used for Caascade computation requests, statistical operations, or LaTeX document compiling.

= Do I need Maxima installed on my server ? =

No, Maxima does not need to be installed on your server. Wordpress and the Caascade plugin are the only software requirements. Configuring your Caascade account with a dedicated IP address is recommended to prevent unauthorized use of your Caascade ID.

= How do I prevent spam submissions ? =

With Recaptcha you can help prevent spam and other abuse of your Caascade account. Configure the public and private key settings to automatically add a Recaptcha form to all your widgets. This plugin also includes support for Recaptcha themes.

= Why is it recommended to whitelist my IP address ? =

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
4. Caascade UI
5. Caascade syntax for including operation on a page or post
6. PDF of Caascade output

== Changelog ==

= 1.7.0 =
* New feature: Override default CSS and JS files

= 1.6.0 =
* MathJax-LaTeX plugin now required
* Add caascade-2d CSS class
* Added equal sign to isequal operation for clarity
* New operations: allroots, beta, gamma, laplace, solve

= 1.5.0 =
* switch from POST to GET and jsonp
* localize JavaScript pubkey variable
* correct Recaptcha message on misconfiguration
* Check Recaptcha classes existing before including
* minor CSS changes
* clarify README.txt and UI
* inline approximate support
* double factorial
* factorial
* absolute Value
* distribute over
* summation
* product
* greatest common divisor
* floor
* ceiling
* arc cosine
* hyperbolic arc cosine
* arc cotangent
* hyperbolic cotangent
* arc secant
* hyperbolic arc cosecant
* arc secant
* hyperbolic arc secant
* arc sine
* hyperbolic arc sine
* arc cotangent
* hyperbolic arc cotangent
* cosine
* hyperbolic cosine
* cotangent
* hyperbolic cotangent
* cosecant
* hyperbolic cosecant
* exponential function
* natural logarithm
* random
* secant
* hyperbolic secant
* sine
* hyperbolic sine
* square root
* tangent
* hyperbolic tangent
* isint
* isodd
* iseven
* asksign
* contour plot
* implicit plot
* parametric plot
* factorout

= 1.3.1 =
* Fix bug where Recaptcha keys with hypen may not be saved 

= 1.3.0 =
* Recaptcha support
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

= 1.7.0 =
Upgrade for admins who would like to override default CSS and JS files with their own files. Place new files in `html/override` directory to automatically replace packaged files.

= 1.6.0 =

New operations
MathJax-LaTeX plugin support (required)
Minor CSS & text edits

= 1.5.0 =

Plotting API changes
Bug fix: Correct Recaptcha message on misconfiguration
Bug fix: Check Recaptcha class exists before declaring
New operations: see Changelog
New feature: Inline approximate, Under-the-hood changes
Improve verbiage

= 1.3.1 =

Necessary for certain Recaptcha users

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

