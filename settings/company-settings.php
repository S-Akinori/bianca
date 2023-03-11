<?php
  //会社情報追加
  add_action( 'admin_menu', 'add_company_settings_menu' );
  function add_company_settings_menu() {
    add_menu_page( '会社情報', '会社情報', 'manage_options', 'company_settings', 'company_settings_page', '' );
    add_action( 'admin_init', 'register_company_setting' );
  }
  function company_settings_page() {
?>
<div class="wrap">
  <h2>会社情報</h2>
  <?php
  if (isset($_GET['settings-updated'])) :
    if (true == $_GET['settings-updated']) :
      echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>';
    endif;
  endif;
  ?>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
      settings_fields('company_settings_group');
      do_settings_sections('company_settings_group');
      submit_button();
    ?>
    <table class="form-table setting-table">
      <tr>
        <th><label for="company_name">会社名</label></th>
        <td colspan="2"><input name="company_name" type="text" id="company_name" value="<?php form_option( 'company_name' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_logo">ロゴ</label></th>
        <td><?php generate_upload_image_tag('company_logo', get_option('company_logo'));?></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_logo">代表写真</label></th>
        <td><?php generate_upload_image_tag('company_CEO_image', get_option('company_CEO_image'));?></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_map">Google Map(埋め込みコードを入力)</label></th>
        <td><textarea name="company_map" type="text" id="company_map" class="regular-text"><?php form_option( 'company_map' ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company_CEO_title">代表ラベル</label></th>
        <td colspan="2"><input name="company_CEO_title" type="text" id="company_CEO_title" value="<?php form_option( 'company_CEO_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_CEO">代表</label></th>
        <td><input name="company_CEO" type="text" id="company_CEO" value="<?php form_option( 'company_CEO' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_tel_title">電話番号ラベル</label></th>
        <td colspan="2"><input name="company_tel_title" type="text" id="company_tel_title" value="<?php form_option( 'company_tel_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_tel">電話番号</label></th>
        <td><input name="company_tel" type="text" id="company_tel" value="<?php form_option( 'company_tel' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_tel_title">営業時間ラベル</label></th>
        <td colspan="2"><input name="company_hours_title" type="text" id="company_hours_title" value="<?php form_option( 'company_hours_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_hours">営業時間</label></th>
        <td><textarea name="company_hours" id="company_hours" class="regular-text"><?php form_option( 'company_hours' ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company_tel_title">住所ラベル</label></th>
        <td colspan="2"><input name="company_address_title" type="text" id="company_address_title" value="<?php form_option('company_address_title'); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_address">住所</label></th>
        <td><textarea name="company_address" id="company_address" class="regular-text"><?php form_option('company_address'); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company_tel_title">定休日ラベル</label></th>
        <td colspan="2"><input name="company_dayoff_title" type="text" id="company_dayoff_title" value="<?php form_option( 'company_dayoff_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_dayoff">定休日</label></th>
        <td><input name="company_dayoff" type="text" id="company_dayoff" value="<?php form_option( 'company_dayoff' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_sub">備考</label></th>
        <td colspan="2">
        <?php            
          $content = get_option('company_info_sub');
          $editor_id = 'company_info_sub';
          $settings = array(
            'textarea_rows'	=> 5,
            'wpautop' => false
          );
          wp_editor($content, $editor_id, $settings);
        ?> 
        </td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
<?php
  }
  function register_company_setting() {
    register_setting('company_settings_group', 'company_name');
    register_setting('company_settings_group', 'company_logo');
    register_setting('company_settings_group', 'company_CEO_image');
    register_setting('company_settings_group', 'company_tel_title');
    register_setting('company_settings_group', 'company_tel');
    register_setting('company_settings_group', 'company_CEO_title');
    register_setting('company_settings_group', 'company_CEO');
    register_setting('company_settings_group', 'company_hours_title');
    register_setting('company_settings_group', 'company_hours');
    register_setting('company_settings_group', 'company_address_title');
    register_setting('company_settings_group', 'company_address');
    register_setting('company_settings_group', 'company_dayoff_title');
    register_setting('company_settings_group', 'company_dayoff');
    register_setting('company_settings_group', 'company_map');
    register_setting('company_settings_group', 'company_info_sub');
    
  }
?>