<?php // add the admin options page
add_action('admin_menu', 'plugin_admin_add_page');
function plugin_admin_add_page() {
add_options_page('GCS Settings Page', 'GCS Settings', 'manage_options', 'gcs-plugin', 'plugin_options_page');
}
function plugin_options_page() {
?>
<div>
<h2>GCS Settings</h2>

<form action="options.php" method="post">
<?php //settings_fields('gcs-options'); ?>
<?php //do_settings_sections('gcs-plugin'); ?>

<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>

<?php
}?>
