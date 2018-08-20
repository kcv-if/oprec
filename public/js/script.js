
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

if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

var goUp = true;
var end = null;
var interval = null;

function handle(delta) {
	var animationInterval = 20; //lower is faster
  var scrollSpeed = 20; //lower is faster

	if (end == null) {
  	end = $(window).scrollTop();
  }
  end -= 20 * delta;
  goUp = delta > 0;

  if (interval == null) {
    interval = setInterval(function () {
      var scrollTop = $(window).scrollTop();
      var step = Math.round((end - scrollTop) / scrollSpeed);
      if (scrollTop <= 0 || 
          scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
          goUp && step > -1 || 
          !goUp && step < 1 ) {
        clearInterval(interval);
        interval = null;
        end = null;
      }
      $(window).scrollTop(scrollTop + step );
    }, animationInterval);
  }
}