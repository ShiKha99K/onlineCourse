<!DOCTYPE html>
<?php include "db.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<style>
    body
    {
        background-color:wheat;
    }
    .button a{
        color: white;
    }
</style>
<body>
<button style="background-color: #b11375; color: white; padding: 14px 16px;
          text-decoration: none; font-size: 18px;
          border:none; border-radius: 4px; "><a href="home.php"><b>Explore</b></a></button>
          <h1>COURSES</h1>
          <hr>
          <h2>Invest in yourself today</h2>
          <p>
          Take your career to the next level with our in-depth courses, offering expert guidance, specialist knowledge and professional certifications.</p>
          <hr>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "courses";
          
          
          // Create connection
          $connection = mysqli_connect($servername, $username, $password, $dbname);
    // Retrieve course data from the database
    $query = "SELECT * FROM courses";
    
    $result = $connection->query($query);
    // Display course information in HTML
    
    $select_all_courses_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_all_courses_query)) 
    {
        $course_id = $row['id'];
        $course_name = $row['course_name'];
        $course_code = $row['course_code'];
        $course_cost = $row['course_cost'];
        $course_duration = $row['course_duration'];
        $course_description = $row['course_description'];
    ?>
    
    <div class="textbox">
        <h2><?php echo $course_name; ?></h2>

        <p class="lead">Course Code : <?php echo $course_code; ?></p>
                
        <p><span class="glyphicon glyphicon-time"></span> Cost : Rs.<?php echo $course_cost; ?></p>

        <p> Course Duration : <?php echo $course_duration." hours"; ?></p>
                            
        <p> Course Description : <?php echo $course_description; ?></p>
    </div>

    <br>
    <?php
    }        
    ?>
</body>
</html>