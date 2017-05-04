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
		$body,
		bgVideo,
		$aladin,
        $content,
		heroTemplate;

	/**
	 * Initialize the module
	 *
	 * @public
	 * @returns {void}
	 */
	function init() {
		initDOMElements();

		if(window.sessionStorage) {
			if(sessionStorage.getItem('clickedHero')) {
                $html.addClass('aladin-active');
			} else {
                addHomePageHero();
                addEventListeners();
			}
		} else {
			$html.addClass('aladin-active');
		}


	}

	function addEventListeners() {
        if($hero.length) {
            $btn.on({
                click: function() {
                    if(Modernizr.cssanimations) {
                        console.log('we have css anims');
                        $content.on({
                            animationend: function() {
                                console.log('content part anim ended');
                                $hero.addClass('fade-out');
                            }
                        });

                        $hero.on({
                            animationend: function() {
                                console.log('hero animation ended');
                                setAladinState();
                            }
                        });

                        $content.addClass('fade-out');

                    } else {
                        $hero.hide(100, function() {
                            setAladinState();
                        });
                    }
                }
            });

        }
	}

    /**
	 * Do this imidiately when the user clicks the button on the landing page
     */
	function setAladinState() {
        $html.addClass('aladin-active');
        if('sessionStorage' in window) {
        	window.sessionStorage.setItem('clickedHero', 1);
		}
        if(bgVideo) {
            bgVideo.pause();
            $(bgVideo).remove();
        }

        window.setTimeout(function() {
			$hero.remove();
		}, 600);
	}

	/**
	 * Get DOM elements for the module
	 *
	 * @private
	 * @returns {void}
	 */
	function initDOMElements() {
		heroTemplate = Handlebars.compile(document.getElementById('home-hero-template').innerHTML);
		$aladin = $('#js-aladin');
        $body = SETI.Performance.getCachedDOM().$body;
        $html = SETI.Performance.getCachedDOM().$html;
	}

	function addHomePageHero() {
		var hasVideo = !SETI.mobile && Modernizr.video && Modernizr.videoloop;

		$aladin.after(heroTemplate({
			hasVideo: hasVideo,
			videoSource: $body.data('video-source')
		}));

        $hero = $('#js-home-hero');
        $content = $hero.find('#js-home-hero-content');
        $btn = $('#js-hide-home-hero');
        bgVideo = $('[data-bg-video]')[0];

	}

	return {
		init: init
	};

}());