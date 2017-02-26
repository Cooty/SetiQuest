const express = require('express'),
      router = express.Router(),
      titleSuffix = ' | S.E.T.I.';

router.get('/', function(req, res) {
    res.render('index', {title: 'Home' + titleSuffix, isHome: true, pageName: 'home', spaceBg: false, clickedHero: req.cookies.clickedHero});
});

router.get('/donate', function(req, res) {
    res.render('donate', {title: 'Donate now' + titleSuffix, isHome: false, pageName: 'donate', spaceBg: false});
});

router.get('/what-is-seti', function(req, res) {
    res.render('what-is-seti', {title: 'What is S.E.T.I.?' + titleSuffix, isHome: false, pageName: 'whatisseti', spaceBg: true});
});

router.get('/the-telescope', function(req, res) {
    res.render('the-telescope', {title: 'The Telescope' + titleSuffix, isHome: false, pageName: 'thetelescope', spaceBg: false});
});

module.exports = router;