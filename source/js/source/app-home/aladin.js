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
        $body,
        $notes,
        notesCSSClass = 'notes--opened',
        body,
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
                SETI.Plugins.init();
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
        if(Modernizr.fullscreen) {
            $fullScreenBtn.on({
                click: toggleFullscreen
            });
        } else {
            $fullScreenBtn.hide();
        }

        // Toggle notifications box
        $notes.on({
            click: function() {
                $notes.toggleClass(notesCSSClass);
            }
        }, '[data-notes-header]');

    }

	/**
	 * Get DOM elements for the module
	 *
	 * @private
	 * @returns {void}
	 */
	function initDOMElements() {
        container = document.getElementById('js-aladin-container');
        $body = SETI.Performance.getCachedDOM().$body;
        body = $body[0];

        $aladinAppContainer = $('#js-aladin');
        aladinAppContainer = $aladinAppContainer[0];
        $zoomInBtn = $aladinAppContainer.find('[data-zoom-in]');
        $zoomOutBtn = $aladinAppContainer.find('[data-zoom-out]');
        $constellationsBtn = $aladinAppContainer.find('[data-constellations]');
        $setCenterBtn = $aladinAppContainer.find('[data-set-center]');
        $fullScreenBtn = $aladinAppContainer.find('[data-fullscreen]');
        $notes = $('[data-notes]');
	}

	function toggleFullscreen() {
        if(!isFullScreen) {
            // We need to set the whole <body> to full screen not just the Aladin <div> because the tooltips
            // get appended to the <body> via JS end they would not be visible
            if (body.requestFullscreen) {
                body.requestFullscreen();
                isFullScreen = true;
            } else if (body.webkitRequestFullscreen) {
                body.webkitRequestFullscreen();
                isFullScreen = true;
            } else if (body.mozRequestFullScreen) {
                body.mozRequestFullScreen();
                isFullScreen = true;
            } else if (body.msRequestFullscreen) {
                body.msRequestFullscreen();
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
        $body.toggleClass('aladin-fullscreen');

        this.blur();

    }

	return {
		init: init
	};

}());        