<!-- using mysqli -->
<?php
//database envoirment vars
$servername="localhost";
$username="root";
$password="";
$db="example";

//connection to db
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
else{
    echo "Connection Established to Database.<br>";
}

//Create Database
$sqlQuery="create database example";
$result=mysqli_query($conn,$sqlQuery);
if($result){
    echo "Database created successfully";
}
else{
    echo "ERROR - ".mysqli_error($conn);
}

echo "<br>";
//Now specify db variable and add to $conn

// Create table
$createTableSql = "create table `ext` (`id` int(6) auto_increment,`name` varchar(10),`contact` varchar(10),`doj` date,primary key(`id`))";//` not required
$res=mysqli_query($conn,$createTableSql);
if($res){
    echo "Table created successfully";
}
else{
    echo "ERROR - ".mysqli_error($conn);
}

echo "<br>";

//Insert data
$name="ppp";
$cont="349847984";

$arr=array(array("Alice","487458"),array("Ravi","48477458"),array("King","487450008"));

$insertData = "insert into ext (name,contact) values ('Ujjwal','8948748484')";
$res=mysqli_query($conn,$insertData);
if($res){
    echo "Data Inserted successfully";
}
else{
    echo "ERROR - ".mysqli_error($conn);
}

$insertData = "insert into ext (name,contact) values ('$name','$cont')";
$res=mysqli_query($conn,$insertData);
if($res){
    echo "Data Inserted successfully";
}
else{
    echo "ERROR - ".mysqli_error($conn);
}

foreach($arr as $i){
    $insertData = "insert into ext (name,contact) values ('$i[0]','$i[1]')";
    $res=mysqli_query($conn,$insertData);
    if($res){
        echo "Data Inserted successfully";
    }
    else{
        echo "ERROR - ".mysqli_error($conn);
    }
}
?>