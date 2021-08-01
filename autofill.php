<?php
  
// Get the user id 
$pincode = $_REQUEST['pincode'];
  
// Database connection
$con = mysqli_connect("localhost", "root", "", "revamp_portal");
  
if ($pincode !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT state1, district, taluka FROM master_pincode WHERE pincode='$pincode'");
  
    $row = mysqli_fetch_array($query);
    $state = $row["state1"];
    $district = $row["district"];
    $taluka = $row["taluka"];

}
  
// Store it in a array
$result = array("$state", "$district","$taluka");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>