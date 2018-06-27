<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WiroSableng
 */
?>
</div><!-- #page -->
<?php 
wp_footer(); 
?>
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/">
				   <?php if ( ot_get_option( 'Navbar_logo_wirosableng' ) ) { ?>
			            <img src="<?php echo esc_url( ot_get_option( 'Navbar_logo_wirosableng' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			        <?php }   ?>
			</a></p>
		</div><!-- end col 3 -->
		<div class="col-sm-6">
			<?php
			wp_nav_menu( array(
				'menu'           	=> 'ul',
				'theme_location'    => 'secondary',
				'menu_class'         => 'list-unstyled list-inline',
				));
				?>
			</div><!-- end col sm 6 -->
			<div class="col-sm-3">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wirosableng' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wirosableng' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wirosableng' ), 'wirosableng', '<a href="http://seegatesite.com" rel="designer">Sigit Prasetya Nugroho</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- end of col -->
		</div><!-- container -->
	</footer>
	<!-- BOOTSTRAP CORE JAVASCRIPT -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>