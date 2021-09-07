<!DOCTYPE html>

<!--               Welcome to the source code!               -->
<!--         Feel free to look around, have a blast.         -->
<!--  https://www.linkedin.com/in/chris-cavalluzzi-52b8b466  -->
<!--           https://github.com/chriscavalluzzi            -->

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="robots" content="noindex">
        <title>
            Chris Cavalluzzi
        </title>
        <script src="/scripts/external/jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="https://use.typekit.net/xvt0oki.css">
        <link rel="stylesheet" href="/styles/cavalluzzi.css">
        <script src="/scripts/navbar.js"></script>
    </head>
    <body class="font-regular">
        <navbar id="navbar">
            <navbar-row>
                <navbar-bookend></navbar-bookend>
                <navbar-item style="text-align: right;">
                    <div class="centered font-bold">CHRIS CAVALLUZZI</div>
                </navbar-item>
                <navbar-divider></navbar-divider>
                <navbar-item>
                    <div class="centered">FRONT-END DEVELOPMENT</div>
                </navbar-item>
                <navbar-item>
                    <div class="centered">BACK-END DEVELOPMENT</div>
                </navbar-item>
                <navbar-item>
                    <div class="centered">3D MODELING AND ANIMATION</div>
                </navbar-item>
                <navbar-item>
                    <div class="centered">VIDEO EDITING</div>
                </navbar-item>
                <navbar-space></navbar-space>
                <navbar-item>
                    <div class="centered font-bold">CONTACT</div>
                </navbar-item>
                <navbar-bookend></navbar-bookend>
            </navbar-row>
        </navbar>
        <videobar class="videobarheight" id="videobar-container">
            <video autoplay muted loop class="videobarvid videobarheight">
                <source src="/videos/<?php echo $videobar_video_file; ?>" type="video/mp4">
            </video>
            <videobarcontentbox class="videobarheight">
                <div class="centered">
                    <videobar-title class="font-bold"><?php echo $videobar_title_text; ?></videobar-title>
                    <videobar-subtitle><?php echo $videobar_subtitle_text; ?></videobar-subtitle>
                </div>
            </videobarcontentbox>
        </videobar>
        <contentarea>