<?php
/*
Template Name: Test
*/
?>

<?php get_header(); ?>

    <section class="group1">
        <div class="content">
            <h1><?php the_field('upper_content'); ?></h1>
            <h2><?php the_field('lower_content'); ?></h2>
        </div>

        <div class="backgroundImage">
            <?php if( get_field('background_image') ):?>
                <img src="<?php the_field('background_image'); ?>" alt="" /> <?php

            endif; ?>
        </div>
    </section>

    <section class="group2">
        <div class="content">
            <h1><?php the_field('upper_content'); ?></h1>
            <h2><?php the_field('lower_content'); ?></h2>
        </div>

        <div class="backgroundImage">
            <?php if( get_field('background_image') ):?>
                <img src="<?php the_field('background_image'); ?>" alt="" /> <?php

            endif; ?>
        </div>
    </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>