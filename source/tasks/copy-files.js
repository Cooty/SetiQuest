module.exports = function (grunt) {
	var config = grunt.file.readJSON('config.json'),
		build = config.directories.build;

	grunt.registerTask('copy-files', 'Copy assets, fonts, standalone files', function () {
		grunt.task.run('copy:imagesBuild');
	});

	grunt.extendConfig({
		copy: {
			imagesBuild: {
				files: [
					{
						expand: true,
						flatten: false,
						cwd: './i',
						src: ['**/*.jpg', '**/*.ico', '**/*.png', '**/*.gif', '**/*.svg', '**/*.svgz', '**/*.cur', '**/*.webp', '!**/source/**'],
						dest: build + '/i'
					}
				]
			}
		}
	});

};