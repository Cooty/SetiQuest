/**
 * Operates the navigation in 'mobile' mode, when the main menu is hidden behind a hamburger
 *
 * @namespace SETI
 * @name SETI.MobileNav
 *
 */
SETI.MobileNav = (/** @lends SETI.MobileNav */function() {

	var $html,
        $logo,
        $hamburger,
		$coverLayer,
		cssClass = 'mobile-nav-opened';

	/**
	 * Initialize the module
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
		initDOMElements();
        if($logo.length && $hamburger.length && $coverLayer.length) {
            initBindings();
        }
	}

	/**
	 * Get DOM elements for the module
	 *
	 * @private
	 * @returns {void}
	 */
	function initDOMElements() {
		$html = SETI.Performance.getCachedDOM().$html;
        $logo = $('#js-logo');
        $hamburger = $('#js-hamburger');
		$coverLayer = $('#js-mobile-nav-cover');
	}

	/**
	 * Init event bindings for the module
	 * Everything is bound to the BODY and events are propagated, because selects can be created/modified dynamically
	 *
	 * @private
	 * @returns {void}
	 */
	function initBindings() {
        $hamburger.on({
            click: toggle
        });

        $logo.on({
            click: function(e) {
                if($html.hasClass(cssClass)) {
                    e.preventDefault();
                    $html.removeClass(cssClass);
					$logo.blur();
                }
            }
        });

		$coverLayer.on({
			click: function() {
				if($html.hasClass(cssClass)) {
                    $html.removeClass(cssClass);
                }	
			}
		});
	}

    /**
	 * Toggle the class on the root element that changes the UI state
	 *
	 * @private
	 * @returns {void}
	 */
    function toggle() {
        if(!$html.hasClass(cssClass)) {
            $html.addClass(cssClass);
        } else {
            $html.removeClass(cssClass);
        }
    }

	return {
		init: init
	};

}());