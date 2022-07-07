<h1>Nature Sidebar Options</h1>
<?php settings_errors(); ?>
<?php 
    $ProfilePicture = esc_attr( get_option('profile_picture'));
    $firstName = esc_attr( get_option('first_name'));
	$lastName = esc_attr( get_option('last_name'));
    $fullName = $firstName .' '. $lastName;
    $description = esc_attr( get_option('user_description'));
?>
<div class="nature-sidebar-preview">
    <div class="nature-sidebar">
        <div class="image-container">
            <div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $ProfilePicture; ?>);">
            </div>
        </div>
        <h1 class="nature-username"><?php print $fullName; ?></h1>
        <h2 class="nature-description"><?php print $description; ?></h2>
        <div class="icons-wrapper"></div>
    </div>
</div>
<form method="post" action="options.php" class="nature-general-form">
    <?php settings_fields('nature_settings_group'); ?>
    <?php do_settings_sections('masum-nature');?>
    <?php submit_button(); ?>
</form>
