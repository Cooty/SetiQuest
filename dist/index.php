<!doctype html>

<!-- TODO: Only add the 'hide-hero' class if the user has seen the Aladin canvas -->
<html dir="ltr" lang="en-US" class="no-js home <?= isset($_COOKIE['clickedHero']) ? 'hide-hero' : '' ?>">


<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="UTF-8">

    <title>Home | S.E.T.I.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="TODO: A maximum of 160 characters of text should go here, based on the contents of the current page">
    <meta name="keywords" content="SETI, space, exoplanets, E.T., UFO, astronomy, Allen Telescope Array">

    <meta property="og:type" content="article">
    <meta property="og:image" content="TODO: Add absolute phat to at least 1024x1024px large image to show when linking on Facebook">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="TODO: Add title here to show when shared on Twitter">
    <meta name="twitter:description" content="TODO: Add maximum 140 character long description here to show when shared on Twitter">
    <meta name="twitter:domain" content="http://setiquest.info/">

    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet" media="screen">
    <link href="css/app.css" rel="stylesheet" media="all">
    <!-- Only needed on the homepage -->

    <link href="css/aladin.css" rel="stylesheet" media="all">


    <script>
        var SETI = SETI || function() {};

        window.setCookie = function(cname, cvalue, exdays) {
            var d = new Date(),
                expires;

            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            expires = 'expires=' + d.toUTCString();
            document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
        };

        window.getCookie = function(cname) {
            var name = cname + '=',
                ca = document.cookie.split(';'),
                i,
                c;

            for(i = 0; i <ca.length; i++) {
                c = ca[i];

                while (c.charAt(0) === ' ') {
                    c = c.substring(1);
                }

                if (c.indexOf(name) === 0) {
                    return c.substring(name.length, c.length);
                }
            }

            return '';
        };

    </script>

    <script>
        (function() {
            var ua,
                savedValue = parseInt(window.getCookie('mob'), 10);

            if(!savedValue) {
                ua = navigator.userAgent || navigator.vendor || window.opera;

                if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(ua) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(ua.substr(0, 4))) {
                    SETI.mobile = 1;
                } else {
                    SETI.mobile = 0;
                }
                window.setCookie('mob', SETI.mobile, 365);
            } else {
                SETI.mobile = savedValue;
            }

        }) ();
    </script>

    <script>
        /*! modernizr 3.3.1 (Custom Build) | MIT *
         * https://modernizr.com/download/?-cssanimations-csshyphens_softhyphens_softhyphensfind-cssremunit-csstransforms3d-cssvhunit-flexbox-flexboxlegacy-flexwrap-fullscreen-history-inlinesvg-localstorage-mediaqueries-picture-sessionstorage-svg-touchevents-video-videoautoplay-videoloop-webgl-webp-addtest-atrule-domprefixes-hasevent-mq-prefixed-prefixedcss-prefixedcssvalue-prefixes-setclasses-shiv-testallprops-testprop-teststyles !*/
        !function(e,A,t){function n(e,A){return typeof e===A}function o(){var e,A,t,o,r,i,a;for(var l in y)if(y.hasOwnProperty(l)){if(e=[],A=y[l],A.name&&(e.push(A.name.toLowerCase()),A.options&&A.options.aliases&&A.options.aliases.length))for(t=0;t<A.options.aliases.length;t++)e.push(A.options.aliases[t].toLowerCase());for(o=n(A.fn,"function")?A.fn():A.fn,r=0;r<e.length;r++)i=e[r],a=i.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),b.push((o?"":"no-")+a.join("-"))}}function r(e){var A=T.className,t=Modernizr._config.classPrefix||"";if(x&&(A=A.baseVal),Modernizr._config.enableJSClass){var n=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");A=A.replace(n,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(A+=" "+t+e.join(" "+t),x?T.className.baseVal=A:T.className=A)}function i(e,A){if("object"==typeof e)for(var t in e)C(e,t)&&i(t,e[t]);else{e=e.toLowerCase();var n=e.split("."),o=Modernizr[n[0]];if(2==n.length&&(o=o[n[1]]),"undefined"!=typeof o)return Modernizr;A="function"==typeof A?A():A,1==n.length?Modernizr[n[0]]=A:(!Modernizr[n[0]]||Modernizr[n[0]]instanceof Boolean||(Modernizr[n[0]]=new Boolean(Modernizr[n[0]])),Modernizr[n[0]][n[1]]=A),r([(A&&0!=A?"":"no-")+n.join("-")]),Modernizr._trigger(e,A)}return Modernizr}function a(){return"function"!=typeof A.createElement?A.createElement(arguments[0]):x?A.createElementNS.call(A,"http://www.w3.org/2000/svg",arguments[0]):A.createElement.apply(A,arguments)}function l(e){return e.replace(/([a-z])-([a-z])/g,function(e,A,t){return A+t.toUpperCase()}).replace(/^-/,"")}function s(e){return e.replace(/([A-Z])/g,function(e,A){return"-"+A.toLowerCase()}).replace(/^ms-/,"-ms-")}function u(){var e=A.body;return e||(e=a(x?"svg":"body"),e.fake=!0),e}function c(e,t,n,o){var r,i,l,s,c="modernizr",d=a("div"),p=u();if(parseInt(n,10))for(;n--;)l=a("div"),l.id=o?o[n]:c+(n+1),d.appendChild(l);return r=a("style"),r.type="text/css",r.id="s"+c,(p.fake?p:d).appendChild(r),p.appendChild(d),r.styleSheet?r.styleSheet.cssText=e:r.appendChild(A.createTextNode(e)),d.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",s=T.style.overflow,T.style.overflow="hidden",T.appendChild(p)),i=t(d,e),p.fake?(p.parentNode.removeChild(p),T.style.overflow=s,T.offsetHeight):d.parentNode.removeChild(d),!!i}function d(e,A){return!!~(""+e).indexOf(A)}function p(A,n){var o=A.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(s(A[o]),n))return!0;return!1}if("CSSSupportsRule"in e){for(var r=[];o--;)r.push("("+s(A[o])+":"+n+")");return r=r.join(" or "),c("@supports ("+r+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function f(e,A){return function(){return e.apply(A,arguments)}}function m(e,A,t){var o;for(var r in e)if(e[r]in A)return t===!1?e[r]:(o=A[e[r]],n(o,"function")?f(o,t||A):o);return!1}function h(e,A,o,r){function i(){u&&(delete V.style,delete V.modElem)}if(r=n(r,"undefined")?!1:r,!n(o,"undefined")){var s=p(e,o);if(!n(s,"undefined"))return s}for(var u,c,f,m,h,g=["modernizr","tspan","samp"];!V.style&&g.length;)u=!0,V.modElem=a(g.shift()),V.style=V.modElem.style;for(f=e.length,c=0;f>c;c++)if(m=e[c],h=V.style[m],d(m,"-")&&(m=l(m)),V.style[m]!==t){if(r||n(o,"undefined"))return i(),"pfx"==A?m:!0;try{V.style[m]=o}catch(v){}if(V.style[m]!=h)return i(),"pfx"==A?m:!0}return i(),!1}function g(e,A,t,o,r){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+S.join(i+" ")+i).split(" ");return n(A,"string")||n(A,"undefined")?h(a,A,o,r):(a=(e+" "+B.join(i+" ")+i).split(" "),m(a,A,t))}function v(e,A,n){return g(e,t,t,A,n)}var b=[],y=[],w={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,A){var t=this;setTimeout(function(){A(t[e])},0)},addTest:function(e,A,t){y.push({name:e,fn:A,options:t})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr,Modernizr.addTest("history",function(){var A=navigator.userAgent;return-1===A.indexOf("Android 2.")&&-1===A.indexOf("Android 4.0")||-1===A.indexOf("Mobile Safari")||-1!==A.indexOf("Chrome")||-1!==A.indexOf("Windows Phone")?e.history&&"pushState"in e.history:!1}),Modernizr.addTest("svg",!!A.createElementNS&&!!A.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("picture","HTMLPictureElement"in e),Modernizr.addTest("localstorage",function(){var e="modernizr";try{return localStorage.setItem(e,e),localStorage.removeItem(e),!0}catch(A){return!1}}),Modernizr.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(A){return!1}});var E=w._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];w._prefixes=E;var T=A.documentElement,x="svg"===T.nodeName.toLowerCase();x||!function(e,A){function t(e,A){var t=e.createElement("p"),n=e.getElementsByTagName("head")[0]||e.documentElement;return t.innerHTML="x<style>"+A+"</style>",n.insertBefore(t.lastChild,n.firstChild)}function n(){var e=b.elements;return"string"==typeof e?e.split(" "):e}function o(e,A){var t=b.elements;"string"!=typeof t&&(t=t.join(" ")),"string"!=typeof e&&(e=e.join(" ")),b.elements=t+" "+e,s(A)}function r(e){var A=v[e[h]];return A||(A={},g++,e[h]=g,v[g]=A),A}function i(e,t,n){if(t||(t=A),c)return t.createElement(e);n||(n=r(t));var o;return o=n.cache[e]?n.cache[e].cloneNode():m.test(e)?(n.cache[e]=n.createElem(e)).cloneNode():n.createElem(e),!o.canHaveChildren||f.test(e)||o.tagUrn?o:n.frag.appendChild(o)}function a(e,t){if(e||(e=A),c)return e.createDocumentFragment();t=t||r(e);for(var o=t.frag.cloneNode(),i=0,a=n(),l=a.length;l>i;i++)o.createElement(a[i]);return o}function l(e,A){A.cache||(A.cache={},A.createElem=e.createElement,A.createFrag=e.createDocumentFragment,A.frag=A.createFrag()),e.createElement=function(t){return b.shivMethods?i(t,e,A):A.createElem(t)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+n().join().replace(/[\w\-:]+/g,function(e){return A.createElem(e),A.frag.createElement(e),'c("'+e+'")'})+");return n}")(b,A.frag)}function s(e){e||(e=A);var n=r(e);return!b.shivCSS||u||n.hasCSS||(n.hasCSS=!!t(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),c||l(e,n),e}var u,c,d="3.7.3",p=e.html5||{},f=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,m=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,h="_html5shiv",g=0,v={};!function(){try{var e=A.createElement("a");e.innerHTML="<xyz></xyz>",u="hidden"in e,c=1==e.childNodes.length||function(){A.createElement("a");var e=A.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(t){u=!0,c=!0}}();var b={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:d,shivCSS:p.shivCSS!==!1,supportsUnknownElements:c,shivMethods:p.shivMethods!==!1,type:"default",shivDocument:s,createElement:i,createDocumentFragment:a,addElements:o};e.html5=b,s(A),"object"==typeof module&&module.exports&&(module.exports=b)}("undefined"!=typeof e?e:this,A);var R="Moz O ms Webkit",B=w._config.usePrefixes?R.toLowerCase().split(" "):[];w._domPrefixes=B;var C;!function(){var e={}.hasOwnProperty;C=n(e,"undefined")||n(e.call,"undefined")?function(e,A){return A in e&&n(e.constructor.prototype[A],"undefined")}:function(A,t){return e.call(A,t)}}(),w._l={},w.on=function(e,A){this._l[e]||(this._l[e]=[]),this._l[e].push(A),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},w._trigger=function(e,A){if(this._l[e]){var t=this._l[e];setTimeout(function(){var e,n;for(e=0;e<t.length;e++)(n=t[e])(A)},0),delete this._l[e]}},Modernizr._q.push(function(){w.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,A,t){function n(A){var n=A&&"load"===A.type?1==o.width:!1,r="webp"===e;i(e,r?new Boolean(n):n),t&&t(A)}var o=new Image;o.onerror=n,o.onload=n,o.src=A}var A=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],t=A.shift();e(t.name,t.uri,function(t){if(t&&"load"===t.type)for(var n=0;n<A.length;n++)e(A[n].name,A[n].uri)})});var S=w._config.usePrefixes?R.split(" "):[];w._cssomPrefixes=S;var k=function(A){var n,o=E.length,r=e.CSSRule;if("undefined"==typeof r)return t;if(!A)return!1;if(A=A.replace(/^@/,""),n=A.replace(/-/g,"_").toUpperCase()+"_RULE",n in r)return"@"+A;for(var i=0;o>i;i++){var a=E[i],l=a.toUpperCase()+"_"+n;if(l in r)return"@-"+a.toLowerCase()+"-"+A}return!1};w.atRule=k;var F=function(){function e(e,A){var o;return e?(A&&"string"!=typeof A||(A=a(A||"div")),e="on"+e,o=e in A,!o&&n&&(A.setAttribute||(A=a("div")),A.setAttribute(e,""),o="function"==typeof A[e],A[e]!==t&&(A[e]=t),A.removeAttribute(e)),o):!1}var n=!("onblur"in A.documentElement);return e}();w.hasEvent=F;var G=function(e,A){var t=!1,n=a("div"),o=n.style;if(e in o){var r=B.length;for(o[e]=A,t=o[e];r--&&!t;)o[e]="-"+B[r]+"-"+A,t=o[e]}return""===t&&(t=!1),t};w.prefixedCSSValue=G,Modernizr.addTest("video",function(){var e=a("video"),A=!1;try{(A=!!e.canPlayType)&&(A=new Boolean(A),A.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),A.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),A.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),A.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),A.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(t){}return A}),Modernizr.addTest("webgl",function(){var A=a("canvas"),t="probablySupportsContext"in A?"probablySupportsContext":"supportsContext";return t in A?A[t]("webgl")||A[t]("experimental-webgl"):"WebGLRenderingContext"in e}),Modernizr.addTest("cssremunit",function(){var e=a("a").style;try{e.fontSize="3rem"}catch(A){}return/rem/.test(e.fontSize)}),Modernizr.addTest("inlinesvg",function(){var e=a("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)}),Modernizr.addAsyncTest(function(){function e(a){o++,clearTimeout(A);var l=a&&"playing"===a.type||0!==r.currentTime;return!l&&n>o?void(A=setTimeout(e,t)):(r.removeEventListener("playing",e,!1),i("videoautoplay",l),void r.parentNode.removeChild(r))}var A,t=200,n=5,o=0,r=a("video"),l=r.style;if(!(Modernizr.video&&"autoplay"in r))return void i("videoautoplay",!1);l.position="absolute",l.height=0,l.width=0;try{if(Modernizr.video.ogg)r.src="data:video/ogg;base64,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";else{if(!Modernizr.video.h264)return void i("videoautoplay",!1);r.src="data:video/mp4;base64,AAAAIGZ0eXBpc29tAAACAGlzb21pc28yYXZjMW1wNDEAAAAIZnJlZQAAAs1tZGF0AAACrgYF//+q3EXpvebZSLeWLNgg2SPu73gyNjQgLSBjb3JlIDE0OCByMjYwMSBhMGNkN2QzIC0gSC4yNjQvTVBFRy00IEFWQyBjb2RlYyAtIENvcHlsZWZ0IDIwMDMtMjAxNSAtIGh0dHA6Ly93d3cudmlkZW9sYW4ub3JnL3gyNjQuaHRtbCAtIG9wdGlvbnM6IGNhYmFjPTEgcmVmPTMgZGVibG9jaz0xOjA6MCBhbmFseXNlPTB4MzoweDExMyBtZT1oZXggc3VibWU9NyBwc3k9MSBwc3lfcmQ9MS4wMDowLjAwIG1peGVkX3JlZj0xIG1lX3JhbmdlPTE2IGNocm9tYV9tZT0xIHRyZWxsaXM9MSA4eDhkY3Q9MSBjcW09MCBkZWFkem9uZT0yMSwxMSBmYXN0X3Bza2lwPTEgY2hyb21hX3FwX29mZnNldD0tMiB0aHJlYWRzPTEgbG9va2FoZWFkX3RocmVhZHM9MSBzbGljZWRfdGhyZWFkcz0wIG5yPTAgZGVjaW1hdGU9MSBpbnRlcmxhY2VkPTAgYmx1cmF5X2NvbXBhdD0wIGNvbnN0cmFpbmVkX2ludHJhPTAgYmZyYW1lcz0zIGJfcHlyYW1pZD0yIGJfYWRhcHQ9MSBiX2JpYXM9MCBkaXJlY3Q9MSB3ZWlnaHRiPTEgb3Blbl9nb3A9MCB3ZWlnaHRwPTIga2V5aW50PTI1MCBrZXlpbnRfbWluPTEwIHNjZW5lY3V0PTQwIGludHJhX3JlZnJlc2g9MCByY19sb29rYWhlYWQ9NDAgcmM9Y3JmIG1idHJlZT0xIGNyZj0yMy4wIHFjb21wPTAuNjAgcXBtaW49MCBxcG1heD02OSBxcHN0ZXA9NCBpcF9yYXRpbz0xLjQwIGFxPTE6MS4wMACAAAAAD2WIhAA3//728P4FNjuZQQAAAu5tb292AAAAbG12aGQAAAAAAAAAAAAAAAAAAAPoAAAAZAABAAABAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAACGHRyYWsAAABcdGtoZAAAAAMAAAAAAAAAAAAAAAEAAAAAAAAAZAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAEAAAAAAAgAAAAIAAAAAACRlZHRzAAAAHGVsc3QAAAAAAAAAAQAAAGQAAAAAAAEAAAAAAZBtZGlhAAAAIG1kaGQAAAAAAAAAAAAAAAAAACgAAAAEAFXEAAAAAAAtaGRscgAAAAAAAAAAdmlkZQAAAAAAAAAAAAAAAFZpZGVvSGFuZGxlcgAAAAE7bWluZgAAABR2bWhkAAAAAQAAAAAAAAAAAAAAJGRpbmYAAAAcZHJlZgAAAAAAAAABAAAADHVybCAAAAABAAAA+3N0YmwAAACXc3RzZAAAAAAAAAABAAAAh2F2YzEAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAgACAEgAAABIAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAY//8AAAAxYXZjQwFkAAr/4QAYZ2QACqzZX4iIhAAAAwAEAAADAFA8SJZYAQAGaOvjyyLAAAAAGHN0dHMAAAAAAAAAAQAAAAEAAAQAAAAAHHN0c2MAAAAAAAAAAQAAAAEAAAABAAAAAQAAABRzdHN6AAAAAAAAAsUAAAABAAAAFHN0Y28AAAAAAAAAAQAAADAAAABidWR0YQAAAFptZXRhAAAAAAAAACFoZGxyAAAAAAAAAABtZGlyYXBwbAAAAAAAAAAAAAAAAC1pbHN0AAAAJal0b28AAAAdZGF0YQAAAAEAAAAATGF2ZjU2LjQwLjEwMQ=="}}catch(s){return void i("videoautoplay",!1)}r.setAttribute("autoplay",""),r.style.cssText="display:none",T.appendChild(r),setTimeout(function(){r.addEventListener("playing",e,!1),A=setTimeout(e,t)},0)}),Modernizr.addTest("videoloop","loop"in a("video"));var Q="CSS"in e&&"supports"in e.CSS,M="supportsCSS"in e;Modernizr.addTest("supports",Q||M);var U=function(){var A=e.matchMedia||e.msMatchMedia;return A?function(e){var t=A(e);return t&&t.matches||!1}:function(A){var t=!1;return c("@media "+A+" { #modernizr { position: absolute; } }",function(A){t="absolute"==(e.getComputedStyle?e.getComputedStyle(A,null):A.currentStyle).position}),t}}();w.mq=U,Modernizr.addTest("mediaqueries",U("only all"));var P=w.testStyles=c;Modernizr.addTest("touchevents",function(){var t;if("ontouchstart"in e||e.DocumentTouch&&A instanceof DocumentTouch)t=!0;else{var n=["@media (",E.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");P(n,function(e){t=9===e.offsetTop})}return t}),P("#modernizr { height: 50vh; }",function(A){var t=parseInt(e.innerHeight/2,10),n=parseInt((e.getComputedStyle?getComputedStyle(A,null):A.currentStyle).height,10);Modernizr.addTest("cssvhunit",n==t)});var Z={elem:a("modernizr")};Modernizr._q.push(function(){delete Z.elem});var V={style:Z.elem.style};Modernizr._q.unshift(function(){delete V.style});w.testProp=function(e,A,n){return h([e],t,A,n)};w.testAllProps=g;var Y=w.prefixed=function(e,A,t){return 0===e.indexOf("@")?k(e):(-1!=e.indexOf("-")&&(e=l(e)),A?g(e,A,t):g(e,"pfx"))};w.prefixedCSS=function(e){var A=Y(e);return A&&s(A)};Modernizr.addTest("fullscreen",!(!Y("exitFullscreen",A,!1)&&!Y("cancelFullScreen",A,!1))),w.testAllProps=v,Modernizr.addTest("cssanimations",v("animationName","a",!0)),Modernizr.addTest("flexbox",v("flexBasis","1px",!0)),Modernizr.addTest("flexboxlegacy",v("boxDirection","reverse",!0)),Modernizr.addTest("flexwrap",v("flexWrap","wrap",!0)),Modernizr.addAsyncTest(function(){function t(){function o(){try{var e=a("div"),t=a("span"),n=e.style,o=0,r=0,i=!1,l=A.body.firstElementChild||A.body.firstChild;return e.appendChild(t),t.innerHTML="Bacon ipsum dolor sit amet jerky velit in culpa hamburger et. Laborum dolor proident, enim dolore duis commodo et strip steak. Salami anim et, veniam consectetur dolore qui tenderloin jowl velit sirloin. Et ad culpa, fatback cillum jowl ball tip ham hock nulla short ribs pariatur aute. Pig pancetta ham bresaola, ut boudin nostrud commodo flank esse cow tongue culpa. Pork belly bresaola enim pig, ea consectetur nisi. Fugiat officia turkey, ea cow jowl pariatur ullamco proident do laborum velit sausage. Magna biltong sint tri-tip commodo sed bacon, esse proident aliquip. Ullamco ham sint fugiat, velit in enim sed mollit nulla cow ut adipisicing nostrud consectetur. Proident dolore beef ribs, laborum nostrud meatball ea laboris rump cupidatat labore culpa. Shankle minim beef, velit sint cupidatat fugiat tenderloin pig et ball tip. Ut cow fatback salami, bacon ball tip et in shank strip steak bresaola. In ut pork belly sed mollit tri-tip magna culpa veniam, short ribs qui in andouille ham consequat. Dolore bacon t-bone, velit short ribs enim strip steak nulla. Voluptate labore ut, biltong swine irure jerky. Cupidatat excepteur aliquip salami dolore. Ball tip strip steak in pork dolor. Ad in esse biltong. Dolore tenderloin exercitation ad pork loin t-bone, dolore in chicken ball tip qui pig. Ut culpa tongue, sint ribeye dolore ex shank voluptate hamburger. Jowl et tempor, boudin pork chop labore ham hock drumstick consectetur tri-tip elit swine meatball chicken ground round. Proident shankle mollit dolore. Shoulder ut duis t-bone quis reprehenderit. Meatloaf dolore minim strip steak, laboris ea aute bacon beef ribs elit shank in veniam drumstick qui. Ex laboris meatball cow tongue pork belly. Ea ball tip reprehenderit pig, sed fatback boudin dolore flank aliquip laboris eu quis. Beef ribs duis beef, cow corned beef adipisicing commodo nisi deserunt exercitation. Cillum dolor t-bone spare ribs, ham hock est sirloin. Brisket irure meatloaf in, boudin pork belly sirloin ball tip. Sirloin sint irure nisi nostrud aliqua. Nostrud nulla aute, enim officia culpa ham hock. Aliqua reprehenderit dolore sunt nostrud sausage, ea boudin pork loin ut t-bone ham tempor. Tri-tip et pancetta drumstick laborum. Ham hock magna do nostrud in proident. Ex ground round fatback, venison non ribeye in.",A.body.insertBefore(e,l),n.cssText="position:absolute;top:0;left:0;width:5em;text-align:justify;text-justification:newspaper;",o=t.offsetHeight,r=t.offsetWidth,n.cssText="position:absolute;top:0;left:0;width:5em;text-align:justify;text-justification:newspaper;"+E.join("hyphens:auto; "),i=t.offsetHeight!=o||t.offsetWidth!=r,A.body.removeChild(e),e.removeChild(t),i}catch(s){return!1}}function r(e,t){try{var n=a("div"),o=a("span"),r=n.style,i=0,l=!1,s=!1,u=!1,c=A.body.firstElementChild||A.body.firstChild;return r.cssText="position:absolute;top:0;left:0;overflow:visible;width:1.25em;",n.appendChild(o),A.body.insertBefore(n,c),o.innerHTML="mm",i=o.offsetHeight,o.innerHTML="m"+e+"m",s=o.offsetHeight>i,t?(o.innerHTML="m<br />m",i=o.offsetWidth,o.innerHTML="m"+e+"m",u=o.offsetWidth>i):u=!0,s===!0&&u===!0&&(l=!0),A.body.removeChild(n),n.removeChild(o),l}catch(d){return!1}}function l(t){try{var n,o=a("input"),r=a("div"),i="lebowski",l=!1,s=A.body.firstElementChild||A.body.firstChild;r.innerHTML=i+t+i,A.body.insertBefore(r,s),A.body.insertBefore(o,r),o.setSelectionRange?(o.focus(),o.setSelectionRange(0,0)):o.createTextRange&&(n=o.createTextRange(),n.collapse(!0),n.moveEnd("character",0),n.moveStart("character",0),n.select());try{e.find?l=e.find(i+i):(n=e.self.document.body.createTextRange(),l=n.findText(i+i))}catch(u){l=!1}return A.body.removeChild(r),A.body.removeChild(o),l}catch(u){return!1}}return A.body||A.getElementsByTagName("body")[0]?(i("csshyphens",function(){if(!v("hyphens","auto",!0))return!1;try{return o()}catch(e){return!1}}),i("softhyphens",function(){try{return r("&#173;",!0)&&r("&#8203;",!1)}catch(e){return!1}}),void i("softhyphensfind",function(){try{return l("&#173;")&&l("&#8203;")}catch(e){return!1}})):void setTimeout(t,n)}var n=300;setTimeout(t,n)}),Modernizr.addTest("csstransforms3d",function(){var e=!!v("perspective","1px",!0),A=Modernizr._config.usePrefixes;if(e&&(!A||"webkitPerspective"in T.style)){var t,n="#modernizr{width:0;height:0}";Modernizr.supports?t="@supports (perspective: 1px)":(t="@media (transform-3d)",A&&(t+=",(-webkit-transform-3d)")),t+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}",P(n+t,function(A){e=7===A.offsetWidth&&18===A.offsetHeight})}return e}),o(),r(b),delete w.addTest,delete w.addAsyncTest;for(var I=0;I<Modernizr._q.length;I++)Modernizr._q[I]();e.Modernizr=Modernizr}(window,document);
    </script>
</head>

<body class="observation" data-home data-video-source="media/seti_bg_cover">

<header class="header" id="js-header" >
    <a href="/seti/" class="header__logo abs" id="js-logo">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 78.6 37" xml:space="preserve">
		<path d="M6.5,31l-1.9,0.4c-0.1-0.7-0.7-1.1-1.3-1.1s-1,0.3-1,0.8c0,0.3,0.1,0.5,0.6,0.6l1.6,0.4
			c1.3,0.3,2.1,1,2.1,2.2c0,1.6-1.5,2.5-3.2,2.5S0.2,36,0,34.5l2-0.4c0.2,0.8,0.8,1.1,1.5,1.1s1.1-0.3,1.1-0.8
			c0-0.3-0.2-0.6-0.7-0.7l-1.6-0.2c-1.1-0.3-2.1-0.8-2.1-2.2c0-1.5,1.2-2.4,3.1-2.4C5,28.8,6.2,29.6,6.5,31z"/>
            <path d="M14.6,36.7h-6V29h6v1.6h-4.1v1.5h3.7v1.5h-3.7v1.5h4.1V36.7z"/>
            <path d="M20.7,30.6v6.1h-1.9v-6.1h-2.5v-1.7h6.9v1.7H20.7z"/>
            <path d="M25,36.7V29h1.9v7.7H25z"/>
            <path d="M37.9,32.8c0,2.2-1.8,4-4,4s-4-1.8-4-4s1.8-4,4-4C36.2,28.8,37.9,30.6,37.9,32.8z M37,32.8
			c0-1.8-1.3-3.2-3.1-3.2c-1.7,0-3.1,1.4-3.1,3.2s1.3,3.1,3.1,3.1C35.7,36,37,34.6,37,32.8z"/>
            <path d="M46,33.9c0,1.8-1.3,3-2.8,3c-0.9,0-1.8-0.4-2.3-1v0.9H40v-8.3h0.9V32c0.5-0.7,1.3-1,2.3-1
			C44.7,30.9,46,32.1,46,33.9z M45.2,33.9c0-1.4-0.9-2.2-2.1-2.2c-1.1,0-2.1,0.9-2.1,2.2s1,2.2,2.1,2.2
			C44.2,36.1,45.2,35.2,45.2,33.9z"/>
            <path d="M48.4,35c0.1,0.8,0.8,1.2,1.7,1.2c0.8,0,1.4-0.4,1.4-1c0-0.5-0.4-0.7-0.9-0.8l-1.3-0.3
			c-0.9-0.2-1.5-0.7-1.5-1.5c0-1,0.9-1.7,2.2-1.7s2.1,0.7,2.3,1.6l-0.8,0.2c-0.1-0.6-0.7-1-1.5-1s-1.3,0.4-1.3,0.9
			c0,0.4,0.3,0.7,0.9,0.8l1.4,0.3c0.8,0.2,1.5,0.6,1.5,1.5c0,1.1-0.9,1.8-2.3,1.8c-1.3,0-2.3-0.6-2.5-1.7L48.4,35z"/>
            <path d="M59.5,34h-4.9c0.1,1.3,1,2,2,2c0.8,0,1.5-0.3,1.9-1.2l0.8,0.2c-0.5,1.2-1.4,1.8-2.7,1.8c-1.5,0-2.9-1.2-2.9-3
			s1.4-3,2.9-3s2.7,1.1,2.8,2.8V34H59.5z M54.7,33.4h4c-0.2-1.1-1-1.7-1.9-1.7C55.8,31.6,54.8,32.2,54.7,33.4z"/>
            <path d="M65.1,31L65,31.8c-0.1,0-0.2,0-0.3,0c-1.5,0-2.3,1.1-2.3,2.7v2.2h-0.9V31h0.9v1.4c0.5-0.8,1.2-1.5,2.3-1.5
			C64.8,30.9,64.9,30.9,65.1,31z"/>
            <path d="M69.4,36.7h-1L65.9,31h1l2,4.6l2-4.6h1L69.4,36.7z"/>
            <path d="M78.6,34h-4.9c0.1,1.3,1,2,2,2c0.8,0,1.5-0.3,1.9-1.2l0.8,0.2c-0.5,1.2-1.4,1.8-2.7,1.8c-1.5,0-2.9-1.2-2.9-3
			s1.4-3,2.9-3s2.7,1.1,2.8,2.8L78.6,34L78.6,34z M73.8,33.4h4c-0.2-1.1-1-1.7-1.9-1.7C74.9,31.6,73.9,32.2,73.8,33.4z"/>
            <circle cx="52.8" cy="7.4" r="2.7"/>
            <circle cx="23.4" cy="14.5" r="1.7"/>
            <circle cx="21.3" cy="2.3" r="2.3"/>
            <circle cx="37.9" cy="3.4" r="1.4"/>
            <circle cx="46.1" cy="12.8" r="0.7"/>
            <circle cx="16.2" cy="18.3" r="0.7"/>
            <circle cx="61.7" cy="14.2" r="1.4"/>
            <circle cx="32.5" cy="10.1" r="0.9"/>
            <path id="XMLID_2858_" d="M57.6,26.7c-4.5-5.1-11.1-8.3-18.4-8.3s-13.9,3.2-18.4,8.3c4.8-4.2,11.2-6.8,18.4-6.8
		C46.4,19.9,52.8,22.5,57.6,26.7z"/>
</svg>
    </a>
    <nav class="header__menu">
        <a href="/seti/" class="active">Observing now</a>
        <a href="what-is-seti.html" >What is SETI</a>
        <a href="what-is-seti.html" >The Telescopes</a>
        <a href="/seti/" >Progress</a>
    </nav>
    <a href="donate" class="header__donate button abs">Donate Now</a>
    <button type="button" class="header__hamburger abs" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>
</header>
<main class="page" data-page>
    <!-- TODO: Add aladin--show class from server-side if 'clickedHero' cookie's value is '1' -->
    <!-- TODO: Add 'status-live' when observation is in LIVE mode -->
    <!-- TODO: Add the URL of the webservice that recieves the data to 'data-service-url' -->
    <div class="aladin abs abs--full status-live <?= isset($_COOKIE['clickedHero']) ? 'aladin--show' : '' ?>" id="js-aladin" data-service-url="data/sample-observation.json">
        <div class="aladin__canvas abs abs--full" id="js-aladin-container"></div>

        <div class="dish">
            <div class="dish__label abs z-low">
                <span class="bullet blki">Allen Telescope Array</span>
            </div>
        </div>

        <nav class="aladin__controls abs vp-middle z-low">
            <div class="vp-middle__content">
                <button class="control-btn blk" type="button" title="Zoom In" data-zoom-in>
                    <i class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
                            <polygon points="23.4,15.1 16.9,15.1 16.9,8.6 15.1,8.6 15.1,15.1 8.6,15.1 8.6,16.9 15.1,16.9 15.1,23.4 16.9,23.4 16.9,16.9
	23.4,16.9 "/>
</svg>
                    </i>
                    <span class="visuallyhidden">Zoom in</span>
                </button>
                <button class="control-btn blk" type="button" title="Zoom Out" data-zoom-out>
                    <i class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                    <path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
                        S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
                            <rect x="8.6" y="15.1" width="14.7" height="1.7"/>
                    </svg>
                    </i>
                    <span class="visuallyhidden">Zoom Out</span>
                </button>
                <button class="control-btn blk" type="button" title="Toggle Constellations" data-constellations>
                    <i class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
                            <path d="M27,11.7c-1.3,0-2.3,1-2.3,2.3v0.1L20.5,15c-0.3-1-1.2-1.6-2.2-1.6s-1.7,0.5-2.1,1.3L9.3,12c0.1-0.3,0.1-0.4,0.1-0.7
	C9.4,10,8.4,9,7.1,9s-2.3,1-2.3,2.3c0,1,0.7,1.9,1.6,2.2l-0.5,3.3c-1.2,0.2-2,1.1-2,2.2c0,1.3,1,2.3,2.3,2.3c0.8,0,1.4-0.3,1.8-1
	l2.1,1c-0.2,0.3-0.3,0.6-0.3,1c0,1.3,1,2.3,2.3,2.3s2.3-1,2.3-2.3c0-0.5-0.2-1-0.4-1.3l3.3-3.5c0.3,0.1,0.5,0.2,0.9,0.2
	c1.2,0,2.2-1,2.3-2.2l4.2-0.9c0.3,0.8,1.2,1.4,2.1,1.4c1.3,0,2.3-1,2.3-2.3S28.3,11.7,27,11.7z M13.6,20.8c-0.3-0.3-0.9-0.4-1.3-0.4
	c-0.6,0-1.1,0.3-1.6,0.6l-2.2-1.1c0.1-0.2,0.1-0.4,0.1-0.6c0-1.1-0.8-2.1-1.9-2.2l0.5-3.2c0.7,0,1.3-0.3,1.7-0.9l7.2,2.7
	c0,0.1,0,0.1,0,0.2c0,0.7,0.3,1.3,0.7,1.6L13.6,20.8z"/>
</svg>
                    </i>
                    <span class="visuallyhidden">Constellations</span>
                </button>
                <button class="control-btn control-btn--crosshair blk" type="button" title="Go to actual observation" data-set-center>
                    <i class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                    <path d="M32,15.3h-3.6C28.1,9,23,3.9,16.7,3.6V0h-1.4v3.6C9,3.9,3.9,9,3.6,15.3H0v1.4h3.6C3.9,23,9,28.1,15.3,28.4V32h1.4v-3.6
                        C23,28.1,28.1,23,28.4,16.7H32V15.3z M16.7,27v-2.3h-1.4V27C9.8,26.7,5.3,22.2,5,16.7h2.3v-1.4H5C5.3,9.8,9.8,5.3,15.3,5v2.3h1.4V5
                        c5.5,0.4,9.9,4.8,10.3,10.3h-2.3v1.4H27C26.7,22.2,22.2,26.7,16.7,27z"/>
                    </svg>
                    </i>
                    <span class="visuallyhidden">Back to center</span>
                </button>
                <button class="control-btn control-btn--fullscreen blk" type="button" title="Switch to fullscreen view" data-fullscreen>
                    <i class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <polygon points="20.3,7.4 20.3,9.1 22.8,9.1 19.1,12.9 20.3,14.1 24.1,10.4 24.1,12.9 25.8,12.9 25.8,7.4 " class="arrow-top"/>
                            <polygon points="12.5,18.7 8.7,22.4 8.7,19.9 7,19.9 7,25.4 12.5,25.4 12.5,23.7 10,23.7 13.7,19.9 " class="arrow-bottom"/>
                            <path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
                            S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
                    </svg>
                    </i>
                    <span class="visuallyhidden">Go Fullscreen</span>
                </button>
            </div>
        </nav>

        <div class="aladin__bottom-nav abs w-full z-low">
            <div class="data">
                <div class="data__cell data__cell--short">
                    <h1 class="status-header">
                        Live: <strong>Observing Now</strong>
                    </h1>
                    <p class="text-14 status-desc">
                        Telescope array searching extraterrestrial radio signs
                    </p>
                </div>
                <div class="data__cell">
                <span class="figure">
                    <span class="figure__label">
                        Session
                        <i class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
<rect x="14.5" y="12.6" width="3" height="15.3"/>
<circle cx="16" cy="9.7" r="1.9"/>
</svg>
                        </i>
                    </span>
                    <span class="figure__data">#88.823</span>
                </span>
                </div>
                <div class="data__cell">
                <span class="figure">
                    <span class="figure__label">
                        Location on sky
                        <i class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
<rect x="14.5" y="12.6" width="3" height="15.3"/>
<circle cx="16" cy="9.7" r="1.9"/>
</svg>
                        </i>
                    </span>
                    <span class="figure__data">Pisces</span>
                </span><span class="figure">
                    <span class="figure__label">
                        Bandwidth
                        <i class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
<rect x="14.5" y="12.6" width="3" height="15.3"/>
<circle cx="16" cy="9.7" r="1.9"/>
</svg>
                        </i>
                    </span>
                    <span class="figure__data">41.780</span>
                </span><span class="figure">
                    <span class="figure__label">
                        Tuning
                        <i class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
<rect x="14.5" y="12.6" width="3" height="15.3"/>
<circle cx="16" cy="9.7" r="1.9"/>
</svg>
                        </i>
                    </span>
                    <span class="figure__data">1452.53 mhz</span>
                </span><span class="figure">
                    <span class="figure__label">
                        Objective
                        <i class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<path d="M16,32C7.2,32,0,24.8,0,16S7.2,0,16,0s16,7.2,16,16S24.8,32,16,32z M16,1.7C8.1,1.7,1.7,8.1,1.7,16S8.1,30.3,16,30.3
	S30.3,23.9,30.3,16S23.9,1.7,16,1.7z"/>
<rect x="14.5" y="12.6" width="3" height="15.3"/>
<circle cx="16" cy="9.7" r="1.9"/>
</svg>
                        </i>
                    </span>
                    <span class="figure__data">First Look</span>
                </span>
                </div>
            </div>
        </div>

    </div>
    <!-- TODO: Only render this if the user has not clicked the 'Show me how' button, detect cookie from backend -->
    <? if(!isset($_COOKIE['clickedHero'])) : ?>
    <div class="home-hero abs abs--full vp-middle header-offset" id="js-home-hero">
        <article class="home-hero__content vp-middle__content uppercase">
            <h1 class="home-hero__title">In every 90 seconds</h1>

            <p class="home-hero__lead hide-till-anim">
                A new planet is being searched for signals of E.T. by our telescope
            </p>

            <button type="button"
                    id="js-hide-home-hero"
                    class="button button--cta hide-till-anim">
                Show me how
            </button>
        </article>
    </div>
    <? endif; ?>


</main>


<nav class="mobile-nav">
    <div class="mobile-nav__scroller">
        <a href="/seti/" class="active">Observing now</a>
        <a href="what-is-seti.html" >What is SETI</a>
        <a href="what-is-seti.html" >The Telescopes</a>
        <a href="/seti/" >Progress</a>
    </div>
</nav>
<div class="mobile-nav-cover abs--full" id="js-mobile-nav-cover"></div>

<!-- Client side templating with Handlebars -->
<!-- Only needed on the homepage -->
<script id="bg-video" type="text/x-handlebars-template">
    <video class="bg-video" autoplay loop preload="auto" muted data-bg-video>
        <source src="{{videoSource}}.mp4" type="video/mp4">
        <source src="{{videoSource}}.ogv" type="video/ogg">
        <source src="{{videoSource}}.webm" type="video/webm">
    </video>
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="/js/lib/jquery.3.1.0.min.js"><\/script>');
    }
</script>

<!-- Only load these 2 files if we are on the homepage -->
<script src="js/plugin.home.min.js"></script>
<script src="js/app.home.min.js"></script>


<script src="js/plugin.min.js"></script>
<script src="js/app.min.js"></script>
<script>
    SETI.Main.getInstance();


    SETI.Home.getInstance();


</script>
</body>
</html>