<?php
$dbuser = "scott";
$dbpassword = "tiger";
$db = "orabis";
$conn = oci_connect($dbuser,$dbpassword,$db);

if (!$conn){
    echo "Connection error";
    exit;
}

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$email=$_POST['email'];
$address=$_POST['address'];
$selpass=$_POST['pass'];
$confirm=$_POST['pass2'];
$sql = "INSERT INTO Become_A_Member_110385461(First_Name,Surname,Email_Address,Address,Select_A_Password,Retype_Password) 
VALUES ('".$fname."','".$sname."', '".$email."', '".$address."','".$selpass."', '".$confirm."')";

$stmt = oci_parse($conn, $sql);
if (!$stmt) {
    echo "Error in preparing the statement";
    exit;
}

oci_execute($stmt, OCI_DEFAULT);
print "Record Inserted";
oci_commit($conn);
oci_close($conn);
?>