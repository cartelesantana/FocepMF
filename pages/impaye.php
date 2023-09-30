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
            <h1 class="mt-4"><i class="fas fa-clipboard"></i>Emprunts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">liste des emprunts</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Details Sur Les emprunts
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>Id Emprunt</th>
                            <th>ID Employé</th>
                            <th>ID Membre</th>
                            <th>Date de L'emprunt</th>
                            <th>Date Limite de paiement</th>
                            <th>Montant</th>
                            <th>statut</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                        <th>Id Emprunt</th>
                            <th>ID Employé</th>
                            <th>ID Membre</th>
                            <th>Date de L'emprunt</th>
                            <th>Date Limite de paiement</th>
                            <th>Montant</th>
                            <th>statut</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        include "../controls/db.php";
                        $emprunt= $pdo->query("select * from emprunt  order by dateEmprunt DESC ");
                        foreach($emprunt as $row) {
                            echo "
                                        <tr>
                                            <td>$row[idEmprunt]</td>
                                            <td>$row[matricule]</td>
                                            <td>$row[idMembre]</td>
                                            <td>$row[dateEmprunt]</td>
                                            <td>$row[dateLimite]</td>
                                            <td>$row[montant]</td>
                                            <td>$row[statut]</td>
                                            
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

