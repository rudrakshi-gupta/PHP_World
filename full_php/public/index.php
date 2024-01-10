<?php 

declare(strict_types=1);

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;//DIRECTORY_SEPARATOR is any forward or backward slash

// echo $root;//gives parent directory

define('APP_PATH',$root.'app'.DIRECTORY_SEPARATOR);// path to app logic
define('FILES_PATH',$root.'transaction_files'.DIRECTORY_SEPARATOR);//path to transaction csv
define('VIEWS_PATH',$root.'views'.DIRECTORY_SEPARATOR);//path to html codes

require APP_PATH.'app.php';
$files=getTransactionFiles(FILES_PATH);

$transactions = [];
foreach ($files as $file) {
    $transactions=array_merge($transactions,getTransaction($file));
}
// print_r ($transactions)."<br>";

// for ($i=0; $i < count($files); $i++) { // this appends an array at the end of transactions that's why not working
//     $transactions[] = getTransaction($files[$i]);
// }

$values = getResults();
require VIEWS_PATH.'transactions.php';
