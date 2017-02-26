module.exports = function (grunt) {

	var config = grunt.file.readJSON('config.json'),
		build = config.directories.build;

	grunt.registerTask('js-concat', 'Concatenate javascript files', function (mode) {
		if(arguments.length === 0) {
			grunt.task.run('concat:app');
			grunt.task.run('concat:appHome');
			grunt.task.run('concat:plugin');
			grunt.task.run('concat:pluginHome');
			grunt.task.run('concat:space');
		} else {
			grunt.task.run('concat:appBuild');
			grunt.task.run('concat:appHomeBuild');
			grunt.task.run('concat:pluginBuild');
			grunt.task.run('concat:pluginHomeBuild');
			grunt.task.run('concat:spaceBuild');
		}

	});

	grunt.extendConfig({
		concat: {
			app: {
				src: ['./js/source/app/*.js'],
				dest: './js/app.min.js'
			},
			appHome: {
				src: ['./js/source/app-home/*.js'],
				dest: './js/app.home.min.js'
			},
			plugin: {
				src: ['./js/source/plugin/*.js'],
				dest: './js/plugin.min.js'
			},
			pluginHome: {
				src: ['./js/source/plugin-home/*.js'],
				dest: './js/plugin.home.min.js'
			},
            space: {
                src: ['./js/source/standalone/space.js'],
                dest: './js/space.min.js'
            },
			appBuild: {
				src: ['./js/source/app/*.js'],
				dest: build + 'js/app.min.js'
			},
			appHomeBuild: {
				src: ['./js/source/app-home/*.js'],
				dest: build + 'js/app.home.min.js'
			},
			pluginBuild: {
				src: ['./js/source/plugin/*.js'],
				dest: build + 'js/plugin.min.js'
			},
			pluginHomeBuild: {
				src: ['./js/source/plugin-home/*.js'],
				dest: build + '/js/plugin.home.min.js'
			},
            spaceBuild: {
                src: ['./js/source/standalone/space.js'],
                dest: build + '/js/space.min.js'
            }
		}
	});

};