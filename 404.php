<?php?>
<div id="content" class="site-content">
<div id="primary" class="content-area">
<main id="main" class="site-main">

<div class="container">
    <div class="error-404">
        <header>
            <h1>page not found</h1>
            <p>NONO WORK WORK</p>
        </header>
        <div class="error">
            <p>how are you?</p>
            <?php get_search_form();
            the_widget('WP_Widget_Recent_Posts'
        );
        array(
            'title' => 'Recent Posts',
            'number' => 3,
        )
            ?>
    </div>
</div>
</main>
</div>
</div>
<?php get_footer();?>
