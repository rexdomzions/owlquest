<?php
/**
* Template Name: Full Width Home
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<div class="row">
			  <div class="col-md-2 fin">
			  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1RealEstate.png" alt="" width="" height="" />
			  	<p>Real State</p>
			  </div>
			  <div class="col-md-2 fin">
			  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2Personal.png" alt="" width="" height="" />
			  	<p>Personal</p>
			  </div>
			  <div class="col-md-2 fin">
			  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3CreditCards.png" alt="" width="" height="" />
			  	<p>Credit Cards</p>
			  </div>
			  <div class="col-md-2 fin">
			  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4Business.png" alt="" width="" height="" />
			  	<p>Business</p>
			  </div>
			  <div class="col-md-2 fin">
			  	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/5Auto.png" alt="" width="" height="" />
			  	<p>Auto</p>
			  </div>
			</div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #content -->
	
	<div class="owlnewsletter">
		<div class="container">
			<h1>Newsletter</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
	</div>

<?php
get_footer();
