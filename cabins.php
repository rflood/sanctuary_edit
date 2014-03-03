<?php
/*
Template Name Posts: Cabins
*/
?>


<?php //the_content(); ?>

<?php
$cabin_gallery = get_field('cabin_gallery');
$description = get_field('description');
$art_making_features = get_field('art_making_features');
$cabin_features = get_field('cabin_features');
$price_range = get_field('price_range');
?>

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
    </div>

