<?php

if(isset($_POST['login'])){
    session_start();
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
                $SessionId=$res['matriculeAgt'];
                    header("location:../pages/Agenthome.php?agent=$SessionId");
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
        require 'db.php';

        if ($pdo) {
            $stmt=$pdo->prepare("Select * From administrateurs where matriculeAdm=?");
            $stmt->execute([$user]);
            $res=$stmt->fetch();
            if($res!=null){
                $userPwd=$res['pwd'];
                if(password_verify($pass,$userPwd)){
                    $SessionId=$res['matriculeAdm'];
                    header("location:../pages/home.php?admin=$SessionId");
                }else{
                    echo" username and password Combination did not match";
                }
            }else{
                echo" user does not Exist";
            }
        }
      //  header("location:../pages/home.php");
    }
}
// End Of Admin connection to Database
