<?php

function homepage_title() {
    return "Cavalluzzi Digital, LLC";
}

function subpage_title(string $page_name) {
    return $page_name . " | " . homepage_title();
}

function content_block(
        string $img_path,
        int $bg_pos_x,
        int $bg_pos_y,
        string $text_classes,
        string $title,
        array $paragraphs,
        string $button_group_class,
        string $button_class,
        array $buttons
    ) {
    
    $paragraph_markup = '';
    for($i = 0; $i < count($paragraphs); $i++) {
        $paragraph_markup .= <<<HEREDOC

                                <body-content-text-paragraph>
                                    $paragraphs[$i]
                                </body-content-text-paragraph>
        HEREDOC;
    }

    $button_markup = <<<HEREDOC
        <body-content-button-group class="$button_group_class">

    HEREDOC;
    for($i = 0; $i < count($buttons); $i++) {
        $button_markup .= <<<HEREDOC
                                    <body-content-button onclick="navbarNavigate('{$buttons[$i][1]}')" class="$button_class">
                                        {$buttons[$i][0]}<span class="icon-angle-right"></span>
                                    </body-content-button>

        HEREDOC;
    }
    $button_markup .= <<<HEREDOC
                            </body-content-button-group>
    HEREDOC;
    
    echo <<<HEREDOC

                    <body-content-block>
                        <body-content-image style="background-image: url('$img_path'); background-position: $bg_pos_x% $bg_pos_y%;"></body-content-image>
                        <body-content-text-container class="$text_classes">
                            <body-content-text-title>
                                $title
                            </body-content-text-title>$paragraph_markup
                        $button_markup
                        </body-content-text-container>
                    </body-content-block>
    HEREDOC;
}

?>