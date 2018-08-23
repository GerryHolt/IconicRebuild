/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){

    // ORPHANIZER
    $(".orphan").each(function() {
        let txt = $(this).html().trim().replace('&nbsp;',' ');
        let wordArray = txt.split(" ");
        if (wordArray.length > 1) {
            wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
            wordArray.pop();
            $(this).html(wordArray.join(" "));
        }
    });

    // PARALLAX
    $.fn.plax = function(x, y){
        this.css({
            'webkitTransform' : 'translate3d('+x+'px, '+y+'px, 0)',
            'MozTransform'    : 'translate3d('+x+'px, '+y+'px, 0)',
            'msTransform'     : 'translateX('+x+'px) translateY('+y+'px)',
            'OTransform'      : 'translate3d('+x+'px, '+y+'px, 0)',
            'transform'       : 'translate3d('+x+'px, '+y+'px, 0)'
        });
    };

    // AUTO HEIGHT SIDEBAR
    // $(window).bind('load', function() {
    //     var heightc = $('.content').height();
    //     var heights = $('.side-bar').height();
    //     if (heightc > heights) {
    //         $('.side-bar').height(heightc);
    //     }
    // });

    // OPEN VIDEO IN MAGNIFIC
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false
    });

    // OPEN STORY IMAGES IN MAGNIFIC
    $('.image-popup-fit-width').magnificPopup({
      type: 'image',
       mainClass: 'mfp-with-zoom', // this class is for CSS animation below
      closeOnContentClick: true,
      image: {
        verticalFit: false
    },
    zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            easing: 'ease-in-out', // CSS transition easing function
          }
    });

    // MOBILE TOGGLE
    $('#m-toggle').on('click',function(){
        $(this).toggleClass('x');
        $('.nav').slideToggle(150);
    });

    $('#m-toggle-story').on('click',function(){
        $(this).toggleClass('x');
        $('.nav-story').slideToggle(150);
    });

    $('#searchform input[type=checkbox]').on('click', function() {
         $('.icon-search').focus();
    });

    $('#searchform-story input[type=checkbox]').on('click', function() {
         $('.icon-search').focus();
    });

    // Sticky SIDEBAR
    $('.side-bar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 30
    });

    // Owl carousel
    var owl2 = $('.story-carousel')
    owl2.owlCarousel({
        items:1,
        margin:10,
        nav:true,
        loop:true,
        autoHeight:true,
        navText: ["<div class='icon-angle-left'></div>", "<div class='icon-angle-right'></div>"]
    });

    $(document).on('keydown', function( event ) { //attach event listener
        if(event.keyCode == 37) {
            owl2.trigger('prev.owl')
        }
        if(event.keyCode == 39) {
            owl2.trigger('next.owl')
        }
    });

    // Owl carousel - home page
    var owl = $('.home-carousel');
    owl.owlCarousel({
        items:1,
        margin:10,
        nav:true,
        loop:true,
        autoHeight:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ["<div class='icon-angle-left'></div>", "<div class='icon-angle-right'></div>"]
    });

    $( ".home-fade" ).mouseenter(function() {
        owl.trigger('play.owl.autoplay', 4000);
    });

    $(document).on('keydown', function( event ) { //attach event listener
        if(event.keyCode == 37) {
            owl.trigger('prev.owl')
        }
        if(event.keyCode == 39) {
            owl.trigger('next.owl')
        }
    });



    // Masonry
    var $container = $(".featured-list-new");
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.featured-item-new',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    });



/*
    $(document).scroll(function(){
        var nm = $("html").scrollTop();
        var nw = $("body").scrollTop();
        var n = (nm > nw ? nm : nw);

        $('#element').plax(0,n);

        // if transform3d isn't available, use top over background-position
        //$('#element').css('top', Math.ceil(n/2) + 'px');

    });
*/



    /* ====== Twitter API Call =============================================
        This script automatically adds <li> before and after template. Don't forget to setup Auth info in /twitter/index.php */
    /*
    $('#tweets-loading').tweet({
        modpath: '/path/to/twitter/', // only needed if twitter folder is not in root
        username: 'jackrabbits',
        count: 1,
	template: '<p>{text}</p><p class="tweetlink">{time}</p>'
    });
    $('.tweet_text a').each(function(){
        $(this).attr('target','_blank');
    });
    */

});
