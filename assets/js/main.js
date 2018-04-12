jQuery(document).ready( function($) {

    //On Load Animations
    $(window).load(function () {
        $('.load-overlay').fadeOut('fast');

        setTimeout(function(){
            $('.header').removeClass('load-fade');
        }, 200);

        //Hero Content fade in and move up
        setTimeout(function(){
            $('.hero-content').removeClass('load-fade');
            $('.hero-content').removeClass('move-down');
        }, 400);
    });

    //Open Contact Modal
    $('.open-contact-modal').on('click', function(e){
        e.preventDefault();
        $('.contact-modal-section').css('display', 'flex');
        setTimeout(function(){
            $('.contact-modal').removeClass('load-fade');
            $('.contact-modal').removeClass('move-down');
        }, 50);

    });


    //Close Contact Modal
    $(document).mouseup(function(e)
    {
        var container = $(".contact-modal");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            $('.contact-modal').addClass('load-fade');
            $('.contact-modal').addClass('move-down');
            $('.contact-modal-section').fadeOut();
        }
    });

    $('.close-contact-modal').on('click', function(){
        $('.contact-modal').addClass('load-fade');
        $('.contact-modal').addClass('move-down');
        $('.contact-modal-section').fadeOut();
    });

    //Change contact modal content
    $('.contact-step-1').on('click', function() {
        $('.contact-modal-step').removeClass('active-step');
        $('.contact-step-1').addClass('active-step');
        $('.contact-modal-business, .contact-modal-needs').fadeOut('fast');
        setTimeout(function(){
            $('.contact-modal-you').fadeIn();
        }, 300);
    });
    $('.contact-step-2').on('click', function() {
        $('.contact-modal-step').removeClass('active-step');
        $('.contact-step-2').addClass('active-step');
        $('.contact-modal-you, .contact-modal-needs').fadeOut('fast');
        setTimeout(function(){
            $('.contact-modal-business').fadeIn();
        }, 300);
    });
    $('.contact-step-3').on('click', function() {
        $('.contact-modal-step').removeClass('active-step');
        $('.contact-step-3').addClass('active-step');
        $('.contact-modal-you, .contact-modal-business').fadeOut('fast');
        setTimeout(function(){
            $('.contact-modal-needs').fadeIn();
        }, 300);
    });

    //Slide Effect when scrolling down
    (function($) {

        $.fn.visible = function(partial) {

            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };

    })(jQuery);

    var win = $(window);

    var allMods = $(".slide-effect");

    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function(event) {

        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("come-in");
            }
        });

    });

});