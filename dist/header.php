<!DOCTYPE html>
<html <?php language_attributes(); ?>">
<head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="assets/img/favicon.png" rel="icon">
    <?php wp_meta(); ?>
    <?php wp_head(); ?>
</head>
<body>
<header class="">
    <div class="header w-screen flex justify-between items-center z-50">
        <div class="text-black/75 text-xl font-bold flex items-center">
              <div class="h-10 w-10 bg-[#e5e5e5] rounded-full mr-2">
                  <?php
                   if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } else {
                        bloginfo('name');
                    };
                  ?>
              </div>
             <?php
              bloginfo('name');
             ?>
        </div>
        <!-- navigation menu-->
        <nav class="lg:block hidden text-sm font-normal">
            <?php
                if(has_nav_menu('primary-menu')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                            'container_class' => '',
                            'menu_class' => 'flex gap-4 items-center space-x-2 text-black',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_before' => '<span class="hover:text-[#007bff]">',
                            'link_after' => '</span>',
                        )
                    );
                }
            ?>
        </nav>
        <!-- mobile menu-->
        <div class="lg:hidden block">
            <ion-icon class="hamburger text-[#007bff] cursor-pointer" name="grid-outline"></ion-icon>
        </div>
    </div>
    <aside class="mobile-menu -translate-x-[-100%] duration-500 transition-all max-lg:block8 min-h-screen w-full h-screen bg-[#007bff] top-0 left-0 z-20 fixed">
        <div class="bg-black/80 w-full h-full relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Hossana.jpg" class="w-full h-full object-cover -z-10 absolute" alt="Hossanadev">
            <div class="text-white text-lg font-semibold absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <?php
                if (has_nav_menu('primary-menu')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                            'container_class' => '',
                            'menu_class' => 'flex flex-col text-white items-center space-y-6',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_before' => '<span class="hover:text-yellow-600">',
                            'link_after' => '</span>',
                        )
                    );
                }
                ?>
            </div>
        </div>
    </aside>
</header>
<main>