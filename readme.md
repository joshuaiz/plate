# Plate by studio.bio

[![Github Releases](https://img.shields.io/github/release/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/releases/tag/v1.4.0)
[![Github Last Commit](https://img.shields.io/github/last-commit/joshuaiz/plate.svg)]()
[![GitHub issues](https://img.shields.io/github/issues/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/issues)
[![GitHub forks](https://img.shields.io/github/forks/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/network)
[![GitHub stars](https://img.shields.io/github/stars/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/stargazers)
[![GitHub license](https://img.shields.io/github/license/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/blob/master/LICENSE)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/joshuaiz/plate.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fjoshuaiz%2Fplate)

See the [CHANGELOG](https://github.com/joshuaiz/plate/blob/master/CHANGELOG.md) for the most recent updates.

## A super stripped-down WordPress starter theme for developers. 

![](https://studio.bio/images/plate_home_2019.png)
_Plate Home page with sidebar showing CSS Grid layout blocks.
It's almost as if it is not even there. (The colors are just for development to see your grid and are easily removed)_

#### How to use Plate?
Download or clone into your `/wp-content/themes/` folder and activate the theme in the WordPress admin in `Appearance > Themes`.

Plate uses modular Sass/SCSS files with CSS media queries that map to the default HTML elements in the theme, providing a quick way to get a project up-and-running. You may not need all of the supplied classes to style your theme, so just delete what you don't use. On the other hand, if you need to style the user name for nested comments 3 levels deep, Plate is ready.

You can find the modular scss files in `library/scss/` and then further broken down into `/breakpoints` for our most-used media queries, `/modules` for buttons, alerts, and forms and then `/partials` for grids, typography, functions, variables and anything else.

All of the stylesheets are then imported via the `/library/scss/style.scss` file which is rendered to `/library/css/style.css` via your preprocessor.

**Note:** You will need to use a pre-processor to compile `.scss` (Sass) into `CSS`. We recommend [CodeKit](https://codekitapp.com). Just drop your theme into CodeKit and you're all set. No configuration necessary. We love CodeKit `</>`.

We also have Grunt support built-in if that's your thang.

`_base.scss` includes styles loaded for all devices. From there you can add styles to the respective breakpoint stylesheets for the devices that will use them. 

Fire up your favorite text editor, customize the default styles or add your own, and create your own theme templates from Plate's defaults. That's it!

There are lots of comments throughout the theme so we encourage you to read them to help you with development. The theme and its respective comments are updated all the time.

**Pro Tip:** The included `plate_body_class()` function adds page-, post-, archive-, and taxonomy-specific CSS classes to your generated theme files. Leverage those to add your custom styles globally down to a per-post/page level allowing for quick customization.

Classes are mirrored from the templates directly to the `SCSS` files so you can start customizing right away.

## What's Included In Plate?
Plate includes all of the files any robust WordPress theme should have: default page + post templates, archive + taxonomy templates, header, footer, search as well as extra page + post templates to handle full width layouts. 

Also included is a range of template parts that you can reuse anywhere in your project.

Use, edit and customize what you like and delete what you don't need. It's your thing — do what you wanna do.

#### 🎉 As of June 21, 2018, Plate is 1 year old! 

We want to say thank you to all those who have starred, forked and contributed to Plate over the past year. You have truly helped to make Plate better and better.

### 🔘 What's new with Plate?
- Expanded Gutenberg support (updated 23 February 2019)
- Full WP Customizer support
- Expanded accessibility features
- Full CSS Grid support with starter grids
- Updated page-navi and related posts functions
- HTML schema built-in
- Complete `<head>` cleanup

See the changelog for the most recent updates: https://github.com/joshuaiz/plate/blob/master/CHANGELOG.md

### ⭐️ Why Plate?
We chose the name **Plate** because it is literally a blank platform upon which you can build your own custom WordPress theme(s). There's no bloat or unnecessary fluff that comes with many pre-built themes so you can add in what you need and remove what you don't. Yet, it comes with some smart defaults that facilitate getting your project up and running quickly: CSS Reset, modular scss, typography, a user agent detection script, page slug body classes, built in page-navi, template parts and custom page/archive/taxonomy templates. 

Plate evolved out of the amazing [Bones](https://themble.com/bones/) starter theme by Eddie Machado. We first started with Bones in 2011 after looking at every starter theme out there and subsequently used it on hundreds of projects. What made Bones unique was Eddie's exquisite comments throughout the theme. The Bones GitHub page is now gone (I has a sad) but I've uploaded an older version of Bones here if you want to check it out: [Bones theme](https://studio.bio/docs/bones-theme.zip).

By fully ingesting Eddie's insightful words while working with Bones, we learned how WordPress themes *really* work and it made us much better developers. Nevertheless, we found we were performing the same changes to Bones at the start of every project so we forked it into our own theme which has evolved into what is now **Plate**.

In the spirit of Bones, we've kept in some of Eddie's original comments and, where warranted, added our own throughout the theme to help developers of all levels. We see Plate as not only a great starter theme for advanced developers but a learning tool for those just starting with WordPress themes as well.

![](https://studio.bio/images/plate_theme_support.png)

We now use Plate for every single WordPress project so it is important to keep it up-to-date with the latest WordPress releases. Thus we have added support for Gutenberg, Flexbox, CSS Grid, schema, WooCommerce and more. Two years on from Bones, Plate includes more page templates, an updated default font stack, a custom post type plugin template, and some handy custom functions that we use all of the time. 

We've also included some extras and goodies that developers may find useful but kept those out of the main files like debuggers and scripts...copy those into the main files or delete them if you don't need them.

Edit this, fork it, change it, delete it - whatever. As Eddie might say: _It's your world. But I hope you make something cool with it._

### 🔮 The Future of Plate
**Gutenberg:** Gutenberg is here! And Plate is ready. We've got full theme support for Gutenberg along with included classes and styles for all of the included default blocks.

**CSS Grid:** we are using CSS Grid on all new projects so as we get more familiar with edge cases and better default implementations, Plate will be updated accordingly.

### 🍱 Beyond Plate
We are working on two different projects that complement Plate: 1) our own companion Gutenberg blocks that can be installed as a plugin; and 2) modular components from ACF fields to work with headless WP and React. Stay tuned!

### ❔ FAQ
**Should I update Plate with existing projects?**<br />
In short, no. Each version of Plate should be viewed as a moment in time. Future updates may work differently or break your theme. Once you've included a particular version in your project, stick with that version or use a newer version as a separate theme. This is how Bones worked and we decided to keep this strategy when updating so that Plate can evolve over time without worrying about backwards compatibility. You can always download a previous version of Plate from the [Releases page](https://github.com/joshuaiz/plate/releases).

**What are the colored blocks in the screenshot?**<br />
The colored block colors are added in the `_cssgrid.scss` stylesheet. They are there to help while setting up CSS Grid so you can see the content areas easier as you are defining your grid(s). We've found them extremely helpful so we kept them in. You don't need to use the default Plate grid (and you probably should set up your own) but we are trying to push more people to use CSS Grid and the colors show how easy it is to set up. They are optional and purely for development so feel free to comment out the styles, change the colors or remove the `.grid` class completely (and not use CSS Grid). Whatever floats your boat.

**I tested Plate with Theme Check and there are errors. What should I do?**<br />
[Theme Check](https://wordpress.org/plugins/theme-check/) is ideal if you are trying to get your theme validated for release on WordPress.org. That said, we use Theme Check and test before every GitHub release to see if we have any egregious errors in Plate. Mind you, Plate was created for our studio and not (necessarily) for general release. With that in mind, there are some things that will fail the check like not having `<php wp_link_pages(); ?>` which we don't ever use as well as having a CPT plugin template included. We're ok with those errors and as long as they don't bother you, you can safely ignore.

### ⚡️ Other stuffs
Designed by Joshua Michaels for studio.bio: https://studio.bio/

With help from Jon Iler.

License: WTFPL
License URI: http://sam.zoy.org/wtfpl/

Do whatever you want. Freedom, baby.

#### ✨ Special Thanks to:
Eddie Machado — all credit is due to him and the original Bones collaborators: Paul Irish, Yoast, Andrew Rogers, David Dellanave and others.


#### 🐞 Submit Bugs & or Fixes:
https://github.com/joshuaiz/plate/issues<br />
Thanks to @HardeepAsrani, @EnzoMartin and @thetwopct for enhancements and bug catches.