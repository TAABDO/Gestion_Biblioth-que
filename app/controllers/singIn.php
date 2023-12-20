<?php

include __DIR__ . "/../../Model/User.php";

if (isset($_POST['submit'])) {

    $user= new User( $_POST['username']='',$_POST['fullname']='',$_POST['email'],$_POST['password'],$_POST['phone']='');
   
    $row=$user->findUserByEmail();

    if (password_verify($user->getPassword(),$row['password'])) {
                
        if ($row['role'] == '1') {

            header("location:../../views/admin/dashboard.php");
            exit;
        } else {
            header("location:../../views/Dashboard_user/dashboard_user.php");
            exit;
            
        }
    } else {
        
        echo "Invalid password.";
    }

}
?>