<?php
require 'src/Obfuscator.php';

$sData = file_get_contents($argv[1]);
$sObfusationData = new Obfuscator($sData, 'Give a name to the piece of code you want to obfuscate');
echo($sObfusationData);
