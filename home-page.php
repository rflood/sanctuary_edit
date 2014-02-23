<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

            <?php endwhile; // end of the loop. ?>

            <ul id="slide-nav">
                <li><a href="#first" title="Next Section"></a></li>
                <li><a href="#second" title="Next Section"></a></li>
                <li><a href="#third" title="Next Section"></a></li>
                <li><a href="#fourth" title="Next Section"></a></li>
                <li><a href="#fifth" title="Next Section"></a></li>
            </ul>

            <div id="first" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">A place to work</span>
                            <span class="descriptiveBottom">without distraction</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="second" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Monastic environment</span>
                            <span class="descriptiveBottom">Wisconsin woodlands, natural waterfall</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="third" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Work/live studio cabins</span>
                            <span class="descriptiveBottom">designed for specific art practices</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="fourth" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Gourmet organic</span>
                            <span class="descriptiveBottom">meals brought daily to your private studio cabin</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

            </div><!-- slide --><div id="fifth" class="slide" >
                <div class="content-wrapper">
                    <div class="home-caption">
                        <a class="slink" href="#">
                            <span class="descriptiveTop">Engaging community</span>
                            <span class="descriptiveBottom">live music, lectures, group dinners</span>
                        </a>
                    </div><!-- home-caption-->
                </div><!-- content-wrapper -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>