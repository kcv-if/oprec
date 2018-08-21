
var admin_photo = new Array('url(../images/img2.jpg)', 'url(../images/img3.jpg)', 'url(../images/img4.jpg)', 'url(../images/img5.jpg)', 'url(../images/img6.jpg)', 'url(../images/img1.jpg)');
var current = 0;

function nextPhoto() {
	$('#photo-slideshow .bcg')
	.css(
		'background-image', admin_photo[current = ++current % admin_photo.length]
	);

	setTimeout(nextPhoto, 5000);
}

setTimeout(nextPhoto, 0);
$('#photo-slideshow .bcg').css(
	'background-image', admin_photo[0]
);

$(window).on('scroll', function(){
	wScroll = $(this).scrollTop();

	if(wScroll > 0){
		$('.navheader').addClass('header-sticky');
	}
	else{
		$('.navheader').removeClass('header-sticky');
	}
});