
<style>
        .footer_para_clasees{
            background-color: #333;
            color: #ff6600;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;

            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
            
        }
    </style>

<footer class="footer_custom_class_uno">
    <!-- 1r footer wp admin-->
    <?php 
        wp_footer();
    ?>
    <!-- 1r footer wp admin fin -->

    
    <div class="footer_para_clasees">
        en el archivo footer.php hermano 
        <?php 
            $currentYear = date('Y'); // 'Y' format specifier returns the current year in four digits (e.g., 2023)
            echo "Current Year: " . $currentYear;
        ?>
    </div>
</footer>