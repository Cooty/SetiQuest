/**
 * Responsible for the animated star background
 *
 * @namespace SETI
 * @name SETI.Space
 *
 */
SETI.Space = (/** @lends SETI.Space */function() {

    var canvas,
        context,
        screenH,
        screenW,
        stars = [],
        fps = 40,
        $window,
        numStars = 400,
        self = this;

    self.colors = [
        '255, 255, 255',
        '255, 255, 255',
        '255, 255, 255',
        '140, 240, 255',
        '143, 159, 182',
        '170, 166, 164',
        '249, 218, 181',
        '126, 96, 104'
    ];
    self.minSize = 2;
    self.maxSize = 5;
    self.incrementMultiplier = .04;

    function init() {
        $window = SETI.Performance.getCachedDOM().$window;

        // Calculate the screen size
        screenH = $window.height();
        screenW = $window.width();


        // Get the canvas
        canvas = $('#js-space');

        // Fill out the canvas
        canvas.attr('height', screenH);
        canvas.attr('width', screenW);
        context = canvas[0].getContext('2d');

        // Create all the stars
        for(var i = 0; i < numStars; i++) {
            var x = Math.round(Math.random() * screenW);
            var y = Math.round(Math.random() * screenH);
            var length = 1 + Math.random() * 2;
            var opacity = Math.random();

            // Create a new star and draw
            var star = new Star(x, y, length, opacity);

            // Add the the stars array
            stars.push(star);
        }

        setInterval(animate, 1000 / fps);
    }

    /**
     * Returns a random integer between min (inclusive) and max (inclusive)
     * Using Math.round() will give you a non-uniform distribution!
     */
    this.getRandomInt = function(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    };

    /**
     * Animate the canvas
     */
    function animate() {
        context.clearRect(0, 0, screenW, screenH);
        $.each(stars, function() {
            this.draw(context);
        })
    }

    /**
     * Star
     * 
     * @param int x
     * @param int y
     * @param int length
     * @param opacity
     */
    function Star(x, y, opacity) {
        this.x = parseInt(x);
        this.y = parseInt(y);
        this.radius = self.getRandomInt(self.minSize, self.maxSize);
        this.color = self.colors[self.getRandomInt(0, self.colors.length - 1)];
        this.opacity = opacity;
        this.factor = 1;
        this.increment = Math.random() * self.incrementMultiplier;
    }

    /**
     * Draw a star
     * 
     * This function draws a start.
     * You need to give the contaxt as a parameter 
     * 
     * @param context
     */
    Star.prototype.draw = function() {
        var g;

        context.save();
        
        // move into the middle of the canvas, just to make room
        context.translate(this.x, this.y);
        
        // Change the opacity
        if(this.opacity > 1) {
            this.factor = -1;
        }
        else if(this.opacity <= 0) {
            this.factor = 1;
            
            this.x = Math.round(Math.random() * screenW);
            this.y = Math.round(Math.random() * screenH);
        }
            
        this.opacity += this.increment * this.factor;
        
        context.beginPath();
        context.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);

        /*context.fillStyle = "rgba(255, 255, 200, " + this.opacity + ")";
        context.shadowBlur = 10;
        context.shadowColor = '#ffff33';*/
        g = context.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.radius);
        g.addColorStop(0.0, 'rgba(' + this.color + ',' + 1 + ')');
        g.addColorStop(0.5, 'rgba(' + this.color + ',' + this.opacity + ')');
        g.addColorStop(1.0, 'rgba(' + this.color + ', 0)');
        context.fillStyle = g;
        context.shadowBlur = 10;
        context.shadowColor = this.color;
        context.fill();
        
        context.restore();
    };

	return {
		init: init
	};

}());        