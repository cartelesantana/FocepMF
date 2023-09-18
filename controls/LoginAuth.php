<?php

if(isset($_POST['login'])){
    $user=$_POST['inputName'];
    $pass=$_POST['inputPassword'];
    //start agent connection to database
    if($_POST['usertype']=="agent"){
        require 'db.php';

        if ($pdo) {
           $stmt=$pdo->prepare("Select * From agent where matriculeAgt=?");
           $stmt->execute([$user]);
           $res=$stmt->fetch();
           if($res!=null){
            $userPwd=$res['pwd'];
            if(password_verify($pass,$userPwd)){
                echo"user Connected";
            }else{
                echo" username and password Combination did not match";
            }
           }else{
            echo" user does not Exist";
           }
            //header("location:../pages/Agenthome.php");
        }
    }
// End Of Agent connection to Database

//start agent connection to database
    if ($_POST['usertype']=="admin"){
        header("location:../pages/home.php");
    }
}
// End Of Admin connection to Database
