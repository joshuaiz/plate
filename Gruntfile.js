module.exports = function(grunt) {
  
   grunt.initConfig({
     concat: {
       js: {
         options: {
           separator: ';'
         },
         src: [
           'library/js/*.js',
           '!library/js/scripts-min.js'
         ],
         dest: 'library/js/scripts-min.js'
       },
     },
   
   svgstore: {
     options: {
       prefix: 'icon-',
       svg: {
         class: 'hide'
       }
     },
     default : {
       files: {
         'library/images/svg/processed/svg-defs.svg': ['library/images/svg/*.svg'],
       },	
     }
   },
     
     uglify: {
       options: {
         mangle: false
       },
       js: {
         files: {
           'library/js/scripts-min.js': ['library/js/scripts-min.js']
         }
       }
     },
     
     less: {
       style: {
         files: {
           "library/css/style.css": "library/less/style.less"
         },
       }
     },
     
     sass: {                              // Task
       dist: {                            // Target
         options: {                       // Target options
           style: 'expanded'
         },
         files: {                         // Dictionary of files
           'library/css/style.css': 'library/scss/style.scss',       // 'destination': 'source'
           'library/css/editor-style.css': 'library/scss/editor-style.scss',
           'library/css/login.css': 'library/scss/login.scss'
         }
       }
   },
     
     autoprefixer:{
       dist:{
         files:{
           'library/css/style.css':'library/css/style.css'
         }
       }
     },
     cssmin: {
     target: {
       files: [{
         expand: true,
         cwd: 'library/css',
         src: ['*.css', '!*.min.css'],
         dest: 'library/css',
         ext: '.min.css'
       }]
     }
   },    
     watch: {
       js: {
         files: ['library/js/*.js', '!libary/js/scripts-min.js'],
         tasks: ['concat:js', 'uglify:js'],
         options: {
           livereload: true
         }
       },
       css: {
         files: ['library/scss/**/*.scss'],
          tasks: ['sass', 'autoprefixer', 'cssmin'],
          options: {
            
          }
       },
     php : {
         files: ['**/*.php'],
         options: {
           livereload: true
         }
     },
     svg : {
     files: ['library/images/svg/*.svg'],
     tasks: ['svgstore:default']
     },
     livereload: {
       files: ['library/css/style.css', 'library/images/svg/processed/svg-defs.svg'],
       options: { livereload: true }
     }
   }
   });
  
   grunt.loadNpmTasks('grunt-contrib-concat');
   grunt.loadNpmTasks('grunt-contrib-uglify');
   grunt.loadNpmTasks('grunt-contrib-sass');
   grunt.loadNpmTasks('grunt-contrib-watch');
   grunt.loadNpmTasks('grunt-svgstore');
   grunt.loadNpmTasks('grunt-autoprefixer');
   grunt.loadNpmTasks('grunt-contrib-cssmin');
   
   grunt.registerTask('default', ['watch']);
   grunt.registerTask('svg', ['svgstore']);
 };
 