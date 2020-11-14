/**
 * Isotope: An exquisite jQuery plugin for magical layouts
 * options: http://isotope.metafizzy.co/docs/options.html
 */
var directory;
jQuery.noConflict();
jQuery(document).ready(function($) {

    /**
     * html generation for the the select menu
     * - menu list is converted to the form element <select>
     * - menu links are converted to the form elements <option>,
     *  Text within <i> tags is removed from the select menu.
     *
     * Select menu will be inserted in block with selector .buttons-container that should be present in the html code of the page
     */
    var select_menu = '<select class="nav-select">';
    $(".navbar-collapse a").each(function() {
        var el = $(this);
        select_menu += '<option value="'+el.attr("href")+'"';
        if (el.parent().hasClass("active")) select_menu += ' selected';
        select_menu += '>'+el.html().replace(/<i>.*<\/i>/gi,'')+'</option>';
    });
    select_menu += '</select>';
    $(select_menu).appendTo(".buttons-container");
    // to work select element as menu, go to the next page on change
    $(".buttons-container select").change(function() {
        window.location = $(this).find("option:selected").val();
    });

    /**
     * get twitter feed and output to the "list" tag in <div class="tweets-slide"><ul class="slides"></ul></div>
     * each message is scrolled by flexslider, which is initialized after messages loaded
     * messages, navigation arrows and twitter logo are centered vertically
     */
    $.ajax({ // get content from twiter
        url: '/get-tweets.php',
        type: 'GET',
        dataType: 'json',
        data: {
            include_rts: true,
            count: $('.recent-tweets').data('count'),
            include_entities: true
        }
    })
    .done(function(data, textStatus, xhr) {
        // Remove placeholder text
        $(".tweets-slide span").remove();

        // html preparing and output to the page
        var html = '';
        for (var i = 0; i < data.length; i++) {
            html = html +'<li class="latest-tweet"><p>' + data[i].text + '</p></li>';
        }
        $(".tweets-slide ul").append($(html));
        var height_li = 30;
        $(".tweets-slide ul li").each(function() {
            $(this).css('height', '');
            if ($(this).outerHeight(true) > height_li) height_li = $(this).outerHeight(true);
        });
        $(".tweets-slide ul li").each(function() {
            var margin = Math.floor((height_li-$(this).outerHeight(true))/2);
            $(this).css('height', height_li);
            $(this).children("p").css('margin-top', margin);
        });
        // flexslider initialization
        $('.tweets-slide').flexslider({
            animation: "slide",			//String: Select your animation type, "fade" or "slide"
            keyboard: false,			//Boolean: Allow slider navigating via keyboard left/right keys
            controlNav: false, 			//Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
            direction: "vertical",		//String: Select the sliding direction, "horizontal" or "vertical"
            pauseOnHover: true,			//Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
            animationSpeed: 500,		//Integer: Set the speed of animations, in milliseconds
            slideshowSpeed: 5000,		//Integer: Set the speed of the slideshow cycling, in milliseconds
            controlsContainer: "#nav_t",	//{UPDATED} jQuery Object/Selector: Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be $(".flexslider-container"). Property is ignored if given element is not found.
            useCSS:false
        });
        // twitter logo and navigation block position correction on page loaded and twitter messages loaded
        $("#nav_t").css('margin-top', Math.floor(((height_li - $("#nav_t").outerHeight(true))/2)));
        $(".follow_img").css('margin-top', Math.floor(((height_li - $(".follow_img").outerHeight(true))/2)));
    });
    // twitter logo and navigation block position correction on window resize
    $(window).on('resize', function() {
        if ($(".tweets-slide ul li").length>0) {
            var height_li = 30;
            $(".tweets-slide ul li").each(function() {
                $(this).css('height', '');
                if ($(this).outerHeight(true) > height_li) height_li = $(this).outerHeight(true);
            });
            $(".tweets-slide ul li").each(function() {
                var margin = Math.floor((height_li-$(this).outerHeight(true))/2);
                $(this).css('height', height_li);
                $(this).children("p").css('margin-top', margin);
            });
            $("#nav_t").css('margin-top', Math.floor(((height_li - $("#nav_t").outerHeight(true))/2)+2));
            $(".follow_img").css('margin-top', Math.floor(((height_li - $(".follow_img").outerHeight(true))/2)+1));
        }

    });
});

