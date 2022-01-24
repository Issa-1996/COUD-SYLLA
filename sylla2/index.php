<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<main class="container" style="text-align:center;">
    <table border="1" id="ReportTable" class="table">
        <thead>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Numero Compte</th>
            <th>Montant</th>
        </thead>
        <tbody>
            <?php
              for($i=1; $i<=100000; $i++){
                  ?>
                  <tr>
                      <td> <?php echo $i; ?></td>
                      <td>200300</td>
                      <td>Babacar</td>
                      <td>Sylla </td>
                      <td>1250</td>
                    </tr>
                    <?php 
              }
              ?>                        
      </tbody>
    </table>
</main>
</body>
</html>
<form action="traitement.php" class="text-center">
    <input type="submit" value="Export to Excel" class="btn btn-success"> 
</form>