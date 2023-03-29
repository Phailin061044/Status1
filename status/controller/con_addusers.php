
<?php 
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gmail=$_POST["gmail"];
$password=$_POST["password"];
$urole=$_POST["urole"];
$create_at=$_POST["create_at"];
?>

<?php
$users=array();
$users["firstname"]=$firstname;
$users["lastname"]=$lastname;
$users["gmail"]=$gmail;
$users["password"]=$password;
$users["urole"]=$urole;
$users["create_at"]=$create_at;

print_r($users);
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Users.php";


?>

<?php
include "../view/Addusers.php";
?>
