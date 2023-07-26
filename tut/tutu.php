<?php
echo "Hello";
$arr = array("Hi",4,56.8,true);
echo var_dump($arr);
echo var_dump($GLOBALS['arr'])
?>

<?php
// GET,POST
//isset tells variable is set or not
if(isset($_GET["name"])){$var=$_GET('NAME');} // --- isset is set when someting gets
if(isset($_POST["name"])){$var=$_POST('NAME');} // --- isset is set when someting posts

$_SERVER("REQUEST METHOD") == "POST" / "GET" // --- checks wether the server accesing method is get/post
?>