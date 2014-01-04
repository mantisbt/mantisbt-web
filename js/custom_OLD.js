$(document).ready(function(){
    $('.dropdown-toggle').dropdown()
    $('.carousel').carousel()                
});
            
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide"
    });
    $('.tweets-slide').flexslider({
        animation: "slide",
        keyboard: false,
        controlNav: false, 
        directionNav: true,
        prevText: "Previous",
        nextText: "Next",
        direction: "vertical",
        pauseOnHover: false,
        animationSpeed: 400,
        slideshowSpeed: 3000,
        controlsContainer: "#nav_t"
    });
});            
$(function(){
    var container = $('#home_responsive, #clients, #portfolio, #gallery-main, #gallery');
    container.isotope({
        itemSelector: '.hp-wrapper',
        layoutMode: 'masonry'
    });
});
$(document).ready(function(){
    $(".dropdown").hover(
        function () {
            $(this).addClass("open");
        },
        function () {
            $(this).removeClass("open");
        }
        );
});
            
$(document).ready(function(){
    $("<select />").appendTo(".buttons-container");
    $(".buttons-container select").addClass('nav-select');
	
    $(".nav-collapse a").each(function() {
        var el = $(this);
        if (el.parent().hasClass("active")){
            $("<option />", {
                "selected": "selected",
                "value"   : el.attr("href"),
                "text"    : el.text()
            }).appendTo(".buttons-container select");
        } else {
            $("<option />", {
                "value"   : el.attr("href"),
                "text"    : el.text()
            }).appendTo(".buttons-container select");
        }
    });
	
    $(".buttons-container select").change(function() {
        window.location = $(this).find("option:selected").val();
    });
});

$(document).ready(function(){
    $('.accordion').collapse();
    $('.accordion').on('shown', function () {
        var $aGroup = $('.accordion-group');
        $aGroup.find('.accordion-body').not(".in").prev('.accordion-heading').children("a").addClass('collapsed');
			
    })
});
$(document).ready(function(){
    var $toggleBoxes = $(".toggle-box");
    $toggleBoxes.find('.tbox-heading').children(".collapsed").parent().next(".tbox-inner").css('display', 'none');
});
$(".toggle-box .tbox-heading a").click(function () {
    if ($(this).hasClass("collapsed")) {
        $(this).parent().next(".tbox-inner").slideDown('fast');
        $(this).removeClass("collapsed");
    } else {
        $(this).parent().next(".tbox-inner").slideUp('fast');
        $(this).addClass("collapsed");
    }
    return false;
});
$(document).ready(function() {
    $("a.thumbnail").fancybox({
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600, 
        'speedOut'		:	200, 
        'overlayShow'	:	false
    });
});

$('#filters a').click(function(){
    var $this = $(this);
    // don't proceed if already selected
    if ( $this.hasClass('selected') ) {
        return false;
    }
    var $optionSet = $this.parents('.option-set');
    $optionSet.find('.selected').removeClass('selected');
        
    var selector = $this.attr('data-filter');
    $('#portfolio, #gallery').isotope({
        filter: selector
    });
		
    $this.parent.addClass('selected');
    return false;
});
$(function(){
      
    var $container = $('#container');

    $container.isotope({
        itemSelector : '.element'
    });
      
      
    var $optionSets = $('#options .option-set'),
    $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = $optionSet.attr('data-option-key'),
        value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
            // changes in layout modes need extra logic
            changeLayoutMode( $this, options )
        } else {
            // otherwise, apply new options
            $container.isotope( options );
        }
        
        return false;
    });

      
});

$(document).ready(function(){
    $('.dropdown-toggle').dropdown()
});
$(window).load(function() {
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 80,
        itemMargin: 5,
        asNavFor: '#slider'
    });
   
    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });
});
$(document).ready(function() {
    $(".fancybox").fancybox();
});
// twitter feed
$(document).ready(function(){
	$.ajax({
		url: 'http://api.twitter.com/1/statuses/user_timeline.json/',
		type: 'GET',
		dataType: 'jsonp',
		data: {
			screen_name: 'BarackObama',
			include_rts: true,
			count: 5,
			include_entities: true
		},
		success: function(data, textStatus, xhr) {
			for (var i = 0; i < data.length; i++) {
				var html = '<li class="latest-tweet">' + data[i].text + '</li>';
				$(".tweets-slide ul").append($(html));
			}					
		}
	});
});