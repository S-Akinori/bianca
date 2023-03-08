<?php
// カテゴリー一覧ページの新規追加エリアに要素を追加するフック
add_action( 'menus-cat_add_form_fields', 'my_category_add_form_fields' );
function my_category_add_form_fields( $taxonomy ) {
  ?>
  <div class="form-field form-required term-image-wrap">
    <label for="category-image">画像(URL)</label>
    <input name="category-image" id="category-image" type="text" value="" size="40" aria-required="true"/>
    <p>サムネイル用の画像を設定します。※写真は縦横比1:1になるようにしてください</p>
    <input type="button" name="image_select" value="選択" />
    <input type="button" name="image_clear" value="クリア" />
    <div id="image_thumbnail" class="uploded-thumbnail">
    </div>
  </div>
  <script type="text/javascript">
  (function ($) {
      var custom_uploader;
      // ①選択ボタンを押した時の処理
      $("input:button[name=image_select]").click(function(e) {
          e.preventDefault();
          if (custom_uploader) {
              custom_uploader.open();
              return;
          }
          custom_uploader = wp.media({
              title: "画像を選択してください",
              library: {
                  type: "image"
              },
              button: {
                  text: "画像の選択"
              },
              multiple: false
          });
          custom_uploader.on("select", function() {
              var images = custom_uploader.state().get("selection");
              images.each(function(file){
                  $("input:text[name=category-image]").val("");
                  $("#image_thumbnail").empty();
                  $("input:text[name=category-image]").val(file.attributes.sizes.full.url);
                  $("#image_thumbnail").append('<img src="'+file.attributes.sizes.full.url+'" style="width:50%;height:auto;"/>');
              });
          });
          custom_uploader.open();
      });
      // ②クリアボタンを押した時の処理
      $("input:button[name=image_clear]").click(function() {
          $("input:text[name=category-image]").val("");
          $("#image_thumbnail").empty();
      });
  })(jQuery);
  </script>
  <?php
}

// カテゴリー編集画面に要素を追加するフック
add_action( 'menus-cat_edit_form_fields', 'my_category_edit_form_fields', 10, 2 );
function my_category_edit_form_fields( $tag, $taxonomy ) {
  ?>
  <tr class="form-field term-image-wrap">
    <th scope="row"><label for="category-image">画像(URL)</label></th>
    <td>
      <input name="category-image" id="category-image" type="text" value="<?php echo esc_url_raw( get_term_meta( $tag->term_id, 'category-image', true ) ); ?>" size="40" aria-required="true"/>
      <p>サムネイル用の画像を設定します。※写真は縦横比1:1になるようにしてください</p>
      <input type="button" name="image_select" value="選択" />
      <input type="button" name="image_clear" value="クリア" />
      <div id="image_thumbnail" class="uploded-thumbnail">
        <?php if (get_term_meta( $tag->term_id, 'category-image', true )): ?>
          <img src="<?php echo esc_url_raw( get_term_meta( $tag->term_id, 'category-image', true ) ); ?>" alt="選択中の画像" style="width:50%;height:auto;">
        <?php endif ?>
      </div>
    </td>
  </tr>
  <script type="text/javascript">
  (function ($) {
      var custom_uploader;
      // ①選択ボタンを押した時の処理
      $("input:button[name=image_select]").click(function(e) {
          e.preventDefault();
          if (custom_uploader) {
              custom_uploader.open();
              return;
          }
          custom_uploader = wp.media({
              title: "画像を選択してください",
              library: {
                  type: "image"
              },
              button: {
                  text: "画像の選択"
              },
              multiple: false
          });
          custom_uploader.on("select", function() {
              var images = custom_uploader.state().get("selection");
              images.each(function(file){
                  $("input:text[name=category-image]").val("");
                  $("#image_thumbnail").empty();
                  $("input:text[name=category-image]").val(file.attributes.sizes.full.url);
                  $("#image_thumbnail").append('<img src="'+file.attributes.sizes.full.url+'" style="width:50%;height:auto;"/>');
              });
          });
          custom_uploader.open();
      });
      // ②クリアボタンを押した時の処理
      $("input:button[name=image_clear]").click(function() {
          $("input:text[name=category-image]").val("");
          $("#image_thumbnail").empty();
      });
  })(jQuery);
  </script>
  <?php
}

function my_edit_category( $term_id ) {
  $key = 'category-image';
  if ( isset( $_POST[ $key ] ) && esc_url_raw( $_POST[ $key ] ) ) {
    update_term_meta( $term_id, $key, $_POST[ $key ] );
  } else {
    delete_term_meta( $term_id, $key );
  }
}
add_action( 'create_menus-cat', 'my_edit_category' );
add_action( 'edit_menus-cat', 'my_edit_category' );