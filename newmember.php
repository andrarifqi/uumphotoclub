<?php
include_once("dbconnect.php");

$membername = $_GET['membername']; 
$matric = $_GET['matric']; 
$inasis = $_GET['inasis'];
$programme = $_GET['programme'];
$sem = $_GET['sem'];
$device = $_GET['device'];
$email = $_GET['email'];
$phone = $_GET['phone'];

  


    $sql = "INSERT INTO member(membername, matric, inasis, programme, sem, device, email, phone)
    VALUES ('$membername', '$matric', '$inasis','$programme','$sem','$device','$email','$phone')";
    // use exec() because no results are returned
    $conn->exec($sql);
    // $stmt->execute();
    echo "<script> alert('New member registered successfully!')</script>";
    echo "<script> window.location.replace('mainpage.php') </script>;";
    } 
    catch(PDOException $e) {
    echo "<script> alert('Failed to register new member!')</script>";
    echo "<script> window.location.replace('newmember.html') </script>;";
    }
  
  $conn = null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UUM Photography Club</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>

</body>

</html>