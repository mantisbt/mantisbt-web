// Slider revolution
// Plugin Options

var tpj=jQuery;
tpj.noConflict();

tpj(document).ready(function() {

	if (tpj.fn.cssOriginal!=undefined)
		tpj.fn.css = tpj.fn.cssOriginal;

	tpj('.banner').revolution({
		delay:9000,
		
		startwidth:940,
                startheight:400,
		thumbWidth:100,
		thumbHeight:50,
		thumbAmount:5,

		onHoverStop:"on",
		hideThumbs:200,
		navigationType:"bullet",
		navigationStyle:"round",
		navigationArrows:"verticalcentered",

		touchenabled:"on",

		navOffsetHorizontal:0,
		navOffsetVertical:10,
		shadow:1,
		fullWidth:"off"
	});
        
        tpj('.banner2').revolution({
		delay:9000,
		
		startwidth:700,
                startheight:298,
		thumbWidth:100,
		thumbHeight:50,
		thumbAmount:5,

		onHoverStop:"on",
		hideThumbs:200,
		navigationType:"bullet",
		navigationStyle:"round",
		navigationArrows:"verticalcentered",

		touchenabled:"on",

		navOffsetHorizontal:0,
		navOffsetVertical:10,
		shadow:1,
		fullWidth:"off"
	});     
});
					
