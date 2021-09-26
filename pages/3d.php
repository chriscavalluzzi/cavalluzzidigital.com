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
        '/images/stoplight.jpg',
        75,
        50,
        "body-content-text-container-left",
        "Any-Surface Modeling",
        array("Objects, environments, and characters for films, games, and more."),
        NULL,
        NULL,
        NULL
    );

    include 'components/footer.php';

?>