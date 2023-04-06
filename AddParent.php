<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['parentName'];
    $paddress = $_POST['Address'];
    $pemail = $_POST['Email'];
    $pnumber = $_POST['PhoneNumber'];
    

    $sql = "INSERT INTO Parents (Name,Address,Email,PhoneNumber) VALUES ('$pname','$paddress','$pemail','$pnumber')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>