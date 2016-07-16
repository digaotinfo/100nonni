$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });

    // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 115,
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

  $('.article-content a').each(function(){
    console.log($(this).find('img').html())
        $(this).attr('data-lightbox', 'lightbox');
  });
  
});
