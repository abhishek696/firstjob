<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
$conn = mysqli_connect('localhost', 'root', 'admin', 'firstjob');

if ($conn) {
	# code...
	echo "working";

}else{
	echo "not working";
}
?>