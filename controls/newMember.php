<?php

    if(isset($_POST['ajouter'])){
        $admin=$_GET['admin'];
        $nom=$_POST['inputFirstName'];
        $prenom=$_POST['inputLastName'];
        $profession=$_POST['profession'];
        $cni=$_POST['cni'];
        $adresse=$_POST['adresse'];
        $localisation=$_POST['localisation'];
        $email=$_POST['inputEmail'];
        $numero=$_POST['telephone'];
        $n=15;
        $nn=6;
        $dateJ=date('y-m-d');

        function getID($nn) {
            $characters = '01234567890ABCDEFGHIJ';
            $randomString = '';
            for ($i = 0; $i < $nn; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
            return $randomString;
        }
        $numeroCompte=uniqid('focep');
        $id=getID($nn);
            require "db.php";
            $AddMemberStmt=$pdo->prepare("insert into membre values('$id','$nom','$prenom','$adresse','$localisation','$numero','$cni','$numeroCompte','$dateJ')");
            $AddCompte=$pdo->prepare("insert into compte values('$numeroCompte','$id','$dateJ',0)");

            if($AddMemberStmt->execute() AND $AddCompte->execute()){
                echo "
                    <script>
                        window.alert('Membre Ajouter Avec Success!!!');
                        window.location.href='../pages/home.php?admin=$admin';
                    </script>
                ";


            }




    }else{
        echo "error";
        /*
        session_start();
        session_abort();
        exit();*/
    }




    