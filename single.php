<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sanctuary
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php sanctuary_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->
    <div class="cabin-gallery">
        <?php
        $images = get_field('cabin_gallery');

        if( $images ): ?>
            <div id="slider" class="flexslider">
                <ul class="slides">
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <p class="flex-caption"><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        <?php endif; ?>
    </div>
    <div class="cabin-content">
        <p><?php the_field('description'); ?></p>
        <p><?php the_field('art_making_features'); ?></p>
        <p><?php the_field('cabin_features'); ?></p>
        <p><?php the_field('price_range'); ?></p>
    </div>


<?php get_footer(); ?>