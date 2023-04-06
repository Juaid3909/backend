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
				<th width="150px">Teacher ID<br><hr></th>
				<th width="250px">name<br><hr></th>
				<th width="150px">Address<br><hr></th>
				<th width="250px">PhoneNumber<br><hr></th>
				<th width="150px">Email<br><hr></th>
				<th width="250px">AnnualSalary<br><hr></th>
				<th width="150px">BackgroundChk<br><hr></th>
				
                
			</tr>
				
			<?php
			
			$sql = mysqli_query($link, "SELECT TeacherID,Name,Address,PhoneNumber,Email,AnnualSalary,BackgroundChk  FROM Teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['PhoneNumber']}</th>
				<th>{$row['Email']}</th>
				<th>{$row['Nationality']}</th>
				<th>{$row['AnnualSalary']}</th>
				<th>{$row['BackgroundChk']}</th>
				
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


