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
        $html,
        $aladinAppContainer,
        aladinAppContainer,
        $zoomOutBtn,
        $constellationsBtn,
        $setCenterBtn,
        $fullScreenBtn,
        $body,
        $notes,
        notesCSSClass = 'notes--opened',
        progressCSSClass = 'show-progress',
        $progressLink,
        body,
        aladinConstellationsOn = true,
        isFullScreen = false,
        initialZoom = 1,
        zoomIncrement = 0.2,
        maxZoomInLevel = 0.3,
        maxZoomOutLevel = 12,
        aladinConstellationOverlay;

	/**
	 * Initialize the module
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
	    console.log(SETI.mobile);
	    if(SETI.mobile === 0) {
            initDOMElements();
            if(container) {
                render();
                addEvents();
                getObservationData();
                getConstellationVectors();
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

    function zoomIn($btn) {
        var fov = aladinInstance.getFov();

        fov = fov[0] - zoomIncrement;

        if(fov > maxZoomInLevel) {
            aladinInstance.setFov(fov);

            if($zoomOutBtn.attr('disabled')) {
                $zoomOutBtn.attr('disabled', false);
            }

        } else {
            $btn.attr('disabled', true);
        }

    }

    function zoomOut($btn) {
        var fov = aladinInstance.getFov();

        fov = fov[0] + zoomIncrement;

        if(fov < maxZoomOutLevel) {
            aladinInstance.setFov(fov);

            if($zoomInBtn.attr('disabled')) {
                $zoomInBtn.attr('disabled', false);
            }

        } else {
            $btn.attr('disabled', true);
        }

    }

    function toggleConstellations() {

        if (aladinConstellationsOn) {
            aladinConstellationOverlay.hide();
            aladinConstellationsOn = false;
        }
        else {
            aladinConstellationsOn = true;
            aladinConstellationOverlay.show();
        }

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
            fov: initialZoom,
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
        console.log(aladinInstance);
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

        $zoomInBtn.on({
            click: function(e) {
                zoomIn($(e.currentTarget));
            }
        });

        $zoomOutBtn.on({
            click: function(e) {
                zoomOut($(e.currentTarget));
            }
        });

        $constellationsBtn.on({
            click: toggleConstellations
        });

        // TODO: Add proper History here, just for demo
        $progressLink.on({
            click: function(e) {
                e.preventDefault();
                if(!$html.hasClass(progressCSSClass)) {
                    $html.addClass(progressCSSClass);
                    $('.header__menu').find('a.active').removeClass('active');
                    $('.header__menu').find('a[data-progress]').addClass('active');
                } else {
                    $html.removeClass(progressCSSClass);
                    $('.header__menu').find('a[data-progress]').removeClass('active');
                    $('.header__menu').find('a[data-observation]').removeClass('active');
                }


            }
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
        $html = SETI.Performance.getCachedDOM().$html;
        $progressLink = $('[data-progress]');

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

    function getConstellationVectors() {
        $.ajax({
            // url: "http://feeds.setiquest.info/constellations.jsonp",
            url: "data/constellations.jsonp",
            dataType: "jsonp",
            jsonpCallback: 'constellations',  // You don't need this, see below
            success: function (response) {
                aladinConstellationOverlay = A.graphicOverlay({
                    color: '#444444',
                    lineWidth: 1.0,
                    name: "constellations"
                });
                aladinInstance.addOverlay(aladinConstellationOverlay);
                var a = [];
                for (var i = 0; i < response["constellations"].length; i++) {
                    var name = response["constellations"][i][0];

                    for (var j = 1; j < response["constellations"][i].length; j += 3) {
                        var thisRA = parseFloat(response["constellations"][i][j]);
                        var thisDec = parseFloat(response["constellations"][i][j + 1]);
                        var thisMag = parseFloat(response["constellations"][i][j + 2]);
                        if (thisRA < 25.0) {
                            //console.log(thisRA + "," + thisDec);
                            p = [];
                            p.push(thisRA * 15.0);
                            p.push(thisDec);
                            a.push(p);
                        }
                        else {
                            aladinConstellationOverlay.add(A.polyline(a));
                            a = [];
                        }
                        lastRA = thisRA;
                        lastDec = thisDec;
                        lastMag = thisMag;
                    }

                }
            },
            error: self.handleError
        });
    }

	return {
		init: init
	};

}());

// Start up Aladin Lite
/*var aladin = A.aladin('#aladin-lite-div', {target: '12 25 41.512 +12 48 47.2', fov: 0.8});

// define custom draw function
var drawFunction = function(source, canvasCtx, viewParams) {
    canvasCtx.beginPath();
    canvasCtx.arc(source.x, source.y, source.data['size'] * 2, 0, 2 * Math.PI, false);
    canvasCtx.closePath();
    canvasCtx.strokeStyle = '#c38';
    canvasCtx.lineWidth = 3;
    canvasCtx.globalAlpha = 0.7;
        canvasCtx.stroke();
    var fov = Math.max(viewParams['fov'][0], viewParams['fov'][1]);

    // object name is displayed only if fov<10°
    if (fov>10) {
        return;
    }

    canvasCtx.globalAlpha = 0.9;
    canvasCtx.globalAlpha = 1;

    var xShift = 20;

    canvasCtx.font = '15px Arial'
    canvasCtx.fillStyle = '#eee';
    canvasCtx.fillText(source.data['name'], source.x + xShift, source.y -4);

    // object type is displayed only if fov<2°
    if (fov>2) {
        return;
    }
    canvasCtx.font = '12px Arial'
    canvasCtx.fillStyle = '#abc';
    canvasCtx.fillText(source.data['otype'], source.x + 2 + xShift, source.y + 10);
};

// create sources objects
var M87 = A.source(187.7059308, 12.3911233, {name: 'M 87', size: 4.5, otype: 'LINER AGN'});
var M49 = A.source(187.444992, 8.000411, {name: 'M 49', size: 6.28, otype: 'Seyfert 2'});
var M100 = A.source(185.728746, 15.822381, {name: 'M 100', size: 7.23, otype: 'AGN'});
var M84 = A.source(186.26559721, 12.88698314, {name: 'M 84', size: 3.91, otype: 'Seyfert 2'});
var M60 = A.source(190.916700, 11.552611, {name: 'M 60', size: 4.75, otype: 'Galaxy in pair of galaxies'});
var NGC4388 = A.source(186.445083, 12.662069 , {name: 'NGC 4388', size: 3.72, otype: 'Seyfert 2'});
var NGC4261 = A.source(184.84673421, 5.82491522 , {name: 'NGC 4261', size: 2.78, otype: 'LINER AGN'});
var M86 = A.source(186.549225, 12.945969, {name: 'M 86', size: 6.03, otype: 'Galaxy in group of galaxies'});
// create catalog layer with custom draw function
var cat = A.catalog({name: 'Virgo cluster', shape: drawFunction});
// add sources to the new layer
cat.addSources([M87, M49, M100, M84, M60, NGC4388, NGC4261, M86]);
aladin.addCatalog(cat);*/