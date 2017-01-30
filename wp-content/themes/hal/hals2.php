<?php
/**
 * Template Name: Hallers Pharmacy 2

 * @package WordPress
 * @subpackage Pharmacy_Express
 * @since Pharmacy Express 1.0
 */

get_header(); ?>

<?php get_template_part('/inc/head', '' ); ?>


	<?php if( have_rows('sections') ): ?>
		<div class="container-fluid">
	    <?php while ( have_rows('sections') ) : the_row(); ?>

			<?php if( get_sub_field('title') ): ?>
				<div class="<?php the_sub_field('class'); ?>" id="<?php the_sub_field('title'); ?>">
				    <?php if(get_sub_field('heading')): ?>
					    <h1><?php the_sub_field('heading'); ?></h1>
					<?php endif; ?>
					<?php if(get_sub_field('content')): ?>
					    <?php the_sub_field('content'); ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>

	    <?php endwhile; ?>
		</div>
	<?php endif; ?>


<?php get_template_part('/inc/end','' ); ?>

<?php get_footer(); ?>