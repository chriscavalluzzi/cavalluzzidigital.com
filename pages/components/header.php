<!DOCTYPE html>

<!--               Welcome to the source code!               -->
<!--         Feel free to look around, have a blast.         -->
<!--  https://www.linkedin.com/in/chris-cavalluzzi-52b8b466  -->
<!--           https://github.com/chriscavalluzzi            -->

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Chris Cavalluzzi
        </title>
        <script src="/scripts/external/jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="https://use.typekit.net/xvt0oki.css">
        <link rel="stylesheet" href="/styles/fontello.css">
        <link rel="stylesheet" href="/styles/cavalluzzi.css">
        <script src="/scripts/navbar.js"></script>
    </head>
    <body class="font-regular">
        <navbar id="navbar">
            <navbar-row>
                <navbar-bookend></navbar-bookend>
                <navbar-item class="navbar-title navbar-button" onclick="navbarNavigate('')">
                    <centered-text-container class="font-bold">CHRIS<navbar-dynamicbreak></navbar-dynamicbreak>CAVALLUZZI</centered-text-container>
                </navbar-item>
                <navbar-item class="navbar-item-persistent"><navbar-divider></navbar-divider></navbar-item>
                <navbar-item class="navbar-button navbar-dropdown-button" onclick="navbarToggleMenu()">
                    <centered-text-container>MENU<span class="icon-angle-down" style="margin-left: 2px;"></span></centered-text-container>
                    <navbar-dropdown>
                        <navbar-item class="navbar-button navbar-dropdown-item" onclick="navbarNavigate('frontend')">
                            <centered-text-container>FRONT-END<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                        </navbar-item>
                        <navbar-item class="navbar-button navbar-dropdown-item" onclick="navbarNavigate('backend')">
                            <centered-text-container>BACK-END<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                        </navbar-item>
                        <navbar-item class="navbar-button navbar-dropdown-item" onclick="navbarNavigate('3d')">
                            <centered-text-container>3D MODELING<navbar-dynamicbreak></navbar-dynamicbreak>AND ANIMATION</centered-text-container>
                        </navbar-item>
                        <navbar-item class="navbar-button navbar-dropdown-item" onclick="navbarNavigate('editing')">
                            <centered-text-container>VIDEO AND<navbar-dynamicbreak></navbar-dynamicbreak>IMAGE EDITING</centered-text-container>
                        </navbar-item>
                        <navbar-item class="navbar-button navbar-dropdown-item" onclick="navbarNavigate('contact')">
                            <centered-text-container>CONTACT</centered-text-container>
                        </navbar-item>
                    </navbar-dropdown>
                </navbar-item>
                <navbar-item class="navbar-button" onclick="navbarNavigate('frontend')">
                    <centered-text-container>FRONT-END<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                </navbar-item>
                <navbar-item class="navbar-button" onclick="navbarNavigate('backend')">
                    <centered-text-container>BACK-END<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                </navbar-item>
                <navbar-item class="navbar-button" onclick="navbarNavigate('3d')">
                    <centered-text-container>3D MODELING<navbar-dynamicbreak></navbar-dynamicbreak>AND ANIMATION</centered-text-container>
                </navbar-item>
                <navbar-item class="navbar-button" onclick="navbarNavigate('editing')">
                    <centered-text-container>VIDEO AND<navbar-dynamicbreak></navbar-dynamicbreak>IMAGE EDITING</centered-text-container>
                </navbar-item>
                <navbar-space></navbar-space>
                <navbar-item class="navbar-button navbar-item-float-opposite" onclick="navbarNavigate('contact')">
                    <centered-text-container>CONTACT</centered-text-container>
                </navbar-item>
                <navbar-bookend></navbar-bookend>
            </navbar-row>
        </navbar>
        <videobar class="videobarheight" id="videobar-container">
            <video autoplay muted loop class="videobarvid videobarheight">
                <source src="/videos/<?php echo $videobar_video_file; ?>" type="video/mp4">
            </video>
            <videobarcontentbox class="videobarheight">
                <centered-text-container>
                    <videobar-title class="font-bold" id="videobar-title"><?php echo $videobar_title_text; ?></videobar-title>
                    <videobar-subtitle id="videobar-subtitle"><?php echo $videobar_subtitle_text; ?></videobar-subtitle>
                </centered-text-container>
            </videobarcontentbox>
        </videobar>
        <body-container>
            <body-content>