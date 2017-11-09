module.exports = function(grunt) {

  /**
   * Initialize grunt
   */
  grunt.initConfig({

    /**
     * Read package.json
     */
    pkg: grunt.file.readJSON('package.json'),


    /**
     * Set banner
     */
    banner: '/**\n' +
    '<%= pkg.title %> - <%= pkg.version %>\n' +
    '<%= pkg.homepage %>\n' +
    'Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>\n' +
    'License: <%= pkg.license %>\n' +
    '*/\n',


    /**
     * Set directory paths
     */
    dir: {
      js: 'assets/scripts',
      css: 'assets/styles',
      sass: 'assets/styles/sass',
      img: 'assets/images'
    },


    /**
     * Minify .svg
     * @github.com/sindresorhus/grunt-svgmin
     */
    svgmin: {
      options: {
        plugins: [{
            // Prevent removing the viewBox attr. Previously caused issues in IE9+.
            removeViewBox: false
        }]
      },
      dist: {
        files: [{
          expand: true, // Enable dynamic expansion.
          cwd: '<%= dir.img %>/', // Src matches are relative to this path.
          src: ['**/*.svg'], // Actual pattern(s) to match.
          dest: '<%= dir.img %>/', // Destination path prefix.
        }],
      }
    },


    /**
     * Compress .jpg/.png
     * @github.com/gruntjs/grunt-contrib-imagemin
     */
    imagemin: {
      dist: {
        options: {
            optimizationLevel: 6,
            progressive: true
        },
        files: [{
          expand: true, // Enable dynamic expansion.
          cwd: '<%= dir.img %>/', // Src matches are relative to this path.
          src: '{,*/}*.{png,jpg,jpeg}', // Actual pattern(s) to match.
          dest: '<%= dir.img %>/', // Destination path prefix.
        }],
      }
    },

    tinypng: {
      options: {
        // Task-specific options go here.
        apiKey: 'A46QppG-Gz6_QTMsa-J3kPWviQLXSneU',
        showProgress: true
      },
      compress: {
        files: [{
          expand: true, // Enable dynamic expansion.
          cwd: '<%= dir.img %>/', // Src matches are relative to this path.
          src: '{,*/}*.{png,jpg,jpeg}', // Actual pattern(s) to match.
          dest: '<%= dir.img %>/', // Destination path prefix.
        }],
      }
    },


    /**
     * Convert .svg to .png
     * @github.com/dbushell/grunt-svg2png
     */
    svg2png: {
      dist: {
        files: [{
          src: ['<%= dir.img %>/**/*.svg'],
        }],
      }
    },


    /**
     * JSHint
     * @github.com/gruntjs/grunt-contrib-jshint
     */
    jshint: {
      gruntfile: 'Gruntfile.js',
      files: ['<%= dir.js %>/src/**/*.js'],
      options: {
        jshintrc: '.jshintrc'
      }
    },


    /**
     * Concatenate
     * @github.com/gruntjs/grunt-contrib-concat
     */
    concat: {
      options: {
        stripBanners: true,
        banner: '<%= banner %>'
      },
      js: {
        src: [
        'assets/vendor/jquery/dist/jquery.min.js',
        'assets/vendor/waypoints/lib/jquery.waypoints.min.js',
        'assets/vendor/waypoints/lib/shortcuts/sticky.min.js',
        'assets/vendor/typed.js/dist/typed.min.js',
        '<%= jshint.files %>'
        ],
        dest: '<%= dir.js %>/<%= pkg.name %>.js'
      },
    },


    /**
     * Sass compiling
     * @github.com/gruntjs/grunt-contrib-sass
     */
    sass: {

      // Development options
      dev: {
        options: {
          style: 'expanded',
          // sourcemap: true, // Requires Sass 3.3.0 alpha: `sudo gem install sass --pre`
          trace: true,
          debugInfo: true
        },
        files: {
          '<%= dir.css %>/<%= pkg.name %>.css': '<%= dir.sass %>/main.scss',
          '<%= dir.css %>/components.css': '<%= dir.sass %>/components/components.scss'
        }
      },

      // Distribution options
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          '<%= dir.css %>/<%= pkg.name %>.css': '<%= dir.sass %>/main.scss'
        }
      }
    },


    /**
     * Minify
     * @github.com/gruntjs/grunt-contrib-uglify
     */
    uglify: {

      // Uglify options
      options: {
        banner: '<%= banner %>'
      },

      // Minify js files in js/src/
      dist: {
        src: ['<%= concat.js.dest %>'],
        dest: '<%= dir.js %>/<%= pkg.name %>.min.js'
      },
    },


    /**
     * Clean files
     * @github.com/gruntjs/grunt-contrib-clean
     */
    clean: {
      // Nothing yet!
    },


    /**
     * Watch
     * @github.com/gruntjs/grunt-contrib-watch
     */
    watch: {

      // JShint Gruntfile
      gruntfile: {
        files: 'Gruntfile.js',
        tasks: ['jshint:gruntfile'],
      },

      // Compile Sass dev on change
      sass: {
        files: '<%= dir.sass %>/**/*',
        tasks: ['sass:dev'],
      },

      // JShint, concat + uglify JS on change
      js: {
        files: '<%= jshint.files %>',
        tasks: ['jshint', 'concat', 'uglify']
      },

      // Live reload files
      livereload: {
        options: { livereload: true },
        files: [
          '<%= dir.css %>/**/*.css',  // all .css files in css/ dir
          '<%= dir.js %>/**/*.js',    // all .js files in js/ dir
          '**/*.{html,php}',          // all .html + .php files
          '<%= dir.img %>/**/*.{png,jpg,jpeg,gif,svg}'  // img files in img/ dir
        ]
      }
    }
  });


  /**
   * Default Task
   * run `grunt`
   */
  grunt.registerTask('default', [
    'jshint',           // JShint
    'concat:js',        // Concatenate main JS files
    'sass:dev',         // Compile Sass with dev settings
  ]);


  /**
   * Production tast, use for deploying
   * run `grunt production`
   */
  grunt.registerTask('production', [
    'jshint',           // JShint
    'concat:js',        // Concatenate main JS files
    'uglify',           // Minifiy concatenated JS file
    'sass:dist',        // Compile Sass with distribution settings
    'svg2png',          // Convert svg files to png
    'svgmin',           // Compress svg files
//    'imagemin',           // Compress svg files
    'tinypng',         // Compress jpg/jpeg + png files
  ]);

  /**
   * Production task, minify without compresing images
   * run `grunt production-wo-img`
   */
  grunt.registerTask('production-wo-img', [
    'jshint',           // JShint
    'concat:js',        // Concatenate main JS files
    'uglify',           // Minifiy concatenated JS file
    'sass:dist',        // Compile Sass with distribution settings
  ]);

  /**
   * Image Tasks
   * run `grunt images`
   */
  grunt.registerTask('images', [
    'svg2png',          // Convert svg files to png
    'svgmin',           // Compress svg files
    'tinypng',         // Compress jpg/jpeg + png files
  ]);


  /**
   * Load the plugins specified in `package.json`
   */
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-tinypng');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-svg2png');

};
