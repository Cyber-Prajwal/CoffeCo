<?php 
$server_name="localhost";
$username="root";
$password="";
$database_name="wtpro";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$country = $_POST['country'];
$issue= $_POST['issue'];

$sql_query = "INSERT INTO entry_details(first_name,last_name,country,issue)
VALUES ('$first_name','$last_name','$country','$issue')";

if(mysqli_query($conn, $sql_query))
{
    //echo "New Details Entry inserted successfully!";
    
        //  To redirect form on a particular page
        header("Location:http://localhost/wtpro/contacts.html");
        
}
else
{
    echo "Error:" . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);
echo "<meta http-equiv='refresh' content='0'>";
}
?>