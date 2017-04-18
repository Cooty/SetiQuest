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
						$btn.on({
							animationend: function() {
								console.log('anim ended');
								$hero.fadeOut(180, function() {
                                    hideHeroCallback();
								});
							}
						});

					} else {
						$hero.fadeOut(180, function() {
                            hideHeroCallback();
						});
					}
					
					setAladinState();

				}
			});

        }
	}

    /**
	 * Do this after the end of the animation
     */
	function hideHeroCallback() {
        $aladin.addClass('aladin--show');
        $hero.remove();
	}

    /**
	 * Do this imidiately when the user clicks the button on the landing page
     */
	function setAladinState() {
        $html.addClass('hide-hero');
        if('sessionStorage' in window) {
        	window.sessionStorage.setItem('clickedHero', 1);
		}
        if(bgVideo) {
            bgVideo.pause();
            $(bgVideo).remove();
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