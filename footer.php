<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Seller
 */
?>

	</div><!-- #content -->
</div><!-- #page -->


<footer class="footer-4">
			<div class="container">
				<div class="row mb-5 text-center text-md-left">
					<div class="col-md-3 col-lg-4 mb-3">
						<a class="logo" href="index.php">Webmobapps</a>
						<div>&nbsp;</div>
						@php(dynamic_sidebar('image-sidebar-footer'))
					</div>
					<div class="col-md-3 col-lg-2 pt-2">
						 @php(dynamic_sidebar('first-footer-widget-area'))
					</div>
					<div class="col-md-3 col-lg-2 pt-2">
						@php(dynamic_sidebar('second-footer-widget-area'))
					</div>
					<div class="col-md-3 col-lg-2 pt-2">
						@php(dynamic_sidebar('third-footer-widget-area'))
						</ul>
					</div>
					<div class="col-md-3 col-lg-2 pt-2">
						@php(dynamic_sidebar('fourth-footer-widget-area'))
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="divider"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center text-md-left mt-2 mb-3 pt-1">
						<p class="copyright"><?php printf( __( 'Built by %1$s', 'theme_name' ), '<a href="'. esc_url( '#' ) .'">Webmobapps</a> © 2018 All Rights Reserved' ); ?></p>
					</div>
					<!--@php(dynamic_sidebar('social-footer-widget-area')) (insert this below instead of ul if social widget required instead)-->
					<div class="col-md-6 text-center text-md-right mb-4">
						@php(dynamic_sidebar('social-footer-widget-area'))
						<!--<ul class="social">
							<li><a href="https://www.facebook.com/Webmobapps-294063081057563/" title="Facebook"><em class="fa fa-1x fa-facebook"></em></a></li>
							<li><a href="https://twitter.com/WebMobApps1" title="Twitter"><em class="fa fa-1x fa-twitter"></em></a></li>
							<li><a href="https://www.linkedin.com/in/paul-anthony-mcgowan-66a71990/" title="Linkedin"><em class="fa fa-1x fa-linkedin"></em></a></li>
							<li><a href="https://plus.google.com/b/115912604147779772368/?pageId=115912604147779772368" title="Google+"><em class="fa fa-1x fa-google-plus"></em></a></li>
							<li><a href="https://www.pinterest.co.uk/paulanthonymcgo/" title="Pinterest"><em class="fa fa-1x fa-pinterest"></em></a></li>
							<li><a href="https://www.youtube.com/channel/UCEsYvFMWMPE-Qlyjdt0nDUg/videos" title="YouTube"><em class="fa fa-1x fa-youtube"></em></a></li>
              <div class="clear"></div>
						</ul>-->
			    </div>
        </div>
			</div>
		</footer>
<?php wp_footer(); ?>

</body>
</html>