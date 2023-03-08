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
        <th scope="row"><label for="company_tel">電話番号</label></th>
        <td><input name="company_tel" type="text" id="company_tel" value="<?php form_option( 'company_tel' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company_map">Google Map(埋め込みコードを入力)</label></th>
        <td><textarea name="company_map" type="text" id="company_map" class="regular-text"><?php form_option( 'company_map' ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company_info_title_1">項目1タイトル</label></th>
        <td colspan="2"><input name="company_info_title_1" type="text" id="company_info_title_1" value="<?php form_option( 'company_info_title_1' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_text_1">項目1テキスト</label></th>
        <td colspan="2"><input name="company_info_text_1" type="text" id="company_info_text_1" value="<?php form_option( 'company_info_text_1' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_title_2">項目2タイトル</label></th>
        <td colspan="2"><input name="company_info_title_2" type="text" id="company_info_title_2" value="<?php form_option( 'company_info_title_2' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_text_2">項目2テキスト</label></th>
        <td colspan="2"><input name="company_info_text_2" type="text" id="company_info_text_2" value="<?php form_option( 'company_info_text_2' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_title_3">項目3タイトル</label></th>
        <td colspan="2"><input name="company_info_title_3" type="text" id="company_info_title_3" value="<?php form_option( 'company_info_title_3' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_text_3">項目3テキスト</label></th>
        <td colspan="2"><input name="company_info_text_3" type="text" id="company_info_text_3" value="<?php form_option( 'company_info_text_3' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_title_4">項目4タイトル</label></th>
        <td colspan="2"><input name="company_info_title_4" type="text" id="company_info_title_4" value="<?php form_option( 'company_info_title_4' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company_info_text_4">項目4テキスト</label></th>
        <td colspan="2"><input name="company_info_text_4" type="text" id="company_info_text_4" value="<?php form_option( 'company_info_text_4' ); ?>" class="regular-text" /></td>
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
    register_setting('company_settings_group', 'company_tel');
    register_setting('company_settings_group', 'company_map');
    register_setting('company_settings_group', 'company_info_title_1');
    register_setting('company_settings_group', 'company_info_text_1');
    register_setting('company_settings_group', 'company_info_title_2');
    register_setting('company_settings_group', 'company_info_text_2');
    register_setting('company_settings_group', 'company_info_title_3');
    register_setting('company_settings_group', 'company_info_text_3');
    register_setting('company_settings_group', 'company_info_title_4');
    register_setting('company_settings_group', 'company_info_text_4');
    register_setting('company_settings_group', 'company_info_sub');
    
  }
?>