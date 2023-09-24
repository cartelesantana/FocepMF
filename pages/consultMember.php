<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('../Structures/links.php') ?>
</head>

<body class="sb-nav-fixed">
<?php include('../Structures/navbar.php') ?>
<?php  include ('../Structures/sidenav.php')?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-users"></i>Membres</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">liste des membres</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Details Sur Les Membres
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Numero CNI</th>
                            <th>Adresse</th>
                            <th>dete totale</th>
                            <th>Solde</th>
                            <th>Telechargé</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Numero CNI</th>
                            <th>Adresse</th>
                            <th>dete totale</th>
                            <th>Solde</th>
                            <th>Telechargé</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        include "../controls/db.php";
                        $members= $pdo->query("select * from membre");
                        $mbrId=$members->fetchColumn(0);
                        if(!empty($mbrId)){
                            foreach($members as $row) {

                                echo "
                                            <tr>
                                                <td>$row[idMembre]</td>
                                                <td>$row[nomMbre]</td>
                                                <td>$row[numCni]</td>
                                                <td>$row[adresseMbre]</td>
                                                
                                              ";
                            }
                            $emprunt=$pdo->query("select montant from emprunt where idMembre='$mbrId' ");
                            $montant=$emprunt->fetchColumn(0);
                            echo "
                                                <td>$montant</td>
                                                ";
                            $solde=$pdo->query("select solde from compte where idMembre='$mbrId' ");
                            $soldecompte=$solde->fetchColumn(0);
                            echo "
                            <td>$soldecompte</td>
                            <td><a href=''> <i class='fas fa-cloud-download'></i></a></td>
                            ";
                        }
                        
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include ('../Structures/footer.php')?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../assets/demo/chart-area-demo.js"></script>
<script src="../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
</html>

