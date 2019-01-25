<?php
require_once("included.php");
session_start();
include("header.php");
require("config.php");
?>

<?php
if (isset($_POST["login"])){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $query = "SELECT * FROM users_info WHERE email = '$email' and pwd = ' ".md5($pwd)." '";
    $result = mysqli_query($connection, $query) or die("database failed " .mysqli_error($connection));
    if (mysqli_num_rows($result) == 1){
        $_SESSION['email'] = $email;
        redirect_to("dashboard.php");
     } else {
         echo "invalid login credentials";
     }
}

    // $fields =  "SELECT * FROM users_info WHERE email = ' " . $_SESSION['email'] . " ' ";
    //         $ans = mysqli_query($connection, $fields) or die("database failed " .mysqli_error($connection));
    //         $row = mysqli_fetch_row($ans);
    //         $_SESSION['First_Name'] = $row['First_Name'];
    //         $_SESSION['Last_Name'] = $row['Last_Name'];
    //         $_SESSION['Ref_Code'] = $row['Ref_Code'];
    //        echo $row['First_Name'];
           
?>
<div class="text-center">
<h2>LOGIN</h2>
</div>
<div class="col-6 mx-auto ">
    <form action="login_form.php" class="form container" method="POST" >

            <label for="mail">E-mail</label>
            <input class="form-control" type="email" id="mail" name="email" required><br>

            <label for="pass">Password</label>
            <input class="form-control" type="password" id="pass" name="pwd" required><br><br>

            <div class="form-group col-4 mx-auto text-center">
            <button type="submit" class="col-12 btn btn-success" name="login" value="login">Login</button>
            <br>Don't have an account? Click <a href="register_form.php">here</a> to register
            </div>
    </form>
</div>
<?php

include("footer.php");
?>