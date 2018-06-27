<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WiroSableng
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		 ?>
		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <?php the_date(); ?> | <time> <?php the_time(); ?></time>
			<i class="fa fa-folder"></i> <?php the_category(', '); ?>
			<i class="fa fa-tags"></i> <?php the_tags(); ?>
			<i class="fa fa-comments"></i> <a href="<?php comments_link(); ?>"><?php comments_number('0 comment','1 comment','% comments'); ?></a>
		</div><!-- post-details -->
	
	</header><!-- .entry-header -->
	<?php if(has_post_thumbnail()){ ?> 
	<div class="post-image">
		<?php the_post_thumbnail();?>
	</div><!-- post-image -->
	<?php } ?>
	<div class="post-excerpt">
			<?php the_excerpt();?>
	</div><!-- post-excerpt -->

	</article><!-- #post-## -->
