<?php
require_once 'admin/dbconfig.php';
$username=$_POST['username'];
$password = md5($_POST['password']);
$db->where('username', $username);
$db->where('password', $password);
$results = $db->get('user_control');
if($db->count > 0 ) {
    foreach ($results as $result) {
        $_SESSION['user_details']= $result;
    }
    echo 'success';
}
else {
    echo "Invalid username or password..!";
}