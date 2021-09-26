<?php

    include 'components/utilities.php';

    $page_uri = "contact";
    $page_title = subpage_title("Contact");
    $page_description = "";
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "";
    $videobar_subtitle_text = "";
    $structured_data = '
            [{
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Contact"
                }]
            }]';

    include 'components/header.php';



    include 'components/footer.php';

?>