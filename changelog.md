changelog for Green Lake theme through Theme 12 to Fremont Cut
http://djmcloud.danieljmckeown.com/theme-12/

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

v0.9.2
Nov. 26, 2015
-update screenshot

0.9.3
Nov. 28, 2015
-add CSS for audio and status post types

0.9.4
Nov. 28, 2015
-code cleanup for footer
-new description

0.9.5
-fix link in readme
-spacing adjustments for index page

0.9.6
-CSS spacing enhancements for index.php

note:
-blog default front page is a typical index page now [and has been for a while]
  (unlike in Theme 11), but:
	-if a page named "full archives" [slug 'full-archives'] is created it
	  becomes a page that lists all the posts in the blog; and it can be set as
	  front page: thus making Theme 12 act like Theme 11
-this blog semi-deprecates category and tag pages: it will use the archive.php
  template to serve such pages but intentionally does not link to them from the
  index page or single posts

1.0.0
-custom CSS: eliminate titles for updates blogs w/Twitter & Facebook categories
  [visibility: hidden, and display: none, and margin adjustments, important,
   with padding, entry-header, less padding, zh30]
-adjust site branding: a little more room
-release version

1.0.1
-minor CSS reorganization

1.0.2
-update screenshot
-more specificity for Twitter and Facebook categories special formatting
	(requires additional 'social' tag for posts to be treated specially)
-styling for Pinboard link posts

1.0.3
-link/Pinboard post format bugfix - {display: none} for entry title

1.1.0
-rename theme to Fremont Cut to comply with WordPress.org theme rules

1.4.0
-update theme to further comply with requirements of WordPress
-prefix changed for functions etc. from greenlake to fremont_cut
-change category and tag section to work with translation;
	categories and tags link to their respective pages now
-remove custom meta section from header
-remove unused _s files greenlake.pot and rtl.css
-remove non-functioning 'most-used-categories' section from 404
-modify footer for better translatability
-template-page-full-archives.php replaces page-full-archives.php

1.5.0
-remove unnecessary comments, spaces

1.7.0
-bugfix to change 'stargazer' to 'fremont_cut' in footer
