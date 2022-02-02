<?php

    include 'components/utilities.php';

    $page_uri = "about";
    $page_title = subpage_title("My Story");
    $page_description = "";
    $videobar_enabled = FALSE;
    $videobar_video_file = "";
    $videobar_title_text = "";
    $videobar_subtitle_text = "";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "My Story"
                }]
            }]';

    include 'components/header.php';

    content_block(
        '/images/banners/filming.jpg',
        3,
        50,
        "body-content-text-container-right content-gradient-about-filming",
        "Starting early",
        array("My first digital adventure was learning to film and edit videos with my childhood friends. This gave me my first reason to learn how to use a computer, which quickly became my primary outlet for creativity."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/rain.jpg',
        52,
        50,
        "body-content-text-container-left content-gradient-about-rain",
        "Learning for fun",
        array("I taught myself almost everything I know over the course of countless passion projects. Writing software, building games, editing short films - every project helped me improve my skills and refine my style."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/house.jpg',
        50,
        50,
        "body-content-text-container-right content-gradient-about-house",
        "Learning for friends",
        array("The more I learned, the more I could do to help my friends. I built websites to showcase their abilities, edited their headshots, created advertisements to promote their events, and more."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/tasks.jpg',
        82,
        0,
        "body-content-text-container-left content-gradient-about-tasks",
        "Going pro",
        array("Using programming and media editing in my corporate day job whenever possible, I learned how to manage my projects professionally and deliver polished results."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/dreaming.jpg',
        17,
        50,
        "body-content-text-container-right content-gradient-about-dreaming",
        "Dreaming of a brighter future",
        array("Whether it’s inspiring hope or just bringing a smile to someone’s face, I want to use my skills to bring about positive change in the world."),
        NULL,
        NULL,
        NULL
    );

    include 'components/footer.php';

?>