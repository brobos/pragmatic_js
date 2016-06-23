<?php
/*
Template Name: Contacts Template
*/
?>


<?php wp_enqueue_style( 'fixedinnerpage' ); ?>
<?php wp_enqueue_script( 'modernizr' ); ?>
<?php wp_enqueue_script( 'bootstrap' ); ?>
<?php wp_enqueue_script( 'googlemapsapi' ); ?>
<?php wp_enqueue_script( 'googlemapsini' ); ?>

<?php get_header(); 

?>

<main>
<div class="contacts-cont" >
	<div class="col-md-12 google-maps" >
		<div id="map-canvas" style="width:100%;height:550px;"></div>
		<!--<div id="map-canvas" style="width:1200px;height:1200px;" ></div> -->
		<!-- <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Entro%20Solutions%2C%20ulitsa%20%22Razgrad%22%2C%20Sofia%2C%20Bulgaria&key=AIzaSyDOd96F8hWSG-sVF0BS-vRJEk4QwoQfz7s"></iframe> -->
		<div id="map-canvas"></div>	
	</div>
	<div class="contacts post hidden-xs">
		<h3 class="text-left text-uppercase">Contacts</h3>
		<p class="address"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Borovo, Razgrad st. №6, fl. 1<br>Sofia 1680, Bulgaria</p>
		<p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+359 887659479</p>
		<p><span class="glyphicon glyphicon-send" aria-hidden="true"></span>sales@entrosolutions.com</p>
		<ul id='social-links'>
			<li><p class="text-uppercase">We are social</p></li>
			<li>
				<a href="https://www.facebook.com/EntroSolutions?fref=ts&ref=br_tf" target="_blank"><div class="facebook-icon"></div></a>
			</li>
			<li>
				<a href="https://twitter.com/entrosolutions" target="_blank"><div class="twitter-icon"></div></a>
			</li>
			<li>
				<a href="https://plus.google.com/+Entrosolutions/posts" target="_blank"><div class="google-icon"></div></a>
			</li>
		</ul>
	</div>

	<div class="contacts-phone text-center visible-xs">
		<h1 class="text-center text-uppercase">Contacts</h1>
		<p class="address">Borovo, Razgrad st. №6, fl. 1<br>Sofia 1680, Bulgaria</p>
		<p>+359 887659479</p>
		<p>sales@entrosolutions.com</p>
		<h2 class="text-center text-uppercase social">We are social</h2>
		<ul id='social-links'>
			<li>
				<a href="https://www.facebook.com/EntroSolutions?fref=ts&ref=br_tf" target="_blank"><div class="facebook-icon"></div></a>
			</li>
			<li>
				<a href="https://twitter.com/entrosolutions" target="_blank"><div class="twitter-icon"></div></a>
			</li>
			<li>
				<a href="https://plus.google.com/+Entrosolutions/posts" target="_blank"><div class="google-icon"></div></a>
			</li>
		</ul>
	</div>

	<section class="container intro-contactform pad-container" id="cform">
		<h1 class="text-center text-uppercase" >Get in touch</h1>
		<p class="col-md-offset-1 post">Say hello!</p>
			<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form"]' ); ?>
	</section>
</div>

</main>
	<?php get_footer(); ?>
