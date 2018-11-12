<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vryzas WP</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<div class="wrapper">

        <div class="section-left sidebar">
            <div id="logo">
                <div id="logoname">Unshaped_Ahead</div> 
            </div> 
            <div class="row main-menu-no-wrap">
                <nav class="main-menu">
                <?php  wp_nav_menu( array('theme_location' => 'my_main_menu') );  ?> 

                <?php
                if( have_posts() ):
                    while( have_posts() ): the_post();
                ?>

                <?php 
                endwhile;
                else:
                ?>

                <p>There is nothing yet to be displayed!</p>

                <?php endif; ?>
    
                </nav>

                <div class="icon-right">
                    <span style="font-size: 1.3em;margin-right:10px;">
                        <a href="https://www.facebook.com/UnshapedAhead/" style="border-bottom: none;" target="_blank">
                            <i class="fab fa-facebook-f icon-1"></i>
                        </a>
                    </span>
                    <span style="font-size: 1.3em;margin-right:10px;">
                        <a href="https://www.youtube.com/user/dimovryz" style="border-bottom: none;" target="_blank">
                            <i class="fab fa-youtube icon-2"></i>
                        </a>
                    </span>
                </div>
            </div>

            <article class="clearfix" style="margin-left:15px;">   
                <p><?php the_content(); ?></p>
            </article>

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

<?php wp_footer(); ?>

</body>
</html>