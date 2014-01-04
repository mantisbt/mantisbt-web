var directory;

jQuery.noConflict();

jQuery(document).ready(function($) {
	
	var colors_count = 8;
	var patterns_count = 16;
	var images_count = 4;
	
	var template = '<div id="mtp-toggle" class="mtp-toggle-close"><i class="moon-droplet"></i></div><div id="mtp-wrapper" style=""><div id="mtp-header">Style Switcher</div><div id="mtp-content"><div class="mtp-content-title">Layout style:</div><select class="mtp-layout-select"><option value="full-width">Full width</option><option value="boxed">Boxed</option><option value="boxed-attached">Boxed (attached)</option></select><div class="mtp-divider"></div><div class="mtp-content-title">Primary color:</div><span class="mtp-primary-color"></span><input type="text" value="#2773ae" class="mtp-color-field"><ul class="mtp-color clearfix"></ul><div class="clear"></div><div class="mtp-divider"></div><div class="mtp-content-title">Patterns:</div><ul class="mtp-background-pattern clearfix"></ul><div class="mtp-divider"></div><div class="mtp-content-title">Image examples:</div><ul class="mtp-background-image clearfix"></ul><div class="mtp-divider"></div><div class="admin_options"><div class="mtp-content-title">Top Nav Bar Style</div><div class="options-link top-nav-bar-style"><a href="#" class="static">Static</a><a href="#" class="fixed">Fixed</a></div><div class="mtp-divider"></div><div class="mtp-content-title">Side Bar Position</div><div class="options-link sidebarOpt side-bar-position"><a href="#" class="left">Left</a><a href="#" class="right">Right</a></div><div class="mtp-divider"></div><div class="mtp-content-title">Side Bar Width</div><div class="options-link sidebarOpt side-bar-width"><a href="#" class="mini">Mini</a><a href="#" class="maxi">Maxi</a></div></div></div></div>';
	
	jQuery('body').append(template);
	if(jQuery('body').hasClass('admin')) {
		directory = '../';
	} else {
		directory = '';
	}
	
	jQuery('head').append('<link type="text/css" rel="stylesheet" href="' + directory + 'js/style-switcher/styler.css"/><script type="text/javascript" src="' + directory + 'js/style-switcher/jquery.cookie.js"></script><script type="text/javascript" src="' + directory + 'js/style-switcher/iris.min.js"></script>');
	
	for(var i = 0; i < colors_count; i++){
		jQuery("#mtp-wrapper .mtp-color").append('<li class="color_' + i + '"></li>')
	}
	for(var i = 0; i < patterns_count; i++){
		jQuery("#mtp-wrapper .mtp-background-pattern").append('<li class="pattern_' + i + '"></li>')
	}
	for(var i = 0; i < images_count; i++){
		jQuery("#mtp-wrapper .mtp-background-image").append('<li class="image_' + i + '"></li>')
	}
	
	colorSwitcherPosition();
	getThemeSettings();
	
	jQuery('.mtp-background-pattern li').click(function(){
		if (jQuery('.mtp-layout-select').val() == 'full-width'){
			alert('Please select "Boxed" layout!')
		} else {
			var selectedPattern = jQuery(this).attr('class'),
			patternUrl = 'js/style-switcher/patterns/' + selectedPattern + '.png';
			jQuery('body').css('background-image', 'url('+ directory + patternUrl +')').removeClass('background-cover').addClass('background-pattern');
			setThemeSettings('pattern', patternUrl);
		}
		
	});	
	
	jQuery('.mtp-background-image li').click(function(){
		if (jQuery('.mtp-layout-select').val() == 'full-width'){
			alert('Please select "Boxed" layout!')
		} else {
			var selectedImg = jQuery(this).attr('class'),
			imgUrl =  'js/style-switcher/images/' + selectedImg + '.jpg';
			jQuery('body').css('background-image', 'url('+ directory + imgUrl +')').removeClass('background-pattern').addClass('background-cover');
			setThemeSettings('bg', imgUrl);
		}
	});	
	jQuery('#mtp-toggle').click(function(){
		jQuery('#mtp-wrapper').toggle();
		jQuery('#mtp-toggle').toggleClass('mtp-toggle-close');
	});
	
	jQuery('#mtp-toggle').click();
	
	jQuery('.mtp-layout-select').change(function(){
		var currentClass = jQuery('#out_container').attr('class');
		jQuery('#out_container').removeClass(currentClass).addClass(jQuery(this).val());
		currentClass = jQuery(this).val();
		setThemeSettings('layout', currentClass);
		jQuery(window).trigger('resize');
	});
	
	jQuery('.mtp-primary-color').click(function(){
		jQuery('.iris-picker').toggle();
	});
		
	jQuery('.mtp-color-field').iris({
		palettes: false,
		border: false,
		width: 155,
		color: '#2773ae',
		mode: 'hsl',
		change: function(event, ui) {
			
			var color = ui.color.toString();
			setThemeSettings('color', color);
			changeColor(color);
			/* Background fix */
			jQuery('.mtp-off .background-block').css( 'background-color', '#f7f7f7');
		}
	});
	
	jQuery(".mtp-color li").click(function(){
		var color = rgb2hex(jQuery(this).css('background-color'));	
		setThemeSettings('color', color);
		changeColor(color);
		jQuery(".mtp-color-field").val(color);
		jQuery('.mtp-color-field').iris('color', color);
	})
	
	jQuery('.top-nav-bar-style a.static').on('click', function(e) {
		e.preventDefault();
		jQuery(this).addClass('active').siblings('a').removeClass('active');
		jQuery('body').removeClass('padTop44');
		jQuery('#top .navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
		setThemeSettings('topNavBarStyle', 'static');
	});
	jQuery('.top-nav-bar-style a.fixed').on('click', function(e) {
		e.preventDefault();
		jQuery(this).addClass('active').siblings('a').removeClass('active');
		jQuery('body').addClass('padTop44');
		jQuery('#top .navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
		setThemeSettings('topNavBarStyle', 'fixed');
	});
	jQuery('.side-bar-position a.left').on('click', function(e) {
		e.preventDefault();
		jQuery(this).addClass('active').siblings('a').removeClass('active');
		jQuery('body').removeClass('side-right');
		jQuery('#sidebarPos').addClass('');
		setThemeSettings('sideBarPosition', 'left');
	});
	jQuery('.side-bar-position a.right').on('click', function(e) {
		e.preventDefault();
		jQuery(this).addClass('active').siblings('a').removeClass('active');
		jQuery('body').addClass('side-right');
		setThemeSettings('sideBarPosition', 'right');
	});
	jQuery('.side-bar-width a.mini').on('click', function(e) {
		e.preventDefault();
		jQuery(this).addClass('active').siblings('a').removeClass('active');
		jQuery('body').addClass('mini-sidebar');
		setThemeSettings('sideBarWidth', 'mini');
	});
	jQuery('.side-bar-width a.maxi').on('click', function(e) {
		e.preventDefault();
		jQuery(this).addClass('active').siblings('a').removeClass('active');
		jQuery('body').removeClass('mini-sidebar');
		setThemeSettings('sideBarWidth', 'maxi');
	});

})
function setThemeSettings(key, value){
	var themeSettings = jQuery.parseJSON(jQuery.cookie('themeSettings')); 
	
	if(!themeSettings) themeSettings = {};
	
	themeSettings[key] = value;
	if(key == 'pattern') themeSettings['bg'] = '';
	if(key == 'bg') themeSettings['pattern'] = '';
	
	var s = JSON.stringify(themeSettings);
	jQuery.cookie('themeSettings', s, { path: '/' });
}

function getThemeSettings(){
	var themeSettings = jQuery.parseJSON(jQuery.cookie('themeSettings')); 
	if(themeSettings) {
		if(themeSettings.bg){
			jQuery('body').css('background-image', 'url('+ directory + themeSettings.bg +')').removeClass('background-pattern').addClass('background-cover');
		} else if(themeSettings.pattern){
			jQuery('body').css('background-image', 'url('+ directory + themeSettings.pattern +')').removeClass('background-cover').addClass('background-pattern');
		}
		if(themeSettings.layout) {
			var currentClass = jQuery('#out_container').attr('class');
			jQuery('#out_container').removeClass(currentClass).addClass(themeSettings.layout);
			jQuery('.mtp-layout-select option[value="' + themeSettings.layout + '"]').attr('selected', true).siblings().removeAttr('selected');
		}
		if(themeSettings.color) changeColor(themeSettings.color); 
		
		if(setThemeSettings.topNavBarStyle == 'fixed') {
			jQuery('.top-nav-bar-style a.fixed').addClass('active').siblings('a').removeClass('active');
			jQuery('body').addClass('padTop44');
			jQuery('#top .navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
		} else {
			jQuery('.top-nav-bar-style a.static').addClass('active').siblings('a').removeClass('active');
			jQuery('body').removeClass('padTop44');
			jQuery('#top .navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
		}
		
		if(setThemeSettings.topNavBarStyle == 'right') {
			jQuery('.side-bar-position a.right').addClass('active').siblings('a').removeClass('active');
			jQuery('body').addClass('side-right');
		} else {
			jQuery('.side-bar-position a.left').addClass('active').siblings('a').removeClass('active');
			jQuery('body').removeClass('side-right');
			jQuery('#sidebarPos').addClass('');
		}
		if(setThemeSettings.topNavBarStyle == 'maxi') {
			jQuery('.side-bar-width a.mini').addClass('active').siblings('a').removeClass('active');
			jQuery('body').addClass('mini-sidebar');
		} else {
			jQuery('.side-bar-width a.maxi').addClass('active').siblings('a').removeClass('active');
			jQuery('body').removeClass('mini-sidebar');
		}
	}
}

function changeColor(color){
	jQuery("#styler_color").remove();
	jQuery('head').append('<style type="text/css" id="styler_color">.portfolio-grid-1 .hp-wrapper:hover {border-bottom:1px solid ' + color + ';} blockquote.greyb, blockquote.blueb{border-left: 10px solid ' + color + ';} header .navbar .nav .active > a, header .navbar .nav li:hover > a, #top > .navbar { border-top:3px solid ' + color + ';} .portfolio-slider #carousel .slides li:hover {border:2px solid ' + color + ';} header .navbar .nav > li:hover a, header .navbar .nav > li:hover a i, header .navbar .nav > li .dropdown-menu li a:hover, header .navbar .nav li.dropdown.open > .dropdown-toggle, header .navbar .nav li.dropdown.active > .dropdown-toggle, header .navbar .nav li.dropdown.open.active > .dropdown-toggle, a, header .navbar .nav .active > a, header .navbar .nav .active > a:hover, header .navbar .nav .active a > i, header .navbar .nav .active a > i:hover, .dif-table .cost, header .navbar .nav .open .dropdown-menu .active a, .text-info, .tbox-heading a:hover, .comments h2, .comments .name, a:hover, .portfolio-grid-1 .hp-wrapper .top-link:after, .dark-hero h1 span, .line_title h2 a, .lined-title-wrapper .all, blockquote.blueb:before, blockquote.greyb smallm, blockquote.greyb:before, blockquote.greyb small  {color: ' + color + ';} .mtp-primary-color, .bannercontainer .slide .big, .buttons-container, .top_line, .recent-tweets, #mtp-toggle, .dif-table .title, .nav-pills > .active > a, .nav-pills > .active > a:hover, .hero-list .image-wrapper .img, .portfolio-switch li a.active, .portfolio-switch li.simple a:hover, .portfolio-switch li.collapsed a:hover, .coming-soon-content, .soft-updates .date-img, .fancy-wrapper .fancy, .portfolio-grid-1 .hp-wrapper:hover .bottom-block-optional:after, .dropdown-menu li > a:hover, .dropdown-menu li > a:focus, .dropdown-submenu:hover > a, ul#menu > li > a:hover, ul#menu > li:hover > a, ul#menu > li.active > a, #mtp-wrapper .options-link a {background-color: ' + color + ';} ul#menu > li > a:hover, ul#menu > li:hover > a, ul#menu > li.active > a {.box-shadow(0 1px 0 0 ' + color + 'inset);} </style>');
}

function rgb2hex(rgb) {
	rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	function hex(x) {
		return ("0" + parseInt(x).toString(16)).slice(-2);
	}
	return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function colorSwitcherPosition(){
	var h = jQuery(window).height();
	if(h < 612) {
		jQuery("#mtp-toggle, #mtp-wrapper").addClass('absolute');
	} else {
		jQuery("#mtp-toggle, #mtp-wrapper").removeClass('absolute');
	}
}


jQuery(window).load(function(){
	jQuery('body').css('visibility', 'visible');	
})