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

});

