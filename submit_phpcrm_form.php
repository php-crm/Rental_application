<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
  $dob=$_POST['dob'];
	$phone=$_POST['phone'];
	$occupation=$_POST['occupation'];
	$radio1=$_POST['radio1'];
	$occupants=$_POST['occupants'];
	$street1=$_POST['street1'];
  $street2=$_POST['street2'];
  $city=$_POST['city'];
   $state=$_POST['state'];
  $country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$owner_name=$_POST['owner_name'];
  $owner_number=$_POST['owner_number'];
  $rental_duration=$_POST['rental_duration'];
  $message=$_POST['message'];
  
  
  

  $field1="<b>DOB:</b> ".$dob."<br>"."<b>Occupation:</b> ".$occupation."<br>"."<b>Marital Status:</b> ".$radio1."<br>"."<b>Number of occupants:</b> ".$occupants."<br>"."<b>Previous residential details=>Street1:</b> ".$street1."<br>"."<b>Street2:</b> ".$street2."<br>"."<b>City:</b> ".$city."<br>"."<b>State:</b> ".$state."<br>"."<b>Country:</b> ".$country."<br>"."<b>Zipcode:</b> ".$zipcode."<br>"."<b>Owner Name:</b> ".$owner_name."<br>"."<b>Owner Contact number:</b> ".$owner_number."<br>"."<b>Rental Duration:</b> ".$rental_duration."<br>"."<b>Reason For Shifting:</b> ".$message;

  

}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
exit();
//echo $response;
?>