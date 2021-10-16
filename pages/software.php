<?php

    include 'components/utilities.php';

    $page_uri = "backend";
    $page_title = subpage_title("Back-End Development");
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



    include 'components/footer.php';

?>