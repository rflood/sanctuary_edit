<?php
/*
Template Name: Test
*/
?>

<?php get_header(); ?>

<?php

// check if the repeater field has rows of data
if( have_rows('home_page_section') ):

    // loop through the rows of data
    $count = 1;
    while ( have_rows('home_page_section') ) : the_row();

        // display a sub field value
        $upper_content = get_sub_field('upper_content');
        $lower_content = get_sub_field('lower_content');
        $background_image = get_sub_field('background_image');


        ?>

        <section class="group group<?php echo $count; ?>">
            <div class="content">
                <h1 class="upper-content"><?php echo $upper_content; ?></h1>
                <h2 class="lower-content"><?php echo $lower_content; ?></h2>
            </div>
            <div class="backgroundImage">
                <img src="<?php echo $background_image; ?>">
            </div>
        </section>
        <?php $count++; ?>
    <?php endwhile;
else :

    // no rows found

endif;

?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>