# Plate Theme Change Log + History

For more information, please visit: https://studio.bio/themes/plate

Author: Joshua Michaels for studio.bio with help from Jon Iler

*******************************************************************

### 1.4.3 2019-06-13
- added `body_open()` function supporting WP 5.2 features
- cleaned up some text encoding stuffs in some files

### 1.4.2 2019-04-28
- moved `the_title()` calls into individual templates from template parts
- `/templates/header-title.php` is still there if you need it

### 1.4.l 2019-04-13
- Removed last few remaining cf/clearfix calls in templates
- Added custom page template with no loop (for ACF pages)
- Updated formatting in theme templates throughout
- Updated Readme
- Fixed a "not enough sunshine" issue

### 1.4.0 2019-02-23
- Lots of Gutenberg updates: front-end styles, enqueues, `theme_support`
- updated new Gutenberg block default styles
- WP Customizer updates: moved to separate file `/library/customizer.php`
- updated Customizer function(s) to support latest updates
- 1.4.0 release(!)
- fixed an issue regarding not enough JavaScript

### 1.3.9 2019-01-24
- removed WP_DEBUG conditionals from enqueues. Why? Because you should be
able to decide for yourself how your .scss files are outputted: minimized, not, etc.
- minor functions.php updates
- comment updates
- formatting updates
- fixed a 'no pie' issue

### 1.3.8 2018-12-29
- removed last vestiges of clearfix (although 'cf' class still exists)
- cleaned up `editor.css` and `editor-style.css`
- updated comments throughout
- minor cleanup of template files
- fixed a not enough dub reggae issue

### 1.3.7 2018-12-07
- added new 'page-blog' and 'blogroll' classes for static posts page
- contained 'alignfull' and 'alignwide' images on static posts page
- minor adjustments and fixes
- Gutenberg is here!

### 1.3.6 2018-12-01
- added default Plate dashboard widget + styles
- fixed `plate_excerpt_more()` function and added comments
- minor Gutenberg fixes
- fixed a no sunshine issue

### 1.3.5 2018-11-30
- updated (well switched really) _editor.scss and _gutenberg.scss (see comments)
- _editor.scss is now *only* for the gutenberg editor in the admin
- _gutenberg.scss is for both the editor and the front end
- fixed `plate_excerpt_more()` function because Gutenberg didn't like it
- fixed issue where a check did not clear

### 1.3.4 2018-11-13
- updated 404.php with better semantic layout
- updated 404 page styles: search input, button, padding
- fixed error in 'Read more' function
- minor adjustments and fixes

### 1.3.3 2018-11-13
- added a11y.js enqueue for expanded accessibility support (👍)
- added accessibility-ready patterns from the WP theme guide
- updated header.php with ARIA values and screen reader text
- updated 'Read More' function with ARIA setting
- fixed an issue where my workspace needed a tidy

### 1.3.2 2018-11-12
- added default editor styles in _gutenberg.scss to match front end
- updated header to allow for non-blocking scripts
- updated Gutenberg comments
- updated editor-style.scss for Gutenberg
- fixed issue where I had no fire and it was cold

### 1.3.1 2018-10-30
- updated Gutenberg image styles (in _768up)
- added single-full.php (for full-width posts)
- added header-full.php (for header with full-width grid)
- added single-full styles
- added .single-full class in body class function
- updated no collusion to collusion

### 1.3.0 2018-10-24
- release update
- added new Sass functions in _functions.scss
- cleaned up comments
- formatting updates
- fixed an ongoing not enough dub reggae issue

### 1.2.9 2018-10-23
- added acf-json folder to support ACF's Local JSON feature by default
- updated some comments in base.scss
- reverted a couple wonky commits. Whoops

### 1.2.8 2018-10-14
- updated searchform.php for accessibility
- updated 404.php styles for accessbility
- updated colors in _cssgrid.scss for accessibility
- removed `<h1>` for site title in header
- minor fixes and adjustments

### 1.2.7 2018-10-08
- updated page-custom.php and page-custom-loop.php comments
- updated instructions in base.scss
- minor formatting fixes in some functions in functions.php
- fixed issue where I hadn't had a vacation all year

### 1.2.6 2018-06-10
- added docblock comments to template parts
- updated comments function
- updated comment styles
- updated comment gravatar calls to retina
- fixed header and footer widths with grid
- resolved empty tummy issue

### 1.2.5 2018-06-09
- added back 'Post(s) not found' stuffs to loops but a bit more elegantly
- added CSS Grid styles for 1600up
- fixed page navi broken calls on archive/taxonomy pages
- regenerated .pot and default .po and .mo translation files (help us translate!)
- Fixed a nagging 'not enough tennis' issue

### 1.2.4 2018-06-07 MOAR Gutenberg stuffs
- updated Gutenberg theme support
- added proper Gutenberg enqueue to functions.php
- added new Gutenberg classes
- updated button defaults
- fixed a negative vitamin D issue

### 1.2.3 2018-05-25
- updated normalize.scss to 8.0.0
- added actual call for 1600up in style.scss
- updated _print.scss
- formatting updates
- minor CSS Grid adjustments
- fixed the 'no tacos' issue

