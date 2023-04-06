<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");

if ($link === false) {
    die("Connection failed: ");
}


if (isset($_POST['submit'])) {

    $tname = $_POST['teacherName'];
    $taddress = $_POST['address'];
    $temail = $_POST['email'];
    $tphonenum = $_POST['PhoneNum'];
    $tsalary = $_POST['AnlSalary'];
    $tbackChk = $_POST['backgroundchk'];
   

    $sql = "INSERT INTO Teacher (Name,Address,Email,PhoneNumber, AnnualSalary,BackgroundChk) VALUES ('$tname','$taddress','$temail','$tphonenum','$tsalary','$tbackChk')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
}

?>