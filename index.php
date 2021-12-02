<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $flag = $db->login($username, $password);
    if($flag){
        header("Location: http://localhost/Blood-Donation-Mini-Project/home.php");
    } else {
        $message = "Username or password was incorrect!";
    }
}
$title="Login";
include 'layout/_sigmaHeader.php'; 
?>
<div style="background: url('https://media.istockphoto.com/photos/doctor-clicking-on-a-laptop-before-her-picture-id1292777576?b=1&k=20&m=1292777576&s=170667a&w=0&h=Tg1ASn3aw19DgyqjGaaWqJmPeXiDRaU1LW8c83Y5tbw='); width:100%; height:100vh; display: flex;align-items:center;justify-content:center; background-repeat:no-repeat; background-size:cover">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php if(isset($message)): ?>
                <div class="alert-danger"><?= $message; ?></div>
                <?php endif; ?>
                <div class="panel panel-default" style="width: 70%; margin:auto">
                    <h1>
                        Login
                    </h1>
                    <div class="panel-body">
                        <form class="form-vertical" role="form" method="post" action="index.php">
                            <div class="form-group">
                                <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group loginBtn">
                                <button type="submit" name="loginBtn" class="btn btn-primary btn-sm" style="width: 100%; font-size:1.5rem">Login</button>
                                <a href="users/" class="btn btn-sm btn-dark">I do not have username or password</a>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
    </div>
</div>

