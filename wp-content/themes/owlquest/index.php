<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WiroSableng
 */
get_header(); ?>
<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-sm-8" role="main">
				<?php
				if ( have_posts() ) :

					while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );
				endwhile;
	                    // wp_bs_pagination();
				the_posts_navigation();

				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			<!-- ./#article-product -->
		</main><!-- ./#content -->
		<aside class="col-sm-4">
			<?php get_sidebar();  ?>
		</aside><!-- ./col-sm-4 -->
	</div><!-- ./#primary -->
</div><!-- ./container -->
<?php
get_footer();
