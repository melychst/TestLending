(function($){

		/*Scrolling effect*/
	$(document).ready(function(){
		$(window).scrollTop(1);
	  $('a[href*=#]').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
	    && location.hostname == this.hostname) {
	      var $target = $(this.hash);
	      $target = $target.length && $target
	      || $('[name=' + this.hash.slice(1) +']');
	      if ($target.length) {
	        var targetOffset = $target.offset().top - 80;

	        $('html,body')
	        .animate({scrollTop: targetOffset}, 1000);
	       return false;
	      }
	    }
	  });
	});

  $(function () {
		$(".portfolio .portfolio-item-wrap").hover(function() {
			$( ".portfolio-item", this ).fadeIn( 100 );
		}, function() {
				$( ".portfolio-item", this).fadeOut( 200 );
		});
	});

})(jQuery)