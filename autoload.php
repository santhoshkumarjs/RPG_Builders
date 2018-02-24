<?php
  
  require("app/base_configuration.php");
  
  use app\logfile\logcreator;
  use app\db\db_connect;
  use app\controller\mainController;
  
  spl_autoload_register(function($class){
	  $prefix	=	'app\\';
	  
	  $length			=	strlen($prefix);
	  $base_path		=	__DIR__.'/app/';
	  if(strncmp($prefix, $class, $length) !== 0){
		  return false;
	  }
	  
	  $relative_class	=	substr($class, $length);
	  $file				=	$base_path.str_ireplace('\\','/',$relative_class).'.php';
	  if(file_exists($file)){
		  require($file);
	  }
	  
	  
	  
  });

  global $log, $db_obj;
  
  $log		=	new logcreator;
  $db_obj	=	new db_connect;
  $main		=	new mainController;

  
?>