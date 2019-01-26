<?php
include("header.php");
include("config.php");
require_once("included.php");

?>

<?php
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $ref_code = rand(11000, 99000);
    $message = "You are logged in {$fname} ";
// getting data from database
    $sql = "INSERT INTO users_info (Ref_Code, First_Name, Last_Name, Email, Pwd) VALUES ('$ref_code', '$fname', '$lname', '$email',' " . md5($pwd) . "')";

    if (mysqli_query($connection, $sql)) {
        redirect_to("login_form.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

}
?>

<div class="col-6 mx-auto ">
<header class="text-center"><h2> REGISTER </h2></header>



<form class="form bordered container" action="register_form.php" method="POST">



<label for="first_name">First Name </label>
<input class="form-control" type="text" id="first_name" name="fname" required><br>

<label for="Last_name">Last Name</label>
<input class="form-control" type="text" id="first_name" name="lname" required><br>

<label for="mail">E-mail</label>
<input class="form-control" type="email" id="mail" name="email" required><br>

<label for="pass">Password</label>
<input class="form-control" type="password" id="pass" name="pwd" required><br>

<!-- <label for="pass">Confirm Password</label>
<input class="form-control" type="password" id="pass" name="password" required><br> -->

<div>
<input type="checkbox" required ><span style="color:blue;"> I agree to VVS terms and conditions</span>
</div> <br>
<div class="form-group col-4 mx-auto text-center">
<button type="submit" class="col-12 btn btn-success" name="submit" value="submit">Register</button>
<br>Already have an account? Click <a href="login_form.php">here</a> to login
</div>

</form>
</div>






<?php
include("closedb.php");
include("footer.php");
?>