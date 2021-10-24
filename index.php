<?php
//list of blocked words, you can easily add more
$bannedWords = [
'fuck',
'shit'
];
//example string
$string = "Fuck superJP335!";
//replaces swear with asterisks
$return = str_ireplace($bannedWords, '*****', $string);
//echoes out filtered string
echo $return;
?>
