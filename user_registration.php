<?php include "db.php"; ?>

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


if(isset($_POST['submit'])) 
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$course_code = $_POST['course_code'];

	$connection = mysqli_connect('localhost','root','','courses');

    //discouraging sql-injection
    $name = mysqli_real_escape_string($connection, $name);
    $password = mysqli_real_escape_string($connection, $password);

    //encrypting our password
    $hashFormat="$2y$10$";
    $salt = "randomshitwrittenhere2";

    $hash_and_salt = $hashFormat . $salt;

    $password = crypt($password,$hash_and_salt);

    //inserting the values into the table
	$query = "INSERT INTO users(name,email,password,course_code) VALUES ('$name','$email','$password','$course_code') ";
	$result = mysqli_query($connection,$query);
	if(!$result) 
    {
		echo "Query Failed";
	}
	else 
    {
		echo "Inserting into table succeeded";
	}
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-uA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrstion Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: wheat;
    background-size: cover;
    background-position: center;
}

.wrapper{
    width: 420px;
    border: 2px solid rgba(255, 255, 255, .2);
    color: black;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1{
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid black;
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder{
    color:black;   
}
.input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}
.remember-forget{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}
.remember-forget label input{
    accent-color: black;
    margin-right: 3px;
}
.remember-forget a{
    color: black;
    text-decoration: underline;
}
.remember-forget a hover{
    text-decoration: underline;
}
.wrapper .btn{
    width: 100%;
    height: 45px;
    background: white;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0,0,0,.1);

    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}
.wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
} 
.register-link p a{
    color: black;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
    </style>
</head>
<body>
    
    <div class="wrapper">
        <form action="#">
            <h1>Sign in</h1>
            <div class="input-box">
                <input for="name" type="text" placeholder="Username" reqiured>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input  for="email" type="e-mail" placeholder="E-mail"
                reqiured>
                
            </div>
           
            <div class="input-box">
                <input for="password" type="password" placeholder="Password"
                reqiured>
                <i class='bx bxs-lock-alt'></i>
            </div>

            

            <div class="input-box">
                <input type="course_code" placeholder="Course code"
                reqiured>
               
            </div>

            <div class="remember-forget">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forget password?</a>
            </div>
            <button type="submit" class="btn">Sign in</button>
        <div class="register-link">
            <p>
                Don't have an account?<a href="#">Register</a>
            </p>
        </div>
        </form>
    </div>
    
</body>
</html>