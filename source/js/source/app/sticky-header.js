/**
 * Operates the height change of the header
 *
 * @namespace SETI
 * @name SETI.StickyHeader
 *
 */
SETI.StickyHeader = (/** @lends SETI.StickyHeader */function() {

    var $window,
        $header,
        initialHeight,
        cssClass = 'header--scrolled';

    /**
     * Initialize the module
     *
     * @public
     * @returns {void}
     */
    function init() {
        initDOMElements();
        if($header.data('sticky')) {
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
        $header = SETI.Performance.getCachedDOM().$header;
        $window = SETI.Performance.getCachedDOM().$window;
        initialHeight = $header.height();
    }


    /**
     * Init event bindings for the module
     * Everything is bound to the BODY and events are propagated, because selects can be created/modified dynamically
     *
     * @private
     * @returns {void}
     */
    function initBindings() {
        $window.on({
            scroll: function() {
                if($window.scrollTop() > initialHeight) {
                    $header.addClass(cssClass);
                } else {
                    $header.removeClass(cssClass);
                }
            }
        });
    }

    return {
        init: init
    };

}());