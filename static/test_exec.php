<?php 
// echo "# exec関数\n";
// var_dump( exec('ls') ); // 引数なし
// var_dump( exec('ls', $out, $ret) ); // 引数あり
// print_r( $out );
// var_dump( $ret );
 
// echo "\n# system関数\n";
// var_dump( system('ls', $ret) );
// var_dump( $ret );

var_dump( exec( "git -C /home/admin/web/webhook.kote2.tokyo/public_html/webhook_test pull" ));
var_dump( exec( "git -C /home/admin/web/webhook.kote2.tokyo/public_html/webhook_test status" ));
var_dump( exec( "git status" ));
var_dump( exec( "git -C /home/admin/web/webhook.kote2.tokyo/public_html/webhook_test remote -v" ));
var_dump( exec( "git remote -v" ));

 ?>