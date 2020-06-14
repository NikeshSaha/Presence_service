<?php
    session_start();
    require 'dbconfig/config.php';
?>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="CSS/style.css">
</head>

<body style="background-color: rgba(211, 211, 211, 0.5);">
         <div id="main-wrapper">
            <center> <h2>Login Form</h2></center>
            <center><img src="images/img_avatar.png" class="avatar"></center>
        
        <form class="myform" action="" method="post">
            <label ><b>Registered Email ID:</b></label><br>
            <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="Please Enter valid Email" name="username" class="inputvalues" placeholder="Enter Email ID" required/><br>
            <br><label ><b>Password:</b></label><br>
            <input type="password" name="password" class="inputvalues" placeholder="Enter your password" pattern="([a-zA-Z0-9@*#]{8,15})$" title="Your password contain must contain one special character with number" required/><br><br>
            <input type="submit" name="login" id="login_btn" value="Login"/><br>
            <br>
            <a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
    <?php
    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
       
        $query = mysqli_query($con,"select * from fileupload where username = '$username' and password = '$password' ");
        $nr = mysqli_num_rows($query);
        if ($nr>0){
            $row=mysqli_fetch_assoc($query);
            $_SESSION['username']=$row['username'];
            $_SESSION['imglink']=$row['imglink'];
            header('location:index.php');
        }
        else
        {
            echo '<script type="text/javascript"> alert("Unauthenticated User")</script>';
        }

        
    }
    ?>

</form>
</div>

</body>
    </html>