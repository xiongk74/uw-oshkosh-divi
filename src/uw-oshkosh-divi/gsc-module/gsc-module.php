
<?php
class AdminSettingsPage
{
private $options;

public function __consrtuct()
{
  add_action('admin_menu',array($this,'add_plugin_page'));
  add_action('admin_init',array($this,'page_init'));
}
public function add_plugin_page()
{
  add_options_page(
    'Admin Options Page','Admin Options','manage_options',
    'admin-options-page',array($this,'create_admin_page'));
}
public function create_admin_page()
{
  $this->options = get_option('Admin_Options'); //!!!!????
  ?>
  <div class="wrap">
    <h1>Admin Options Page<h1>
    <form method="post" action="AdminOptions.php">
    <?php   settings_fields('admin_options_group'); ?> //??!!
    <?php  do_settings_sections('admin-options-page'); ?>
    <input name='submit' type'submit' value=<?php esc_attr_e('Save Changes');?>/>
    </form>
  </div>
  <?php
  }
  public function page_init()
  {
    register_settings(
      'admin_options_group',
      'admin_options',
      array($this,'sanitize')
    );
    add_settings_section(
      'Admin_settings_section',
      'Admin Settings',
      array($this,'print_section_info'),
      'admin-options-page'
    );
    add_settings_field(
      'Admin-Settings-ID',
      'Admin Settings',
      array($this,'id_number_callback'),
      'admin-options-page',
      'Admin Settings'
    );
  }
  public function sanitize($input)
  {
    $new_input = array();
    if(isset($input['Admin-Settings-ID']))
      $new_input['Admin-Settings-ID']= absint($input['Admin-Settings-ID']);

  }
  public function print_section_info()
  {
    print 'Enter your settings below:';
  }
  piublic function id_number_calback()
  {
        printf(
        '<input type="text" id="Admin-Settings-ID" name= "my_option_name[Admin-Settings-ID]"value="%s"/>',
        isset($this->option['Admin-Settings-ID']):'');
  }
  pubic function title_callback()
  {
    printf(
    '<input type="text" id="title" name= "my_option_name[title]"value="%s"/>',
    isset($this->option['title']):'');
  }
if(is_admin())
$my_settings_page = new AdminSettingsPage();
