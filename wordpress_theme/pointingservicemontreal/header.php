<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointing Services</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <?php wp_head(); ?>

</head>
<body <?php body_class( is_single() ? 'single-post' : '' ); ?>>
    <!-- NAVBAR START -->
    <nav id="navbar">
        <div class="container">
            <div class="nav-flex">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
						<?php the_custom_logo(); ?>
					</a>
                </div>

                <div class="menu">
                    <?php 
                    $rules = array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'header_menu'
                    );
                    wp_nav_menu($rules);
                    ?>
                </div>

            </div>
        </div>
    </nav> <!-- NAVBAR END -->
