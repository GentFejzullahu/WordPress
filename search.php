<?php get_header();?>
<div id="primary">
    <div class="container">
        <h1>search results for:<?php echo get_search_query();?></h1>
        <?php
        get_search_from();

        while(have_posts()):
            the_post();
            get_template_part('template-parts/content','search');
        endwhile;
        the_posts_pagination();
        ?>

    </div>

</div>
<?php get_footer();?>