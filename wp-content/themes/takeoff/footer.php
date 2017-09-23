<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package takeoff
 */

?>
        <!-- Photo -->
        <section class="photo">
            <div class="wrap center">
                <h2>Tell Us About Your Experience at Anchorage Inn</h2>
                <p>If you have visited us before, we would love to hear how your visit was!</p>
                <a href="<?php echo get_permalink(SHARE_STORY); ?>" title="Share Your Story" class="button white medium">Share Your Story</a>
            </div>
        </section>
        <!-- //Photo -->
        
        
        <!-- Call to action -->
        <section class="cta grey">
            <div class="wrap">
                <a href="<?php echo get_permalink(VISIT); ?>" title="Visit Anchorage Inn" class="button white medium right">Visit Anchorage Inn</a>
                <h3>Ready to enjoy amazing food in a beautiful atmosphere?</h3>
            </div>
        </section>
        <!-- //Call to action -->

    </main>
    <!-- //Main -->

	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		<!-- Wrapper -->
		<div class="wrap">
			<div class="row">
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Contact Information</h6>
					<p>Anchorage Inn<br />
					<?php the_field('options_address', 'option'); ?><br />
					<?php the_field('options_citystate', 'option'); ?></p>
					<p><?php the_field('options_phone', 'option'); ?><br />
					<a href="mailto:<?php the_field('options_email', 'option'); ?>"><?php the_field('options_email', 'option'); ?></a>
					</p>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Hours of Operation</h6>
					<p>Sunday - Thursday, 8am to 10pm</p>
					<p>Friday - Saturday, 8am to 1am</p>
					<p>Summer Patio Hours, 12pm to 8pm</p>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<!--<div class="one-half">
					<h6>Email Us</h6>
					<?php //echo do_shortcode( '[contact-form-7 id="76" title="Email Form"]' ); ?>
				</div>-->
				<!-- //OneFourth -->
				
			</div>
		</div>
		<!-- //Wrapper -->
		
		<div class="copy">
			<!-- Wrapper -->
			<div class="wrap">
				<p>Copyright 2016 Anchorage Inn</p>
				<p><a href="http://tessakriesel.com" title="Tessa Kriesel">Site Credits</a></p>
			</div>
			<!-- //Wrapper -->
		</div>
	</footer>
	<!-- //Footer -->

<?php wp_footer(); ?>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery.uniform.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery.lightSlider.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jetmenu.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/lightGallery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/wow.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/scripts.js'></script>
<script>
	 $(document).ready(function() {
		$("#lightSliderPosts").lightSlider({
			item:1,
			keyPress:true,
			gallery:false,
			pager:false,
			prevHtml: 'PREVIOUS',
			nextHtml: 'NEXT'
		});
		
		$("#lightSliderDeals").lightSlider({
			item:1,
			keyPress:true,
			gallery:false,
			pager:false,
			prevHtml: 'PREVIOUS',
			nextHtml: 'NEXT'
		});
		
		new WOW().init();
	});
</script>
</body>
</html>
