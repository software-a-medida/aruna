<?php defined('_EXEC') or die; ?>

        <footer class="d-flex align-items-center justify-content-center p-20 p-md-40 text-center" style="background-color:#e0e0e0;">
            <p>Copyright © 2021 <strong><?php echo Configuration::$web_page; ?></strong> & <a href="https://neoterre.mx" class="text-dark" target="_blank"><strong>Neoterre</strong></a> <i class="fas fa-heart" style="color:#f44336;"></i> {$lang.website} {$lang.design_by} <a href="javascript::void();" class="text-dark" target="_blank"><strong>Kuro Partners</strong></a> & {$lang.development_by} <a href="https://codemonkey.com.mx" class="text-dark" target="_blank"><strong>Code Monkey</strong></a></p>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>
