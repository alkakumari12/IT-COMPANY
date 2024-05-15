
$(document).ready(function(){

     $('.fa-bars').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('load scroll', function () {
      $('.fa-bars').removeClass('fa-times');
      $('.navbar').removeClass('nav-toggle');
   
      if ($(window).scrollTop() > 35) {
         $('.header').css({ 'background': '#e8f3ff', 'box-shadow': '0.2rem .5rem rgba(0,0,0,0)' });
      } else {
         $('.header').css({ 'background': 'none', 'box-shadow': 'none' });
      }
   });
   
   const counters = document.querySelectorAll('.counter');
    const speed = 120;
    counters.forEach(counter => {
	  const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;
		const inc = target / speed;
		if (count < target) {
			counter.innerText = count + inc;
			setTimeout(updateCount, 1);
		} else {
			counter.innerText = target;
		}
	};
	  updateCount();
   });

   (function ($) {
    "use strict";
    
    $(".clients-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: { 0: {items: 2}, 768: {items: 4}, 900: {items: 6} }
    });

    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: { 0: {items: 1}, 576: {items: 2}, 768: {items: 3}, 992: {items: 4} }
    });
    
})(jQuery);

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});

$('.accordion-header').click(function(){
    $('.accordion .accordion-body').slideUp(500);
    $(this).next('.accordion-body').slideDown(500);
    $('.accordion .accordion-header span').text('+');
    $(this).children('span').text('-');
});

});



// code for contact us page

jQuery('#frmContactus').on('submit',function(e){
  
    jQuery('#msg').html('');
    jQuery('#form-submit').html('Please wait');
    jQuery('#form-submit').attr('disabled',true);
    jQuery.ajax({
      url:'save.php',
      type:'post',
      data:jQuery('#frmContactus').serialize(),
      success:function(result){
        jQuery('#msg').html(result);
        
        jQuery('#form-submit').html('Submit');
        jQuery('#form-submit').attr('disabled',false);
        jQuery('#frmContactus')[0].reset();
      }
   });
   e.preventDefault();
  });


  // code for career

  $(document).ready(function () {
    $('#frmcareer').submit(function (e) {
      $('#msg').html('');
      $('#frm-submit').html('Please wait');
      $('#frm-submit').attr('disabled', true);

      $.ajax({
        url: 'save1.php', 
        type: 'post',
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (result) {
          $('#msg').html(result);
          $('#frm-submit').html('Submit');
          $('#frm-submit').attr('disabled', false);
          $('#frmcareer')[0].reset();
        },
        error: function () {
          $('#msg').html('Error submitting the form.');
          $('#frm-submit').html('Submit');
          $('#frm-submit').attr('disabled', false);
        },
      });

      e.preventDefault();
    });
  });


