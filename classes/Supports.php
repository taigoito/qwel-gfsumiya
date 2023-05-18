<?php
namespace GFSumiya_Theme;

trait Supports {
  // テーマサポート機能
  public function setup_theme() {
    // ブロックスタイルをサポート
		add_theme_support( 'wp-block-styles' );

		// エディターにstyle.cssをセット
		add_editor_style( 'style.css' );

    // 抜粋文字数を設定
    add_filter('excerpt_length', [ $this, 'register_excerpt_length' ], 999);

  }

  public function register_excerpt_length()
  {
    return 64;
  }

}
