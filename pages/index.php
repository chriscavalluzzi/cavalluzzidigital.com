<?php

    include 'components/utilities.php';

    $page_title = "Cavalluzzi Digital, LLC";
    $page_description = "Creating all things digital. Media, apps, and assets for all your digital needs.";
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "CREATING ALL THINGS DIGITAL";
    $videobar_subtitle_text = "";

    include 'components/header.php';

    content_block(
        '/images/frame_claim.jpg',
        5,
        50,
        "body-content-text-container-right content-gradient-black-right",
        "Building stable and efficient apps",
        array("Writing code that is clean, stable, adaptable, and easy to understand."),
        "body-content-button-group-right",
        "",
        array(array("Front-End Development","frontend"),array("Back-End Development","backend"))
    );

    content_block(
        '/images/stoplight.jpg',
        75,
        50,
        "body-content-text-container-left",
        "Bringing virtual worlds to life",
        array("3D modeling, rigging, animation, and rendering for use in films, games, and more."),
        "body-content-button-group-left",
        "",
        array(array("3D Modeling and Animation","3d"))
    );

    content_block(
        '/images/timeline.jpg',
        15,
        50,
        "body-content-text-container-right content-gradient-black-right",
        "Telling powerful stories",
        array("Everything from video editing to image editing, compositing to graphic design."),
        "body-content-button-group-right",
        "",
        array(array("Video and Image Editing","editing"))
    );

    content_block(
        '/images/view.jpg',
        75,
        43,
        "body-content-text-container-left content-gradient-white-left body-content-font-invert",
        "Kindness above all else",
        array("I work with the goal of bringing joy, positivity, and peace of mind to those around me."),
        "body-content-button-group-left",
        "body-content-button-invert",
        array(array("My Story","about"))
    );

    include 'components/footer.php';

?>