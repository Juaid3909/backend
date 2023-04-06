<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");

if ($link === false) {
    die("Connection failed: ");
}


if (isset($_POST['submit'])) {

    $Cname = $_POST['ClassName'];
    $cap = $_POST['Capacity'];
    $TeacherID = $_POST['TeacherID']

    


    $sql = "INSERT INTO Class (ClassName,Capacity,TeacherID) VALUES (' $Cname','$cap','$TeacherID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
}

?>