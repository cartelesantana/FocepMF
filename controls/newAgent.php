<?php

    if(isset($_POST['ajouter'])){
        $admin=$_GET['admin'];
        $nom=$_POST['inputFirstName'];
        $prenom=$_POST['inputLastName'];
        $cni=$_POST['cni'];
        $adresse=$_POST['adresse'];
        $mdp=$_POST['mdp'];
        $confirmMdp=$_POST['mdp_confirm'];
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
        if($mdp !==$confirmMdp){
            echo"the passwords did not Match, please Verify and Try Again";
        }else{
            $secureMdp=password_hash($mdp,PASSWORD_BCRYPT);
            require "db.php";
            $numeroCompte=uniqid('AgentFocep');
            $id=getID($nn);
                $AddAgentStmt=$pdo->prepare("insert into agent values('$id','$admin','$nom','$prenom','$adresse','$email','$numero','$secureMdp')");
                if($AddAgentStmt->execute()){
                    echo "
                        <script>
                            window.alert('Membre Ajouter Avec Success!!!');
                            window.location.href='../pages/home.php?admin=$admin';
                        </script>
                    ";
                }
        }
    }else{
        echo "error";
        /*
        session_start();
        session_abort();
        exit();*/
    }




    