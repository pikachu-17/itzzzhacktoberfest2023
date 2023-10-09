      Simple Login with PHP
        </title>
    </head>
    <body>
        
        <form action="index.php" method="POST">

            <div class="imgcontainer">
                <img src="logo.png" class="avatar"> 
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="uname" required>
                <br>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="pass" required>
                <br>
                <button type="submit" name="signup"> SIGNUP </button>
                <br>
                <button type="submit" name="login"> LOGIN </button>
            </div>

        </form>

    </body><html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>
      
</html>

<?php

    $server_name = "localhost";
    $username = "root";
    $password= "";
    $database = "exercise_php";

    $conn = new mysqli($server_name,$username,$password,$database);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['signup']))
    {
        $user = $_POST['uname'];
        $pass = $_POST['pass'];


        $sql = "insert into users(username,password)values('$user','$pass')";

        if(mysqli_query($conn,$sql))
        {
            echo "Data Inserted succesfully";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }

    if(isset($_POST['login']))
    {
        $user = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = "select * from users where username='$user' && password='$pass'";
        
        if($login = mysqli_query($conn,$sql))
        {
            if(mysqli_num_rows($login) > 0)
            {
                echo "Login done!";
            }
            else
            {
                echo "Login failed!";
            }
        }
    }
?>
