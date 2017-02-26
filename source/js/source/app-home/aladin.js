/**
 * Responsible for showing Aladin starmap on the homepage (initialy hidden)
 *
 * @namespace SETI
 * @name SETI.Aladin
 *
 */
SETI.Aladin = (/** @lends SETI.Aladin */function() {

	var aladinInstance,
        container,
        $zoomInBtn,
        $aladinAppContainer,
        aladinAppContainer,
        $zoomOutBtn,
        $constellationsBtn,
        $setCenterBtn,
        $fullScreenBtn,
        isFullScreen = false;

	/**
	 * Initialize the module
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
	    if(!SETI.mobile) {
            initDOMElements();
            if(container) {
                render();
                addEvents();
                getObservationData();
            }
        }
	}

	function getObservationData() {
        var promise = $.ajax({
            url: $aladinAppContainer.data('service-url')
        });

        promise.done(function(data) {
            console.log(data);
        });
        promise.fail(errorHandler);
        promise.always(requestHandler);
    }

    function requestHandler() {
	    console.log('do this stuff whenever data is revieved from server');
    }

    function errorHandler() {
        console.log('do this stuff when error happens');
    }

    /**
     * Initialize and render the star map to the DOM
     * 
     * @private
     * @returns {void}
     */
    function render() {
        aladinInstance = A.aladin(container, {
            showReticle: false,
            fov: 2.0 + 20. * 0.6,
            showLayersControl: false,
            showGotoControl: false,
            showZoomControl: false,
            showFrame: false,
            showCooGrid: false,
            showShareControl: false,
            log: false,
            fullScreen: false,
            showFullscreenControl: false,
            target: 0.0 + "," + 0.0
        });
    }

    function addEvents() {
        $fullScreenBtn.on({
            click: toggleFullscreen
        });
    }

	/**
	 * Get DOM elements for the module
	 *
	 * @private
	 * @returns {void}
	 */
	function initDOMElements() {
        container = document.getElementById('js-aladin-container');

        $aladinAppContainer = $('#js-aladin');
        aladinAppContainer = $aladinAppContainer[0];
        $zoomInBtn = $aladinAppContainer.find('[data-zoom-in]');
        $zoomOutBtn = $aladinAppContainer.find('[data-zoom-out]');
        $constellationsBtn = $aladinAppContainer.find('[data-constellations]');
        $setCenterBtn = $aladinAppContainer.find('[data-set-center]');
        $fullScreenBtn = $aladinAppContainer.find('[data-fullscreen]');
	}

	function toggleFullscreen() {
        if(!isFullScreen) {
            if (aladinAppContainer.requestFullscreen) {
                aladinAppContainer.requestFullscreen();
                isFullScreen = true;
            } else if (aladinAppContainer.webkitRequestFullscreen) {
                aladinAppContainer.webkitRequestFullscreen();
                isFullScreen = true;
            } else if (aladinAppContainer.mozRequestFullScreen) {
                aladinAppContainer.mozRequestFullScreen();
                isFullScreen = true;
            } else if (aladinAppContainer.msRequestFullscreen) {
                aladinAppContainer.msRequestFullscreen();
                isFullScreen = true;
            }
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
                isFullScreen = false;
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
                isFullScreen = false;
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
                isFullScreen = false;
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
                isFullScreen = false;
            }
        }

        $(this).toggleClass('reverse-arrows');

        this.blur();

    }

	return {
		init: init
	};

}());        