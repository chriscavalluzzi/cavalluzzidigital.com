<?php

    include 'components/utilities.php';

    $page_uri = "about";
    $page_title = subpage_title("My Story");
    $page_description = "";
    $videobar_enabled = TRUE;
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "KINDNESS ABOVE ALL ELSE";
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



    include 'components/footer.php';

?>