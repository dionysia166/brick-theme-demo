
<!-- NAVBAR START -->
<?php get_header(); ?>
<!-- NAVBAR END -->

<!-- WELCOME BANNER START-->
<section class="welcome-banner bg-properties" style="background-image:url(<?php the_field('section_hero_background'); ?>);">
    <!-- container start-->
    <div class="container">
        <h1><?php the_field('section_hero_Small_Header') ?></h1>
        <h2>
            <span class="title-p1"><?php the_field('section_hero_big_header_p1') ?></span>
            <span class="title-p2"><?php the_field('section_hero_big_header_p2') ?></span>
        </h2>
        <p><?php the_field('section_hero_banner_text') ?></p>
        <?php $button = get_field('section_hero_button') ?>
        <a href="<?php echo $button['url'] ?>" class="btn btn-white">
            <?php echo $button['title'] ?>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div><!-- container end -->
</section> <!-- WELCOME BANNER END-->

<!-- ABOUT START -->
<section class="about">
    <!-- container start-->
    <div class="container">
        <!-- about-flex start-->
        <div class="about-flex">
            <!-- about-img start-->
            <?php $about_img = get_field('section_about_image') ?>
            <div class="about-img">
                <img src="<?php echo esc_url($about_img['url'])?>" alt="<?php echo esc_url($about_img['alt'])?>">
            </div> <!-- about-img end -->
            <!-- about-content start-->
            <div class="about-content">
                <h2><?php the_field('section_about_header') ?></h2>
                <p><?php the_field('section_about_text') ?></p>
            </div> <!-- about-content end -->
        </div> <!-- about-flex end -->
    </div> <!-- container end -->
</section> <!-- ABOUT END -->

<!--BLOG POST START-->
<section class="blog-section bg-properties" style="background-image:url(<?php the_field('section_hero_background'); ?>);">
    <div class="container">

        <!-- header start-->
        <div class="header-section">
            <h2><?php the_field('section_blog_header') ?></h2>
            <p><?php the_field('section_blog_text') ?></p>
        </div> <!-- header end-->

        <?php
        $homepageBlogPosts = new WP_Query(
            array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'orderby' => 'rand'
            ));
		?>

        <!-- grid start -->
        <div class="blog-grid">

            <?php
            while($homepageBlogPosts->have_posts()){
                $homepageBlogPosts->the_post();
            ?>

            <!-- card start-->
            <div class="blog-card">

                <?php 
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                ?>

                <div class="image-preview" style="background-image:url(<?php echo $url ?>);"></div>
                <div class="text-preview">
                    <div class="text-preview-content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 15, " (keep reading...)"); ?></p>
                    </div>
                    <div class="date-author">
                        <div class="icons-flex">
                            <i class="fa-solid fa-calendar-days"></i>
                            <p>Date: <?php the_time('F j, Y'); ?></p>
                        </div>
                        <div class="icons-flex">
                            <i class="fa-solid fa-user"></i>
                            <p>By: <?php the_author(); ?></p>
                        </div>
                    </div>
                </div>
            </div> <!-- card end -->

            <?php
			} wp_reset_postdata();
			?>

        </div> <!-- grid end-->

    </div> <!--end of container-->
</section> <!--BLOG POST END-->

<!-- CONTACT START -->
<section class="form-section" id="form">
    <div class="container">
        <div class="header-section">
            <h2><?php the_field('section_contact_header') ?></h2>
            <p><?php the_field('section_contact_text') ?></p>
        </div>
        <div class="form-content">
            <div class="form-flex">
                <div class="contact-form">
                    <?php 
                        echo apply_shortcodes('[contact-form-7 id="95fc352" title="Contact Form Home"]');
                    ?>
                </div>
                <div class="form-img bg-properties" style="background-image:url(<?php the_field('section_form_image'); ?>);"></div>
            </div>
        </div>
    </div>
</section> <!-- CONTACT END -->

<!-- FOOTER START -->
    <?php get_footer(); ?>
<!-- FOOTER END -->


