<?php
    //deshabilita el editor de gutembert
    add_filter('use_block_editor_for_post', '__return_false', 10);

    #Agrega la opcion de poder crear un menu desde el admin
    register_nav_menu('primary_menu','Menu principal');


    //función que agrega estilos y javascript.
    function blexzyuno_extras(){
        wp_enqueue_style('nav',get_template_directory_uri() . "/nav.css",'',false,'all');
        wp_enqueue_style('body',get_template_directory_uri() . "/body.css",'',false,'all');
        wp_enqueue_script('javascript_extra',get_template_directory_uri() . "/javascript_extra.js",'',false,false /* lo carga en el header */);
    }
    //hook de estilos se debe de enviar el primer parámetro "wp_enqueue_scripts"
    add_action('wp_enqueue_scripts','blexzyuno_extras');

?>