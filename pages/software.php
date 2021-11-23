<?php

    include 'components/utilities.php';

    $page_uri = "software";
    $page_title = subpage_title("Software Development");
    $page_description = "Data processing and RESTful APIs, done with stability and efficiency.";
    $videobar_video_file = "";
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
        '/images/videobar.png',
        5,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Clean and controlled",
        array("I write code that is simple, source-controlled, adaptable, and easy to maintain."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Language-agnostic",
        array("Experienced in many languagues, including C++, Python, Java, SQL, Swift, C#, and Javascript...","...and always excited to learn another!"),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        100,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Software that talks",
        array("Creating APIs, server-client software, and cross-application data integrations."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Data transformed",
        array("Building database schemas, processing data, and managing lifecycles."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Games made beautifully",
        array("Realtime interactive experiences made in Godot, Unreal, Unity, SFML, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '',
        0,
        50,
        "body-content-text-container-left content-gradient-home-timeline",
        "Get started",
        array("From web apps to desktop apps, from back-end software to video games, nothing is out of reach."),
        "body-content-button-group-left",
        "",
        array(array("Contact","contact"))
    );

    include 'components/footer.php';

?>