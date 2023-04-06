<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");

if ($link === false) {
    die("Connection failed: ");
}


if (isset($_POST['submit'])) {

    $bTite = $_POST['Book_Title'];
    $numOfBooks = $_POST['Num_of_books'];
    $lendate = $_POST['lend_date'];
    
   

    $sql = "INSERT INTO Library (Book_Title,Num_of_books,lend_date) VALUES (' $bTite','$numOfBooks','$lendate')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
}

?>