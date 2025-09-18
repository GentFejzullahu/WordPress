<?php
get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            if ( have_posts() ) :
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
            ?>

            <div class="container">
                <div class="archive-items">

                    <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'parts/content' );
                    endwhile;
                    ?>

                    <div class="wpdevs-pagination">
                        <div class="pages new">
                            <?php previous_posts_link( 'Newer Posts' ); ?>
                        </div>
                        <div class="pages old">
                            <?php next_posts_link( 'Older Posts' ); ?>
                        </div>
                    </div>

                </div> <!-- .archive-items -->
            </div> <!-- .container -->

            <?php
            else :
                get_template_part( 'parts/content', 'none' );
            endif;
            ?>

        </main>
    </div>
</div>

<?php get_footer(); ?>
