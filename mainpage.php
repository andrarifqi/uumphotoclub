<?php
include_once("dbconnect.php");

try {

$sql = "SELECT * FROM member";
$stmt = $conn->prepare($sql);
$stmt->execute();
// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$member = $stmt->fetchAll(); 
echo "<p><h1>UUM Photography Club Member</h1></p>";
echo "<table border='1' align='center' class='member'>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Matric Number</th>
  <th>Programme</th>
  <th>Semester</th>
  <th>Camera Device</th>
  <th>E-mail</th>
  <th>Phone Number</th>
  <th>Inasis</th>
  <th>Option</th>
</tr>";

foreach($member as $member) {
    echo "<tr>";
    
    echo "<td>".$member['memberid']."</td>";
    echo "<td>".$member['membername']."</td>";
    echo "<td>".$member['matric']."</td>";
    echo "<td>".$member['programme']."</td>";
    echo "<td>".$member['sem']."</td>";
    echo "<td>".$member['device']."</td>";
    echo "<td>".$member['email']."</td>";
    echo "<td>".$member['phone']."</td>";
    echo "<td>".$member['inasis']."</td>";
    echo "<td><a href='update.php?memberid=".$member['memberid']."&membername=".$member['membername']."&inasis=".$member['inasis']."&sem=".$member['sem']."&device=".$member['device'].
    "&email=".$member['email']."&phone=".$member['phone']."'>Update</a><br>
    <a href='delete.php?memberid=".$member['memberid']."&operation=del' onclick= 'return confirm(\"Are you sure you want to get this member out?\");'>Delete</a></td>";
    echo "</tr>";
} 
echo "</table>";
echo "<p><a href='newmember.html'>Register New Member</a></p>";


} catch(PDOException $e) {
echo "Error: " . $e->getMessage();
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
