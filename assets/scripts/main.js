/* ========================================================================
* DOM-based Routing
* Based on http://goo.gl/EUTi53 by Paul Irish
*
* Only fires on body classes that match. If a body class contains a dash,
* replace the dash with an underscore when adding it to the object below.
*
* .noConflict()
* The routing is enclosed within an anonymous function so that you can
* always reference jQuery with $, even when in .noConflict() mode.
* ======================================================================== */

function isot($){
        var $container = $('.isotope').imagesLoaded(function() {
            $container.isotope({
                itemSelector: '.isotope-item'
            });
        });

        // store filter for each group
        var filters = {};

        $('#filters').on( 'click', '.button', function() {
            var $this = $(this);
            // get group key
            var $buttonGroup = $this.parents('.button-group');
            var filterGroup = $buttonGroup.attr('data-filter-group');
            // set filter for group
            filters[ filterGroup ] = $this.attr('data-filter');
            // combine filters
            var filterValue = '';
            for ( var prop in filters ) {
                filterValue += filters[ prop ];
            }
            // set filter for Isotope
            $container.isotope({ filter: filterValue });
        });

        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.active').removeClass('active');
                $( this ).addClass('active');
            });
        });
}

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function() {
                $('.languages.dropdown').dropdown({
                    transition: 'drop'
                });
                $('.cards .image').dimmer({
                    on: 'hover'
                });
                $('#toolbox-filter').on('click', function(){
                    $('#filters.bottom.sidebar').sidebar('toggle');
                });
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {
                $('.multitabs.pointing.secondary.menu .item').tab();
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        'toolbox':{
            init: function() {
                isot($);
            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
