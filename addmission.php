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
	
	<h3>Add a new mission</h3>
        
		<form method="post" action="addmission.php">
            <label>target Name</label><br>
            <br><input type="text" name="mission_name"><br>
			<label>Misssion crew size:</label>
			<input type="number" name="mission_crew_size">
			<label>mission destination</label><br>
            <br><input type="text" name="mission_destination"><br>
			<label>launch date</label><br>
            <br><input type="number" name="launch_date"><br>
			<label>Select astronaut:</label>
			<select name="astronaut_id">
				<?php
				$sql = mysqli_query($link, "SELECT astronaut_id, name FROM astronaut");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['astronaut_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			<label>Select target:</label>
			<select name="target_id">
				<?php
				$sql = mysqli_query($link, "SELECT target_id, name FROM target");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['target_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			<br><br><input type="submit" name="submit">
			</form>
        
		<?php
		
		
		
			$mission_name = $_POST['mission_name'];
			$astronaut_id = $_POST['astronaut_id'];
			$target_id = $_POST['target_id'];
			$mission_destination = $_POST['mission_destination'];
			$mission_date = $_POST['launch_date'];
			$mission_crew_size = $_POST['mission_crew_size'];
			
			
			$sql = "INSERT INTO mission (name,astronaut_id,target_id,destination,mission_crew_size,launch_date) VALUES ('$mission_name','$astronaut_id','$target_id','$mission_destination','$mission_crew_size','$mission_date')";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		
		
		$link->close();
		?>

    </body>
</html>




































