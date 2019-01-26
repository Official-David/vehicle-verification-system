<?php
session_start();
include("header.php");
require("config.php");
?>

<div class="text-center"><h2>Dashboad</h2></div> 
<div class="text-center"><h3><?php echo "Profile update successful"; ?></h3></div> </div><br><br><br>
<div class="text-center"> <a href="dashboard.php" style="text-decoration:none;">Go to dashboard</a></div>
<div class="text-center"> <a href="logout.php" style="text-decoration:none;">Log out</a></div>

<?php
include("footer.php");
?>
