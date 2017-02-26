module.exports = function (grunt) {

	var config = grunt.file.readJSON('config.json'),
		build = config.directories.build;
		console.log(build);

	/**
	 * Run JS minify with Uglifier
	 * NOTE: minify only applies to the build files!
	 *
	 * @param {String} mode - the mode of the task
	 * @returns {void}
	 */
	grunt.registerTask('js-minify', 'Minify (w Uglifier) javascript files', function (mode) {
		grunt.task.run('uglify:app');
		grunt.task.run('uglify:appHome');
		grunt.task.run('uglify:plugin');
		grunt.task.run('uglify:pluginHome');
		grunt.task.run('uglify:space');
	});

	/**
	 * Extend the main task
	 *
	 */
	grunt.extendConfig({
		pkg: grunt.file.readJSON('package.json'),
		uglify: {
			options: {
				preserveComments: false,
				drop_console: true,
				sourceMap: true,
				sourceMapIncludeSources: true
			},
			app: {
				options: {
					quoteStyle: 1,
					compress: {
						drop_console: true
					}
				},
				files: [{
					expand: true,
					src: [build + '/js/app.min.js'],
					dest: ''
				}]
			},
			appHome: {
				options: {
					quoteStyle: 1,
					compress: {
						drop_console: true
					}
				},
				files: [{
					expand: true,
					src: [build + '/js/app.home.min.js'],
					dest: ''
				}]
			},
			plugin: {
				options: {
					banner: '',
					sourceMap: false,
					compress: {
						drop_console: true
					}
				},
				files: [{
					expand: true,
					src: [build + '/js/plugin.min.js'],
					dest: ''
				}]
			},
			pluginHome: {
				options: {
					banner: '',
					sourceMap: false,
					compress: {
						drop_console: true
					}
				},
				files: [{
					expand: true,
					src: [build + '/js/plugin.home.min.js'],
					dest: ''
				}]
			},
            space: {
                options: {
                    banner: '',
                    sourceMap: false,
                    compress: {
                        drop_console: true
                    }
                },
                files: [{
                    expand: true,
                    src: [build + '/js/space.min.js'],
                    dest: ''
                }]
            }
		}
	});

};
