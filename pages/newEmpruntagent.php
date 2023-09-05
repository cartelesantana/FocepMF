<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('../Structures/links.php') ?>
</head>

<body class="sb-nav-fixed">
<?php include('../Structures/navbar.php') ?>
<div id="layoutSidenav" style="background: #c8d2e2">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background: #3b88f8;">
            <div class="sb-sidenav-menu" >
                <div class="nav" >
                    <div class="sb-sidenav-menu-heading" style="color: white;font-weight: 800">Core</div>
                    <a class="nav-link" href="Agenthome.php" style="color: darkblue;font-weight: 600">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color: darkblue"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading" style="color: white;font-weight: 800">Collectes</div>
                    <a style="color: darkblue;font-weight: 600"class="nav-link" href="collecte.php">
                        <div class="sb-nav-link-icon"><i style="color: darkblue"class="fas fa-plus"></i></div>
                        Nouvelle Collecte
                    </a>
                    <a style="color: darkblue;font-weight: 600"class="nav-link" href="mescollecte.php">
                        <div class="sb-nav-link-icon"><i style="color: darkblue" class="fas fa-table"></i></div>
                        Historique
                    </a>
                    <div class="sb-sidenav-menu-heading" style="color: white;font-weight: 800">Emprunts</div>
                    <a style="color: darkblue;font-weight: 600"class="nav-link" href="newEmpruntagent.php">
                        <div class="sb-nav-link-icon"><i style="color: darkblue"class="fas fa-plus"></i></div>
                        Nouvel Emprunt
                    </a>
                </div>
            </div>

        </nav>
    </div>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-plus"></i>Emprunt</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Enregistrer Un emprunt</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    formulaire d'emprunt
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Entrez le nom" />
                                    <label for="inputFirstName">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="matricule" type="text" placeholder="Matricule" />
                                    <label for="matricule">Matricule</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail"name="inputEmail" type="email" placeholder="name@example.com" />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="montant"name="montant" type="number" placeholder="Montant" />
                                    <label for="telephone">Montant</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="motif"name="motif" type="text" placeholder="motif" />
                                    <label for="motif">Motif</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="datelimite"name="datelimite" type="date" placeholder="Date Limite De Paiement" />
                            <label for="datelimite">Date Limite De Paiement</label>
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

