<?php

    function navbar_highlight(string $target_page_uri) {
        global $page_uri;
        if ($page_uri == $target_page_uri) {
            echo(" navbar-item-current");
        }
    }

?>
<!DOCTYPE html>

<!--               Welcome to the source code!               -->
<!--         Feel free to look around, have a blast.         -->
<!--      https://www.linkedin.com/in/chris-cavalluzzi       -->
<!--           https://github.com/chriscavalluzzi            -->

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="<?php echo($page_description); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo($page_title); ?></title>
        <link rel="stylesheet" href="https://use.typekit.net/xvt0oki.css">
        <link rel="stylesheet" href="/styles/fontello.css">
        <link rel="stylesheet" href="/styles/cavalluzzi.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <script src="/scripts/external/jquery-3.6.0.js"></script>
        <script src="/scripts/navbar.js"></script>
        <script src="/scripts/external/balance-text/jquery.balancetext.min.js"></script>
<?php
    if ($structured_data) {
        echo <<<HEREDOC
                <script type="application/ld+json">$structured_data
                </script>
        
        HEREDOC;
    }
?>
    </head>
    <body class="font-regular">
        <page-container>
            <navbar id="navbar">
                <navbar-row>
                    <navbar-bookend></navbar-bookend>
                    <a href="/" title="Home" class="navbar-item navbar-title navbar-button">
                        <centered-text-container class="font-bold">CHRIS<navbar-dynamicbreak></navbar-dynamicbreak>CAVALLUZZI</centered-text-container>
                    </a>
                    <div class="navbar-item navbar-item-persistent navbar-divider-container"><navbar-divider></navbar-divider></div>
                    <div class="navbar-item navbar-button navbar-dropdown-button" onclick="navbarToggleMenu()">
                        <centered-text-container>MENU<span class="icon-angle-down" style="margin-left: 2px;"></span></centered-text-container>
                        <navbar-dropdown>
                            <a href="/3D" title="3D Modeling and Animation" class="navbar-item navbar-button navbar-dropdown-item<?php navbar_highlight('3D'); ?>">
                                <centered-text-container>3D MODELING<navbar-dynamicbreak></navbar-dynamicbreak>AND ANIMATION</centered-text-container>
                            </a>
                            <a href="/editing" title="Video and Image Editing" class="navbar-item navbar-button navbar-dropdown-item<?php navbar_highlight('editing'); ?>">
                                <centered-text-container>VIDEO AND<navbar-dynamicbreak></navbar-dynamicbreak>IMAGE EDITING</centered-text-container>
                            </a>
                            <a href="/software" title="Software Development" class="navbar-item navbar-button navbar-dropdown-item<?php navbar_highlight('software'); ?>">
                                <centered-text-container>SOFTWARE<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                            </a>
                            <a href="/web" title="Website Development" class="navbar-item navbar-button navbar-dropdown-item<?php navbar_highlight('web'); ?>">
                                <centered-text-container>WEBSITE<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                            </a>
                            <a href="/about" title="My Story" class="navbar-item navbar-button navbar-dropdown-item<?php navbar_highlight('about'); ?>">
                                <centered-text-container>MY STORY</centered-text-container>
                            </a>
                            <a href="/contact" title="Contact" class="navbar-item navbar-button navbar-dropdown-item<?php navbar_highlight('contact'); ?>">
                                <centered-text-container>CONTACT</centered-text-container>
                            </a>
                        </navbar-dropdown>
                        <navbar-dropdown-cancel-overlay onclick="navbarDisableMenu(); stopOnclickPropagation(arguments[0]);"></navbar-dropdown-cancel-overlay>
                    </div>
                    <a href="/3D" title="3D Modeling and Animation" class="navbar-item navbar-button<?php navbar_highlight('3D'); ?>">
                            <centered-text-container>3D MODELING<navbar-dynamicbreak></navbar-dynamicbreak>AND ANIMATION</centered-text-container>
                    </a>
                    <a href="/editing" title="Video and Image Editing" class="navbar-item navbar-button<?php navbar_highlight('editing'); ?>">
                        <centered-text-container>VIDEO AND<navbar-dynamicbreak></navbar-dynamicbreak>IMAGE EDITING</centered-text-container>
                    </a>
                    <a href="/software" title="Software Development" class="navbar-item navbar-button<?php navbar_highlight('software'); ?>">
                        <centered-text-container>SOFTWARE<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                    </a>
                    <a href="/web" title="Website Development" class="navbar-item navbar-button<?php navbar_highlight('web'); ?>">
                        <centered-text-container>WEBSITE<navbar-dynamicbreak></navbar-dynamicbreak>DEVELOPMENT</centered-text-container>
                    </a>
                    <a href="/about" title="My Story" class="navbar-item navbar-button<?php navbar_highlight('about'); ?>">
                        <centered-text-container>MY<navbar-dynamicbreak></navbar-dynamicbreak>STORY</centered-text-container>
                    </a>
                    <navbar-space></navbar-space>
                    <a href="/contact" title="Contact" class="navbar-item navbar-button navbar-item-float-opposite<?php navbar_highlight('contact'); ?>">
                        <centered-text-container>CONTACT</centered-text-container>
                    </a>
                    <navbar-bookend></navbar-bookend>
                </navbar-row>
<?php
    if ($videobar_enabled) {
        echo <<<HEREDOC
                        <videobar class="videobar-height" id="videobar-container">
                            <video autoplay muted loop playsinline class="videobar-height">
                                <source src="/videos/$videobar_video_file" type="video/mp4">
                            </video>
                            <videobar-contentbox>
                                <centered-text-container>
                                    <videobar-title class="font-bold" id="videobar-title">
                                        <h1 class="balance-text">$videobar_title_text</h1>
                                    </videobar-title>
                                    <videobar-subtitle id="videobar-subtitle">$videobar_subtitle_text</videobar-subtitle>
                                </centered-text-container>
                            </videobar-contentbox>
                        </videobar>
                    </navbar>
                    <body-container class="body-container-videobar-offset">
                        <body-content>
        
        HEREDOC;
    } else {
        echo <<<HEREDOC
                    </navbar>
                    <body-container class="body-container-navbar-offset">
                        <body-content>
        
        HEREDOC;
    }
?>