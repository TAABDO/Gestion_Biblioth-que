
<?php 
// namespace App\controllers;
require '../../vendor/autoload.php';
use App\model\User;

if(isset($_POST['submit'])){
    $user = new User($_POST['username'], $_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['phone']);
    $user->create();

    header("location: ../../views/auth/signIn.php");
    exit(); 
} else {
    echo 'Form not submitted';
}

    
?>