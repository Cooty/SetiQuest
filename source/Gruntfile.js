module.exports = function(grunt) {
	var config = grunt.file.readJSON('config.json');

	// Load package tasks
	config.tasks.forEach(function (dep) {
		if (dep.substring(0, 6) === 'grunt-') {
			grunt.loadNpmTasks(dep);
		}
	});

	// Load external tasks
	grunt.loadTasks(config.directories.tasks);

	// Default task (if you run grunt without task name)
	grunt.registerTask('dev', config.devTasks);

	// Build task (release)
	grunt.registerTask('build', config.buildTasks);
	
};