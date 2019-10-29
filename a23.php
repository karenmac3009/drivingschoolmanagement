<?php
if(isset($_REQUEST['proceed']))
{	
	$email=$_REQUEST["email"];
	$typeofstudent=$_REQUEST["typeofstudent"];
	$typeofpackage=$_REQUEST["typeofpackage"];
    $location=$_REQUEST["location"];
	$batch=$_REQUEST["batch"];
	$dbname= "skr";
	if(!empty($email)||!empty($typeofstudent)||!empty($typeofpackage)||!empty($location)||!empty($batch))
	{
		$host ="localhost";
		$dbUsername="root";
		$dbPassword="";
		$conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
		$stmt=$conn->prepare("INSERT into packages (email,typeofstudent,typeofpackage,location,batch) values (?,?,?,?,?)");
		$stmt->bind_param("sssss",$email,$typeofstudent,$typeofpackage,$location,$batch);
		$stmt->execute();
		$stmt->close();
		header("Location:index.php");
	}
}	
?>