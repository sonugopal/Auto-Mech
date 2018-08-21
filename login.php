<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user=$_POST["Username"];
    $pass=$_POST["Password"];
    if($user=="sonugopal41@gmail.com" && $pass="123")
    {
        $_SESSION["user"]=$user;
        header('Location:index.php ');

    }
    else{
        $err="Username and Password incorrect";
    }



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="sonu">
    <title>Sign up</title>
    <link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <script src="public/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="signup signin">
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
                    <li><a href="frames.html">FEATURES</a> </li>
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
<div class="container">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-md-offset-3" style="margin-top: 100px">
            <div class="form-body">
                <!--<div class="new-form-icon">
                    <label ><img src="images/icons/Add_agency.png"></label>
                </div>-->
                <div class="">
                    <h2 class="text-center" style="margin-left: 65px;color: #0f0f0f">SIGN IN</h2>
                </div>
                <div>
                    <form class="form form-group login-form" id="login_form" action="login.php" method="post">
                        <!--first page-->
                        <div id="ag_form_first">

                            <div class="form-field">
                                <label><img src="images/icons/user2.png"></label>
                                <input type="text" name="Username" id="username" placeholder="Username" >
                            </div>
                            <div class="form-field">
                                <label><img src="images/icons/password.png"></label>
                                <input type="text" name="Password" id="password" placeholder="Password" >
                            </div>


                        </div>
                        <?php
                        if($err)
                        {
                            echo $err;
                        }
                        ?>
                        <a href="signup.html" style="    float: right;
    margin-top: 20px;"><p>Create Account</p></a>
                        <div class="col-md-4 col-xs-4 col-xs-offset-4 col-md-offset-4">
                            <button type="submit" class="btn opt-btn sub-btn">SUBMIT</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $("#login_form").submit(function (e) {
        e.preventDefault();
        var uname=$("#username").val();
        var pass=$("#password").val();
        var r=1;
        if(uname.length==0)
        {
            $("<span>Enter username!</span>").insertAfter("#username");
            r=0;
        }
        if(pass.length==0)
        {
            $("<span>Enter password!</span>").insertAfter("#password");
            r=0;
        }
        if(r!=0){


            $(this)[0].submit();
        }
    })

</script>
</body>
</html>