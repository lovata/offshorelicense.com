$(document).ready(function() {
    var easing = {
        // no easing, no acceleration
        linear: function (t) { return t },
        // accelerating from zero velocity
        easeInQuad: function (t) { return t*t },
        // decelerating to zero velocity
        easeOutQuad: function (t) { return t*(2-t) },
        // acceleration until halfway, then deceleration
        easeInOutQuad: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t },
        // accelerating from zero velocity
        easeInCubic: function (t) { return t*t*t },
        // decelerating to zero velocity
        easeOutCubic: function (t) { return (--t)*t*t+1 },
        // acceleration until halfway, then deceleration
        easeInOutCubic: function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 },
        // accelerating from zero velocity
        easeInQuart: function (t) { return t*t*t*t },
        // decelerating to zero velocity
        easeOutQuart: function (t) { return 1-(--t)*t*t*t },
        // acceleration until halfway, then deceleration
        easeInOutQuart: function (t) { return t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t },
        // accelerating from zero velocity
        easeInQuint: function (t) { return t*t*t*t*t },
        // decelerating to zero velocity
        easeOutQuint: function (t) { return 1+(--t)*t*t*t*t },
        // acceleration until halfway, then deceleration
        easeInOutQuint: function (t) { return t<.5 ? 16*t*t*t*t*t : 1+16*(--t)*t*t*t*t },
        // exponential decelerating
        exp: function (t) { return (1-Math.exp(-t*7)) },
        gompertz : function(t){
            return Math.exp(-30 * Math.exp(-13 * t));
        }
    };

//////////////////////////////////

    (function(){
        
        
        if (!$('#counter1').length) return;
        
            defaultEasing = easing.gompertz,
            duration      = 4; // default duration (in seconds)

        var oTop = $('#counter1').offset().top - window.innerHeight;
        var eventFired = false;
        $(window).scroll(function(){

            var pTop = $(window).scrollTop();
            //console.log( pTop + ' - ' + oTop );
            if( pTop > oTop && eventFired === false ){
                eventFired = true;
                start_count();
            }
        });

        function start_count(){
            var $el1 = $("#counter1");
            var $el2 = $("#counter2");
            var $el3 = $("#counter3");

            // don't run on already running proccess
            if( !$el1.data('doin') ){
               // console.log($(".counter1").attr("data-value"));
                $el1.data('doin', new Task($el1[0], $("#counter1").attr("data-value"), defaultEasing));
                $el2.data('doin', new Task($el2[0], $("#counter2").attr("data-value"), defaultEasing));
                $el3.data('doin', new Task($el3[0], $("#counter3").attr("data-value"), defaultEasing));
            }
            else{
                $el1.data('doin').doin.run();
                $el2.data('doin').doin.run();
                $el3.data('doin').doin.run();
            }
        }
        ///////////////////////////////////////////////// $(".time").val()///
        // constructor to run a specific job using Do-in
        function Task(el, toValue, easingFunc){
            this.el = el;
            // get variables
            this.initialValue = el.innerHTML|0;
            this.toValue = el.getAttribute('data-to') || toValue;
            this.delta = this.toValue - this.initialValue;
            this.easing = easing[el.getAttribute('data-easing')] || easingFunc;

            // Do-in settings object
            var settings = {
                step : this.step.bind(this),
                duration : duration,
                done : this.done.bind(this),
                // fps : 16
            }
            // create an instance of Do-in
            this.doin = new Doin(settings);
            this.doin.run();
        }

        // a step of the thing we want to do
        Task.prototype.step = function(t, elapsed){
            // easing
            t = this.easing(t);

            // calculate new value
            var value = this.delta * t + this.initialValue;

            // limit value
            if( t > 0.999 )
                value = this.toValue;

            value = (value|0).toLocaleString();
            // print value
            this.el.innerHTML = value;
        }

        // on DONE
        Task.prototype.done = function(){
            //console.log(this.el, 'done counting!');
            //$(this.el).removeData('doin');
        }

    })();
});
