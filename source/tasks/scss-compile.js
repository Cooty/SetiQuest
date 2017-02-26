module.exports = function (grunt) {
	var config = grunt.file.readJSON('config.json'),
		sourceDir = config.directories.scssSource,
		build = config.directories.build;

	grunt.registerTask('scss-compile', 'Compile SASS sources into CSS', function (mode) {
		if(mode === 'build') {
			grunt.task.run('sass:build');
		} else {
			grunt.task.run('sass:dev');
		}
		
	});

	grunt.extendConfig({
		sass: {
			options: {
				sourceMap: true,
				outputStyle: 'expanded',
				precision: 3,
				quiet: true
			},

			build: {
				options: {
					sourceMap: true,
					outputStyle: 'compressed',
					quiet: true
				},
				files: [
					{
						expand: true,
						cwd: sourceDir,
						src: ['*.scss'],
						dest: build + 'css/',
						ext: '.css'
					}
				]
			},

			dev: {
				options: {
					sourceMap: true,
					outputStyle: 'compressed',
					quiet: true
				},
				files: [
					{
						expand: true,
						cwd: sourceDir,
						src: ['*.scss'],
						dest: './css/',
						ext: '.css'
					}
				]
			}
		}
	});

};