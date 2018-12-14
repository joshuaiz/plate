/**
 * CodeKit is amazing, and does all of this much more easily
 * But some people love Grunt, so here's a starter for your plate
 *
 * Here's a good guide:
 * https://www.pattonwebz.com/wordpress-custom/grunt-wordpress-theme-starter/
 * Basic commands to set this up:
 *
 * npm install grunt --save-dev
 * npm install grunt-contrib-concat grunt-contrib-uglify grunt-contrib-sass grunt-contrib-watch grunt-autoprefixer grunt-contrib-cssmin --save-dev
 * grunt default
 *
 */

module.exports = function(grunt) {
  grunt.initConfig({
    // read the package.json file so we know what packages we have
    pkg: grunt.file.readJSON("package.json"),

    // Concatenate multiple JS files in to one
    concat: {
      js: {
        options: {
          separator: ";"
        },
        src: ["library/js/*.js", "!library/js/scripts-min.js"],
        dest: "library/js/min/scripts-min.js"
      }
    },

    // Uglify to minify scripts
    uglify: {
      options: {
        mangle: false,
        // adds a message at the top of the file with todays date to indicate build date
        banner:
          '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      js: {
        files: {
          "library/js/min/scripts-min.js": ["library/js/min/scripts-min.js"]
        }
      }
    },

    // Compile SASS in to CSS
    sass: {
      dist: {
        options: {
          style: "expanded"
        },
        files: {
          // 'destination': 'source'
          "library/css/style.css": "library/scss/style.scss",
          "library/css/login.css": "library/scss/login.scss",
          "library/css/ie.css": "library/scss/ie.scss",
          "library/css/editor-style.css": "library/scss/editor-style.scss",
          "library/css/customizer.css": "library/scss/customizer.scss",
          "library/css/admin.css": "library/scss/admin.scss",
          "library/css/editor.css": "library/scss/partials/_editor.scss",
          "library/css/gutenberg.css": "library/scss/partials/_gutenberg.scss"
        }
      }
    },

    // Add prefixes in CSS (main styles only)
    autoprefixer: {
      dist: {
        files: {
          "library/css/style.css": "library/css/style.css"
        }
      }
    },

    // Minify CSS
    cssmin: {
      target: {
        files: [
          {
            expand: true,
            cwd: "library/css",
            src: ["*.css", "!*.min.css"],
            dest: "library/css",
            ext: ".css"
          }
        ]
      }
    },

    // Watch Files and Reload
    watch: {
      js: {
        files: ["library/js/*.js", "!library/js/scripts-min.js"],
        tasks: ["concat:js", "uglify:js"],
        options: {
          livereload: true
        }
      },
      css: {
        files: ["library/scss/**/*.scss"],
        tasks: ["sass", "autoprefixer", "cssmin"],
        options: {}
      },
      php: {
        files: ["**/*.php"],
        options: {
          livereload: true
        }
      },
      livereload: {
        files: ["library/css/style.css"],
        options: { livereload: true }
      }
    }
  });

  grunt.loadNpmTasks("grunt-contrib-concat");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-sass");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-autoprefixer");
  grunt.loadNpmTasks("grunt-contrib-cssmin");

  // Just run script elements with "grunt scripts"
  grunt.registerTask("scripts", ["uglify", "concat"]);
  // Just run styles elements with "grunt styles"
  grunt.registerTask("styles", ["sass", "autoprefixer", "cssmin"]);
  // Default - everything - with "grunt" or "grunt default"
  grunt.registerTask("default", [
    "uglify",
    "concat",
    "sass",
    "autoprefixer",
    "cssmin",
    "watch"
  ]);
};
