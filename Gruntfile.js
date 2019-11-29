module.exports = function (grunt) {

    grunt.initConfig({

        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'dist/combine.min.css': 'src/css/combine.scss'
                }
            }
        },

        shell: {
            moveTemlates: {
                command: 'touch ../../mamp/spianata/wp-content/themes/spianata/temp.txt && rm -r ../../mamp/spianata/wp-content/themes/spianata/*'
            }
        },

        concat: {
            options: {
                // separator: ';',
                sourceMap: 'true',
            },
            dist: {
                src: ['src/js/*.js'],
                dest: 'dist/combine.min.js',
            },
        },

        babel: {
            options: {
                sourceMap: true,
                presets: ['env']
            },
            dist: {
                files: {
                    'dist/combine.min.js': 'src/js/*.js'
                }
            }
        },

        copy: {
            html: {
                expand: true,
                cwd: '',
                src: ['*',
                    'assets/**/*',
                    'dist/**/*',
                    'inc/**/*',
                    'woocommerce/**/*',
                    '!node_modules',
                    '!Gruntfile.js',
                    '!src',
                    '!package-lock.json',
                    '!package.json'
                ],
                dest: '../../mamp/spianata/wp-content/themes/spianata'
            }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.registerTask('default', [
        // 'shell',
        'sass',
        // 'concat',
        'copy'
    ]);

};