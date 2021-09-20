<?php
    $page_title = "Cavalluzzi Digital, LLC";
    $page_description = "Creating all things digital. Media, apps, and assets for all your digital needs.";
    $videobar_video_file = "home_page.mp4";
    $videobar_title_text = "CREATING ALL THINGS DIGITAL";
    $videobar_subtitle_text = "";
    include 'components/header.php';
?>
                <body-content-block>
                    <body-content-image style="background-image: url('/images/frame_claim.jpg'); background-position: 5% 50%;"></body-content-image>
                    <body-content-text-container class="body-content-text-container-right content-gradient-black-right">
                        <body-content-text-title>
                            Building stable and efficient apps
                        </body-content-text-title>
                        <body-content-text-paragraph>
                            Writing code that is clean, stable, adaptable, and easy to understand.
                        </body-content-text-paragraph>
                        <body-content-button-group class="body-content-button-group-right">
                            <body-content-button onclick="navbarNavigate('frontend')">
                                Front-End Development<span class="icon-angle-right"></span>
                            </body-content-button>
                            <body-content-button onclick="navbarNavigate('backend')">
                                Back-End Development<span class="icon-angle-right"></span>
                            </body-content-button>
                        </body-content-button-group>
                    </body-content-text-container>
                </body-content-block>
                <body-content-block>
                    <body-content-image style="background-image: url('/images/stoplight.jpg'); background-position: 75% 50%;"></body-content-image>
                    <body-content-text-container class="body-content-text-container-left">
                        <body-content-text-title>
                            Bringing virtual worlds to life
                        </body-content-text-title>
                        <body-content-text-paragraph>
                            3D modeling, rigging, animation, and rendering for use in films, games, and more.
                        </body-content-text-paragraph>
                        <body-content-button-group class="body-content-button-group-left">
                            <body-content-button onclick="navbarNavigate('3d')">
                                3D Modeling and Animation<span class="icon-angle-right"></span>
                            </body-content-button>
                        </body-content-button-group>
                    </body-content-text-container>
                </body-content-block>
                <body-content-block>
                    <body-content-image style="background-image: url('/images/timeline.jpg'); background-position: 15% 50%;"></body-content-image>
                    <body-content-text-container class="body-content-text-container-right content-gradient-black-right">
                        <body-content-text-title>
                            Telling powerful stories
                        </body-content-text-title>
                        <body-content-text-paragraph>
                            Everything from video editing to image editing, compositing to graphic design.
                        </body-content-text-paragraph>
                        <body-content-button-group class="body-content-button-group-right">
                            <body-content-button onclick="navbarNavigate('editing')">
                                Video and Image Editing<span class="icon-angle-right"></span>
                            </body-content-button>
                        </body-content-button-group>
                    </body-content-text-container>
                </body-content-block>
                <body-content-block>
                    <body-content-image style="background-image: url('/images/view.jpg'); background-position: 75% 43%;"></body-content-image>
                    <body-content-text-container class="body-content-text-container-left content-gradient-white-left body-content-font-invert">
                        <body-content-text-title>
                            Kindness above all else
                        </body-content-text-title>
                        <body-content-text-paragraph>
                            I work with the goal of bringing joy, positivity, and peace of mind to those around me.
                        </body-content-text-paragraph>
                        <body-content-button-group class="body-content-button-group-left">
                            <body-content-button onclick="navbarNavigate('editing')" class="body-content-button-invert">
                                My Story<span class="icon-angle-right"></span>
                            </body-content-button>
                        </body-content-button-group>
                    </body-content-text-container>
                </body-content-block>
<?php
    include 'components/footer.php';
?>