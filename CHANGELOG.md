# Plate Theme Change Log + History

For more information, please visit: https://studio.bio/themes/plate

Author: Joshua Michaels for studio.bio with help from Jon Iler


*******************************************************************

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
Replaced parallax script in extras.js
Updated all files to 4 spaces per tab
Formatting updates


### 1.0.3 2017-09-08
Added Grunt support (thanks @micahmills)
Added REST API support in the custom post type plugin template
Added extras in /library/extras (brilliant I know)


### 1.0.2 2017-08-31
Updated a few functions and calls with get_theme_file_uri(); which
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
