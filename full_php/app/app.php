<?php

declare(strict_types=1);

function getTransactionFiles(string $dirpath):array{
    $files=[];
    $dir=scandir($dirpath);
    foreach($dir as $file){
        if(is_dir($file)){
            continue;
        }
        $files[]=$dirpath.$file;//this path is a string here so can't be parsed by fgetcsv
    }
    return $files;
}


$total_income=0;
$total_expense=0;

function getTransaction(string $filename):array{
    if(!file_exists($filename)){
        trigger_error("File {$filename} dosen't exists.",E_USER_ERROR);
    }
    $transactions=[];
    $file = fopen($filename,'r');
    fgetcsv($file);

    while((!$transaction=fgetcsv($file))===false) { 
        // echo '<pre>';
        // print_r($transaction);
        // echo '</pre>';
        global $total_income;
        global $total_expense;

        //result logic
        $ammount = str_replace(['$',','],'',$transaction[3]);//other formats [^0-9,'-']
        if($ammount[0]==='-'){
            $ammount = (float)substr($ammount,1);
            $total_expense += $ammount;
        }
        else{
            $ammount = (float)$ammount;
            $total_income += $ammount;
        }
        // echo $ammount."<br>";
        $transactions[] = $transaction;
    }
    fclose($file);
    return $transactions;
}

function getResults():array{
    global $total_income;
    global $total_expense;
    return [$total_income,$total_expense,$total_income-$total_expense];
}



// my code
// $root = dirname(__DIR__);
// $file = fopen("{$root}/transaction_files/sample_1.csv",'r');