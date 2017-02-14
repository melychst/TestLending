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
  		var onMapMouseleaveHandler = function (event) {
	    	var that = $(this);

		    that.on('click', onMapClickHandler);
		    that.off('mouseleave', onMapMouseleaveHandler);
		    that.find('iframe').css("pointer-events", "none");
	  	}

	  	var onMapClickHandler = function (event) {
		    var that = $(this);

		    // Disable the click handler until the user leaves the map area
		    that.off('click', onMapClickHandler);

		    // Enable scrolling zoom
		    that.find('iframe').css("pointer-events", "auto");

		    // Handle the mouse leave event
		    that.on('mouseleave', onMapMouseleaveHandler);
	  	}
	  // Enable map zooming with mouse scroll when the user clicks the map
	  $('.maps.embed-container').on('click', onMapClickHandler);
	})

  $(function () {
		$(".portfolio .portfolio-item-wrap").hover(function() {
			$( ".portfolio-item", this ).fadeIn( 100 );
		}, function() {
				$( ".portfolio-item", this).fadeOut( 200 );
		});
	});

  $(function () {
  	$(".mobile-menu .menu-icon").click(function (){
  		if ( $(".mobile-menu .wrap-mobile-menu").css("display") == "none" ) {
 			$(".mobile-menu .wrap-mobile-menu").fadeIn(300);
  			//$(".mobile-menu .wrap-mobile-menu").css("display", "block")
  		} else {
  			$(".mobile-menu .wrap-mobile-menu").fadeOut(300);
  		}
  	})
  })

  $(function () {
  	$(".mobile-menu .wrap-mobile-menu a").click(function (){
 		$(".mobile-menu .wrap-mobile-menu").fadeOut(200);
  	})
  })

})(jQuery)