<html>

	<head><title>SPACE AGENCY</title></head>

	<body>
		
		<h2>Welcome to European Space Agecy</h2>
		
		<p>Choose what you would like to do:</p>
		<a href="addastronaut.php">Add a astronaut</a> | 
		<a href="addtarget.php">Add a target</a> | 
		<a href="addmission.php">Add a mission</a> |
		<a href="seeastronaut.php">See astronaut</a> | 
		<a href="seetarget.php">See target</a>
		<a href="seemission.php">See mission</a>
	
	<?php                            

        $host = "localhost";
        $user_name = "root";
        $password = "";
        $database_name = "space";

        $link = mysqli_connect($host, $user_name, $password, $database_name);

        if($link === false) {
            die("Error: Could not connect");
        } else {
            echo("Successful: ");
        }
		
		?>
		
		<hr>
		
		<h3>See all mission</h3>
	
		<table>
		
			<tr>
				<th width="150px">mission ID<br><hr></th>
				<th width="250px">mission Name<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT mission_id, name FROM mission");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['mission_id']}</th>
				<th>{$row['name']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
		
	</body>

</html>




































