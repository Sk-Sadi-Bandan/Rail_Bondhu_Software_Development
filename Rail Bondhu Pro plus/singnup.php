<?php

session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST"){
    //somthing was posted
  
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];
    
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        //check if username and password is not empty
        //save to database
        $user_id= random_num(20);
        $query = "insert into users (user_id, user_name, password) values('$user_id','$user_name','$password')";

        mysqli_query($con ,$query);
        header("Location: login.php");
        die;
        


    }else
    {
        echo "Please enter username and password";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

</head>

<body>
<style type="text/css">
        body{
        margin-top: 10%;
        background-image: url(alistair-rWR9LvWFoBE-unsplash.jpg);
        background-size: cover;
        background-position: center center;
    }
        
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
            border-radius: 10px;
        }
        .button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: goldenrod;
            border: none;
            border-radius: 10px;

        }
        .button:hover{
            
            background-color: #45a049;
        }
        #box{
            background-color: rgba(135, 206, 235, 0.7);
            text-align: center;
            margin: auto;
            width: 300px;
            padding: 20px;
            padding-top: 30px;
            border-radius: 10px;

        }
        </style>
 

        <div id="box" >

        <form method="post">
        <div style="font-size:30px; margin:10px; color:white"; > Signup</div>

        <input id="text" type=text" name="user_name"  placeholder="Enter username" required> <br> <br>

        <input  id="text" type=password" name="password" placeholder="Enter password" min="4" max="8" required ><br> <br>
        <input class="button" type="submit" value="Signup"><br> <br>

        Already Have Account! <a href="login.php"><b>Click to Login</b></a><br><br>
        </form>
        </div>
    
</body>
</html>