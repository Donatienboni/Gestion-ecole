<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>RECUS</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>
<center>
    <h1>Gestion-Ecole</h1>
    <p>RECUS DE PAYEMENT</p>
<?php
// recuper les informatien et envoier dans le tableau
$abc=new PDO('mysql:host=localhost;dbname=db_gestion_ecole','root','');

$select=$abc->prepare("SELECT * FROM table_enregistrement  WHERE id=?" );
$select->execute(array($_GET['id']));
$trouve=$select->fetch();

?>
<h4 ><?php echo "NUM-RECUS : " .$trouve['id']?></h4>
<h4 ><?php echo "NOM : " .$trouve['nom']?></h4>
<h4 ><?php echo "PRENOM : " .$trouve['prenom']?></h4>
<h4 ><?php echo "SEXE : " .$trouve['sexe']?></h4>
<?php
$select=$abc->prepare("SELECT * FROM table_classe  WHERE id=?" );
$select->execute(array($_GET['id']));
$trouve=$select->fetch();
?>
<h4 ><?php echo "CLASSE : " .$trouve['nom_classe']?></h4>
 <?php
$select=$abc->prepare("SELECT * FROM table_frais  WHERE id=?" );
$select->execute(array($_GET['id']));
$trouve=$select->fetch();
?>
<h4 ><?php echo "MONTANT: " .$trouve['montant']."F"?></h4>
<h4 ><?php echo "DATE : " .$trouve['date_limite_payement']?></h4>



  <button onclick="generatePDF()">Générer PDF</button>
</center>
  <script>
    function generatePDF() {
      const element = document.body;
      const options = {
        margin: [10, 10, 10, 10], // Marges du PDF
        filename: 'mon_document.pdf', // Nom du fichier PDF généré
        image: { type: 'jpeg', quality: 0.98 }, // Qualité des images dans le PDF
        html2canvas: { scale: 2 }, // Échelle de conversion HTML en image
        jsPDF: { unit: 'mm', format: 'A5', orientation: 'portrait' } // Format et orientation du document PDF
      };
      
      html2pdf().set(options).from(element).save();
    }
  </script>
</body>
</html>
