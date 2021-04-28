<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpDB";


//Create connection

$conn = new mysqli($servername,$username,$password,$database);


//Check Connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected Successfully";


// $sql = "CREATE DATABASE phpDB";
// if ($conn->query($sql)===TRUE){
//     echo "Database created successfully";
// }
// else{
//     echo "Database creation error:". $conn->error;
// }



// $sql="CREATE TABLE accounts(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT  NULL,
//     password VARCHAR(32) NOT  NULL,
//     email VARCHAR (30),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql)===TRUE){
//     echo "Table accounts created successfully";
// }
// else{
//     echo "Database creation error:". $conn->error;
// }



// $sql = "INSERT INTO accounts(username,password,email)VALUES('aldrin','python','aldrinpython@gmail.com')";
// if ($conn->query($sql)===TRUE){
//     echo "Inserted successfully";
// }
// else{
//     echo "Insert Data error:". $conn->error;
// }



$sql = "SELECT * FROM accounts";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo $row['id']." ".$row['username']." ".$row['password']." ".$row['email']."<br>";
    }
}



function crud($choice,$values){
    //create
    if($choice == 1){
        $sql = "INSERT INTO accounts(username,password,email)VALUES('vic','python','vicpython@gmail.com')";
    }
    //read
    else if ($choice == 2){
        $sql = "SELECT * FROM accounts";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
               echo $row['id']." ".$row['username']." ".$row['password']." ".$row['email']."<br>";

               
            }
        }
            //update
            else if ($choice == 3){
        
            }
            //delete
            else if ($choice == 4){
              
            }
            }

    }
}
$conn->close();











?>