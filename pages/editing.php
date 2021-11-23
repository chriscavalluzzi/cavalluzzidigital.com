<?php

    include 'components/utilities.php';

    $page_uri = "editing";
    $page_title = subpage_title("Video and Image Editing");
    $page_description = "";
    $videobar_video_file = "";
    $videobar_title_text = "MEDIA WITH A MESSAGE";
    $videobar_subtitle_text = "";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Video and Image Editing"
                }]
            }]';

    include 'components/header.php';

    content_block(
        '',
        100,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Full-pipeline video editing",
        array("More than a decade of experience editing sequences from start to finish,<br>including assembly, color grading, sound editing, and graphics."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Seamless effects",
        array("Compositing, chroma keying, 3D camera tracking, particle physics, simulated lighting, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        100,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Images as imagined",
        array("Versatile photo editing from subtle and natural clean-up to large-scale reconstruction and fabrication."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Clean and effective graphics",
        array("Vector graphics for logos, icons, plans, maps, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Get started",
        array("No matter what you provide, I can shape it into something beautiful."),
        "body-content-button-group-right",
        "",
        array(array("Contact","contact"))
    );

    include 'components/footer.php';

?>