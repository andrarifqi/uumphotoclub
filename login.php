<?php

include_once("dbconnect.php");

$username = $_POST['username']; 
$password = sha1($_POST['password']);

try {
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $stmt = $conn->prepare($sql );
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    $admin = $stmt->fetchAll();  

    if ($count > 0){   
        echo "<script> alert('Login Success')</script>";
        echo "<script> window.location.replace('mainpage.php?username=".$admin['username']."&password=".$admin['password']."') </script>;";
    }else{
        echo "<script> alert('Login Failed')</script>";
        echo "<script> window.location.replace('index.html') </script>;";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
  $conn = null;
?>