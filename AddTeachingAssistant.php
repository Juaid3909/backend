<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");

if ($link === false) {
    die("Connection failed: ");
}


if (isset($_POST['submit'])) {

    $Aname = $_POST['assistantName'];
    $Aaddress = $_POST['address'];
    $Aemail = $_POST['email'];
    $Aphonenum = $_POST['PhoneNum'];
    $Asalary = $_POST['AnlSalary'];
    $AbackChk = $_POST['backgroundchk'];
   

    $sql = "INSERT INTO TeachingAssistant (Name,Address,Email,PhoneNumber, AnnualSalary,BackgroundChk) VALUES (' $Aname','$Aaddress','$Aemail','$Aphonenum','$Asalary','$AbackChk')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
}

?>