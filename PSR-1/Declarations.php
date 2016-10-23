<?php

function autoload(string $class){
	$classParts=explode('\\',$class);
	$className=array_pop($classParts);
	$namespace=implode(DIRECTORY_SEPARATOR,$classParts);
	$className=strtr($className, "_", DIRECTORY_SEPARATOR);

	if(!empty($namespace)){
		$fileName=$namespace.DIRECTORY_SEPARATOR.$className.".php";
	}else{
		$fileName=$className.".php";
	}

	var_dump($fileName);
	if(!file_exists($fileName)){
		throw new Exception('Class:"'.$class.'" cannot be found');	
	}else{
		require_once($fileName);
	}
}