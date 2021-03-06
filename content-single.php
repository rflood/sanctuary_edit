<?php
/**
 * @package sanctuary
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<!-- <div class="entry-meta"> -->
		<!--	<?php sanctuary_posted_on(); ?> -->
		<!-- </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">

        <?php the_content(); ?>

        <?php
        $cabin_gallery = get_field('cabin_gallery');
        $description = get_field('description');
        $art_making_features = get_field('art_making_features');
        $cabin_features = get_field('cabin_features');
        $price_range = get_field('price_range');
        ?>

<div class="wrapper">
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
            <p class="description"><?php echo $description; ?></p>
            <p class="art-making-features"><?php echo $art_making_features; ?></p>
            <p class="cabin-features"><?php echo $cabin_features; ?></p>
            <p class="price-range"><?php echo $price_range; ?></p>
            <button type="button">check availability</button>
        </div>


        <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sanctuary' ),
				'after'  => '</div>',
			) );
		?>
</div>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'sanctuary' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'sanctuary' ) );

			if ( ! sanctuary_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sanctuary' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sanctuary' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sanctuary' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sanctuary' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<!-- <?php edit_post_link( __( 'Edit', 'sanctuary' ), '<span class="edit-link">', '</span>' ); ?> -->
	<!-- </footer><!-- .entry-meta -->
</article><!-- #post-## -->
