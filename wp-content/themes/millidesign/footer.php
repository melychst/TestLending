	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="footer-logo">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="">
					</div>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-8">
					<div class="footer-copyright">
						<p>© 2015 - MILLIDESIGN. Все права защищены</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>


<script>

var fooReveal = {
  delay    : 50,
  distance : '10px',
  scale    : 1,
  mobile      : false
};

var leftReveal = {
  origin: 'left',
  delay    : 50,
  distance : '50px',
  scale    : 1,
  mobile      : false
};

var rightReveal = {
  origin: 'right',
  delay    : 50,
  distance : '50px',
  scale    : 1,
  mobile      : false
};

var about_1 = {
  delay    : 50,
  distance : '20px',
  duration: 200,
  scale    : 1,
  mobile      : false
};
var about_2 = {
  delay    : 200,
  distance : '20px',
  scale    : 1,
  mobile      : false
};
var about_3 = {
  delay    : 350,
  distance : '20px',
  scale    : 1,
  mobile      : false
};

var about_4 = {
  delay    : 400,
  distance : '20px',
  scale    : 1,
  mobile      : false
};

var animPost = {
  delay    : 50,
  distance : '20px',
  scale    : 1,
  mobile      : false
};	



window.sr = ScrollReveal();
sr.reveal('.anim', fooReveal);
sr.reveal('.anim_left', leftReveal);
sr.reveal('.anim_right', rightReveal);
sr.reveal('.anim_about_1', about_1);
sr.reveal('.anim_about_2', about_2);
sr.reveal('.anim_about_3', about_3);
sr.reveal('.anim_about_4', about_4);
sr.reveal('.animPost', fooReveal);

</script>




</body>
</html>