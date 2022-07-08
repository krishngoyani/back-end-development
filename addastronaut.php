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
	
		<h3>Add a new Astronaut</h3>
        
		<form method="post" action="addastronaut.php">
            <label>Astronaut Name</label><br>
            <br><input type="text" name="astronaut_name"><br>
			<label>No of Missions:</label>
			<input type="number" name="no_of_mission">
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

        $astronaut_name = $_POST['astronaut_name'];
		$astronaut_no_of_missions = $_POST['no_of_mission'];	
			
		$sql = "INSERT INTO astronaut (no_of_mission,name) VALUES ('$astronaut_no_of_missions','$astronaut_name')";
		

        if(mysqli_query($link, $sql)) {
            echo "astronaut has been added";
        } else {
            echo "Error: Problem adding astronaut";
        }

        mysqli_close($link);

        ?>

    </body>
</html>




































