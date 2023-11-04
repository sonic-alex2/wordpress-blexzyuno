<?php 
    get_header(); //llama a la información en el archivo hermano header.php.
?>

<div class="index_content" style="margin-top: 120px;">

    <?php
        if( have_posts()){ 
            if( is_home() /* esto es la home */ 
                    /* && ! is_front_page() */ 
                    /* si se refiere a una pagina frontal */){
                while( have_posts()){ //se recorren los post
                    the_post();
                    
                    get_template_part('content'); // llama la plantilla podria ser footer, en este caso se selecciona content (nombre archivo)
                }
            }
        }else{
            echo "no hay post from index.php";
        }

        //Muestra la barra latereral
        get_sidebar();
    ?>

</div>

<?php 
    get_footer(); //llama a la información en el archivo hermano.
?>