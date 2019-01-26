<?php
function redirect_to($new_location)
{
    header("Location: " . $new_location);
    exit;
}
//redirect_to("dashboard.php");
?>

<?php
include("header.php");
?>


<?php 
/*$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
 */

if (isset($_POST["username"])) {
    $username = $_POST["username"];
} else {
    $username = "";
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
} else {
    $password = "";
}


print_r($_POST);
?>

<?php
include("footer.php");
?>