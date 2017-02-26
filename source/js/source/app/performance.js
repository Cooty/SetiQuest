/**
 * Performance increase module (cache, device optimizations)
 *
 * @namespace SETI
 * @name SETI.Performance
 */
SETI.Performance = (/** @lends SETI.Performance */function () {

	var exports,
		$cachedDOM,
		windowResize,
		deviceProperties;

	/**
	 * Init performance helpers
	 *
	 */
	function init() {
		try {
			initCacheDOM();
			initBindings();
			saveDeviceProperties();
		} catch (e) {
			throw new ReferenceError('SETI.Performance cannot be initialized!');
		}
	}

	/**
	 * Cache DOM elements
	 *
	 * @public
	 */
	function initCacheDOM() {

		$cachedDOM = {
			window: window,
			$window: $(window),
			$body: $(document.body),
			$page: $('[data-page]'),
			$html: $('html'),
			$header: $('#js-header')
		};

	}

	function initBindings() {
		$cachedDOM.$window.on('resize', resizeWindow);
	}

	/**
	 * Window resize hook
	 */
	function resizeWindow() {
		clearTimeout(windowResize);

		windowResize = setTimeout(function () {
			saveDeviceProperties();
		}, 200);

	}

	/**
	 * Save device properties to an object
	 */
	function saveDeviceProperties() {
		var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			W = w.innerWidth || e.clientWidth || g.clientWidth,
			H = w.innerHeight || e.clientHeight || g.clientHeight;

		deviceProperties = {
			window: {
				width: W,
				height: H
			}
		};

	}

	/**
	 * Return cached DOM elements
	 *
	 * @returns {Object} $cachedDOM - Object containing all cached DOM elements
	 * @public
	 */
	function getCachedDOM() {
		return $cachedDOM;
	}

	/**
	 * Return saved device properties
	 *
	 * @returns {Object} deviceProperties - width, height as Number
	 * @public
	 */
	function getDeviceProperties() {
		return deviceProperties;
	}

	exports = {
		init: init,
		initCacheDOM: initCacheDOM,
		getCachedDOM: getCachedDOM,
		getDeviceProperties: getDeviceProperties
	};

	return exports;

}());
