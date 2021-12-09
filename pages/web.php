<?php

    include 'components/utilities.php';

    $page_uri = "web";
    $page_title = subpage_title("Web Development");
    $page_description = "Sites and apps that are modern, fast, and beautiful.";
    $videobar_enabled = TRUE;
    $videobar_video_file = "";
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
        '/images/banners/3d_view.jpg',
        7,
        50,
        "body-content-text-container-right content-gradient-web-3dview",
        "Custom everything",
        array("Unique layouts and widgets designed specifically for your site."),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/css_layout.png',
        97,
        50,
        "body-content-text-container-left content-gradient-web-csslayout",
        "Mobile-friendly, responsive design",
        array(
            "Seamless user experiences for any screen.",
            "Try resizing this window or opening it on your favorite mobile device!"
        ),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/elements.jpg',
        7,
        50,
        "body-content-text-container-right content-gradient-web-elements",
        "Maintenance made easy",
        array(
            "Additions and modifications are simple thanks to natural element names, preprocessing functions, and intuitive code.",
            "Open the source code for any page on this site and see for yourself!"
        ),
        NULL,
        NULL,
        NULL
    );

    content_block(
        '/images/banners/responsive_side.jpg',
        40,
        50,
        "body-content-text-container-left content-gradient-home-responsive",
        "Get started",
        array("Take the first step towards creating your presence in the digital age."),
        "body-content-button-group-left",
        "",
        array(array("Contact","contact"))
    );

    include 'components/footer.php';

?>