<?php
while(list($key,$value)=each($_ENV)) $GLOBALS[$key]=$value;
while(list($key,$value)=each($_GET)) $GLOBALS[$key]=$value;
while(list($key,$value)=each($_POST)) $GLOBALS[$key]=$value;
while(list($key,$value)=each($_COOKIE)) $GLOBALS[$key]=$value;
while(list($key,$value)=each($_SERVER)) $GLOBALS[$key]=$value;
while(list($key,$value)=@each($_SESSION)) $GLOBALS[$key]=$value;

while(list($key,$value)=each($_FILES)) $GLOBALS[$key]=$value;
foreach($_FILES as $key => $value){
	$GLOBALS[$key]=$_FILES[$key]['tmp_name'];
	foreach($value as $ext => $value2){
		$key2 = $key."_".$ext;
		$GLOBALS[$key2]=$value2;
	}
}
?>
