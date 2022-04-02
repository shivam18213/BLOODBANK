<?php
session_start();
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="finddonor.css">  
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Donor</title>

    <!--<style>
        body
        {
            background: url("img/bg2.jpg") no-repeat center fixed;
            background-size: 100%;
        }

    </style>-->

</head>
<body>
    <div class="header"><p>Request Blood</p></div>

    <form class="login" action="finddonor.php" method="POST">
        <input type="text" placeholder="Enter your Name" name="name" required>
        <select name="bt" id="question">
            <option selection disabled>Select your blood group:</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <select name="gender" id="question" required>
            <option value="0">Select your gender:</option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <input type="text" placeholder="Enter your contact number" name="contact" required>
        <button  name = "finddonor" type="submit" style="color: yellow;">Find Now</button>
    </form>

    <?php
    if(isset($_POST['finddonor']))
    {
        @$name=$_POST['name'];
        @$gender=$_POST['gender'];
        @$bt=$_POST['bt'];
        @$contact=$_POST['contact'];


        function get_random_string($size) {
            $size = intval($size);
            if ($size == 0) {
                return NULL;
            }
            $charSet = "0123456789ABCHEFGHJKMNPQRSTUVWXYZ";
            $len = strlen($charSet);
            $str = '';
            $i = 0;
            while (strlen($str) < $size) {
                $num = rand(0, ($len-1));
                $tmp = substr($charSet, $num, 1);
                $str = $str . $tmp;
                $i++;
            }
            return $str;
        }

        @$reqid = get_random_string(10);

        $_SESSION['reqid'] = $reqid;
        $_SESSION['name'] = $name;
        $_SESSION['gender'] = $gender;
        $_SESSION['bt'] = $bt;
        $_SESSION['contact'] = $contact;
        
        header('location: results.php');

    }
    ?>
    
</body>
</html>