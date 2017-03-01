$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});


$(document).ready(function() {
  
  $(".selLabel").click(function () {
    $('.dropdown').toggleClass('active');
  });
  
  $(".dropdown-list li").click(function() {
    $('.selLabel').text($(this).text());
    $('.dropdown').removeClass('active');
    $('.selected-item p span').text($('.selLabel').text());
  });
  
});

$(document).ready(function() {
  
  $(".selLabel1").click(function () {
    $('.dropdown1').toggleClass('active');
  });
  
  $(".dropdown1-list li").click(function() {
    $('.selLabel1').text($(this).text());
    $('.dropdown1').removeClass('active');
    $('.selected-item1 p span').text($('.selLabel1').text());
  });
  
});



