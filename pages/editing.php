<?php

    include 'components/utilities.php';

    $page_uri = "editing";
    $page_title = subpage_title("Video and Image Editing");
    $page_description = "";
    $videobar_enabled = TRUE;
    $videobar_video_file = "editing.mp4";
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
        '/images/banners/workspace.jpg',
        12,
        50,
        "body-content-text-container-right content-gradient-editing-workspace",
        "Full-pipeline video editing",
        array("More than a decade of experience editing sequences from start to finish, including assembly, color grading, sound editing, and graphics."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/effects.jpg',
        90,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Seamless effects",
        array("Compositing, chroma keying, 3D camera tracking, particle physics, simulated lighting, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/eye.jpg',
        17,
        50,
        "body-content-text-container-right body-content-font-invert content-gradient-editing-eye",
        "Images as imagined",
        array("Versatile photo editing from subtle and natural touch-up to large-scale reconstruction and fabrication."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/logo.jpg',
        90,
        50,
        "body-content-text-container-left content-gradient-editing-logo",
        "Clean and effective graphics",
        array("Vector graphics for logos, icons, plans, maps, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/street.jpg',
        70,
        50,
        "body-content-text-container-right content-gradient-editing-street",
        "Get started",
        array("No matter what you provide, I can shape it into something beautiful."),
        "body-content-button-group-right",
        "",
        array(array("Contact","contact"))
    );

    include 'components/footer.php';

?>
