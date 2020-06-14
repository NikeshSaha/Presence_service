<?php
    require 'dbconfig/config.php';
?>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="CSS/style.css">
        <script type="text/javascript">
        function PreviewImage()
        {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
            oFReader.onload=function (oFREvent)
            {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };
        </script>
</head>
<body>
<form class="myform" name="form1" action="register.php" method="post" enctype="multipart/form-data">
         <div id="main-wrapper">
            <center> <h2>Registration Form</h2></center>
            <center><img id="uploadPreview" src="images/img_avatar.png" class="avatar"><br>
            <input type="file" id="imglink" name="imglink" accept=".jpg, .jpeg, .png" onchange="PreviewImage();"/>
        </center>
        
        
        <label ><b>Full Name:</b></label><br>
            <input name="fullname" type="text" id="name" onfocusout="ValidateName(document.form1.name)" tooltip="Please Enter valid Name" class="inputvalues" placeholder="Enter your full name" required/><br>
            <br><label ><b>Gender: </b></label>
            <input  type="radio" class="radiobtns" name="gender" value="male" checked required/>Male
            <input  type="radio" class="radiobtns" name="gender" value="female" required/>Female<br>
            <br><label ><b>Qualification &nbsp; </b></label>
            <select class="qualification" name="qualification">
                <option value="MSC">MSC</option>
                <option value="BSC">BSC</option>
                <option value="MCA">MCA</option>
                <option value="BTECH">BTECH</option>
                <option value="MTECH">MTECH</option>
            </select><br>
            <br><label ><b>Email Id:</b></label><br>
            <input name="username" type="email" class="inputvalues" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="Please Enter valid Email" placeholder="Enter your Email Id" required/><br>
            <br><label ><b>Password:</b></label><br>
            <input name="password" type="password" pattern="([a-zA-Z0-9@*#]{8,15})$" title="Your password contain must contain one special character with number" class="inputvalues" placeholder="Enter your password"required/><br>
            <br><label ><b>Confirm Password:</b></label><br>
            <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Your Password"required/><br><br>
            <label for="box">
                <input type="checkbox" onclick="enableButton(this)" name="box" id="box"> I accpet all <span><a href="#">Terms and Conditions</a></span>
            </label><br>
            <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" disabled/><br>
            <br>
            <a href="Login.php"><input type="button" id="back_btn" value="Back"/></a>
</form>
<?php
    if(isset($_POST['submit_btn']))
    {
        //echo '<script type="text/javascript"> alert("Sign Up Button Is Clicked")</script>';
        
        
        $username=$_POST['username'];
        $fullname=$_POST['fullname'];
        $gender=$_POST['gender'];
        $qualification=$_POST['qualification'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $img_name=$_FILES['imglink']['name'];

        $img_size=$_FILES['imglink']['size'];

        $img_tmp=$_FILES['imglink']['tmp_name'];
        $directory='uploads/';
        $target_file=$directory.$img_name;



        if($password==$cpassword)
        {
            $query="select * from fileupload WHERE username='$username'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
               
                echo '<script type="text/javascript"> alert("Username already <exists class=""></exists> try another username")</script>';
            }
            else if(file_exists($target_file))
            {
                
                echo '<script type="text/javascript"> alert("Image file already exists.. try another image file")</script>';
            }
            

            else 
            {
                move_uploaded_file($img_tmp,$target_file);
                $query="INSERT INTO fileupload (`username`, `password`, `fullname`, `imglink`, `gender`, `qualification`) VALUES ('$username','$password','$fullname','$target_file','$gender','$qualification')";
                $query_run=mysqli_query($con,$query);
                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("Succesfully user registered... Go to login page to login")</script>'; 
                }
                else{
                    echo '<script type="text/javascript"> alert("Error")</script>';
                }
            }


        }
        else
        {
            echo '<script type="text/javascript"> alert("Password and Confirm password does not match")</script>';
        }
    }
    
?>

            

</div>
<script>
    function ValidateName(inputtxt)
            { 
                var letters = /[A-Za-z][a-zA-Z][^#&<>\"~;$^%{}?]{1,50}$/g;
                if(inputtxt.value.match(letters))
                    return true;
                else
                {
                    alert('Please input alphabet characters only');
                    return false;
                }
            }
    function enableButton(s){
        if(s.checked){
                    document.getElementById("signup_btn").disabled = false;
                    document.getElementById("signup_btn").style.backgroundColor = "#DCDCDC";
                } else{
                    document.getElementById("signup_btn").disabled = true;
                    document.getElementById("signup_btn").style.backgroundColor = "#F0FFFF";
                }
    }
</script>

</body>
    </html>