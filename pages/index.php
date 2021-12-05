<?php

    include 'components/utilities.php';

    $page_uri = "";
    $page_title = homepage_title();
    $page_description = "Creating all things digital. Media, apps, and assets for all your digital needs.";
    $videobar_enabled = TRUE;
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "CREATING ALL THINGS DIGITAL";
    $videobar_subtitle_text = "";

    include 'components/header.php';

    content_block(
        '/images/banners/landscape.jpg',
        15,
        50,
        "body-content-text-container-right",
        "Bringing virtual worlds to life",
        array("3D modeling, rigging, animation, and rendering for use in films, games, and more."),
        "body-content-button-group-right",
        "",
        array(array("3D Modeling and Animation","3D"))
    );

    content_block(
        '/images/banners/timeline.jpg',
        95,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Telling powerful stories",
        array("Everything from video editing to image editing, compositing to graphic design."),
        "body-content-button-group-left",
        "",
        array(array("Video and Image Editing","editing"))
    );

    content_block(
        '/images/banners/glog.jpg',
        3,
        50,
        "body-content-text-container-right content-gradient-home-glog",
        "Building stable and efficient apps",
        array("Writing code that is clean, stable, adaptable, and easy to understand."),
        "body-content-button-group-right",
        "",
        array(array("Software Development","software"))
    );

    content_block(
        '/images/banners/3d_view.jpg',
        70,
        50,
        "body-content-text-container-left content-gradient-home-3dview",
        "Custom websites for the modern world",
        array("Responsive and clean experiences for all devices."),
        "body-content-button-group-left",
        "",
        array(array("Website Development","web"))
    );

    content_block(
        '/images/banners/maroon_bells.jpg',
        15,
        43,
        "body-content-text-container-right content-gradient-home-maroonbells body-content-font-invert",
        "Working with a smile",
        array("My goal is to bring joy, positivity, and peace of mind to those around me."),
        "body-content-button-group-right",
        "body-content-button-invert",
        array(array("My Story","about"))
    );

    include 'components/footer.php';

?>