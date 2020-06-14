<?php
    session_start();
    if(!isset($_SESSION['imglink']))
        header('Location:Login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Page</title>
    <style>
        body{
            background-color: rgba(222, 255, 247);
        }
        .image_team{
            display: inline-block;
			padding: 20px;
        }
        img{
            cursor: pointer;
        }
        .img1{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 22px;
            left: 800px;
            border: 3px solid rgb(135, 153, 233);
        }
        .img2{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 22px;
            left: 840px;
            border: 3px solid rgb(135, 153, 233);
        }
        .img3{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 22px;
            left: 880px;
            border: 3px solid rgb(135, 153, 233);
        }
        .img4{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 22px;
            left: 920px;
            border: 3px solid rgb(135, 153, 233);
        }
        .img5{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            top: 22px;
            left: 960px;
            border: 3px solid rgb(135, 153, 233);
            text-decoration: none;
            color: rgb(95, 91, 91);
            background-color: rgba(240, 240, 240, 0.986);
            line-height: 50px;
            font-weight: bolder;
            font-size: 22px;
        }
		.present{
            display: inline-block;
            margin-top: 0;
            padding-top: 0;
            top: 0;
		}
        .abc{
            text-decoration: none;
            color: black;
            border: 1px solid black;
            margin-left: 1050px;
            padding: 15px;
            font-weight: 600;
            font-size: 20px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .bca{
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-weight: 600;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
        .fa-caret-down{
            border-right: 1px solid black;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            padding: 19px;
            padding-bottom: 16.5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .img_s{
            display: inline-block;
            margin-left: 20px;
            margin-bottom: 10px;
        }
        .bca{
            margin-left: 20px;
            font-size: 24px;
            font-weight: normal;
            padding: 13px;
            background-color: yellow;
            border-radius: 5px;
        }
        .fa-user-plus{
            font-weight: normal;
            margin-right: 3px;
        }
        ::placeholder {
            font-size: 18px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="image_team">
        <a href=""><?php echo '<img class="img1" src="'.$_SESSION["imglink"].'">';?></a>
        <a href=""><?php echo '<img class="img2" src="'.$_SESSION["imglink"].'">';?></a>
        <a href=""><?php echo '<img class="img3" src="'.$_SESSION["imglink"].'">';?></a>
        <a href=""><?php echo '<img class="img4" src="'.$_SESSION["imglink"].'">';?></a>
        <a href="#" class="img5">&nbsp;&nbsp;+1</a>
    <div class="present">
        <a href="#" class="abc"><i class="fa fa-caret-square-o-right"></i>&nbsp; Present &nbsp;</a><i class="fa fa-caret-down"></i>
        <a href="#" class="bca"><i class="fa fa-user-plus"></i>Share</a>
        <a href="Logout.php"><i class="fa fa-power-off" style="border: 2px solid red; padding: 12px; margin-left: 5px;border-radius: 50%; font-size: 22px;"></i></a>
    </div>
</div>
<div class="body_part">
    <textarea name="data_wite" placeholder="Describe yourself here..." id="data_wite" cols="100" rows="100" style="margin-left: 400px;"></textarea>
</div>
</body>
</html>