
                </body-content>
            </body-container>
<?php
    if ($videobar_enabled) {
        echo <<<HEREDOC
                    <footer class="body-container-videobar-offset">
        HEREDOC;
    } else {
        echo <<<HEREDOC
                    <footer class="body-container-navbar-offset">
        HEREDOC;
    }
?>
                <a href="https://github.com/chriscavalluzzi" target="_blank" rel="noopener noreferrer" class="footer-social-link social-link-github"></a>
                <a href="https://www.linkedin.com/in/chris-cavalluzzi" target="_blank" rel="noopener noreferrer" class="footer-social-link social-link-linkedin"></a>
                <footer-company-logo></footer-company-logo>
                <footer-company-text>
                    Cavalluzzi Digital, LLC<br>
                    <a class="footer-company-email-link" href="mailto:contact@cavalluzzidigital.com">contact@cavalluzzidigital.com</a>
                </footer-company-text>
            </footer>
        </page-container>
    </body>
</html>