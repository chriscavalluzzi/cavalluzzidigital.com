<?php

    include 'components/utilities.php';

    $page_uri = "contact";
    $page_title = subpage_title("Contact");
    $page_description = "";
    $videobar_video_file = "";
    $videobar_title_text = "OUR JOURNEY STARTS HERE";
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
?>

    <contact-form-container>
        <form class="contact-form" action="pages/contact-form-submit.php" method="POST">
            <table>
                <tr>
                    <td class="contact-form-label-container">
                        <label for="email">
                            Email address
                        </label>
                    </td>
                    <td class="contact-form-input-container">
                        <input name="email" id="email" type="email" required="true" size="30">
                    </td>
                </tr>
                <tr>
                    <td class="contact-form-label-container">
                        <label for="email-confirmation">
                            Confirm email address
                        </label>
                    </td>
                    <td class="contact-form-input-container">
                        <input name="email-confirmation" id="email-confirmation" type="email" required="true" size="30">
                    </td>
                </tr>
                <tr>
                    <td class="contact-form-label-container">
                        <label for="name">
                            Your name
                        </label>
                    </td>
                    <td class="contact-form-input-container">
                        <input name="name" id="name" type="text" required="true" size="30">
                    </td>
                </tr>
                <tr>
                    <td class="contact-form-label-container">
                        <label for="phone">
                            Phone number (optional)
                        </label>
                    </td>
                    <td class="contact-form-input-container">
                        <input name="phone" id="phone" type="tel" size="30">
                    </td>
                </tr>
                <tr>
                    <td class="contact-form-label-container">
                        <label for="subject">
                            Subject
                        </label>
                    </td>
                    <td class="contact-form-input-container">
                        <input name="subject" id="subject" type="text" required="true" class="full-size">
                    </td>
                </tr>
                <tr>
                    <td class="contact-form-label-container">
                        <label for="message">
                            Message
                        </label>
                    </td>
                    <td class="contact-form-input-container">
                        <textarea name="message" id="message" required="true" class="full-size"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </contact-form-container>

<?php

    include 'components/footer.php';

?>