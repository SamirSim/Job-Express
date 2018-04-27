/*global $, jQuery, alert*/

$(function () {
    
    'use strict';
    
    console.log(window);
    
    var $window         = $(window),
        $header         = $('header'),
        $navbar         = $('.navbar');
    
    // Adjust Header Height
    
    $header.height($window.height());
    
    $window.resize(function () {
        
        $header.height($window.height());
        
    });

});
    
    
    

