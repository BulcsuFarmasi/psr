<?php

function autoload(string $class){
	$classParts=explode('\\',$class);
	$className=array_pop($classParts);
	$namespace=implode(DIRECTORY_SEPARATOR,$classParts);
	$className=strtr($className, "_", DIRECTORY_SEPARATOR);
	$fileName=$namespace.DIRECTORY_SEPARATOR.$className.".php";
	var_dump($fileName);
	if(!file_exists($fileName)){
		throw new Exception('Class:"'.$class.'" cannot be found');	
	}else{
		require_once($fileName);
	}
}

spl_autoload_register('autoload');

$sampleClass=new Wulip\SampleClass();
$sample_class=new Wulip\Inter_mediate\Sample_Class();

var_dump($sampleClass,$sample_class);