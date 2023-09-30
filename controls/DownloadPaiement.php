<?php
    require '../vendor/autoload.php';

    use Dompdf\Dompdf;

if(isset($_GET['id'])){
    $id=$_GET['id'];
    require 'db.php';
    $paiement=$pdo->query("select * from paiement where idPaiement='$id'")->fetch();
    $pdf="
    <html>
        <body>
        <div style='position:absolute;'>
        <h2>Focep Microfinance</h2>
        <h2>adresse: </h2>
        <h2>contact</h2>
      </div>
     
          <h1 style='margin-top:150px;text-align:center;font-weight:800;font-style:monospace;letter-spacing:3px;text-decoration:underline;width:100%;'>Facture De Paiement</h1>
          <div style='position:absolute'>
            <h2>Id Membre</h2>
            <h2>Id Paiement</h2>
            <h2>Montant Du Paiement</h2>
            <h2>Date du Paiement</h2>
          </div>
          <div style='float:right;justify-content:left'>
            <h3>$paiement[idMembre]</h3>
            <h3>$paiement[idPaiement]</h3>
            <h3>$paiement[montant]</h3>
            <h3>$paiement[datePaiement]</h3>
          </div>
        </body>
    </html>
    ";
    $dompdf = new Dompdf();

    $dompdf->loadHtml($pdf);

    $dompdf->setPaper('A5', 'landscape');

    $dompdf->render();

    $dompdf->stream();
}else{
    exit;
}
    // somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md

?>