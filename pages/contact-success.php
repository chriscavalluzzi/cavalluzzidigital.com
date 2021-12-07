<?php

    include 'components/utilities.php';

    $page_uri = "contact";
    $page_title = subpage_title("Contact");
    $page_description = "";
    $videobar_enabled = FALSE;
    $videobar_video_file = "";
    $videobar_title_text = "";
    $videobar_subtitle_text = "";
    $structured_data = '';

    include 'components/header.php';
?>

    <contact-form-container>
        <form class="contact-form">
            <table>
                <tr>
                    <td>
                        <contact-page-text-container>
                            <contact-page-title>Submitted!</contact-page-title>
                            <contact-page-info>Thank you for reaching out! You will receive a confirmation email shortly. If you don't see it, please check your junk and spam folders.</contact-page-info>
                        </contact-page-text-container>
                    </td>
                </tr>
            </table>
        </form>
    </contact-form-container>

<?php

    include 'components/footer.php';

?>