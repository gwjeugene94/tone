$(document).ready(function(){

$('a[href^="#"]').click(function(){
var target = $(this.hash);
if (target.length===0) target = $('a[name="' + this.hash.substr(1) + '"]');
if (target.length===0) target = $('html');
$('html,body').animate({scrollTop: target.offset().top},2000);
});

var navOffset = $('nav').offset().top;

$('nav').wrap('<div class = "nav-placeholder"></div>');
$('.nav-placeholder').height($('nav').outerHeight());
$(window).scroll(function(){
var scrollPosition = $(window).scrollTop();

if(scrollPosition>=navOffset){
    $('nav').addClass('fixed');
}
else{
    $('nav').removeClass('fixed');
}
});
});


// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});