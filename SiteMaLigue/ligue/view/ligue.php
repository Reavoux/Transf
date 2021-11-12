<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ma ligue</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/templetBackend/css/styles.css" rel="stylesheet" />
        <link href="../assets/templetBackend/css/avatar1.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
			<?php include "menu/navBarTop.php"; ?>
            <div id="layoutSidenav_nav">
			    <?php include "menu/navBarLeft.php"; ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Nom de la Ligue</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="ejs_heure">Heure Dynamique</li>
                        </ol>
                        <div>
                            <a href="#" style="color: green" data-bs-toggle="modal" data-bs-target="#modalInvitations"><i class="fas fa-user-plus"></i></a>
                            | 
                            <a href="#" style="color: orange" data-bs-toggle="modal" data-bs-target="#modalModificationRole"><i class="fas fa-user-cog"></i></a>
                            | 
                            <a href="#" style="color: red" data-bs-toggle="modal" data-bs-target="#modalSuppression"><i class="fas fa-user-minus"></i></a>
                            |
                            <a href="#" style="color: Black" data-bs-toggle="modal" data-bs-target="#modalArchiverSupprimerLigue"><i class="fas fa-user-injured"></i></a>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-football-ball"></i><i class="fab fa-pied-piper-alt"></i>
                                        Tournament
                                    </div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="equipes-tab" data-bs-toggle="tab" data-bs-target="#equipes" type="button" role="tab" aria-controls="equipes" aria-selected="true">Classement</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="groupe-tab" data-bs-toggle="tab" data-bs-target="#groupe" type="button" role="tab" aria-controls="groupe" aria-selected="false">Groupe</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="arbre-tab" data-bs-toggle="tab" data-bs-target="#arbre" type="button" role="tab" aria-controls="arbre" aria-selected="false">Arbre</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="arbre2-tab" data-bs-toggle="tab" data-bs-target="#arbre2" type="button" role="tab" aria-controls="arbre2" aria-selected="false">Arbre2</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="match-tab" data-bs-toggle="tab" data-bs-target="#match" type="button" role="tab" aria-controls="match" aria-selected="false">Match</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="statistiques-tab" data-bs-toggle="tab" data-bs-target="#statistiques" type="button" role="tab" aria-controls="statistiques" aria-selected="false">Statistiques</button>
                                        </li>   
                                    </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="equipes" role="tabpanel" aria-labelledby="equipes-tab"><?php include "action/ligueClassementGeneral.php"?></div>
                                            <div class="tab-pane fade" id="groupe" role="tabpanel" aria-labelledby="groupe-tab"><?php include "tableau/tableauGroupe.php"?></div>
                                            <div class="tab-pane fade" id="statistiques" role="tabpanel" aria-labelledby="statistiques-tab">Classement</div>
                                            <div class="tab-pane fade" id="match" role="tabpanel" aria-labelledby="match-tab"><?php include "action/ligueMatch.php"?></div>
                                            <div class="tab-pane fade" id="arbre" role="tabpanel" aria-labelledby="arbre-tab"><?php include "action/ligueArbreVierge.php"?></div>
                                            <div class="tab-pane fade" id="arbre2" role="tabpanel" aria-labelledby="arbre2-tab"><?php include "action/ligueArbre2.php"?></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <?php include "tableau/tableauMesLigues.php"; ?> 
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <?php include "footer/footer.php"; ?>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/templetBackend/js/scripts.js"></script>
        <script src="../assets/templetBackend/js/dateHeure.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/templetBackend/assets/demo/chart-area-demo.js"></script>
        <script src="../assets/templetBackend/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../assets/templetBackend/js/datatables-simple-demo.js"></script>
    </body>
</html>