<?php get_header();?>
<div id="container">
    <div id="inner_container">
        <div class="imgs_container">
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri();?>/images/1.jpg" >
            </div>

            <div class="img_container">
                <img src="<?php echo get_template_directory_uri();?>/images/2.jpg" >
            </div>

            <div class="img_container">
                <img src="<?php echo get_template_directory_uri();?>/images/3.jpg" >
            </div>

        </div>
        <div id="overlay">
          <div id="left_button" class=overlay_button onclick="onLeftbutton()"><</div>  
        <div id="right_button" class=overlay_button onclick="onRightbutton()">></div>
        </div>


    </div>
</div>
<div style="text-align: center; margin-top: 20px;">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="content" class="content-area">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="hero">
            hero
</section>
<section class="services">
    <h2>services</h2>
    <div class="container">
        <div class="services">
            <h2>services</h2>
            <div class="container">
                <div class="container">
        <div class="services-item">
            <?php
            if(is_active_sidebar('services-1')) {
                dynamic_sidebar('services-1');
            }
            ?>
        </div>
  <?php
            if(is_active_sidebar('services-2')) {
                dynamic_sidebar('services-2');
            }
            ?>

                </div>
                  <?php
            if(is_active_sidebar('services-3')) {
                dynamic_sidebar('services-3');
            }
            ?>
            </div>
        </div>
    </div>

</section>
<section class="home-blog">
    <h2>Latest news</h2>
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'category_in' => array(9,10,15),
            'category__not_in' => array(1)
        );
        $postlist = new WP_Query($args);
        if($postlist->have_posts()) :
            while($postlist->have_posts()) : $postlist->the_post();
            get_template_part('parts/content', 'latest-news');
            endwhile;
            wp_reset_postdata();
        else :

                ?>
                <p>noth to dis</p>
                <?php endif;?>
                </div>
    </section>
</main>
</div>
</div>
<?php get_footer();?>