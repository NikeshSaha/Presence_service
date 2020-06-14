<?php
    session_start();
?>
<html>
    <head>
        <title>Home Page Page</title>
        <link rel="stylesheet" href="CSS/style.css">
</head>
<body style="background-color:gray">
         <div id="main-wrapper">
            <center> <h2>Home Page</h2></center>
            <center> <h3>Welcome <?php echo $_SESSION['username'] ?></h3></center>
            <center><?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">';?></center>
        
        <form class="myform"  method="post">
            
            <input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
</form>
<?php
if(isset($_POST['logout']))
{
session_destroy();
header('location:index.php');
}
?>

</div>

</body>
    </html>