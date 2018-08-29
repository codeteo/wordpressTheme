<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vryzas WP</title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class() ?>>

<div class="content-area">
    <main>
        <section class="left-top">
            <div id="logo">
                <div id="logoname"></div> 
                <div id="playerdiv"> 
                    <iframe id="player" scrolling="no" src="https://denovali.com/0player/player.php?playlist=denovali.com%2Fdictaphone%2Fall.xspf&skin=dictaphonehp&autoplay=true&color=000000&scrolllongnames=true&scrolltresh=135"></iframe>
                </div>
            </div>
            <div id="nav"><img src="https://denovali.com/dictaphone/hp/nav.png"  usemap="#navMap" />
                <map name="navMap">
                <area shape="rect" coords="0,0,34,14" href="#" class="ajax" id="linknews" alt="News" title="News">
                <area shape="rect" coords="53,0,93,14" href="#" class="ajax" id="linkabout" alt="About" title="About">
                <area shape="rect" coords="111,0,164,14" href="#" class="ajax" id="linkcontact" alt="Contact" title="Contact">
            </map>
            <div id="facebook"><a href="http://www.facebook.com/dictaphonemusic" target="_blank" alt="Facebook"><img src="https://denovali.com/images/elements/void.gif"></a></div></div>
        </section>
        <section class="left-bottom"></section>
        <section class="right"></section>
    </main>
</div>

</body>
</html>