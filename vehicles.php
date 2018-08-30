<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <script src="public/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>
    <style>
        span{
            color: red;
        }
        .container{
            padding-top: 150px;
        }
        h2{
            text-align: center;
        }
        h1{
            text-align: center;
        }
        .vehicles li{
            width: 80%;
            height: 34px;
            background: #C5396E;
            text-align: center;
            color: #fff;
            font-size: 18px;
            border-radius: 6px;
            margin-bottom: 10px;
            padding-top: 5px;
        }
        body{
            background: #286A86;
        }
        .plan-tile{
            background: #E065A6;
            padding: 10px;
            border-radius: 3px;
            text-align: center;
            width: 80%;
            height: 120px;
        }
    </style>
</head>
<body>
<div class="row top">
    <div class="">
        <div class="head ">
            <center>
                <h1>AUTO MECH</h1>
                <h4>Complete Online Vehicle Service Management</h4>
            </center>
        </div>
        <div class="nav">
            <nav class="list">
                <ul>
                    <li class="active"><a href="index.php">HOME</a> </li>
                    <li><a href="about.html">ABOUT</a> </li>
                    <li><a href="offices.html">CONTACT</a> </li>
                    <li><a href="features.html">FEATURES</a> </li>
                    <li>
                        <div class="login-btn">
                            <center> <a href="login.php"> <button class="login">LOGIN</button></a></center>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
<?php
$cars=array("BMW","Audi","Bugatti","Ford","Fiat","Jaguar","Lamborghini","Land Rover","Mini","Hyundai");
$bikes=array("Harley-Davidson","Ninja","Mahindra","Yamaha","Duke","Ducati","Kawasaki","Royal Enfield","Honda","Bajaj",);
$jeeps=array("Range Rover","Nissan","Skoda","Ford","Mahindra","Kia Sportage","Jeep","Volvo","Land Rover","Hummer");
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Car Brands</h2>
            <ul class="vehicles">
                <?php
                foreach ($cars as $car){
                    echo "<li>$car</li>";
                }
                ?>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>Bike Brands</h2>
            <ul class="vehicles">
                <?php
                foreach ($bikes as $bike){
                    echo "<li>$bike</li>";
                }
                ?>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>4x4 Cars Brands</h2>
            <ul class="vehicles">
                <?php
                foreach ($jeeps as $jeep){
                    echo "<li>$jeep</li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <h1>PLANS</h1>
        <?php
        $plan1=array("Name"=>"Silver","Validity"=>"6 Months","Type"=>"Water Service");
        $plan2=array("Name"=>"Gold","Validity"=>"1 year","Type"=>"Water Service & Maintanance");
        $plan3=array("Name"=>"Platinum","Validity"=>"2 year","Type"=>"Water Service & Maintanance and Spairs");
        $plans=array("plan1"=>$plan1,"plan2"=>$plan2,"plan3"=>$plan3);
        foreach ($plans as $plan){
            echo "<div class='col-md-4'>
                      <div class='plan-tile'>
                      <h4>$plan[Name]</h4>
                      <h4>$plan[Validity]</h4>
                      <h4>$plan[Type]</h4>
                      </div>
                  </div>";
        }
        ?>


    <div class="row">
        <?php

        ?>
    </div>
</div>
</body>
</html>