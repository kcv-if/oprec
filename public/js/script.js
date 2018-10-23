
var admin_photo = new Array('url(../images/img2.jpg)', 'url(../images/img3.jpg)', 'url(../images/img1.jpg)');
var current = 0;
var current_2 = 0;

function nextPhotoresponsive() {
	$('#photo-slideshow-responsive .bcg-responsive')
	.css(
		'background-image', admin_photo[current_2 = ++current_2 % admin_photo.length]
	);

	setTimeout(nextPhotoresponsive, 5000);
}

setTimeout(nextPhotoresponsive, 0);
$('#photo-slideshow-responsive .bcg-responsive').css(
	'background-image', admin_photo[0]
);

function nextPhoto() {
	$('#photo-slideshow .bcg').css(
    	'background-image', admin_photo[current = ++current % admin_photo.length]
  	);
	setTimeout(nextPhoto, 5000);
}

setTimeout(nextPhoto, 0);
$('#photo-slideshow .bcg').css(
	'background-image', admin_photo[0]
);


if($(window).width() > '900') {
	if(window.location.href.indexOf("dashboard") > -1) {
  		$('.navheader').addClass('header-sticky');
    }
    else{
    	$(window).on('scroll', function(){
	 		wScroll = $(this).scrollTop();

	 		if(wScroll > 0){
	   			$('.navheader').addClass('header-sticky');
	 		}
   			else{
	   			$('.navheader').removeClass('header-sticky');
	 		}
  		});	
    }
}
else{
  	$('.navheader').addClass('header-sticky');
}

function expand() {
	$(".search").toggleClass("closesearch");
	$("input").toggleClass("square");
	if ($('.search').hasClass('closesearch')) {
	  	$('input').focus();
		$('.labelnrp').fadeIn('slow');
	} else {
	  	$('input').blur();
		$('.labelnrp').fadeOut('slow');
	}
};