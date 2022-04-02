<?php
session_start();
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js'></script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js'></script>
  <link rel="stylesheet" href="animated-sticky-header.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js'></script>
  <link rel="stylesheet" href="header.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body{
      margin: 0;
      background:#ee7a76;
    }
    form{
      font-family: Roboto;
      font-size: 18px;
      color: black;
    }
    .header{
      padding: 10px;
      background: #328d85;
      font-size: 50px;
      font-family: Cambria;
      color: #ffffff;
      text-align: center;
      text-shadow: 0px 4px 4px black;
      box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);    }

      .content{
        margin: 80px;
        align-items:center;
        background:rgb(224, 195, 195);
        border-radius:20px;
        width:auto;
        height:80px;
        padding:20px;
        box-shadow: 0 10px 10px 2px rgba(0,0,0,.2);
        font-family: 'Roboto',sans-serif;
        font-weight: 600;
        letter-spacing: 1.6px;
      }

      .content p{
        margin-top:-1px;
        text-align:center;
        font-family:;
        font-size:26px;
      }

      select {
        width: 40%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #edd79a;
      }

      * {
        box-sizing: border-box;
      }

      .contain {
        padding: 24px;
        background: rgb(233, 219, 219);
        margin-left: 280px;
        margin-right: 280px;
        border-radius: 12px;
        box-shadow: 0 10px 10px 2px rgba(0,0,0,.2);
      }

      input[type=text], input[type=password], input[type=email], input[type=date],input[type=number] {
        width: 40%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #edd79a;

      }

      input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=date]:focus,input[type=number]:focus {
        background-color: #ceeb9f;
        outline: none;
      }

      .register {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 20%;
        text-align:center;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
      }

      .register:hover, .signinbtn:hover {
        opacity: 1;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      }

      a {
        color: dodgerblue;
      }

      .signinbtn {
        background-color: #4ae7da;
        text-align: center;
        padding: 10px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 10%;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
      }
    </style>
    <title>Registration Form</title>
  </head>
  <body>

    <div class="header">
      <p>Registration</p>
    </div>

    <div class="content">
      <p>Please fill in this form to create an account.</p>
    </div>

      <div class="contain">
        <center>
          <form action="registration.php" method="POST"> 
            <label for="name"><b>Full name</b></label><br>
            <input type="text" placeholder="Enter name" name="name" required>
            <br>
            <b>Select your gender</b>
            <br>
            <input type="radio" name="gender" value="M" id="option-1">
            <label for="option-1">M</label>
            <input type="radio" name="gender" value="F" id="option-2">
            <label for="option-2">F</label>
            <br><br>
            <b>Enter Age</b><br>
            <input type="number" name="age" placeholder="Age" required>
            <br>
            <label name = "contact" for="no"><b>Contact number</b></label><br>
            <input type="text" placeholder="Enter your contact number" name="contact" required>
            <br>
            <label for="psw"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" autocomplete="on" required>
            <br>
            <label for="question"><b>Select your bood group</b>:</label>
            <br>
            <select name="bt" id="search_categories">
              <option value="0" selection disabled>Select your blood group:</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
            <br><br>
            <label for="nxdt"><b>Date of next Available Donation</b></label><br>
            <input type="text" placeholder="(YYYY-MM-DD)" name="nxdt" autocomplete="on" required>
            <br>
            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" autocomplete="on" required>
            <br>
            <label for="cpsw"><b>Confirm Password</b></label><br>
            <input type="password" placeholder="Enter Password Again" name="cpsw" autocomplete="on" required>
            <br>
            <button name = "register" type="submit" class="register">Register</button>
          </form>
        </center>
      </div>

      <div class="container signin">
        <p align="center">Already have an account?<br><a href="donorlogin.php"><button type="submit" class="signinbtn" color=blue>Sign in</button></a></p>
      </div>



      <?php

      if(isset($_POST['register']))
      {
        
        @$name=$_POST['name'];
        @$gender=$_POST['gender'];
        @$age=$_POST['age'];
        @$contact=$_POST['contact'];
        @$email=$_POST['email'];
        @$bt=$_POST['bt'];
        @$password=$_POST['psw'];
        @$cpassword=$_POST['cpsw'];
        @$nextdate=$_POST['nxdt'];

        function random_strings($length_of_string) 
        { 
          $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
          return substr(str_shuffle($str_result), 0, $length_of_string); 
        }

        $usid = random_strings(10);

        $query = "select * from user where contact = '$contact'";
        $query_run = mysqli_query($con,$query);
        echo "sds"."$query_run";
        if($query_run)
        {
          
          if(mysqli_num_rows($query_run)>0)
          {
            echo '<script type="text/javascript">alert("This Phone Number Already exists!! Please try another Number. If you are a returning User Please LOGIN.")</script>';
          }
          else
          {
            if($password != $cpassword)
            {
              echo '<script type="text/javascript">alert("the Entered Passwords dont match!! Re-Enter password.")</script>';
            }
            else
            {
              $query = "insert into user values('$usid', '$name', '$age', '$gender', '$bt', '$contact', '$email', '$password', '$nextdate')";
              $query_run = mysqli_query($con,$query);

              if($query_run)
              {
                echo '<script type="text/javascript">alert("Registration Succesful! Welcome")</script>';
                echo "<script> location.href='donorlogin.php'; </script>";

                session_destroy();
              }
              else
              {
                echo '<p class="bg-danger msg-block">Registration Unsuccessful. Please Try Again Later</p>';
              }
            }
          }
        }
        else
        {
          echo '<script type="text/javascript">alert("Database Error! Contact Admin.")</script>';
        }


      }
      else
      {
      }
      ?>

      
</body>


</html>