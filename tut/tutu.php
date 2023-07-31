<?php
// echo "Hello";
// $arr = array("Hi",4,56.8,true);
// echo var_dump($arr);
// echo var_dump($GLOBALS['arr'])
?>

<?php
// GET,POST
//isset tells variable is set or not
// if(isset($_GET["name"])){$var=$_GET('NAME');} // --- isset is set when someting gets
// if(isset($_POST["name"])){$var=$_POST('NAME');} // --- isset is set when someting posts

// $_SERVER("REQUEST METHOD") == "POST" / "GET" // --- checks wether the server accesing method is get/post
?>

<?php 
// declare(strict_types=1);
// //functions
// //variable
// function c(int ...$r) : int{
//     foreach ($r as &$v){
//         print("$v \n");
//     }
// }
// c(1,2,"hello",67.9);
// c(1,2,3);
// c("hello","l");

// //anon fun(clousre)
// $add= function($a,$b){$a+$b;};

// //arow func
// $sum=fn($e)=>print $e;

?>

<?php
// readfile("fjnf");
// $c=fopen("djbdj",'r');
// echo fread($c,filesize("djbdj"));
// fclose($c);

// fgets($c); //reads sinf=gle line
// feof($c);//checks end of line reacghed or not
// fgetc($c);//reads sinf=gle char

// $txt="sdknfkvnjfnvlkfd";
// fwrite($c,$txt);

//file upload
// file_uploads=on in php.ini
//form should have method=post and enctype=multipart/form-data and input type=file
//$_FILES shows all file uploaded - you can access other vars of uploaded file using - $FILES["fname"]["name"] etccc

// file_exists($c);
// $_FILES["fileToUpload"]["size"] > 50000 --- limit file size

?>

<?php
//cookies and sessions
// setcookie(name,val,time() + expire in seconds);
// isset($_COOKIE["name"]);
// $_COOKIE["name"] - gets val of cookie
//to prevent URLencoding, use setrawcookie() instead
// To modify a cookie, just set (again) the cookie using the setcookie() function
// To delete a cookie, use the setcookie() function with an expiration date in the past
// Check if Cookies are Enabled count($_COOKIE) > 0

// A session is started with the session_start() function.
// Session variables are set with the PHP global variable: $_SESSION
// create session vars
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
//also call and modify the same
// To remove all global session variables and destroy the session, use session_unset() and session_destroy()
?>

<?php
//filters
// The filter_var() function both validate and sanitize data.

// The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:

// The variable you want to check
// The type of check to use

// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
// if (!filter_var($int, FILTER_VALIDATE_INT) === false)
?>

<?php
// Pass a callback to PHP's array_map() function to calculate the length of every string in an array:

// <?php
// function my_callback($item) {
//   return strlen($item);
// }

// $strings = ["apple", "orange", "banana", "coconut"];
// $lengths = array_map("my_callback", $strings);
// print_r($lengths);
// 
?>

<?php
// try{
//     $con = new PDO("mysql:host=$servername,dbname=ydb",$usramr,$pwd);
//     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e){
//  echoo
// }
?>