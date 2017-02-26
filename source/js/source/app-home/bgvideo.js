/**
 *
 */

/**
 * Operates background video on the homepage, if it's a mobile devicde or the browser doen't support HTML5 video
 * It fallf back to a background image
 *
 * @namespace SETI
 * @name SETI.BackgroundVideo
 *
 */
SETI.BackgroundVideo = (/** @lends SETI.BackgroundVideo */function() {

    var $body,
        $page,
        $hero,
        videoPlayingModifier = 'home-hero--video-playing',
        videoSource,
        bgVideoElement,
        videoTemplate,
        hasSeenHero;

    /**
     * Initialize the module
     *
     * @public
     * @returns {void}
     */
    function init() {
        hasSeenHero = window.getCookie('clickedHero');

        console.log(hasSeenHero);

        if(!SETI.mobile && hasSeenHero !== '1') {
            initDOMElements();
            addVideo();
        }
    }



    /**
     * Get DOM elements for the module
     *
     * @private
     * @returns {void}
     */
    function initDOMElements() {
        $body = SETI.Performance.getCachedDOM().$body;
        $page = SETI.Performance.getCachedDOM().$page;
        $hero = $('#js-home-hero');
        videoSource = $body.data('video-source');
        videoTemplate = Handlebars.compile(document.getElementById('bg-video').innerHTML);
    }

    function addVideo() {
        if(!SETI.mobile && Modernizr.video && Modernizr.videoloop) {
            console.log('add video');
            $page.after(videoTemplate({videoSource: videoSource}));
            bgVideoElement = $('[data-bg-video]')[0];

            bgVideoElement.addEventListener('playing', function() {
                $hero.addClass(videoPlayingModifier);
            });

        }
    }


    function getVideoElement() {
        if(bgVideoElement) {
            return bgVideoElement;
        }
    }

    return {
        init: init,
        getBgVideo: getVideoElement
    };

}());
