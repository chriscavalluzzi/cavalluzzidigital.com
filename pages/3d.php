<?php

    include 'components/utilities.php';

    $page_uri = "3d";
    $page_title = subpage_title("3D Modeling and Animation");
    $page_description = "3D modeling, rigging, animation, and rendering for use in films, games, and more.";
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "BRING YOUR WORLD TO LIFE";
    $videobar_subtitle_text = "";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "3D Modeling and Animation"
                }]
            }]';

    include 'components/header.php';

    content_block(
        '/images/ruins.jpg',
        30,
        50,
        "body-content-text-container-right body-content-font-invert content-gradient-white-right-mobileonly",
        "Realism Redefined",
        array("No detail overlooked, no corner unpolished."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/torn.jpg',
        81,
        50,
        "body-content-text-container-left",
        "All-Surface Modeling",
        array("I specialize in creating assets of any kind: Organic, hard-surface, and everything in-between."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/jack.jpg',
        20,
        50,
        "body-content-text-container-right body-content-font-invert",
        "Rigging Everything",
        array("I can bring any model to life with unique, custom-tailored armatures."),
        NULL,
        NULL,
        NULL
    );

    include 'components/footer.php';

?>