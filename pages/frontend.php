<?php
    $videobar_video_file = "test.mp4";
    $videobar_title_text = "THIS SITE WAS BUILT FROM SCRATCH";
    $videobar_subtitle_text = "with PHP, HTML5, CSS, JavaScript, and jQuery";
    include 'components/header.php';
?>
                <body-content-block>
                    <body-content-image style="background-image: url('/images/videobar.png');"></body-content-image>
                    <body-content-text-container class="body-content-text-container-right content-gradient-blue-right">
                        <body-content-text-title>
                            Clean, Human-Readable Code
                        </body-content-text-title>
                        <body-content-text-paragraph>
                            I strive to write code that is simple, adaptable, and easy to comprehend.
                        </body-content-text-paragraph>
                        <body-content-text-paragraph>
                            Open the source code for any page on this site and see for yourself.
                        </body-content-text-paragraph>
                    </body-content-text-container>
                </body-content-block>
                <body-content-block>
                    <body-content-image style="background-image: url('/images/css_layout.png');"></body-content-image>
                    <body-content-text-container class="body-content-text-container-left content-gradient-black-left">
                        <body-content-text-title>
                            Mobile-Friendly, Responsive Design
                        </body-content-text-title>
                        <body-content-text-paragraph>
                            Let's create seamless user experiences for any screen.
                        </body-content-text-paragraph>
                        <body-content-text-paragraph>
                            Try resizing this window or opening it on your favorite mobile device!
                        </body-content-text-paragraph>
                    </body-content-text-container>
                </body-content-block>
<?php
    include 'components/footer.php';
?>