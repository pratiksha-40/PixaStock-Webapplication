<?php
<?php
    $con=mysqli_connect("localhost","root","","register")
     session_start();
     include("db.php");
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        $firstname=$_POST['fname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $mobileno=$_POST['mob_no'];
        $password=$_POST['pass'];
        $c_passord=$_POST['c_pass'];
        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query="insert into form (fname,username, email, mob_no, pass , c_pass) values('$firstname,$username,$email,$mobileno,$password,$c_password)";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Regesiter')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
     }
?>
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Registration</h1>
      <form method="POST">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text"
                    id="fullName"
                    name="fname"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="username">Username</label>
            <input type="text"
                    id="username"
                    name="username"
                    placeholder="Enter Username"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="mob_no"
                    placeholder="Enter Phone Number"/>
          </div>
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"
                    id="password"
                    name="pass"
                    placeholder="Enter Password"/>
          </div>
          <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password"
                    id="confirmPassword"
                    name="c_pass"
                    placeholder="Confirm Password"/>
          </div>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other">
            <label for="other">Other</label>
          </div>
        </div>
       
        <div class="form-submit-btn">
                
          <input type="submit" value="Register">
          
>         
          
        </div>
      </form>
    </div>
  </body>
</html>