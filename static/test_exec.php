<?php 
echo "# exec関数\n";
var_dump( exec('ls') ); // 引数なし
var_dump( exec('ls', $out, $ret) ); // 引数あり
print_r( $out );
var_dump( $ret );
 
echo "\n# system関数\n";
var_dump( system('ls', $ret) );
var_dump( $ret );

exec('call git status', $output);
 ?>