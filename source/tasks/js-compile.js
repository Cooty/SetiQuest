module.exports = function (grunt) {

	grunt.registerTask('js-compile', 'Compile (concat, copy, minify) javascript files', function (mode) {
		if (mode === 'build') {
			grunt.task.run('js-concat:prod');
			grunt.task.run('js-minify');
		} else {
			grunt.task.run('js-concat');
		}
	});

};