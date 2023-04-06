<html>
<body> 

<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">student ID<br><hr></th>
				<th width="250px">name<br><hr></th>
				<th width="150px">DOB<br><hr></th>
				<th width="250px">Gender<br><hr></th>
				<th width="150px">Medical Info<br><hr></th>
				<th width="250px">Nationality<br><hr></th>
				<th width="150px">Address<br><hr></th>
				<th width="250px">ClassID<br><hr></th>
				<th width="250px">ParentID<br><hr></th>
				<th width="250px">TeacherID<br><hr></th>
				<th width="250px">BookID<br><hr></th>
                
			</tr>
				
			<?php
			
			$sql = mysqli_query($link, "SELECT StudentID, Name,DOB,Gender,Medical_inf,Nationality,Address,ClassID,ParentsID,TeacherID,BookID  FROM student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['DOB']}</th>
				<th>{$row['Gender']}</th>
				<th>{$row['Medical_inf']}</th>
				<th>{$row['Nationality']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['ClassID']}</th>
				<th>{$row['ParentsID']}</th>
				<th>{$row['TeacherID']}</th>
				<th>{$row['BookID']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


