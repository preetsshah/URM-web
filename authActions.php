<?php
    include("db.php");
    if(isset($_POST['signup'])){
        $email = $_POST['emailSignUp'];
        $pass = $_POST['passSignUp'];
        $auth = $firebase->getAuth();
        $user = $auth->createUserWithEmailAndPassword($email,$pass);
        header("location: index.php");
    }

    elseif(isset($_POST['signin'])){
        $email = $_POST['emailSignIn'];
        $pass = $_POST['passSignIn'];
        $auth = $firebase->getAuth();
        $user = $auth->getUserWithEmailAndPassword($email,$pass);
        header("location: index.php");
        if($user){
            session_start();
            $_SESSION['user'] = true;
            header("location: home.php");
        }
    }