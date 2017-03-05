/**
 * Handles the 3rd party jQuery plugins we use on the Aladin canvas
 * For docs on the tooltip plugin see.: https://iamceege.github.io/tooltipster/
 *
 * @namespace SETI
 * @name SETI.Plugins
 *
 */
SETI.Plugins = (/** @lends SETI.Plugins */function() {

    var $tooltips,
        theme = 'tooltipster-borderless',
        $nanoScrollers;

    /**
     * Initialize the module
     *
     * @public
     * @returns {void}
     */
    function init() {
        initDOMElements();
        initTooltips();
    }

    function initTooltips() {

        if($tooltips.length) {
            $tooltips.each(function() {
                var $tooltip = $(this);

                if($tooltip.data('side')) {
                    $tooltip.tooltipster({
                        theme: theme,
                        side: $tooltip.data('side')
                    });
                } else {
                    $tooltip.tooltipster({
                        theme: theme,
                        side: $tooltip.data('side')
                    });
                }

            });
        }

    }

    /**
     * Get DOM elements for the module
     *
     * @private
     * @returns {void}
     */
    function initDOMElements() {
        $tooltips = $('[data-tooltip]');
        $nanoScrollers = $('[data-nanoscroller]');
    }


    return {
        init: init
    };

}());
