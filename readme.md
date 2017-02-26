# Introduction

This is a mock-up server side application and frontend build for SETI Quest Project.
It contains all the necessary CSS, JavaScript and HTML for the project, and also a mock up server and 
basic server-side rendering written in [Node.js](https://nodejs.org/en/)

# Prerequisite

To run and develop the application on your local machine, you'll need to have the following apps installed.

- [Node.js v4.5.0](https://nodejs.org/en/)
- npm v2.15.9 (this is Node's packadge manager by default it's bundled with Node.js)
- Git version control system
- [Grunt CLI](http://gruntjs.com/getting-started) (v1.2.0)

# Getting started

Once you have all the requirements. Clone this repository to your local machine to any folder you wish.

After cloning, go to the project' root folder `source`  and run `npm install` command.

This will install all the dependencies for the server application, like [Express](http://expressjs.com/) and also Grunt's modules 
we use to compile the automatically [concatenate](https://github.com/gruntjs/grunt-contrib-concat) and [minify](https://github.com/gruntjs/grunt-contrib-uglify) the JavaScript and to [compile](https://github.com/sass/node-sass) [SCSS](http://sass-lang.com/) to CSS.

Once you have everything installed run, `grunt dev` in the `source` directory.
This command:
- Starts the server application by running `source/server.js` in Node
- Starts a [watcher](https://github.com/gruntjs/grunt-contrib-watch) for all JavaScript files under `source/js/source` it concatenates them from seperate modules to the actual files that are referenced in the HTML
- Starts a watcher for compiling all the files under `source/css/scss` to the actual CSS files referenced in the HTML

For more info check out the `source/Gruntfile.js` and the tasks under `source/tasks`.

If you want to build minified CSS and JS files (the watchers don't minify JS to make complitation faster and make debuging easier),
just run `grunt build`.
This command:
- Concatenates and minifies all the files under `source/js/source` to `dist/js/`
- Compiles minified CSS files from the SCSS files under `source/css/scss` to `dist/css/`

Currently there is no automatic way to build HTML files.
The HTML source that you see when running the application is compiled from server-side [EJS](http://www.embeddedjs.com/) templates at runtime, by Node.
The files are under `source/views`. All pages use `source/views/layout.ejs` as their basic frame, and I use dynamic rendering to add different content to each page.
For instance different JavaScript files referenced under /what-is-seti and under the homepage.