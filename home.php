<!DOCTYPE html>
<?php include "db.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
  }
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  }
  .topnav {
    overflow: hidden;
    background-color: #ffffff;
    }
  .topnav a {
    float: right;
    display: block;
    color: #b11375;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
    }
        
    .topnav a:hover {
      background-color: #b11375;
      color: white;
      }

    .topnav button {
       background-color: antiquewhite;
       border:none; 
      border-radius: 4px;
      }

    .home{
      display: flex;
      text-align: left;
    }
       
</style>
</head>
<body >
    <header>
        <div class="topnav" id="myTopnav">
      <!-- Navigation -->
        <nav class="navigation-bar">
            <a href ="#home"><b>Home</b></a> 
            <a href="courses.php"><b>Courses</b></a>
            <a href="queries.php"><b>Query</b></a>
            <a href="user_registration.php"><b>Sign In</b></a>
            <button><a href="user_registration.php"><b>Register</b></a></button>
        </nav>
    </div>
    </header>
    <div style="background-color: bisque;" class="home">
        <img src="girl-160172_1280.webp" alt="home_page_image" width="300px">
        <div class="content">
            <p style="font-size: 100px;"><b>EMPOWER YOUR</b> FUTURE</p>
            <p style="font-size:35px;"><b>Get 30% off on Unlimited Online Courses</b></p>
            <p>Invest your future with Unlimited access high-quality short courses.</p>
            <button style="background-color: #b11375; color: white; padding: 14px 16px;
          text-decoration: none; font-size: 18px;
          border:none; border-radius: 4px;">Get Unlimited learning</button>
            <button style="background-color:white; color: #b11375;
            padding: 14px 16px; text-decoration: none;
            font-size: 17px; border-color:#b11375;
            border: solid; border-radius: 4px;"><b>Explore Courses</b></button>
        </div>
    </div>
    <hr>
    
    <footer>
        <div class="">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
    </div>
    </footer>
</body>
</html>


