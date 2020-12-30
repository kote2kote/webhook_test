<?php
/**
 * 設定
 */
define( 'LOG_FILE', dirname( __FILE__ ) . '/hook.log' );
define( 'LOG_ERR', dirname( __FILE__ ) . '/hook-error.log' );
define( 'SECRET_KEY', '09pulu07' );

/**
 * 実行するコマンド
 */
$commands = array(
  'develop' => '',//developブランチ
  'main'  => "echo '09pulu07321' | sudo -S git -C /home/admin/web/webhook.kote2.tokyo/public_html/webhook_test pull" // mainブランチ
);