# What is this folder?

If you use [Advanced Custom Fields](https://www.advancedcustomfields.com) (and you should), you can store your field data in json format with your theme using the [ACF __Local JSON__ feature](https://www.advancedcustomfields.com/resources/local-json/).

All you need is a folder in your theme called `acf-json`. ACF will create or update a json file in this folder with all of your field group settings and data.

#### 💯 Now all of your ACF field data will be under version control with the theme.

Note that it doesn't save the *post data* saved with your fields but all of your field groups, fields, and location settings.

Instead of forgetting to add this folder with each project, I'm now including it with Plate by default so it will be at the ready.

If you don't use ACF or don't need this, just delete it. I mean, *GOSH*, it's just a folder.