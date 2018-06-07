# Plate by studio.bio

See https://github.com/joshuaiz/plate/blob/master/CHANGELOG.md for the most recent updates.

https://github.com/joshuaiz/plate/
https://studio.bio/themes/plate/

## A super stripped-down starter WordPress theme for developers. Based on Template, which is based on Bones.

![Plate Home Page](https://studio.bio/images/plate_home.png)
_Plate default page. It's almost as if it is not even there._

Plate evolved from Template which is based on the amazing Bones starter theme by Eddie Machado: http://themble.com/bones.

If you're not familiar with Bones, I highly suggest you check it out before using Plate. Bones is exquisitely commented and meant to be a learning tool.

I make no Bones (pun definitely intended) about Plate copying a lot of what was included in Bones but wanted to customize it for my studio's workflow. This may or may not work for you. In the spirit of Bones, we've tried to add useful comments throughout the theme to help developers of all levels.

![plate_lunch() function from functions.php](https://studio.bio/images/plate_lunch.png)

With that in mind, we've removed some things I never used in Bones (like Link Pages, tags on pages and IE8 grids amongst others) and added some things in that we use often: more page templates, updated default font stack, a custom post type plugin template, and some custom functions.

We've also included some extras and goodies that developers may find useful but kept those out of the main files.

For example, check out the page-html.php template. It has every HTML element hardcoded so just create a page called HTML and select that template and view to check out and test all of your styles in one place. Yeah, it's kind of dope.

For Plate, we've stripped everything down to the bare minimums so you can build it up how you like. If you want, you can copy things over from Template as you need.

Edit this, fork it, change it, delete it - whatever. As Eddie might say: it's your world. But I hope you make something cool with it.

## A Little History
My introduction to Bones came seven years ago after trying out just about every starter theme out there. Once I found Bones I was hooked and have used it ever since on hundreds of projects. Bones got me to use Sass/SCSS, taught me a ton about WordPress, how themes *really* work, and made me a better developer.

![The Bones theme pirate](https://studio.bio/images/bones_pirate.png)

Yet, over time I found I was making the same changes to Bones at the start of every project and this was taking up valuable time. Thus, I created the predecessor to this theme called 'Osseous' which included some of the changes found in Plate (and Template). Osseous literally means: 'of, relating to, or composed of bone' and was a good departure point.

Template picked up where Osseous left off and took things a bit further. It included namespaced functions and customized defaults along with a lot of other stuff I like and use for my development. Plate strips everything down even more for those who want to build from scratch (although with a few key defaults left in).

2018 Updates: 
- CSS Grid support (new!)
- extended Gutenberg support (new!)
- cleaned up the `<head>` and header.php even further
- WooCommerce support built-in (see functions.php)
- updated to normalize.css 8.X
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

...and much, much more.

See the changelog: https://github.com/joshuaiz/plate/blob/master/CHANGELOG.md

This is the beginning for Plate (and Template) so we welcome improvements, comments, criticism and general feedback. I've probably made a ton of mistakes so as with anything open source, it is a work in progress.

## Recommended Plugins
Some of the stuff in Plate references plugins that I use with just about every site and I recommend:
- Advanced Custom Fields (Pro): https://www.advancedcustomfields.com. A must-have.
- WP Retina 2x: https://wordpress.org/plugins/wp-retina-2x/. Works with WP built-in retina support. Just install and forget it.
- EWWW Image Optimizer: https://wordpress.org/plugins/ewww-image-optimizer/. Smush all of the images. Automagically.
- Plugin Organizer: https://wordpress.org/plugins/plugin-organizer/. Selective plugin loading on a per-page, per-post and per-type basis. Word.
- WP Migrate DB Pro: https://deliciousbrains.com/wp-migrate-db-pro/. Indispensable tool if you work on sites locally (and you should).


## Other stuffs
Designed by Joshua Michaels for studio.bio: http://studio.bio/themes/template

With help from Jon Iler.

License: WTFPL
License URI: http://sam.zoy.org/wtfpl/

Do whatever you want. Freedom, baby.

#### Special Thanks to:
Eddie Machado — all credit is due to him and the original Bones collaborators: Paul Irish, Yoast, Andrew Rogers, David Dellanave and others.


#### Submit Bugs & or Fixes:
https://github.com/joshuaiz/plate/issues

To view Release & Update Notes, read the CHANGELOG.md file in the main folder.