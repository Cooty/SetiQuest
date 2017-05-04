/**
 * Main subclass for the homepage application class
 * All classes for the functionality needed only on the homepage (everything related to Aladin and renedirng the overlay view)
 * goes here
 *
 * @namespace SETI
 * @name SETI.Home
 * @returns {Object}
 */
SETI.Home = (/** @lends SETI.Home */function () {

	var instance;

	/**
	 * Initialize application and needed subclasses
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
        SETI.Hero.init();
        SETI.Aladin.init();
	}

	return {

		/**
		 * Get singleton SETI.Home instance
		 *
		 * @public
		 * @memberof SETI.Home
		 * @returns {SETI.Home}
		 */
		getInstance: function () {
			if (!instance) {
				instance = init();
			}

			return instance;
		}
	};

}());