<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sanctuary
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php

        // check if the repeater field has rows of data
        if( have_rows('home_page_section') ):

            // loop through the rows of data
            while ( have_rows('home_page_section') ) : the_row();

                // display a sub field value
                $upper_content = get_sub_field('upper_content');
                $lower_content = get_sub_field('lower_content');
                $background_image = get_sub_field('background_image');


                ?>
                <div class="homepage-section">
                    <div class="upper-content"><?php echo $upper_content; ?></div>
                    <div class="lower-content"><?php echo $lower_content; ?></div>
                    <div class="background-image"><img src="<?php echo $background_image; ?>"></div>
                </div>
            <?php endwhile;
        else :

            // no rows found

        endif;

        ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'sanctuary' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <!-- <?php edit_post_link( __( 'Edit', 'sanctuary' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?> -->
</article><!-- #post-## -->