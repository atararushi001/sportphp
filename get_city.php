<?php
require_once("include/config.php");
if(!empty($_POST["statecode"])) 
{
$statecode=$_POST["statecode"];
$query1 =mysqli_query($con,"SELECT city.id as cityid,city.name FROM city where  state_id = {$statecode}");
?>
<option value="">Select City</option>
<?php
while($row1=mysqli_fetch_array($query1))  
{
?>
<option value="<?php echo $row1["cityid"]; ?>"><?php echo $row1["name"]; ?></option>
<?php
}
}
?>