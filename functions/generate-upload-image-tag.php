<?php
//ファイルアップローダー出力関数
function generate_upload_image_tag( $name, $value ){ ?>
	<input name="<?php echo $name; ?>" type="text" value="<?php echo $value; ?>" />
	<input type="button" name="<?php echo $name; ?>_slect" value="選択" />
	<input type="button" name="<?php echo $name; ?>_clear" value="クリア" />
	<div id="<?php echo $name; ?>_thumbnail" class="uploded-thumbnail">
		<?php
if( $value ){
	$value_id = attachment_url_to_postid( $value );
	$value_url = wp_get_attachment_image_src( $value_id, 'thumbnail' );
	echo '<p><img src="' .  $value_url[0] . '" alt="選択中の画像"></p>';
}
?>
	</div>
	<script type="text/javascript">
		(function ($) {
			var custom_uploader;
			$("input:button[name=<?php echo $name; ?>_slect]").click(function(e) {
				e.preventDefault();
				if (custom_uploader) {
					custom_uploader.open();
					return;
				}
				custom_uploader = wp.media({
					title: "画像を選択してください",
					/* ライブラリの一覧を画像のみにする */
					library: {
						type: "image"
					},
					button: {
						text: "画像の選択"
					},
					/* 複数選択 */
					multiple: false
				});
				custom_uploader.on("select", function() {
					var images = custom_uploader.state().get("selection");
					/* file の中に選択された画像の各種情報が入っている */
					images.each(function(file){
						/* テキストフォームと表示されたサムネイル画像があればクリア */
						$("input:text[name=<?php echo $name; ?>]").val("");
						$("#<?php echo $name; ?>_thumbnail").empty();
						/* テキストフォームに画像の URL を表示 */
						$("input:text[name=<?php echo $name; ?>]").val(file.attributes.sizes.full.url);
						/* プレビュー用に選択されたサムネイル画像を表示 */
						$("#<?php echo $name; ?>_thumbnail").append('<img src="'+file.attributes.sizes.thumbnail.url+'" />');
					});
				});
				custom_uploader.open();
			});
			/* クリアボタンを押した時の処理 */
			$("input:button[name=<?php echo $name; ?>_clear]").click(function() {
				$("input:text[name=<?php echo $name; ?>]").val("");
				$("#<?php echo $name; ?>_thumbnail").empty();
			});
		})(jQuery);
	</script>
<?php
}

//メディアアップローダ スクリプト呼び出し
function my_admin_scripts() {
  wp_enqueue_media();
}
add_action('admin_print_scripts', 'my_admin_scripts');