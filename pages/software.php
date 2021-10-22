<?php

    include 'components/utilities.php';

    $page_uri = "software";
    $page_title = subpage_title("Software Development");
    $page_description = "Data processing and RESTful APIs, done with stability and efficiency.";
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "STABILITY AND EFFICIENCY";
    $videobar_subtitle_text = "";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Back-End Development"
                }]
            }]';

    include 'components/header.php';

    content_block(
        '/images/videobar.png',
        5,
        50,
        "body-content-text-container-right content-gradient-software-videobar",
        "Clean, Human-Readable Code",
        array("I strive to write code that is simple, adaptable, and easy to comprehend."),
        NULL,
        NULL,
        NULL
    );

    include 'components/footer.php';

?>