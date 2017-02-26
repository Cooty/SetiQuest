module.exports = function (grunt) {
    
	grunt.registerTask('watch-files', 'Watch different file types and run proper tasks if changed', function () {
		grunt.task.run('watch:scss');
		grunt.task.run('watch:js');
	});

	grunt.extendConfig({
		watch: {
			scss: {
				files: './css/scss/**/*.scss',
				tasks: ['scss-compile']
			},
			js: {
				files: './js/source/**/*.js',
				tasks: ['js-compile']
			}
		}
	});

};