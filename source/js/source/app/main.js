/**
 * Main application class
 *
 * @namespace SETI
 * @name SETI.Main
 * @returns {Object}
 */
SETI.Main = (/** @lends SETI.Main */function () {

	var instance;

	/**
	 * Initialize application and needed subclasses
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
        SETI.Performance.init();
        SETI.MobileNav.init();
        SETI.AnimDemo.init();
        SETI.StickyHeader.init();
	}

	return {

		/**
		 * Get singleton SETI.Main instance
		 *
		 * @public
		 * @memberof SETI.Main
		 * @returns {SETI.Main}
		 */
		getInstance: function () {
			if (!instance) {
				instance = init();
			}

			return instance;
		}
	};

}());