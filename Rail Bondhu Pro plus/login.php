<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST"){
    //somthing was posted
  
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        //check if username and password is not empty
        //read from  database
        
        $query = "SELECT * FROM users WHERE user_name = ? LIMIT 1";


        $query = "select * from users where user_name ='$user_name' limit 1";


       $result = mysqli_query($con ,$query);



        if($result)
        {
            if ($result && mysqli_num_rows($result) > 0) 

            {
                $user_data = mysqli_fetch_assoc($result);


                if($user_data['password'] === $password)

                {
                    $_SESSION['user_id']= $user_data['user_id'];

                    header("Location: index.php");

                         die;


                }
             
            }
        }
        echo '<style>.custom-text { color: white; font-size: 30; font-weight: bold; }</style>';
        echo '<span class="custom-text">wrong user namer or password</span>';


    }else
    {
        
        echo '<style>.custom-text { color: white; font-size: 30; font-weight: bold; }</style>';
        echo '<span class="custom-text">Server error</span>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

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
            background-color: lightblue;
            border: none;

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

        <form method="POST">
        <div style="font-size:30px; margin:10px; color:white"; > Login</div>

        <input id="text" type=text" name="user_name"  placeholder="Enter your username" required> <br> <br>

        <input  id="text" type=password" name="password" placeholder="Enter your password" min="4" max="8" required ><br> <br>
        <input  class="button" type="submit" value="Login"><br> <br>

        No Account ! <a href="singnup.php"><b>Click to Signup</b></a><br><br>
        </form>
        </div>
    
</body>
</html>