
<!-- NAVBAR START -->
<?php get_header(); ?>
<!-- NAVBAR END -->

<!-- BANNER START -->
<section class="banner-intro bg-properties" style="background-image:url(<?php the_field('section_about_background'); ?>);">
    <div class="container">
        <h2><?php the_field('section_about_header') ?></h2>
        <p><?php the_field('section_about_paragraph') ?></p>
        <i class="fa-solid fa-arrow-down"></i>
    </div>
</section> <!-- BANNER END -->

<!-- SERVICES START-->
<section class="services">
    <div class="container">
        <div class="header-section">
            <h2><?php the_field('section_faq_header') ?></h2>
            <p><?php the_field('section_faq_text') ?></p>
        </div>

        <div class="services-grid">

            <?php
            $services = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'service',
                'orderby' => 'rand'
            ));

            while($services->have_posts()){
                $services->the_post();
            ?>

            <div class="service-card">
                <div class="service-header-flex">
                    <i class="fa-solid fa-trowel-bricks"></i>
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="service-text">
                    <p><?php the_content(); ?></p>
                </div>
            </div>

            <?php } wp_reset_postdata(); ?>

        </div>

    </div>
</section> <!-- SERVICES END -->


<!-- ABOUT START -->
<section class="faq bg-properties" style="background-image:url(<?php the_field('section_faq_background'); ?>);">
    <div class="container">
        <div class="header-section">
            <h2><?php the_field('faq_section_header') ?></h2>
        </div>
        <div class="accordion">

            <?php
            $questions = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'question',
                'orderby' => 'rand'
            ));

            while($questions->have_posts()){
                $questions->the_post();
            
            ?>

            <div class="accordion-item">
                <button class="accordion-header"><?php the_title(); ?></button>
                <div class="accordion-body">
                    <p><?php the_content(); ?></p>
                </div>
            </div>

            <?php } wp_reset_postdata(); ?>

        </div>
        <div class="further-questions">
            <p><?php the_field('faq_section_text') ?></p>
        </div>
    </div>
</section> <!-- ABOUT END -->
    
<!-- FOOTER START -->
<?php get_footer(); ?>
<!-- FOOTER END -->
