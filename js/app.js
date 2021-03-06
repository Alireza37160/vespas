
$(function() {


    //clic sur burger affiche le menu et overlay en 
    // ajoutant des classes.
    $('.burger-btn').on('click', function(){
		$('.header').addClass('header-visible');
		$('.overlay').addClass('overlay-visible');
	});

    //clic sur overlay cache le header et overplay lui même en 
    //ajoutant des classes.
	$('.overlay').on('click', function(){
		$('.header').removeClass('header-visible');
		$('.overlay').removeClass('overlay-visible');
	});



	$('.slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots:false,
        items:1,
        autoplay:1,
        autoplayTimeout:2000,
        autoplayHoverPause:1,
        navText:false
    });

    $('.partenaires').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            300:{
                items:3
            },
            600:{
                items:5
            }
        }
})



  var groups = {};
$('.galleryItem').each(function() {
  var id = parseInt($(this).attr('data-group'), 10);
  
  if(!groups[id]) {
    groups[id] = [];
  } 
  
  groups[id].push( this );
});


$.each(groups, function() {
  
  $(this).magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      gallery: { enabled:true }
  })
  
});
    
});




