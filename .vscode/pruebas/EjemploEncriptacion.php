<?php
// 16 character salt starting with $5$. The default number of rounds is 5000.
function randomSalt($len = 8) {
	$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`~!@#$%^&*()-=_+';
	$l = strlen($chars) - 1;
	$str = '';
	for ($i = 0; $i < $len; ++$i) {
		$str .= $chars[rand(0, $l)];
 	}
	return $str;
}
$salt= randomSalt(16);

echo "La salt es $salt \n";


echo "SHA-512: ".crypt('something','$6$'.$salt.'$');
