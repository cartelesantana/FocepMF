<!DOCTYPE html>
<html lang="en">
<head>
    <title>Darlin</title>
    <?php include('../Structures/links.php') ?>
</head>

<body class="sb-nav-fixed">
<?php include('../Structures/navbar.php') ?>
<?php  include ('../Structures/sidenav.php')?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-clipboard"></i>Paiements</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">liste des paiements</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Details Sur Les Paiements
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Reçu</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Reçu</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php
                        include "../controls/db.php";
                        $paiement= $pdo->query("select * from paiement  order by datePaiement DESC ");
                        foreach($paiement as $row) {
                            echo "
                                        <tr>
                                            <td>$row[idPaiement]</td>
                                            <td>$row[montant]</td>
                                            <td>$row[datePaiement]</td>
                                            <td><a href=''><i class='fas fa-cloud-download-alt'></i></a></td>
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

