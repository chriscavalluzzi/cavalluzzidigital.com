<?php

    include 'components/utilities.php';

    $page_uri = "software";
    $page_title = subpage_title("Software Development");
    $page_description = "Data processing and RESTful APIs, done with stability and efficiency.";
    $videobar_enabled = TRUE;
    $videobar_video_file = "software.mp4";
    $videobar_title_text = "STABILITY AND EFFICIENCY";
    $videobar_subtitle_text = "";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Software Development"
                }]
            }]';

    include 'components/header.php';

    content_block(
        '/images/banners/diff.jpg',
        4,
        50,
        "body-content-text-container-right content-gradient-software-diff",
        "Clean and controlled",
        array("I write code that is simple, source-controlled, adaptable, and easy to maintain."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/languages.jpg',
        76,
        50,
        "body-content-text-container-left content-gradient-software-languages",
        "Language-agnostic",
        array("Experienced in many languagues, including C++, Python, Java, SQL, PHP, Swift, C#, and Javascript.","Ready to use the best language for the task at hand."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/api.jpg',
        8,
        50,
        "body-content-text-container-right content-gradient-software-api",
        "Software that talks",
        array("Creating APIs, server-client software, and cross-application data integrations."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/database.jpg',
        44,
        50,
        "body-content-text-container-left content-gradient-software-database",
        "Data transformed",
        array("Building database schemas, processing data, and managing lifecycles."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/games.jpg',
        8,
        50,
        "body-content-text-container-right content-gradient-software-games",
        "Games made beautifully",
        array("Realtime interactive experiences made in Godot, Unreal, Unity, SFML, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/main.jpg',
        72,
        50,
        "body-content-text-container-left content-gradient-software-main",
        "Get started",
        array("From web apps to desktop apps, from back-end software to video games, nothing is out of reach."),
        "body-content-button-group-left",
        "",
        array(array("Contact","contact"))
    );

    include 'components/footer.php';

?>