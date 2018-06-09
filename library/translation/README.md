## Plate / Internationalization

Herein resides translation files for Plate. (Updated 2018-06-09)

A function in `functions.php` identifies the LOCALE (e.g. da_DK) of your WordPress installation. If there is a language-file in `/library/translation/` named accordingly (e.g. `da_DK.mo`), Plate will use it. Fallback is English.

### How to translate Plate to your language

  1 Make a copy of `default.po` an change the filename to your LOCALE.po (e.g. `da_DK.mo`)
  2 Use [poedit](http://www.poedit.net/ "home of poedit") to edit your po-file.
  3 When saving your po-file, poedit will create/update a corresponding mo-file.
  4 Please commit both your po- and mo-file.

### Notes
The old (very old) translation files from Bones have been removed as of June 2018. If you can translate this theme to your language, that would be greatly appreciated. Follow the steps above and then submit a pull request here: https://github.com/joshuaiz/plate. We'd love to have Plate be as accessible and internationalized as possible.

See the resources below for more info on translations, I18n and internationalization in WordPress. Happy .po and .mo -ing!

### Resources

http://codex.wordpress.org/I18n_for_WordPress_Developers

http://www.wdmac.com/how-to-create-a-po-language-translation#more-631

https://code.tutsplus.com/tutorials/translating-your-theme--wp-25014
