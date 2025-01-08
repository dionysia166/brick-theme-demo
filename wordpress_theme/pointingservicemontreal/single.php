<?php get_header(); ?>

<?php 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
?>

<section class="small-hero bg-properties" style="background-image:url(<?php echo $url ?>);">
    <div class="container">
        <div class="blog-header">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</section>

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();  
?>

<section class="blog-post">
    <div class="container">
        <div class="blogpost-flex">
            <div class="blogpost-left">
                <div class="blog-data">
                    <div class="blog-author">
                        <i class="fa-regular fa-user"></i>
                        <p class="author"><?php the_author(); ?></p>
                    </div>
                    <div class="blog-date">
                        <i class="fa-regular fa-calendar-days"></i>
                        <p><?php the_time('F j, Y'); ?></p>
                    </div>
                </div>
                <div class="text-editor-content"><?php the_content(); ?></div>
            </div>
            <div class="blogpost-right">
                <div class="tag-boxes">
                    <p>Tags:</p>
                    <?php $tags = get_the_tags(); ?>
                    <div class="tags">
                        <?php if ($tags) {
                            foreach ($tags as $tag) { ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
                            <?php }
                        } else {
                            echo '<p>No tags found for this post.</p>';
                        } ?>
                    </div>
                </div>
                <div class="article-box">
                    <p>Read more articles:</p>
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="btn btn-orange">
                        <i class="fa-solid fa-arrow-left"></i>    
                        <?php echo get_the_title($prev_post->ID); ?>
                    </a>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="btn btn-orange">
                        <?php echo get_the_title($next_post->ID); ?>
                        <i class="fa-solid fa-arrow-right"></i>   
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
        }
    }
?>

<?php get_footer(); ?>