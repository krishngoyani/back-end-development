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
	
		<h3>Add a new target</h3>
        
		<form method="post" action="addtarget.php">
            <label>target Name</label><br>
            <br><input type="text" name="target_name"><br>
			<label>No of Missions:</label>
			<input type="number" name="no_of_missions">
			<label>target destination</label><br>
            <br><input type="text" name="target_destination"><br>
			<label>target date</label><br>
            <br><input type="number" name="target_date"><br>
			<br><br><input type="submit" name="submit">
        </form>

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

        $target_name = $_POST['target_name'];
		$target_no_of_missions = $_POST['no_of_missions'];	
		$target_destination = $_POST['target_destination'];
		$target_date = $_POST['target_date'];
			
		$sql = "INSERT INTO target (no_of_missions,name,target_destination,target_date) VALUES ('$target_no_of_missions','$target_name','$target_destination','$target_date')";
		

        if(mysqli_query($link, $sql)) {
            echo "has been added";
        } else {
            echo "Error: Problem adding astronaut";
        }

        mysqli_close($link);

        ?>

    </body>
</html>




































