/**
 * Responsible for hiding the 'hero' on the homepage that is only visible to 1st time visitors
 * Also places cookie so that the UI state is preserved when navigating back to the hamepage in the same session 
 *
 * @namespace SETI
 * @name SETI.Hero
 *
 */
SETI.Hero = (/** @lends SETI.Hero */function() {

	var $hero,
		$btn,
		$html,
		bgVideo,
		$aladin;

	/**
	 * Initialize the module
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
		initDOMElements();
        if($hero.length) {
			$btn.on({
				click: function() {
					if(Modernizr.cssanimations) {
						$html.addClass('hide-hero');

						$btn.on({
							animationend: function() {
								$hero.fadeOut(180, function() {
                                    // animate in the controls
                                    $aladin.addClass('aladin--show');
								});
							}
						});

					} else {
						$hero.fadeOut(180, function() {
                            // animate in the controls
                            $aladin.addClass('aladin--show');
						});
					}
					
					window.setCookie('clickedHero', 1);
					if(bgVideo) {
						bgVideo.pause();
					}
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
        $hero = $('#js-home-hero');
		if($hero.length) {
			$btn = $('#js-hide-home-hero');
			$html = SETI.Performance.getCachedDOM().$html;
            bgVideo = SETI.BackgroundVideo.getBgVideo();
            $aladin = $('#js-aladin');
		}
	}

	return {
		init: init
	};

}());