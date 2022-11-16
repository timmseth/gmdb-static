<?php
//get the arrays.
require_once('../loadRandomContentLists.php');
//get requested resource name
$reqResource=$_GET['r'];
//get flip reqResource
$randomOne=array_rand(array_flip($$reqResource),1);
//echo it.
echo $randomOne;

?>