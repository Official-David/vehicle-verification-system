<?php
session_start();
include("header.php");
require("config.php");
?>

<!-- <?php
// $email = $_SESSION['email'];

// $fields = "SELECT * FROM users_info WHERE Email = '$email'";


// $ans = mysqli_query($connection, $fields) or die("database failed " . mysqli_error($connection));
//         // if($row = mysqli_num_rows($ans) == 1 ){

// $row = mysqli_fetch_array($ans);
// $_SESSION['Last_Name'] = $row['Last_Name'];
// $_SESSION['Ref_Code'] = $row['Ref_Code'];
// $_SESSION['First_Name'] = $row['First_Name'];
// $ref_code = $_SESSION['Ref_Code'];
// $first_name = $_SESSION['First_Name'];

                                                        // }
?> -->

<div class="text-center"><h2>Dashboad</h2></div> 
<div class="text-center"><h3><?php echo "Profile update successful"; ?></h3></div> </div><br><br><br>


<div class="text-center"> <a href="dashboard.php" style="text-decoration:none;">Go to dashboard</a></div>
<div class="text-center"> <a href="logout.php" style="text-decoration:none;">Log out</a></div>


<?php
include("footer.php");
?>

