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
                <div id="logoname">Unshaped_Ahead</div> 
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
            <div class="logo-bottom">
                <img src="http://localhost/Wordpress/wp/wp-content/themes/vryzas/imgs/logo-bottom.png" alt="logo" width="288" height="46">
            </div>
        </div>
        <div class="section-right album">

            <div class="post">
                <?php

                    $query = new WP_Query( array( 'pagename' => 'album' ) );

                    while ( $query->have_posts() ) {
                        $query->the_post();
                        the_content();
                    }
                ?>
            </div>

            <div id="playerdiv"> 
                <iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=84871240/size=large/bgcol=333333/linkcol=e99708/tracklist=false/artwork=none/transparent=true/" seamless><a href="http://unshapedahead.bandcamp.com/album/baul">Baul by Unshaped_Ahead(Dimos Vryzas)</a></iframe>
            </div>
        
        </div>
    </div>

</div>

<?php wp_footer(); ?>

</body>
</html>