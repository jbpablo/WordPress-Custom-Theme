<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>


</head>
<body>

<header>
    <div class="container">
    <!-- list menu -->
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'navbar',
                'menu_class' => 'nav-bar',
            )
        );
    ?>
    <!-- end list menu -->
    </div>
</header>
