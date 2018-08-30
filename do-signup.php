
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
                       <!-- <li>
                            <div class="login-btn">
                                <center> <a href="do-signup.php"> <button class="login">PROFILE</button></a></center>
                            </div>
                        </li>-->
                    </ul>
                </nav>
                <p id="user"></p>

            </div>
        </div>
    </div>
    <div class="">
        <?php
        if(isset($_GET["Name"])) {
            $name=$_GET["Name"];
            $mob=$_GET["Contact"];
            $email=$_GET["Email"];
            $state=$_GET["State"];
            $city=$_GET["City"];
            $adds=$_GET["Address"];
            $uname=$_GET["Username"];
            $vehi=$_GET["vehicle"];
            $acc_type=$_GET["AccType"];
        }
        ?>
        <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 100px">
            <div class="form-body">
                <div class="">
                    <h2 class="text-center" style="margin-left: 65px;color: #0f0f0f">Profile</h2>
                </div>
                <div>
                  <table class="table">
                      <tr>
                          <td><p>Name</p></td><td><p><?php echo $name ?></p></td>
                      </tr>
                      <tr>
                          <td>Contact</td><td><p><?php echo $mob ?></p></td>
                      </tr>
                      <tr>
                          <td>Email</td><td><p><?php echo $email ?></p></td>
                      </tr>
                      <tr>
                          <td>State</td><td><p><?php echo $state ?></p></td>
                      </tr>
                      <tr>
                          <td>City</td><td><p><?php echo $city ?></p></td>
                      </tr>
                      <tr>
                          <td>Address</td><td><p><?php echo $adds ?></p></td>
                      </tr>
                      <tr>
                          <td>Vehicles</td><td><p><?php
                                  foreach ($vehi as $v_name){
                                      echo $v_name.",";
                                  }

                                  ?></p></td>
                      </tr>
                      <tr>
                          <td>Account Type</td><td><p><?php echo $acc_type ?></p></td>
                      </tr>
                  </table>
                </div>

            </div>
        </div>
    </div>
    </div>


</div>

</body>
</html>