/**
 * Operates the animation on the bottom of the What is SETI page - only adds a class on scroll
 *
 * @namespace SETI
 * @name SETI.AnimDemo
 *
 */
SETI.AnimDemo = (/** @lends SETI.AnimDemo */function() {

    var $window,
        $demoContainer,
        cssClass = 'show';

    /**
     * Initialize the module
     *
     * @public
     * @returns {void}
     */
    function init() {
        initDOMElements();
        if($demoContainer.length) {
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
        $window = SETI.Performance.getCachedDOM().$window;
        $demoContainer = $('[data-map-demo-anim]');
    }

    function showAnimations() {
        var scrollY = $window.scrollTop(),
            scrolledIntoView = $demoContainer.offset().top,
            height = $demoContainer.height();

        if(scrollY + height * 2 > scrolledIntoView && !$demoContainer.hasClass(cssClass)) {
            $demoContainer.addClass(cssClass);
        }


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
            scroll: window.debounce(showAnimations, 10)
        });
    }

    return {
        init: init
    };

}());