changelog for Green Lake theme (the predecessor theme to Theme 10) http://djmcloud.danieljmckeown.com/greenlake/

v0.0.1
January 26, 2015
-created initial version based on current versions of Underscores.me and Bootstrap
-made spacing corrections for area between categories and tags &c.
-slightly changed some of the 404 copy
-added minified Bootstrap CSS and JavaScript (plus jQuery)

v0.0.2
January 26, 2015
-moved menu to the top of page
-added containerportOFF div that can easily be used to style by removing OFF

v0.0.3
January 26, 2015
-set jquery as a dependency of Bootstrap on functions.php

v0.0.4
January 26, 2015
-added padding to li on greenlake.css for menu readability
-> this makes the theme more usable out of the box

v0.0.5
January 26, 2015
-assigned 99% width to all-containing div #containerzero
-> this is to avoid a scroll arrow at bottom of screen

v0.1.0
January 27, 2015
-added screenshot

v0.2.0
January 27, 2015
-switched to Foundation from Bootstrap

v0.2.1
January 27, 2015
-renaming of variables for wp_register_script &c. in functions.php
-new yoga-friendly screenshot

v0.2.2
January 27, 2015
-basic media query CSS when using #containerport (which is set to
	#containerportOFF in heeder.php by defulat) so the spacing
	isn't excessive on mobile views

v0.2.3
January 27, 2015
-info added to style.css; license of Foundation, clarifications etc.

v0.2.4
January 28, 2015
-added navigation.js back

v0.2.5
February 3, 2015
-limited width of search widget using .widget_search in portagebay.css

v0.2.6
February 21, 2015
-copy changes: no more theme saying "sorry"

v0.2.7
February 21, 2015
-responsive nav uses Unicode hamburger button '☰' instead of 'primary menu'

v0.2.8
February 21, 2015
-bugfix: functions.php $themeloc variable was only declared inside one function; had to be added to other one

v0.2.9
March 9, 2015
-added LICENSE.txt with GNU GPL v2 (there were links to it already but now there's a text copy of it in the main dir)

v0.2.10
March 9, 2015
-a little space on the left edge: div { padding-left: 2px; }
-added greenlake2.css with some of the Foundation 5.5 styling
-removed active enqueueing of jQuery and Foundation
-close to ready for 0.3: fewer assets loading by default

v0.3.0
March 9, 2015
-Foundation and jQuery JS removed for now
-Foundation CSS minified file removed (some styles moved to greenlake2.css in 0.2.10)
-tagging 0.3!!!

v0.3.1
March 9, 2015
-comment-out and deletion for now-removed files in functions.php (bugfix)

v0.3.2
May 17, 2015
-update layouts/greenlake2.css with license link and spelling correction
-update to greenlake branding in header.php

v0.3.3
Sept. 28, 2015
-change the_posts_navigation() to the_posts_pagination() in index.php

------in October 2015 Theme 10 was forked from Green Lake.  version numbers started over again for Theme 10-------

changelog for Theme 10:

v0.0.2
Oct. 16, 2015
-add Ryukyu (http://danmckeown.info/code/ryukyu) CSS code to style.css style sheet

------in October 2015 Theme 11 was forked from Theme 10.-------

changelog for Theme 11:

v0.1.0
Nov. 12, 2015
-styling adjustments in CSS
-make front page one long list of all story titles each linking to a single post
-responsiveness adjustments

v0.1.1
Nov. 12, 2015
-display widgets on front page as well as perma-link pages

------in November 2015 Theme 12 was forked from Theme 11.-------

v0.2.0
Nov.18, 2015
-first version of Theme 12:
	-new Webfonts
	-many small styling tweaks
	-comments support
	-etc.

v0.2.2
Nov. 19, 2015
-use CSS to make hamburger button instead of Unicode symbol
-move around some CSS in style.css to the proper sections
-remove unused greenlake.css and greenlake2.css

v0.8.0
Nov. 24, 2015
-CSS styling [dotted bottom border] for sticky posts
-CSS styling for numerous post types:
	-post
	-aside
	-image
	-link
	-quote
	-video
-numerous bufixes and improvements
