<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

			<div id="footer-bottom">

<div id="portal-footer">
	<p>
		The University of Wisconsin Oshkosh — Where Excellence and Opportunity Meet.
	</p>
</div>

<div class="container clearfix">
	<div id="uwoshFooter">
		<div id="footer">
			<div id="uwo-footer">
				<div id="footer-column-1" class="pull-left">
					<a href="https://maps.google.com/maps?q=University+of+Wisconsin+Oshkosh+800+Algoma+Blvd.+Oshkosh,+WI+54901&amp;um=1&amp;ie=UTF-8&amp;hl=en&amp;sa=N&amp;tab=wl" target="_blank">
						<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/wismap-color.png') ?>" class="wismap pull-left desaturate">
					</a>
					<div id="address">
						<address class="vcard">

							&copy;<?php echo date("Y") ?> UW Oshkosh

							<br>

							<div class="fn">

								<a href="https://maps.google.com/maps?q=University+of+Wisconsin+Oshkosh+800+Algoma+Blvd.+Oshkosh,+WI+54901&amp;um=1&amp;ie=UTF-8&amp;hl=en&amp;sa=N&amp;tab=wl" target="_blank">University of Wisconsin Oshkosh</a>

								<a>

								</a>

							</div>

							<div class="adr">

								<div class="street-address">

									<a href="https://maps.google.com/maps?q=University+of+Wisconsin+Oshkosh+800+Algoma+Blvd.+Oshkosh,+WI+54901&amp;um=1&amp;ie=UTF-8&amp;hl=en&amp;sa=N&amp;tab=wl" target="_blank">800 Algoma Blvd.</a>

								</div>

								<a href="https://maps.google.com/maps?q=University+of+Wisconsin+Oshkosh+800+Algoma+Blvd.+Oshkosh,+WI+54901&amp;um=1&amp;ie=UTF-8&amp;hl=en&amp;sa=N&amp;tab=wl" target="_blank">

									<span class="locality">Oshkosh</span>,

									<span class="region">WI</span>

									<span class="postal-code">54901</span>

								</a>

							</div>

							<div class="tel">

								<a href="tel:9204241234">(920) 424-1234</a>

							</div>

						</address>
					</div>
				</div>
				<!-- End #footer-column-1 -->
				<div id="footer-column-2">
					<div id="sitemap" class="pull-left">
						<ul class="list-block">
						<li>
							<a href="http://www.uwosh.edu/resources/accessibility">Accessibility</a>
						</li>
						<li>
							<a href="http://www.uwosh.edu/career/">Career Services</a>
						</li>
						<li>
							<a href="http://uwosh.edu/go/directions" target="_blank">Get Directions</a>
						</li>
						<li>
							<a href="http://www.uwosh.edu/foundation/why-give/support-uw-oshkosh/online-giving">Give to UW Oshkosh</a>
						</li>
						<li>
							<a href="http://www.uwosh.edu/imc/media-relations/newsroom">Media Relations</a>
						</li>
						<li>
							<a href="http://www.uwosh.edu/hr/employment/">Work at UW Oshkosh</a>
						</li>
						</ul>
					</div>
					<div id="mobile-emergency">
						<p>
						<a href="http://www.uwosh.edu/go/mobile">
							<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/mobileapp-color.png') ?>" class="app-icon pull-left desaturate">Download UW Oshkosh's Mobile App</a>
						</p>
						<p>
						<a href="http://emergency.uwosh.edu">
							<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/emergency-color.png') ?>" class="app-icon pull-left desaturate">Emergency and Safety Information</a>
						</p>
					</div>
				</div>
				<!-- End #footer-column-2 -->
				<div id="footer-column-3">
					<div class="row social-row">
						<ul id="footerSocialLinks" class="small-block-grid-7">
							<li><a href="https://www.facebook.com/uwoshkosh" target="_blank" class="footerFacebook"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-facebook.png') ?>" class="social-icon desaturate" alt="Facebook logo"></a></li>
							<li><a href="https://twitter.com/uwoshkosh" target="_blank" class="footerTwitter"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-twitter.png') ?>" class="social-icon desaturate" alt="Twitter logo"></a></li>
							<li><a href="http://instagram.com/uwoshkosh" target="_blank" class="footerInstagram"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-instagram.png') ?>" class="social-icon desaturate" alt="Instagram logo"></a></li>
							<li><a href="http://www.youtube.com/uwosh" target="_blank" class="footerYouTube"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-youtube.png') ?>" class="social-icon desaturate" alt="YouTube logo"></a></li>
							<li><a href="http://www.linkedin.com/edu/school?id=19693" target="_blank" class="footerLinkedIn"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-linkedin.png') ?>" class="social-icon desaturate" alt="LinkedIn logo"></a></li>
							<li><a href="http://www.pinterest.com/uwoshkosh/" target="_blank" class="footerPinterest"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-pinterest.png') ?>" class="social-icon desaturate" alt="Pinterest logo"></a></li>
							<li><a href="http://www.flickr.com/photos/uwoshkosh/sets/" target="_blank" class="footerFlickr"><img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/icon-flickr.png') ?>" class="social-icon desaturate" alt="Flickr logo"></a></li>
						</ul>
						<a href="http://www.ncahlc.org/?option=com_directory&amp;Action=ShowBasic&amp;instid=2030" target="_blank">
							<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/hlc.png') ?>" id="hlc" class="inline" alt="Higher Learning Commission">
						</a>
						<a href="http://www.wisconsin.edu/" target="_blank">
							<img src="<?php echo esc_attr(get_stylesheet_directory_uri() . '/img/footer/uw-system.png') ?>" id="uw-system" class="inline" alt="UW System">
						</a>
					</div>
				</div>
				<!-- End #footer-column-3 -->
			</div>
			<!-- End #uwo-footer -->
		</div>
		<!-- End #footer -->
	</div>

</div>
<!-- .container -->
</div>

			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>

</body>
</html>
