# Plate by studio.bio

[![Github Releases](://img.shields.io/github/release/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/releases/tag/v1.2.5)
[![Github Last Commit](://img.shields.io/github/last-commit/joshuaiz/plate.svg)]()
[![GitHub issues](://img.shields.io/github/issues/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/issues)
[![GitHub forks](://img.shields.io/github/forks/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/network)
[![GitHub stars](://img.shields.io/github/stars/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/stargazers)
[![GitHub license](://img.shields.io/github/license/joshuaiz/plate.svg)](https://github.com/joshuaiz/plate/blob/master/LICENSE)
[![Twitter](://img.shields.io/twitter/url/https/github.com/joshuaiz/plate.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fjoshuaiz%2Fplate)

See the [CHANGELOG](https://github.com/joshuaiz/plate/blob/master/CHANGELOG.md) for the most recent updates.

## A super stripped-down WordPress starter theme for developers. 

![](https://studio.bio/images/plate_home_cssgrid.png)
_Plate Home page with sidebar showing CSS Grid layout blocks.
It's almost as if it is not even there._

#### How to use Plate?
Download or clone into your `/wp-content/themes/` folder and activate the theme in the WordPress admin in `Appearance > Themes`. 

**Note:** You will need to use a pre-processor to compile `.scss` (Sass) into `CSS`. We recommend [CodeKit](https://codekitapp.com). Just drop your theme into CodeKit and you're all set. No configuration necessary.

From there, fire up your favorite text editor, customize the default styles or add your own, and create your own theme templates from Plate's defaults. That's it!

#### 🎉 As of June 21, 2018, Plate is 1 year old! 

We want to say thank you to all those who have starred, forked and contributed to Plate over the past year. You have truly helped to make Plate better and better.

### 🔘 What's new with Plate?
- Expanded Gutenberg support
- Full CSS Grid support with starter grids
- Updated page-navi and related posts functions
- HTML schema built-in
- Complete `<head>` cleanup

See the changelog for the most recent updates: https://github.com/joshuaiz/plate/blob/master/CHANGELOG.md

### Why Plate?
Plate evolved out of the amazing [Bones](https://themble.com/bones/) starter theme by Eddie Machado. We first started with Bones in 2011 after looking at every starter theme out there and subsequently used it on hundreds of projects. What made Bones unique was Eddie's exquisite comments throughout the theme. The Bones GitHub page is now gone (I has a sad) but I've uploaded an older version of Bones here if you want to check it out: [Bones theme](https://studio.bio/docs/bones-theme.zip).

By fully ingesting Eddie's insightful words while working with Bones, we learned how WordPress themes *really* work and it made us much better developers. Nevertheless, we found we were performing the same changes to Bones at the start of every project so we forked it into our own theme which has evolved into what is now **Plate**.

In the spirit of Bones, we've kept in some of Eddie's original comments and, where warranted, added our own throughout the theme to help developers of all levels. We see Plate as not only a great starter theme for advanced developers but a learning tool for those just starting with WordPress themes as well.

![](https://studio.bio/images/plate_functions.png)

We now use Plate for every single WordPress project so it is important to keep it up-to-date with the latest WordPress releases. Thus we have added support for Gutenberg, Flexbox, CSS Grid, schema, WooCommerce and more. Two years on from Bones, Plate includes more page templates, an updated default font stack, a custom post type plugin template, and some handy custom functions that we use all of the time. 

We've also included some extras and goodies that developers may find useful but kept those out of the main files like debuggers and scripts...copy those into the main files or delete them if you don't need them.

Edit this, fork it, change it, delete it - whatever. As Eddie might say: _It's your world. But I hope you make something cool with it._

### 🔮 The Future of Plate
**Gutenberg:** As the Gutenberg project gets closer to a release candidate, we are watching closely and adjusting Gutenberg support as necessary. Things have been changing rapidly although much of the Gutenberg core has been solidified. We will add styles for default blocks once they become finalized.

**CSS Grid:** we are using CSS Grid on all new projects so as we get more familiar with edge cases and better default implementations, Plate will be updated accordingly.

### 🍱 Beyond Plate
We are working on two different projects that complement Plate: 1) our own companion Gutenberg blocks that can be installed as a plugin; and 2) modular components from ACF fields to work with headless WP and React. Stay tuned!

### ❔ FAQ
**Should I update Plate with existing projects?**<br />
In short, no. Each version of Plate should be viewed as a moment in time. Future updates may work differently or break your theme. Once you've included a particular version in your project, stick with that version or use a newer version as a separate theme. This is how Bones was and we decided to keep this roadmap so that Plate can evolve over time without worrying about backwards compatibility.

**What are the colored blocks in the screenshot?**<br />
The colored block colors are added in the `_cssgrid.scss` stylesheet. They are there to help while setting up CSS Grid so you can see the content areas easier. We've found them extremely helpful so we kept them in. You can comment out the styles, change the colors or remove the `.grid` class completely (and not use CSS Grid). Whatever floats your boat.

### ⚡️ Other stuffs
Designed by Joshua Michaels for studio.bio: http://studio.bio/

With help from Jon Iler.

License: WTFPL
License URI: http://sam.zoy.org/wtfpl/

Do whatever you want. Freedom, baby.

#### ✨ Special Thanks to:
Eddie Machado — all credit is due to him and the original Bones collaborators: Paul Irish, Yoast, Andrew Rogers, David Dellanave and others.


#### 🐞 Submit Bugs & or Fixes:
https://github.com/joshuaiz/plate/issues<br />
Thanks to @HardeepAsrani, @EnzoMartin and @thetwopct for enhancements and bug catches.