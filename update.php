<?php
include("header.php");
session_start();
include("config.php");
require_once("included.php");

?>

<?php
if (isset($_POST["submit"])) {
    $phone = $_POST["Phone"];
    $addr = $_POST["addr"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $chassis = $_POST["chassis"];
    $dop = $_POST["dop"];
    $dor = $_POST["dor"];
    $ed = $_POST["ed"];

    // getting data from database
    $sql = "UPDATE users_info SET Phone = $phone, Addr = $addr, Vehicle_Brand = $brand, Model = $model, Chassis_Number= $chassis, Date_of_Purchase = $dop, Date_of_Registration = $dor, Expiration_Date = $ed  where email = ' ".$_SESSION['email']." ' ";
    if (mysqli_query($connection, $sql)) {
        redirect_to("success.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

}
?>
<div><a href="dashboard.php" style="text-decoration:none;">&nbsp &nbsp back</a></div>
<div class="col-6 mx-auto ">
<header class="text-center"><h2> Update your profile </h2></header>
<form class="form bordered container " action="update.php" method="POST">

<label for="Phone_number">Phone</label>
<input class="form-control" type="text" id="Phone_number" name="Phone" required><br>

<label for="Address_user">Address</label>
<input class="form-control" type="text" id="Address_user" name="addr" required><br>

<label for="vehicle">Vehicle Brand</label>
<input class="form-control" type="text" id="vehicle" name="brand" required><br>

<label for="type">Model</label>
<input class="form-control" type="text" id="type" name="model" required><br>

<label for="chas">Chassis Number</label>
<input class="form-control" type="text" id="chas" name="chassis" required><br>

<label for="Ddop">Date of purchase</label>
<input class="form-control" type="date" id="ddop" name="dop" value=" {date()}" required><br>

<label for="Ddor">Date of registration</label>
<input class="form-control" type="date" id="ddor" name="dor" required><br>

<label for="Eed">Expirration date</label>
<input class="form-control" type="date" id="Eed" name="ed" required><br>

<!-- <label for="pass">Confirm Password</label>
<input class="form-control" type="password" id="pass" name="password" required><br> -->


<div class="form-group col-4 mx-auto text-center">
<button type="submit" class="col-12 btn btn-success" name="submit" value="submit">submit</button>
</div>

</form>
</div>