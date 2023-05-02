<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$dbName = 'test2';
$userName = 'root';
$password = '';
$serverName = 'localhost';


try{

    $conn = new mysqli($serverName,$userName,$password,$dbName);

    $sql = "
    Select userId, firstName, lastName, phoneNumber, email From contacts
    ";

    $result = $conn->query($sql);

    foreach ($result as $res){
        echo "ID = $res[userId] <br>";
        echo "First Name = $res[firstName] <br>";
        echo "Last Name = $res[lastName] <br>";
        echo "Phone = $res[phoneNumber] <br>";
        echo "Email = $res[email] <br>";
    }

}
catch(PDOException $err){

    $err->getMessage();
}








?>


</body>
</html>