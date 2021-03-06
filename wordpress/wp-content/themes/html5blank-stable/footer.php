			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container">
					<div id="footer-widgets" class="row clearfix">
					<?php
						$footer_sidebars = array( 'sidebar-2', 'sidebar-3', 'sidebar-4', 'sidebar-5' );

						foreach ( $footer_sidebars as $key => $footer_sidebar ) :
							if ( is_active_sidebar( $footer_sidebar ) ) :
								echo '<div class="footer-widget col-lg-4' . ( 3 === $key ? ' last' : '' ) . '">';
								dynamic_sidebar( $footer_sidebar );
								echo '</div> <!-- end .footer-widget -->';
							endif;
						endforeach;
					?>
					</div> <!-- #footer-widgets -->


					<div class="row">
						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
							<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
						</p>
						<!-- /copyright -->
					</div>
				</div>	<!-- .container -->


			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
