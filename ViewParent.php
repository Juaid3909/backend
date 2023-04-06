<html>
<body> 

<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student85-35303133d2bc", "ua92-studentAc", "student85-35303133d2bc");
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Parent Name<br><hr></th>
				<th width="150px">Parent Address<br><hr></th>
				<th width="250px">Parent PhoneNumber<br><hr></th>
				<th width="250px">Parent Email<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Parentsid, Name, Address, PhoneNumber, Email  FROM Parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Parentsid']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['PhoneNumber']}</th>
				<th>{$row['Email']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

