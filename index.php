<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vryzas WP</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<div class="container">

    <div class="row">
        <div class="section-left sidebar">
            <div id="logo">
                <div id="logoname"></div> 
                <div id="playerdiv"> 
                    <iframe id="player" scrolling="no" src="https://denovali.com/0player/player.php?playlist=denovali.com%2Fdictaphone%2Fall.xspf&skin=dictaphonehp&autoplay=true&color=000000&scrolllongnames=true&scrolltresh=135"></iframe>
                </div>
            </div> 
            <div>
                <div class="row">
                    <nav class="main-menu">
                    <?php  wp_nav_menu( array('theme_location' => 'my_main_menu') );  ?> 

                    <?php
                    if( have_posts() ):
                        while( have_posts() ): the_post();
                    ?>

                    <article>   
                        <p>Posted in <?php echo get_the_date(); ?> </p>
                        <p><?php the_content(); ?></p>
                    </article>

                    <?php 
                    endwhile;
                    else:
                    ?>

                    <p>There is nothing yet to be displayed!</p>

                    <?php endif; ?>
       
                    </nav>
                </div>
            </div>
        </div>
        <div class="section-right album">
        
            <?php

                $query = new WP_Query( array( 'pagename' => 'album' ) );

                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '<h2>'. get_the_title() .'</h2>';
                    the_content();
                }
            ?>
        
        </div>
    </div>

</div>

<?php wp_footer(); ?>

</body>
</html>