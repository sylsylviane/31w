<?php

/**
 * header.php - Le modèle pour l'entête de wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>31W</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <section class="global entete__global">
            <div class="entete__titre">
                <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
                <h2><?php bloginfo('description') ?></h2>
            </div>    
            <div class="entete__nav">
                <?php wp_nav_menu(
                    array(
                        "menu" => "principal",
                        "container" => "nav"
                    )
                ); 
                get_search_form(); 
                ?>
            </div>    
        </section>
    </header>