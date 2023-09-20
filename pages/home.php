
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-user"></i>
                                        <br>Total Membres<br>
                                        <h2>
                                            <?php
                                            include "../controls/db.php";
                                            $memberQuery="select count(*) from membre";
                                            $totalMbr=$pdo->query($memberQuery);
                                            print_r($totalMbr->fetchColumn());
                                            ?>
                                        </h2>
                                        </h2>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="font-weight: 800">
                                        <a  class="small text-white stretched-link" href="../pages/consultMember.php?admin=<?php echo $_GET['admin']?>">Voir Plus</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-user-plus"></i>
                                        <br>Nouveaux Membres<br>
                                        <h2>
                                            <?php
                                            include "../controls/db.php";
                                            $date=date('yyyy/mm/dd');
                                            $nemMemberQuery="select count(*) from membre where $date<=joinDate<$date-5";
                                            $totalMbr=$pdo->query($memberQuery);
                                            print_r($totalMbr->fetchColumn());
                                            ?>
                                            </h2>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="font-weight: 800">
                                        <a  class="small text-white stretched-link" href="#">Voir Plus</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-money-bill-alt"></i>
                                        <br>Paiements Recents<br>
                                        <h2>
                                            <?php
                                            include "../controls/db.php";
                                            $date=date('yyyy/mm/dd');
                                            $PaiementQuery= $pdo->exec("select count(*) from paiement where $date > datePaiement<=$date-5 ");
                                            echo $PaiementQuery;
                                            ?>
                                        </h2>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="font-weight: 800">
                                        <a  class="small text-white stretched-link" href="#">Voir Plus</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        <i class="fas fa-money-check-alt"></i><br>
                                        Emprunts Impayés<br>
                                        <h2>
                                            <?php
                                            include "../controls/db.php";
                                            $date=date('yyyy/mm/dd');
                                            $EmpruntQuery= $pdo->exec("select count(*) from emprunt where statut='impayé'");
                                            echo $EmpruntQuery;
                                            ?>
                                        </h2>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="font-weight: 800">
                                        <a  class="small text-white stretched-link" href="#">Voir Plus</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Table Des Membres
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Membre</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse</th>
                                            <th>Localisation</th>
                                            <th>numéro Tel</th>
                                            <th>Numéro Cni</th>
                                            <th>Numéro Compte</th>
                                            <th>date inscription</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Membre</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse</th>
                                            <th>Localisation</th>
                                            <th>numéro Tel</th>
                                            <th>Numéro Cni</th>
                                            <th>Numéro Compte</th>
                                            <th>date inscription</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                    include "../controls/db.php";
                                    $members= $pdo->query("select * from membre");
                                        foreach($members as $row) {
                                            echo "
                                        <tr>
                                             <td>$row[idMembre]</td>
                                            <td>$row[nomMbre]</td>
                                            <td>$row[prenomMbre]</td>
                                            <td>$row[adresseMbre]</td>
                                            <td>$row[localisation]</td>
                                            <td>$row[telephoneMbre]</td>
                                            <td>$row[numCni]</td>
                                            <td>$row[numCompte]</td>
                                            <td>$row[joinDate]</td>
                                        </tr>
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
