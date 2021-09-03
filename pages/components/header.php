<!DOCTYPE html>

<!--               Welcome to the source code!               -->
<!--         Feel free to look around, have a blast.         -->
<!--  https://www.linkedin.com/in/chris-cavalluzzi-52b8b466  -->
<!--           https://github.com/chriscavalluzzi            -->

<html>
    <head>
        <meta charset="utf-8"/>
        <title>
            Chris Cavalluzzi
        </title>
        <script src="/scripts/external/jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="https://use.typekit.net/xvt0oki.css">
        <link rel="stylesheet" href="/styles/cavalluzzi.css">
    </head>
    <body class="font-regular">
        <navbar>
            <navrow>
                <navbookend></navbookend>
                <navitem style="text-align: right;">
                    <div class="centered font-bold">CHRIS CAVALLUZZI</div>
                </navitem>
                <navdivider></navdivider>
                <navitem>
                    <div class="centered">FRONT-END DEVELOPMENT</div>
                </navitem>
                <navitem>
                    <div class="centered">BACK-END DEVELOPMENT</div>
                </navitem>
                <navitem>
                    <div class="centered">3D MODELING AND ANIMATION</div>
                </navitem>
                <navitem>
                    <div class="centered">VIDEO EDITING</div>
                </navitem>
                <navspace></navspace>
                <navitem>
                    <div class="centered font-bold">CONTACT</div>
                </navitem>
                <navbookend></navbookend>
            </navrow>
        </navbar>
        <titlebar class="titlebarheight">
            <video autoplay muted loop class="titlebarvid titlebarheight">
                <source src="/videos/<?php echo $titlebar_video_file; ?>" type="video/mp4">
            </video>
            <titlebarcontentbox class="titlebarheight">
                <div class="centered">
                    <titlebar-title class="font-bold"><?php echo $titlebar_title_text; ?></titlebar-title>
                    <titlebar-subtitle><?php echo $titlebar_subtitle_text; ?></titlebar-subtitle>
                </div>
            </titlebarcontentbox>
        </titlebar>
        <contentarea>