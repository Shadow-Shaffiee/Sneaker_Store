<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="nikestore";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }

    $Name=$_POST['name'];
    $Phone=$_POST['phone'];
    $Address=$_POST['address'];
    $Card_Number=$_POST['card_number'];
    $Expiry_Month=$_POST['expiry_month'];
    $Expiry_Year=$_POST['expiry_year'];
    $cvv=$_POST['cvv'];

    // insert data into database
    $sql="INSERT INTO payments(name,phone,address,card_number,expiry_month,expiry_year,cvv)
    VALUES ('$Name','$Phone','$Address','$Card_Number','$Expiry_Month','$Expiry_Year','$cvv')";

    if($conn->query($sql)==TRUE){

        echo "<scriptalert('Checkout complete'0;</script>";

        echo "<scrpit>window.setTimeout(function(){window.location.href='index.html';},1000;</script>";
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }
?>
    