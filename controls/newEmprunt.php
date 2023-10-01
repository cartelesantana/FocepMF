<?php

if(isset($_POST['enregistrer'])){
    $admin=$_GET['admin'];
    $nom=$_POST['inputFirstName'];
    $matricule=$_POST['matricule'];
    $mail=$_POST['inputEmail'];
    $montant=$_POST['montant'];
    $datelimite=$_POST['datelimite'];
    $n=15;
    $nn=6;
    $dateJ=date('y-m-d');
    $idEmprunt=uniqid('emprunt');
    require "db.php";
    $checkmatricule= $pdo->query("select * from membre where idMembre='$matricule'")->fetch();

    if(!empty($checkmatricule)){
        $checkempruntstatus=$pdo->query("select * from emprunt where idMembre='$matricule' and statut='impayer'")->fetch();
        if(!empty($checkempruntstatus)){
            echo "<script>alert('emprunt impossible');window.location.href='../pages/newEmprunt.php?admin=$admin';</script>";  
        }else{
            $createEmprunt=$pdo->prepare("insert into emprunt values('$idEmprunt','$admin','$matricule','$dateJ','$datelimite','impayer','$montant')");
            if($createEmprunt->execute()){
                echo "
                <script>
                    window.alert('Emprunt Ajouter Avec Success!!!');
                    window.location.href='../pages/home.php?admin=$admin';
                </script>
            ";  
            }
        }
    }else{
        echo"<script> 
        window.alert('matricule innexistant');
        window.location.href='../pages/newEmprunt.php?admin=$admin';            
        </script>";
    }
}else{
    echo "error";
    session_start();
    session_abort();
    exit();
}




