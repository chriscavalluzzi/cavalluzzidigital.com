<?php

    include 'components/utilities.php';

    $page_uri = "web";
    $page_title = subpage_title("Web Development");
    $page_description = "Sites and apps that are modern, fast, and beautiful.";
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "THIS SITE WAS BUILT FROM SCRATCH";
    $videobar_subtitle_text = "with PHP, HTML5, CSS, JavaScript, and jQuery";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Web Development"
                }]
            }]';

    include 'components/header.php';

    content_block(
        '/images/videobar.png',
        5,
        50,
        "body-content-text-container-right content-gradient-blue-right",
        "Clean, Human-Readable Code",
        array(
            "I strive to write code that is simple, adaptable, and easy to comprehend.",
            "Open the source code for any page on this site and see for yourself."
        ),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/css_layout.png',
        100,
        50,
        "body-content-text-container-left content-gradient-black-left",
        "Mobile-Friendly, Responsive Design",
        array(
            "Let's create seamless user experiences for any screen.",
            "Try resizing this window or opening it on your favorite mobile device!"
        ),
        NULL,
        NULL,
        NULL
    );

    include 'components/footer.php';

?>