<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';

//Script that will save user inputted code to .php and .twig
//And then compile the resulting twig output

$timestamp = time();
$requestPhp = $_GET['requestPhp'];
$requestTwig = $_GET['requestTwig'];
$phpFilePath = 'tmp/'.$timestamp.'.php';
$twigFilePath = 'tmp/'.$timestamp.'.twig';
$phpFile = fopen($phpFilePath, 'w+');
$twigFile = fopen($twigFilePath, 'w+');
fwrite($phpFile, $requestPhp);
fwrite($twigFile, $requestTwig);
fclose($phpFile);
fclose($twigFile);

require_once $_SERVER['DOCUMENT_ROOT'].'/TwigCompiler.php';
$TwigCompiler = new TwigCompiler();
$TwigCompiler->setPhpFile($phpFilePath);
$TwigCompiler->setTwigFile($twigFilePath);

$result = $TwigCompiler->compile();
echo $result;