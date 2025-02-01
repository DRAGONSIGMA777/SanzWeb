 <?php
include 'auth.php';

$output = array( );
$query="select user_id, name, email, phone from personnel";
$