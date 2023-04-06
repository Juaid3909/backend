<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");

if ($link === false) {
    die("Connection failed: ");
}


if (isset($_POST['submit'])) {

    $sname = $_POST['studentName'];
    $saddress = $_POST['address'];
    $sDOB = $_POST['DOB'];
    $sgender = $_POST['gender'];
    $snationality = $_POST['nationality'];
    $smedinfo = $_POST['medicalinfo'];
    $classid = $_POST['classid'];
    $teacherid = $_POST['teacherid'];
    $parentid = $_POST['parentid'];
    $bookid = $_POST['bookid'];
    
   

    $sql = "INSERT INTO Pupil (Name,DOB,Gender,Medical_inf,Nationality,Address, ClassID,ParentsID,TeacherID,BookID) VALUES ('$sname','$saddress','$DOB','$sgender','$snationality','$smedinfo','$classid','$parentid','$teacherid','$bookid')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
}

?>