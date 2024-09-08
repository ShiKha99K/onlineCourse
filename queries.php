<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses";


// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$connection) 
{
	echo "Sorry You are not connected";
}
?>

    
<?php
    // Retrieve course data from the database
    $query = "SELECT * FROM queries";
    
    $result = $connection->query($query);
    // Display course information in HTML
    
    $select_all_courses_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_all_courses_query)) 
    {
        $user_id = $row['user_id'];
        $Q = $row['query'];
    ?>
    <div class="textbox">
        <h4>User ID : <?php echo $user_id; ?></h4>

        <p class="lead">QUERY : <?php echo $Q; ?></p>

    </div>
        <br>
    <?php
    }        
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include "db.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
</head>
<body>
<div class="textbox">
		<div class="col-xs-6">
			<form action="queries2.php" method="post" style="font-size:20px">
				<div class="form-group">
					<label for="user_id">User ID</label>
					<br><input type="text" style="font-size:20px" name="user_id" class="form-control">
				</div>

                <div class="form-group">
					<label for="query">Query</label><br>
					<textarea rows="5" cols="50" style="font-size:20px" name="query" class="form-control"></textarea>
				</div>
				<br>

				<input type="submit" style="font-size:20px" class="btn btn-primary" name="submit" value="Submit">

			</form>
		</div>
	</div>
</body>
</html>