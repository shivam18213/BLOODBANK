<?php
session_start();
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">  
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-In</title>

    <style>
        html {
            height: 100%;
        }
        body {
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /*background-color: #4158D0;*/
            background-image: linear-gradient(45deg, #8b41d0 0%, #5cdd92 46%, #e27d3a 100%);
            z-index: 1;
        }

        .header{
          padding: 10px;
          width: auto;
          color: #ffffff;
          z-index: 2;
          box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);

      }
      .header p{
        text-align: center;
        text-shadow: 0px 4px 4px black;
        font-size: 50px;
        font-family: Cambria;
        z-index: 3;

    }

    </style>

</head>
<body>
    <div class="header"><p>Admin Log-In</p></div>

    <div class="con">
        <form class="login" method="post" action="adminlogin.php"> 
            <input name="contact" type="text" placeholder="Conatct Number" required>
            <input name="password" type="password" placeholder="Admin Password" required>
            <button name="login" type="submit">Log-In</button>
        </form>


        <?php
        if(isset($_POST['login']))
        {
            @$contact=$_POST['contact'];
            @$password=$_POST['password'];

            $query = "select * from admin where contact = '$contact' and password = '$password' ";
            $query_run = mysqli_query($con,$query);

            if($query_run)
            {
                if(mysqli_num_rows($query_run)>0)
                {
                    $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

                    $_SESSION['contact'] = $contact;
                    $_SESSION['password'] = $password;

                    header('location: admin.php');
                }
                else
                {
                    echo '<script type="text/javascript">alert("No such admin exists. Invalid Credentials")</script>';
                }
            }
            else
            {
                echo '<script type="text/javascript">alert("Database Error")</script>';
            }
        }
        else
        {
        }
        ?>
    </div>
</body>
</html>