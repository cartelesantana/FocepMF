<?php

if(isset($_POST['enregistrer'])){
    $admin=$_GET['admin'];
    $nom=$_POST['inputFirstName'];
    $matricule=$_POST['matricule'];
    $mail=$_POST['inputEmail'];
    $montant=$_POST['montant'];
    $n=15;
    $nn=6;
    $dateJ=date('y-m-d');
    $idPaiement=uniqid('Paiement');
    require "db.php";
    $checkmatricule= $pdo->query("select * from membre where idMembre='$matricule'")->fetch();

    if(!empty($checkmatricule)){
        $AddMemberStmt=$pdo->prepare("insert into paiement values('$idPaiement','$admin','$matricule','$montant','$dateJ')");
        $AddCompte=$pdo->prepare("update emprunt set montant = montant-'$montant' where idMembre='$matricule'");

        if($AddMemberStmt->execute() AND $AddCompte->execute()){
            $checkEmprunt=$pdo->query("select * from emprunt where  idMembre='$matricule'");

            if(!empty($checkEmprunt)){
                $getEmprunt=$checkEmprunt->fetch();
                $statutEmprunt=$getEmprunt['statut'];
                if($getEmprunt['montant']<=0) {
                    $modifyStatut = $pdo->prepare("update emprunt set statut='payer' where idMembre='$matricule'");
                    $modifyStatut->execute();
            }

            }else{

            }
        }
        echo "
                    <script>
                        window.alert('Paiement Ajouter Avec Success!!!');
                        window.location.href='../pages/home.php?admin=$admin';
                    </script>
                ";
    }


}else{
    echo "error";
    session_start();
    session_abort();
    exit();
}




