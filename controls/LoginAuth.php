<?php
if(isset($_POST['login'])){
    if($_POST['usertype']=="agent"){
        header("location:../pages/Agenthome.php");
    }
    if ($_POST['usertype']=="admin"){
        header("location:../pages/home.php");
    }
}else{
    echo "loll";
}
