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
                        <tr>
                            <td>#</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>$320,800</td>
                            <td><a style="color: darkgreen;font-weight: 800" href="#"><i class="fas fa-cloud-download-alt"></i></a></td>
                        </tr>

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

