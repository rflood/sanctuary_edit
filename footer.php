<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sanctuary
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="social-media">
        <ul>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/tumblr.png" alt="tumblr icon"</li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/twitter.png" alt="twitter icon"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/pinterest.png" alt="pinterest icon"></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/facebook.png" alt="facebook icon"></li>
        </ul>
    </div>

    <div class="copyright">
        <p>&copy; copyright Sanctuary Eco-Retreat 2014</p>
    </div>

    <!--		<div class="site-info"> -->
    <!--			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'sanctuary' ), 'WordPress' ); ?></a> -->
    <!--			<span class="sep"> | </span> -->
    <!--			<?php printf( __( 'Theme: %1$s by %2$s.', 'sanctuary' ), 'sanctuary', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
    <!--		</div> .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
