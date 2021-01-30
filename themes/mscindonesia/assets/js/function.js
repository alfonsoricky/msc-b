jQuery(document).ready(function() {

  $('ul.sf-menu').superfish();
	$('.toggleMenu').click(function() {
		$('.topnav ul.sf-menu').slideToggle('fast');
		return false;
	});
  $('#50tahun').modal('show');
  // $('.donation-list').masonry({
  //   itemSelector: '.donation-item',
  //   columnWidth: 200
  // });

});

$(window).on('load', function() {

  $('.donation-list').masonry({
    itemSelector: '.donation-item',
    columnWidth: '.donation-item'
  });

  $('.product-list').masonry({
    itemSelector: '.product-item',
    columnWidth: '.product-item'
  });

});
