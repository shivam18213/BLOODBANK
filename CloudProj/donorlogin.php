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
    <title>Donor Log-In</title>

    <style>
    body
    {
        background: url("img/bg.jpg") no-repeat center center fixed;
        background-size: cover;
    }
    </style>

</head>
<body>
    
    <form class="login" method="post" action="donorlogin.php"> 
        <input name="contact" type="text" placeholder="Conatct Number" required>
        <input name="password" type="password" placeholder="Password" required>
        <button name="login" type="submit">Log-In</button>
    </form>

    <?php
            if(isset($_POST['login']))
            {
                @$contact=$_POST['contact'];
                @$password=$_POST['password'];

                $query = "select * from user where contact = '$contact' and password = '$password' ";
                $query_run = mysqli_query($con,$query);

                if($query_run)
                {
                    if(mysqli_num_rows($query_run)>0)
                    {
                        $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);
                    
                        $_SESSION['contact'] = $contact;
                        $_SESSION['password'] = $password;

                        header('location: user.php');
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
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
</body>
</html>