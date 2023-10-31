<?php

include('connection.php');

 if (isset($_POST["submit"])) {

    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    $snumber = $_POST['snumber'];

    $conn = "INSERT INTO school_data (sname, saddress, snumber) VALUES 
    ('$sname', '$saddress', '$snumber')";

  if (mysqli_query($db, $conn)) {
    echo "inserted successfully.";
  }

}

?>