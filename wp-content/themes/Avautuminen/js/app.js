jQuery(function(){
    var menuLink = jQuery('.menu-item').first();
    
    menuLink.click(function(){
        jQuery('.menu-item:not(:first)').slideToggle(400);
    });
});

jQuery(function(){
    var searchLink = jQuery('#searchsubmitmobile');
    
    searchLink.click(function(){
        jQuery('#search-block').slideToggle(600);
    });
});