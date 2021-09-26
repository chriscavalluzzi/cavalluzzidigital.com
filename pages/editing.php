<?php

    include 'components/utilities.php';

    $page_uri = "editing";
    $page_title = subpage_title("Video and Image Editing");
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
                    "name": "Video and Image Editing"
                }]
            }]';

    include 'components/header.php';



    include 'components/footer.php';

?>