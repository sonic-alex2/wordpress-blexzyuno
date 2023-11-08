<?php 
    get_header(); //llama a la información en el archivo hermano header.php.
?>

<?php
        if (have_posts()) {
            while(have_posts()){

                the_post();

                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                }

                echo "<!-- inicio de titulo de pagina -->";
                the_title();
                echo "<!-- fin de titulo de la pagina -->";

                echo "<!-- inicio de contenido de pagina -->";
                the_content();
                echo "<!-- fin de contenido de pagina -->";


                echo "<!-- inicio links de pagina -->";
                wp_link_pages(
                    array(
                        "before" => "bef",
                        "after" => "aft",
                        "link_before" => "lin_bef",
                        "link_after" => "lin_aft",
                        "separator" => " - ",
                    )
                );
                echo "<!-- fin links de pagina -->";

                echo "<!-- inicio de comentarios de pagina -->";
                if(comments_open() || get_comments_number()/* contador de comentarios */ ){
                    comments_template();
                    
                }
                echo "<!-- fin de comentarios de pagina -->";
            }
        }
    
    
    ?>

<?php 
    get_footer(); //llama a la información en el archivo hermano.
?>