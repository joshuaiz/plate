## Plate / languages

Herein resides translation files for Plate.

A function in `functions.php` identifies the LOCALE (e.g. da_DK) of your WordPress installation. If there is a language-file in `languages/` named accordingly (e.g. `da_DK.mo`), Plate will use it. Fallback is English.

### How to translate Plate to your language

  1 Make a copy of `default.po` an change the filename to your LOCALE.po (e.g. `da_DK.mo`)
  2 Use [poedit](http://www.poedit.net/ "home of poedit") to edit your po-file.
  3 When saving your po-file, poedit will create/update a corresponding mo-file.
  4 Please commit both your po- and mo-file. 

### More

http://codex.wordpress.org/I18n_for_WordPress_Developers

http://www.wdmac.com/how-to-create-a-po-language-translation#more-631
