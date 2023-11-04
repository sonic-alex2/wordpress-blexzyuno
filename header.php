<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            wp_title(' - ',true,"right");
            bloginfo('name');
        ?>
    </title>
    <!-- wp-head -->
    <?php wp_head(); ?>
    <!-- wp-head end -->
    <style>
        .all_content{
            /* llama a la función "custom_colors_in_settings" */
            background-color: <?php echo get_theme_mod('custom_colors_in_settings'); ?>;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <a href="<?php echo esc_url( home_url('/')) ?>"> <?php bloginfo('name'); ?></a>
            <?php
                if (has_nav_menu('primary_menu')) {//Usa la ubicacion del menu creado en functions.php
                    wp_nav_menu(
                        array(
                            "theme_location" => "primary_menu", //Usa la ubicacion del menu creado en functions.php
                            "container_class" => "primary_menu_container_class_custom", //Esta clase se agrega a un div
                            "menu_class" => "primary_menu_classes", //Esta clase se agrega a UL dentro del div de arriba.
                        )
                    );
                }
            ?>
            <!-- Si no esta habilitado en function.php por lo menus un Menu no muestra nada -->
        </nav>
    </header>


</body>