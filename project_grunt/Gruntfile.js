/* eslint-disable no-mixed-spaces-and-tabs */
module.exports = function (grunt){
    var sassStyle = 'expended';
    grunt.initConfig({
        pkg:grunt.file.readJSON('package.json'),
        sass:{
            build:{
                options:{
                    style:sassStyle
                },
                files:{
                    './css/test.css':'./scss/test.scss'
                }
            }
        },
        concat:{
            options:{
                separator:';',
            },
            build:{
                src:['./js/jquery-1.11.1.js','./js/bootstrap.min.js','./js/test,js'],
                dest:'./js/global.js'
            }
        },
        uglify:{
            build:{
                files:{
                    './js/global.min.js':['./js/global.js']
                }
            }
        },
        jshint:{
            options:{
                reporterOutput:'',
                jshintrc:'.jshintrc'
            },
            all:['./js/test.js']
        },
        watch:{
            script:{
                files:['./js/jquery-1.11.1.js','./js/bootstrap.min.js','./js/test,js'],
                tasks:['concat','jshint','uglify']
            },
            sass:{
                files:['./scss/test.scss'],
                tasks:['sass'],
            },
            livereload:{
                options:{
                    livereload:'<%= connect.options.livereload %>'
                },
                files:[
                    'test.html',
                    './css/test.css',
                    './js/global.min.js'
                ]
            }
        },
        connect:{
            options: {
	          port: 9000,
	          open: true,
	          livereload: 35729,
	          // Change this to '0.0.0.0' to access the server from outside
	          hostname: 'localhost',
	          useAvailablePort:true,
	      	},
		      server: {
		        options: {
		        	oprt:9001,
		          	base:{
			          	path:'./',
			          	options:{
			          		index:'./test.html'
			          	}
			          }
		        },
		        keepalive:true
		    }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-connect');

    grunt.registerTask('chw_sass',['sass']);
    grunt.registerTask('chw_concat',['concat']);
    grunt.registerTask('chw_uglify',['uglify']);
    grunt.registerTask('chw_jshint',['jshint']);
    grunt.registerTask('chw_compress',['connect','jshint','uglify']);
    grunt.registerTask('default',['sass','connect','jshint','uglify','connect','watch']);
};