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
            <h1 class="mt-4"><i class="fas fa-plus"></i>Paiement</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Enregistrer Un paiement</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    formulaire de paiement
                </div>
                <div class="card-body">
                    <form method="post" action="../controls/newPaiement.php?admin=<?php echo $_GET['admin']?>">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="inputFirstName" type="text" placeholder="Entrez le nom" />
                                    <label for="inputFirstName">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="matricule" type="text" placeholder="Matricule" />
                                    <label for="matricule">Matricule</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="montant"name="montant" type="number" placeholder="Montant" />
                                    <label for="telephone">Montant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="inputEmail"name="inputEmail" type="email" placeholder="name@example.com" />
                                    <label for="inputEmail">Email address</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="enregistrer">Enregistrer</button></div>
                        </div>
                    </form>
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

