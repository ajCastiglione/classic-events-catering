<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<div class="footer-top">
		<div class="inner-footer-top large-wrapper cf">
			<h3>The perfect setting
				<span>|</span>
			</h3>
			<h3>exceptional cuisine
				<span>|</span>
			</h3>
			<h3>first class service
				<span>|</span>
			</h3>
			<h3>attention to detail</h3>
		</div>
	</div>

	<div id="contact" class="contact-form-container large-wrapper cf">
		<h2 class="contact-title">contact us</h2>
		<?php if(isset($_GET['contact_name'])) : $name = $_GET['contact_name']; $email = $_GET['email']; ?>
		<h2 class='contact-submitted'>Thank you for contacting us <?php echo $name; ?>, we will contact you at <?php echo $email; ?> shortly!</h2>
		<?php endif; ?>
		<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
		<div class="location-container">
		<div class="location-info-box">
			<h2 class="map-location-title">Acqua Banquets</h2>
			<p><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2920.7178719279495!2d-78.91147538398666!3d42.942074279152045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d313964ecb0e81%3A0xcddb06ca8d1dd533!2sAcqua!5e0!3m2!1sen!2sus!4v1533062302390">2192 Niagara Street Buffalo, NY 14207</a></p>
			<p>Office: <a href="tel:+1-716-874-5400">(716) 874-5400</a></p>
		</div>
		<div class="location-info-box">
			<h2 class="map-location-title">Events @the Foundry</h2>
			<p><a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2920.5977506110253!2d-78.8813215!3d42.9446063!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d36d2b91d5b8d1%3A0x6602804f73b61040!2sFoundry+Lounge!5e0!3m2!1sen!2sus!4v1533062158862" target="_blank">1738 Elmwood Ave Buffalo, NY 14207</a></p>
			<p>Hotel &amp; Office: <a href="tel:+1-716-240-9693">(716) 240-9693</a></p>
		</div>
		<div class="location-info-box">
			<h2 class="map-location-title">Lafayette Ballrooms</h2>
			<p><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.42997035055!2d-78.875088284527!3d42.88487427915511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d312486976e06d%3A0x84617e89a3194dd8!2sHotel+%40+The+Lafayette!5e0!3m2!1sen!2sus!4v1533062196488" target="_blank">391 Washington Street Buffalo, NY 14203</a></p>
			<p>Office: <a href="tel:+1-716-427-5540">(716) 427-5540</a></p>
		</div>
		<div class="location-info-box">
			<h2 class="map-location-title">Shea’s Seneca Banquets</h2>
			<p><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.927604550932!2d-78.80931438466098!3d42.85325997915682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d30e76d620fd47%3A0x4bb7ff065c7fbce4!2s2188+Seneca+St%2C+Buffalo%2C+NY+14210!5e0!3m2!1sen!2sus!4v1551106436057" target="_blank">2188 Seneca Street Buffalo, NY 14210</a></p>
			<p>Office: <a href="tel:+1-716-427-5542">(716) 427-5542</a></p>
		</div>
		</div>
		<div class="googleMap">
			<iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2920.717870938928!2d-78.9114754!3d42.9420743!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d313964ecb0e81%3A0xcddb06ca8d1dd533!2sAcqua!5e0!3m2!1sen!2sus!4v1533062013613" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
	</div>

	<div class="footer-divider">
		<div class="inner-divider wrap cf">
			<div class="social-media col-xs-12 col-sm-6">
			<h3>Follow Us!</h3>
				<a href="https://www.facebook.com/ClassicEventsBuffalo" target="_blank">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/classiceventsbuffalo/?hl=en" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
			<div class="wedding-badge col-xs-12 col-sm-6">
				<img src="https://cdn1.weddingwire.com/assets/img/en_US/badges/2017-en_US.png" alt="Wedding wire badge" />
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<h1 class="footer-bottom-title">Classic Events</h1>
		<h3 class="minervawebdevelopment" title="Minerva Web Development">
			Powered By: <a href="https://minervawebdevelopment.com" title="Buffalo Web Development and Design" target="_blank">Minerva Web Development</a>
		</h3>
	</div>

</footer>

</div>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

<!--<p class="source-org copyright">&copy;<?php echo date('Y'); ?><?php bloginfo( 'name' ); ?>.</p>-->

</body>

</html>
<!-- end of site. what a ride! -->