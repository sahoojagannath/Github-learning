<?php
Class Log
{

public function Write($strFileName,$strData)

{
if(!is_writable($strFileName))

	die('Change your permission '. $strFileName);

$handle=fopen($strFileName, 'a+');

fwrite($handle, "\r\n" .$strData);
fclose($handle);


}

public function Read($strFileName)
{

$strFileName;

}

}

?>