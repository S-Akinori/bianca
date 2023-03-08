<?php
//トップページ設定追加
add_action( 'admin_menu', 'add_site_settings_menu' );
function add_site_settings_menu() {
	add_menu_page( 'トップページ設定', 'トップページ設定', 'manage_options', 'site_settings', 'site_settings_page', '' );
	add_action( 'admin_init', 'register_custom_setting' );
}
function site_settings_page() {
?>
<div class="wrap">
<h2>トップページ設定</h2>
<?php
  if (isset($_GET['settings-updated'])) :
    if (true == $_GET['settings-updated']) :
      echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>';
    endif;
  endif;
  ?>
<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php
settings_fields('custom-menu-group');
do_settings_sections('custom-menu-group');
submit_button();
?>
<table class="form-table setting-table">
	<tr>
		<th><label for="top_fv_text">キャッチコピー</label></th>
		<td colspan="2"><input name="top_fv_text" type="text" id="top_fv_text" value="<?php form_option( 'top_fv_text' ); ?>" class="regular-text" /></td>
	</tr>
	<!-- <tr>
		<th>グリッド間隔</th>
		<td colspan="2"><p><label><input name="theme_option_radio_grid_gap" type="radio" value="2" <?php checked( 2, get_option( 'theme_option_radio_grid_gap' ) ); ?> />2%</label>　<label><input name="theme_option_radio_grid_gap" type="radio" value="3" <?php checked( 3, get_option( 'theme_option_radio_grid_gap' ) ); ?> />3%</label>　<label><input name="theme_option_radio_grid_gap" type="radio" value="default" <?php checked( 'default', get_option( 'theme_option_radio_grid_gap' ) ); ?> />指定しない</label></p></td>
	</tr>
	<tr>
		<th scope="row"><label for="theme_option_head_script">head内にスクリプトを挿入する</label></th>
		<td><p><label><input name="theme_option_head_script" type="checkbox" id="theme_option_head_script" value="1" <?php checked( 1, get_option( 'theme_option_head_script' ) ); ?> />する</label></p>
			<textarea name="theme_option_head_script_source" id="theme_option_head_script_source" class="large-text code" rows="12"><?php echo esc_textarea( get_option( 'theme_option_head_script_source' ) ); ?></textarea></td>
	</tr> -->
	<tr>
		<th scope="row"><label for="media">トップ画像1</label></th>
		<td><?php
generate_upload_image_tag('top_fv_image1', get_option('top_fv_image1'));
?></td>
	</tr>
	<tr>
		<th scope="row"><label for="media">トップ画像2</label></th>
		<td><?php
generate_upload_image_tag('top_fv_image2', get_option('top_fv_image2'));
?></td>
	</tr>
	<tr>
		<th scope="row"><label for="media">トップ画像3</label></th>
		<td><?php
generate_upload_image_tag('top_fv_image3', get_option('top_fv_image3'));
?></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">メッセージ英語</label></th>
		<td colspan="2"><input name="top_message_en" type="text" id="top_message_en" value="<?php form_option('top_message_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">メッセージタイトル</label></th>
		<td colspan="2"><input name="top_message_title" type="text" id="top_message_title" value="<?php form_option('top_message_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">メッセージテキスト</label></th>
		<td colspan="2">
    <?php            
      $content = get_option('top_message_text');
      $editor_id = 'top_message_text';
      $settings = array(
        'textarea_rows'	=> 5,
        'wpautop' => false
      );
      wp_editor( $content, $editor_id, $settings );
    ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴英語</label></th>
		<td colspan="2"><input name="top_feature_en" type="text" id="top_feature_en" value="<?php form_option('top_feature_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴タイトル</label></th>
		<td colspan="2"><input name="top_feature_title" type="text" id="top_feature_title" value="<?php form_option('top_feature_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴1タイトル</label></th>
		<td colspan="2"><input name="top_feature1_title" type="text" id="top_feature1_title" value="<?php form_option('top_feature1_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴1テキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_feature1_text');
        $editor_id = 'top_feature1_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th scope="row"><label for="media">特徴1画像</label></th>
		<td><?php generate_upload_image_tag('top_feature1_image', get_option('top_feature1_image'));?></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴2タイトル</label></th>
		<td colspan="2"><input name="top_feature2_title" type="text" id="top_feature2_title" value="<?php form_option('top_feature2_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴2テキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_feature2_text');
        $editor_id = 'top_feature2_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th scope="row"><label for="media">特徴2画像</label></th>
		<td><?php generate_upload_image_tag('top_feature2_image', get_option('top_feature2_image'));?></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴3タイトル</label></th>
		<td colspan="2"><input name="top_feature3_title" type="text" id="top_feature3_title" value="<?php form_option('top_feature3_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_fv_text">特徴3テキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_feature3_text');
        $editor_id = 'top_feature3_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th scope="row"><label for="media">特徴3画像</label></th>
		<td><?php generate_upload_image_tag('top_feature3_image', get_option('top_feature3_image'));?></td>
	</tr>
</table>
<?php submit_button(); ?>
</form>
</div>
<?php
}
function register_custom_setting() {
	register_setting('custom-menu-group', 'top_fv_text');
	register_setting('custom-menu-group', 'top_fv_image1');
	register_setting('custom-menu-group', 'top_fv_image2');
	register_setting('custom-menu-group', 'top_fv_image3');
	register_setting('custom-menu-group', 'top_message_en');
	register_setting('custom-menu-group', 'top_message_title');
	register_setting('custom-menu-group', 'top_message_text');
	register_setting('custom-menu-group', 'top_feature_en');
	register_setting('custom-menu-group', 'top_feature_title');
	register_setting('custom-menu-group', 'top_feature1_title');
	register_setting('custom-menu-group', 'top_feature1_text');
	register_setting('custom-menu-group', 'top_feature1_image');
	register_setting('custom-menu-group', 'top_feature2_title');
	register_setting('custom-menu-group', 'top_feature2_text');
	register_setting('custom-menu-group', 'top_feature2_image');
	register_setting('custom-menu-group', 'top_feature3_title');
	register_setting('custom-menu-group', 'top_feature3_text');
	register_setting('custom-menu-group', 'top_feature3_image');
}
