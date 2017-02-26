const express = require('express'),
      expressEjsLayouts = require('express-ejs-layouts'),
      app = express(),
      routes = require('./routes/index'),
      cookieParser = require('cookie-parser'),
      logger = function(req, res, next) {
        console.log("GOT REQUEST !");
        console.log("Cookies :  ", req.cookies);
        console.log(req.cookies.clickedHero);
        next(); // Passing the request to the next handler in the stack.
      };

// Set EJS as template lang
app.set('view engine', 'ejs');
app.set('layout', 'layout');
app.use(expressEjsLayouts);
app.use(cookieParser());

// Don't reveal Express to the world
app.disable('x-powered-by');

const server = app.listen(3000, function() {
    console.log('SETI is live on http://localhost:3000');
});

app.use('/', routes);
// app.use(logger);
app.use("/css", express.static(__dirname + '/css'));
app.use("/i", express.static(__dirname + '/i'));
app.use("/js", express.static(__dirname + '/js'));
app.use("/fonts", express.static(__dirname + '/fonts'));
app.use("/media", express.static(__dirname + '/media'));
app.use("/data", express.static(__dirname + '/data'));