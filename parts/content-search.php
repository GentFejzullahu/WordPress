<article id="post-<?php the_id();?>">
<header>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <?php if("post"==get_post_type()):?>
        <div class="meta-info">
            <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>
             <?php if(has_category()):?>
            <p>Categories: <?php the_category(' ');?></p>
            <?php endif;?>
            <?php if(has_tag()):?>
            <p>Tags: <?php the_tags('',', ');?></p>
            <?php endif;?>
        </div>
        <?php endif;?>

</header>
<div class="container">
 <?php the_excerpt();?>
</div>
</article>