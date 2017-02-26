module.exports = function (grunt) {
	'use strict';

	/**
	 * Concurrent task registration: 'parallel'
	 *
	 * @returns {void}
	 */
	grunt.registerTask('parallel', 'Start watchers parallel', function () {
		grunt.task.run('concurrent:prod');
	});

	/**
	 * Extend concurrent task
	 *
	 */
	grunt.extendConfig({
		concurrent: {
			options: {
				logConcurrentOutput: true
			},
			prod: {
				tasks: [
					'watch:scss',
					'watch:js',
					'start-server'
				]
			}
		}
	});

};
