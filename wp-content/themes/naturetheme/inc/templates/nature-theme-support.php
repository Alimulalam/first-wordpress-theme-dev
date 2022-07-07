<h1>Nature Theme Support</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="nature-general-form">
    <?php settings_fields('nature-theme-support'); ?>
    <?php do_settings_sections('masum_nature_theme');?>
    <?php submit_button(); ?>
</form>
