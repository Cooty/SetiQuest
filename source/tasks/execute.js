module.exports = function (grunt) {
	var config = grunt.file.readJSON('config.json');

	grunt.registerTask('start-server', 'Execute the Node server for development mode', function () {
		grunt.task.run('execute');
	});

	grunt.extendConfig({
		execute: {
            target: {
                src: [config.files.server]
            }
        }
	});

};