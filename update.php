<?php
include_once("dbconnect.php");
$memberid = $_GET['memberid']; 
$membername = $_GET['membername']; 
$inasis = $_GET['inasis'];
$sem = $_GET['sem'];
$device = $_GET['device'];
$email = $_GET['email'];
$phone = $_GET['phone'];

if (isset($_GET['operation'])) {
    try {
        $sqlupdate = "UPDATE member SET inasis = '$inasis', device = '$device', email = '$email', phone = '$phone' WHERE memberid = '$memberid' ";
        $conn->exec($sqlupdate);
        echo "<script> alert('Update member information Success')</script>";
        echo "<script> window.location.replace('mainpage.php?memberid=".$member['memberid']."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update member information failed')</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UUM Photography Club</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <p><h1><?php echo $membername;?> Details</h1></p>
    <form action="update.php" method="get" onsubmit="return confirm('Are you sure want to update information about this member?');">
        <input type="hidden" id="memberid" name="memberid" value="<?php echo $memberid;?>"><br>
        <input type="hidden" id="operation" name="operation" value="update"><br>

        <label for="sem">Semester:</label><br>
        <select class="custom-select" name="sem">
            <option value="<?php echo $sem;?>" title="Select Semester"><?php echo $sem;?></option>
            <option value="1" title="1">1</option>
            <option value="2" title="2">2</option>
            <option value="3" title="3">3</option>
            <option value="4" title="4">4</option>
            <option value="5" title="5">5</option>
            <option value="6" title="6">6</option>
            <option value="7" title="7">7</option>
            <option value="8" title="8">8</option>
        </select><br><br>

        <label for="device">Camera Device:</label><br>
        <input type="text" id="device" name="device" value="<?php echo $device;?>" required><br><br>

        <label for="email">E-mail :</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email;?>" required><br><br>

        <label for="phone">Phone Number :</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" required><br><br>

        <label for="inasis">Inasis:</label><br>
        <select class="custom-select" name="inasis">
            <option value="<?php echo $inasis;?>" title="Select Inasis"><?php echo $inasis;?></option>
            <option value="MAS" title="MAS">MAS</option>
            <option value="TNB" title="TNB">TNB</option>
            <option value="Proton" title="Proton">Proton</option>
            <option value="Tradewinds" title="Tradewinds">Tradewinds</option>
            <option value="Maybank" title="Maybank">Maybank</option>
            <option value="Petronas" title="Petronas">Petronas</option>
            <option value="Grantt" title="Grantt">Grantt</option>
            <option value="Sime Darby" title="Sime Darby">Sime Darby</option>
            <option value="TM" title="TM">TM</option>
            <option value="BSN" title="BSN">BSN</option>
            <option value="MISC" title="MISC">MISC</option>
            <option value="Bank Muamalat" title="Bank Muamalat">Bank Muamalat</option>
            <option value="Bank Rakyat" title="Bank Rakyat">Bank Rakyat</option>
            <option value="SME Bank" title="SME Bank">SME Bank</option>
            <option value="University Inn" title="University Inn">University Inn</option>
        </select><br><br>

        <input type="submit" value="Update" class="button">
    </form>
    <p><a href='mainpage.php'>Cancel</a></p>
</body>

</html>