<?php
include_once("dbconnect.php");

if (isset($_GET['operation'])) {
    $memberid = $_GET['memberid'];
    try {
      $sql = "DELETE FROM member WHERE memberid='$memberid'";
      $conn->exec($sql);
      echo "<script> alert('Delete Member Success')</script>";
      echo "<script> window.location.replace('mainpage.php?memberid=".$member['memberid']."') </script>;";
    } catch(PDOException $e) {
      echo "<script> alert('Delete Member Failed')</script>";
    }
  } 
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