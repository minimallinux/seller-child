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

<?php get_template_part('sidebar', 'footer'); ?>
<footer class="footer-4">
			<div class="container">
				<div class="row mb-5 text-center text-md-left">
					<div class="col-md-3 col-lg-4 mb-3">
						<a class="logo" href="index.php">Webmobapps</a>
						<div>&nbsp;</div>
						<?php echo dynamic_sidebar("image-sidebar-footer");?>
			        </div>
					<div class="col-md-3 col-lg-2 pt-2">
					  <?php echo dynamic_sidebar("first-footer-widget-area");?>
					</div>
					<div class="col-md-3 col-lg-2 pt-2">
					 <?php echo dynamic_sidebar("second-footer-widget-area");?>
					</div>
					<div class="col-md-3 col-lg-2 pt-2">
						 <?php echo dynamic_sidebar("third-footer-widget-area");?>
			       </div>
					<div class="col-md-3 col-lg-2 pt-2">
						 <?php echo dynamic_sidebar("fourth-footer-widget-area");?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="divider"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center text-md-left mt-2 mb-3 pt-1 copyright">
						<p class="copyright"><?php printf( __( 'Built by %1$s', 'theme_name' ), '<a href="'. esc_url( '#' ) .'">Webmobapps</a> © 2018 All Rights Reserved' ); ?></p>
					</div>
				     <div class="col-md-6 text-center text-md-right mb-4 menu">
						<?php wp_nav_menu( array('menu' => 'footer' )); ?>
		     </div>
        </div>
			</div>
		</footer>
<?php wp_footer(); ?>

</body>
</html>