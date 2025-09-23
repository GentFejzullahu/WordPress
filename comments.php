<?php
if(!comments_open() && get_comments_number()) {
    return;
}

?>
<div class="comments-area" id="comments">
<?php
 if(have_comments());
?>
<h2 class="comments-title">
    <?php
    $comments_number=get_comments_number();
    if('1' === $comments_number){
        printf(esc_html__('One thought on &ldquo;%s&rdquo;','wp-devs'),get_the_title());
    }else{
        printf(
            _nc(
                '%1$s thought on &ldquo;%2$s&rdquo;',
                '%1$s thoughts on &ldquo;%2$s&rdquo;',
                $comments_number,
                'comment title',
                'twentysixteen'
            ),
            number_format_i18n($comments_number),
            get_the_title();
        );
    }
    ?>
</h2>
<?php the_comments_navigation(); ?>
<ol class="comment-list">
<?php

    wp_list_comments(
        array(
            'style'=>'ol',
            'short_ping'=>true,
            'avatar_size'=>42,
        )
    );
    
?>
</ol>
<?php endif;?>

<?php (!comments_open() && get_comments_number()): ?>
<p class="no-comments"><?php _e('Comments are closed.','twentysixteen');?></p>
<?php endif;?>

<?php
comment_form(
   array(
    'title_reply_before'=>'<h2 id="reply-title" class="comment-reply-title">',
    'title_reply_after'=>'</h2>',
   )
   
);
?>
</div>