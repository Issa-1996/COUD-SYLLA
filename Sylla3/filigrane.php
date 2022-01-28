<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div id="watermark">
                    <img src="logo_coud-removebg-preview.png" alt="">
                </div>
<main class="container" style="text-align:center;">
        <div class="row">
            <section class="col-12 text-center">
             
                <!-- <h1>Etat des retenues sur salaire</h1> -->
                <?php
                    $k=1;
                    for($j=1; $j<100; $j++){
                        echo "Page".$k;
                        ?>
                        <header style="width: 100%;">
                            <p style="width: 45%; float: left; text-align: center;">
                                    REPUBLIQUE DU SENEGAL <br> 
                                    Un Peuple-Un but-Une Foi <br>
                                    MINISTERE DE L'ENSEIGNEMENT SUPERIEUR <br>
                                    DE LA RECHERCHE ET DE L'INOVATION <br>
                            </p>
                            <img src="logo_coud-removebg-preview.png" alt="" style="width: 15%; float: right;">
                        </header>
                        <div class="titre">
                            <h1>BULLETIN DE PAIE</h1>
                        </div>
                        <table class="tables" border="1">
                            <thead>
                                <th>ID</th>
                                <th>Rubrique1</th>
                                <th>Rubrique2</th>
                                <th>Montant</th>
                            </thead>
                            <tbody>
                                <?php
                                    for($i=1; $i<20; $i++){
                                        ?>
                                        <tr>
                                            <td> <?php echo $i; ?></td>
                                            <td>test2</td>
                                            <td>test3</td>
                                            <td>Test5</td>
                                        </tr>
                                        <?php 
                                    }
                                ?>                        
                            </tbody>
                        </table>
                        <?php 
                        $k++;
                    }
                ?> 
            </section>
        </div>
    </main>
</body>
</html>