<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AUTO MECH</title>
    <link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <script src="public/jquery/dist/jquery.min.js"></script>

    <script src="public/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <style>
        body{
            background: url("public/images/bg.jpg");
        }
        .top{
            background: rgba(161, 161, 162,.4);
            position: fixed;
            width: 101%;
            z-index: 100;
        }
        .main-body{
            position: absolute;
            margin-top: 176px;
        }
        
    </style>


</head>
<body class="home" style="height: 1000px;">
<div class="main">
    <div class="row top">
        <div class="">
            <div class="head ">
                <center>
                    <h1>AUTO <span id="mech"> MECH</span></h1>
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
                        <?php
                        session_start();
                        if (!$_SESSION["user"]):
                        ?>
                        <li>
                            <div class="login-btn">
                                <center> <a href="login.php"> <button class="login">LOGIN</button></a></center>
                            </div>
                        </li>
                            <?php
                            else:
                            ?>
                                <li>
                                    <div class="login-btn">
                                        <center> <a href="logout.php"> <button class="login">Logout</button></a></center>
                                    </div>
                                </li>
                        <?php
                        endif;
                        ?>

                    </ul>
                </nav>
                <p id="user"><?php echo $_SESSION["user"];

                    ?></p>


            </div>
        </div>
    </div>
    <div>
    <div class="row main-body">

        <div class="tile">
            <a class="vehi-btn" data-value="c" onclick="showVehicles(this)">
            <img src="public/images/car.jpg">
            <h1>Car</h1>
        </a>

        </div>
        <div class="tile">
            <a data-value="b" class="vehi-btn" onclick="showVehicles(this)">
            <img src="public/images/bike.jpg">
            <h1>Bike</h1>
        </a>
        </div>
        <div class="tile">
            <a class="vehi-btn" data-value="j" onclick="showVehicles(this)">
            <img src="public/images/jeep.jpg">
            <h1>Jeep</h1>
            </a>
        </div>


    </div>
    </div>
    <div class="row">
        <div class="vehi-list">

        </div>
    </div>


</div>
<script >

 /*   var name = localStorage.getItem('user');
    var user;
    if(name=="null"){
        user=prompt("Enter Your Name");
        if(user=='null') {
            user = "Guest";

        }
        localStorage.setItem('user',user);


    }
    else {
        user=name;
        localStorage.setItem('user',user);
    }

    $("#user").html("Welcome "+user);*/

/*   $(".vehi-btn").click(function () {
       var v=$(this).data().value;
       $(".vehi-list").empty();
       window.scrollTo(0,800);
       for(var i=1;i<=6;i++)
       {
           var url="public/images/"+v+i+".jpg";
           var html="<div class='col-md-4'><img class='img-responsive' src="+url+"></div>"
           $(".vehi-list").append(html);

       }

   })*/
function showVehicles(val) {
    var v=val.dataset.value;
    console.log(v);
    $(".vehi-list").empty();
    window.scrollTo(0,800);
    for(var i=1;i<=6;i++)
    {
        var url="public/images/"+v+i+".jpg";
        var html="<div class='col-md-4'><img class='img-responsive' src="+url+"></div>"
        $(".vehi-list").append(html);

    }
}

</script>
</body>
</html>