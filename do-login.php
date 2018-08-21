
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



        }
        ?>
