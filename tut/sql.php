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
        echo "Data Inserted successfully<br>";
    }
    else{
        echo "ERROR - ".mysqli_error($conn);
    }
}

//Select data
$selectQuery ="select * from ext";
$res=mysqli_query($conn,$selectQuery);
$num=mysqli_num_rows($res);
echo $num." Found in Database<br>"; //returns no of roows returned

//Display rows
if($num>0){
    while($row = mysqli_fetch_assoc($res)){//fetches sql content and row remains true until returns null
        echo var_dump($row);
        echo "<br>Hello ".$row['name']."you have phone no - ".$row['contact'].".Thannk you!!<br>";
    }
}

//update records
$updateQuery ="update ext set contact='6765748' where name='Ujjwal'";
$res=mysqli_query($conn,$updateQuery);
if($res){
    echo "<br><br>Rows Updated<br>".mysqli_affected_rows($conn)." rows affected.<br>";
    $selectQuery ="select * from ext where name='Ujjwal'";
    $res=mysqli_query($conn,$selectQuery);
    while($row = mysqli_fetch_assoc($res)){
        echo var_dump($row);
        echo "<br>Hello ".$row['name']."you have phone no - ".$row['contact'].".Thannk you!!<br>";
    }
}
else{
    echo "ERROR - ".mysqli_error($conn);
}

//delete rows
$deleteQ="delete from ext where id>73 limit 5";
$res=mysqli_query($conn,$deleteQ);
if($res){
    echo "<br><br>Rows Deleted.<br>".mysqli_affected_rows($conn)." rows affected.<br>";
}
else{
    echo "ERROR - ".mysqli_error($conn);
}
?>