### 1.2.2 2018-05-17
- updated page navigation function
- cleaned up theme folder
- updated header.php
- no "collusion"!

### 1.2.1 2018-05-14
- Formatting fixes in 768up.scss
- updated screenshot images
- removed errant `cf` class from page-custom-loop.php
- fixed an issue where I accidentally listened to a commercial

### 1.2.0 2018-04-30
### Major update to CSS Grid!
*Note: you should not pull these changes down if you use the old-style grid from v1.1.8 and before as it might break things. Try on a test site first.*
- Added full CSS Grid support (yay!)
- removed all clearfix/cf calls (not necessary with CSS Grid + Flexbox)
- Moved `get_sidebar()` calls outside of #content to accomodate Grid
**More Notes: if you have not already made the move to CSS Grid, it's time. Plate will default to using CSS Grid via the _cssgrid.scss stylesheet. There's a ton of info there to get you started. I've also left some colors around the main content sections within the Grid so you can see what's going on. I've left the old _grid.scss stylesheet here so you can use that if you need to but I've removed all of the classes for that grid style in the template. Thus, if you need that grid, it's probably better to download the earlier v1.1.8 Plate release.**

### 1.1.8 2018-04-29
- added jQuery to remove `<p>` tags from images
- small formatting/spacing updates
- fixed an issue where I ran out of oily coffee beans

### 1.1.7 2018-04-18
- updated custom Modernizr build (3.6.0)
- fixed issue with Google page scoring thingy so you can get 100
- removed superfluous comments; updated other comments
- re-discovered an issue where it snows 2" in April in Chicago

### 1.1.6 2018-03-27
- fixed Gutenberg theme_support
- header styles fix for new correct schema markup in header.php
- added images to the ReadMe
- fixed an issue where I couldn't get past Alto's Odyssey level 44

### 1.1.5 2018-03-18
- initial Gutenberg support (subject to change)
- added initial Gutenberg styles (.alignwide + others)
- cleaned up the head a lot
- removed Customizer header image call in header.php
- fixed an issue where I couldn't get past Alto's Odyssey level 29

### 1.1.4 2018-02-02
- added additional breakpoint stylesheets for tweener and extra large devices
- fixed single-custom_type, archive-custom_type taxonomy-custom_cat which had extra title calls
- added tint/shade mixins (cool and simple to use)
- added more insightful comments in functions.php
- fixed an issue where I ran out of Topo Chico

### 1.1.3 2018-01-19
- implemented a bunch of contributed updates (thanks @HardeepAsrani)
- cleaned up some legacy code (functions.php)
- commented out select styles in forms.scss as they were making drop-downs wonky
- added random semi-colons throughout (I didn't actually do this)

### 1.1.2 2018-01-18
- added r-debug class in plate.php for debugging
- changed theme init function to plate_lunch()
- formatted functions.php so it's a lot easier to read
- updated the Windows tile image - you're already asleep, aren't you?
- addressed an issue where my bourbon supply was at critical levels

### 1.1.1 2018-01-17
- added page-custom-loop.php in case you want a page template without template parts like I do
- fixed single-custom_type.php as it still had archive.php code and that was not the jam
- reformatted some of the template parts so they don't look like crap
- fixed an issue where I was watching way too much tennis

### 1.1 2017-12-30
#### Semi-major update.
We've been using Plate almost exclusively so I went ahead and
namespaced all of the functions and enqueues with plate which
makes it less confusing dealing with template parts.
- Reordered sections in _base.scss
- Removed custom-post-type-icon.png (not needed with Dashicons)
- Removed nothing.gif and nothumb.gif (I've never used those)
- updated and formatted page-html.php (finally)
- General cleanup stuff

### 1.0.4 2017-12-17
- Replaced parallax script in extras.js
- Updated all files to 4 spaces per tab
- Formatting updates


### 1.0.3 2017-09-08
- Added Grunt support (thanks @micahmills)
- Added REST API support in the custom post type plugin template
- Added extras in /library/extras (brilliant I know)


### 1.0.2 2017-08-31
- Updated a few functions and calls with get_theme_file_uri(); which
was added in 4.7 to replace get_template_directory_uri();


### 1.0.1 2017-08-13
To be honest, I've been using Plate way more than Template in my
projects as of late. Because of this, I've added back a few 
of the default scripts from Template back in.

- updated scripts.js with the following defaults:
	+ user agent detect script
	+ jQuery Nearest
	+ Retina.js 1.4.0 (the last simple version)
- updated functions.php
- updated admin.php (new admin css enqueue that works)


### 1.0 2017-06-22
And here we go.

- updated to normalize.css 7.0
- namespaced all functions
- updated readme
- updated login.scss
- updated admin functions
- added favicons, new apple touch icons and theme screenshot
- added default system font stack
- added .ai files for theme images
- WordPress Customizer support
- WooCommerce theme support
- updated body class function
- expanded Quicktags
- template part library (really cool)
- updated comments
- cleaned up header.php
- admin and login page updates
- updated media query .scss stylesheets
- removed @2x and ie_grid (who uses those?)
- HTML schema support
- default .scss classes
- added source maps (yay!)
