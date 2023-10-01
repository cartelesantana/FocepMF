<?php
if(isset($_GET['admin'])){
    $admin=$_GET['admin'];
    $matricule=$_POST['matriculeAgt'];
    $localisation=$_POST['localisation'];
    $date=date('y-m-d');
    require 'db.php';
    $checkAgent=$pdo->query("select * From agent where matriculeAgt='$matricule'")->fetch();
    if(!empty($checkAgent)){

        $collecte=$pdo->prepare("insert into planification values ('$matricule', '$localisation','$date')");
        if($collecte->execute()){
            echo"
            <script>
               alert('collecte planifier  avec success');
               window.location.href='../pages/planifierCollecte.php?admin=$admin';
            </script>
            ";
        }
    }else{
        echo"agent innexistant";
    }

}else{
    session_destroy();
    exit();
}