<?php 
require_once("include/config.php");
if(!empty($_POST["coutrycode"])) 
{
$query =mysqli_query($con,"SELECT * FROM states WHERE country_id = " . $_POST["coutrycode"] );

?>
<option value="">Select State </option>
<?php

while($row=mysqli_fetch_array($query))  
{
 
?>
<option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
<?php
}
}
 
?>