<?php
require '../vendor/autoload.php';

use Dompdf\Dompdf;

    if(isset($_POST['enregistrer'])){
        $agent=$_GET['agent'];
        $montant=$_POST['montant'];
        $matriculeAgt=$_POST['matricule'];
        $dateJ=date('y-m-d');
        require "db.php";

            $checkMatricule=$pdo->query("select * from membre where idMembre='$matriculeAgt'")->fetch();
            if(!empty($checkMatricule)){
                $idCollecte=uniqid('Collecte');
                $collecte=$pdo->prepare("insert into collecte values('$idCollecte','$agent','$matriculeAgt','$dateJ','$montant')");
                if($collecte->execute()){
                    $update=$pdo->prepare("update compte set solde=solde + '$montant' where idMembre='$matriculeAgt'");
                    if($update->execute()){
                        echo "
                        <script> alert('Collecte effectuer avec success');window.location.href='../pages/newCollecte.php?agent=$agent'</script>   
                        ";
                    }
                }    
            }else{
                echo"<script> alert('matricule innexistant');window.location.href='../pages/newCollecte.php?agent=$agent'</script>";
            }
    }else{
        echo "error";
        session_start();
        session_abort();
        exit();
    }




    