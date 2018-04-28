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
  
    // Scroll to jobs
  
    $('.btn-intro').click(function () {
        
        $('html, body').animate({
            
            scrollTop: $('.jobs').offset().top - 50
            
        }, 1000);
        
    });
  
    // Scroll to add comment
  
    $('.btn-demande').click(function () {
        
        $('html, body').animate({
            
            scrollTop: $('.AddComment').offset().top - 50
            
        }, 1000);
        
    });

});
    
    
    

