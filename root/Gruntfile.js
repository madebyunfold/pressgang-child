module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /*
         * https://github.com/gruntjs/grunt-contrib-sass
         */
        sass: {
            dist: {
                files: {
                    "css/styles.css": "scss/styles.scss",
                    "css/editor-styles.css": "scss/editor-styles.scss",
                    "css/admin-styles.css": "scss/admin-styles.scss",
                }
            }
        },

        /*
         * https://www.npmjs.com/package/grunt-postcss
         *
         * To compile with autoprefixer -
         * npm install grunt-postcss autoprefixer
         *
         */
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')
                ]
            },
            dist: {
                src: 'css/*.css'
            }
        },
        
       /*
        * https://purgecss.com/plugins/grunt.html
        */
        purgecss: {
            my_target: {
                options: {
                    whitelist: [
                        ...require("purgecss-with-wordpress").safelist
                    ],
                    content: [
                        '../pressgang/views/**/*.twig',
                        './views/**/*.twig',
                        './js/dist/*.js'
                    ]
                },
                files: {
                    'css/styles.css': ['css/styles.css']
                }
            }
        },

        /*
         * https://github.com/gruntjs/grunt-contrib-cssmin
         */
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'css',
                    src: ['*.css'],
                    dest: 'css',
                    ext: '.css'
                }]
            }
        },

        /*
         * https://www.npmjs.com/package/grunt-concat-css
         */
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: [
                  'js/src/**/*.js'
                ],
                dest: 'js/dist/<%= pkg.name %>.js'
            }
        },

        /*
         * https://github.com/gruntjs/grunt-contrib-uglify
         */
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            dist: {
                files: {
                    'js/min/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
                }
            }
        },

        /*
         * https://github.com/gruntjs/grunt-contrib-clean
         */
        clean: {
            main: ['release/<%= pkg.version %>']
        },

        /*
         * https://github.com/gruntjs/grunt-contrib-compress
         */
        compress: {
            main: {
                options: {
                    mode: 'zip',
                    archive: './release/<%= pkg.name %>.<%= pkg.version %>.zip'
                },
                expand: true,
                src: [
                    '**',
                    '!.idea',
                    '!node_modules/**',
                    '!release/**',
                    '!.git/**',
                    '!.sass-cache/**',
                    '!css/src/**',
                    // '!js/src/**',
                    '!img/src/**',
                    '!Gruntfile.js',
                    '!package.json',
                    '!composer.json',
                    '!.gitignore',
                    '!.gitmodules'
                ],
                dest: '<%= pkg.name %>/'
            }
        },

        /*
         * https://github.com/sindresorhus/grunt-svgmin
         */
        svgmin: {
            options: {
                plugins: [
                    { removeViewBox: false }
                ]
            },
            dist: {
                expand: true,
                cwd: 'svg/src',
                src: '*.svg',
                dest: 'svg/min',
                ext: '.svg',
                extDot: 'first'
            }
        },

        /*
        * https://github.com/jkphl/grunt-svg-sprite
        *
        */
        svg_sprite: {
          complex: {
            expand: true,
            cwd: "svg/src/sprites",
            src: ["**/*.svg"],
            dest: "svg/dist",
            options: {
              shape: {
                dimension: {
                  maxWidth: 64,
                  maxHeight: 64,
                },
                spacing: {
                  padding: 0,
                },
                dest: "out",
              },
              mode: {
                view: {
                  bust: false,
                  render: {
                    scss: true,
                  },
                },
                symbol: true,
              },
            },
          },
        },

        /*
        * https://github.com/sapegin/grunt-webfont
        */
        webfont: {
          icons: {
            src: "svg/src/icons/*.svg",
            dest: "fonts",
            destCss: "scss",
            options: {
              fontFamilyName: "<%= pkg.name %> Icons",
              engine: "node",
              syntax: "bootstrap",
              fontFilename: "<%= pkg.name %>-icons",
              stylesheets: ["scss"],
              htmlDemo: false,
              optimize: false,
              normalize: true,
              ligatures: false,
              template: "svg/icons-template.css",
              templateOptions: {
                baseClass: "<%= pkg.name %>-icon",
                classPrefix: "<%= pkg.name %>-icon-",
              },
            },
          },
        },

        /*
         * https://github.com/gruntjs/grunt-contrib-watch
         */
        watch: {
            styles: {
                files: ['scss/**/*.scss', '../pressgang/scss/**/*.scss'],
                tasks: ['sass', 'postcss', 'cssmin'],
                options: {
                    nospawn: true
                }
            },
            scripts: {
                files: ['Gruntfile.js', 'js/src/**/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-purgecss');

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.loadNpmTasks('grunt-svgmin');
    grunt.loadNpmTasks('grunt-webfont');
    grunt.loadNpmTasks('grunt-svg-sprite');

    grunt.registerTask('default', ['sass', 'postcss', 'purgecss', 'cssmin', 'concat', 'uglify', 'watch']);
    grunt.registerTask('scripts', ['concat', 'uglify']);
    grunt.registerTask('css', ['sass', 'postcss', 'cssmin']);

    grunt.registerTask('svg', ['svgmin']);
    grunt.registerTask('iconfont', ['webfont']);

    grunt.registerTask('build', ['clean', 'compress']);
};
