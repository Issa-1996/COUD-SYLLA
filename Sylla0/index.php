<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class="container">
        <div class="row">
            <section class="col-12">
                <h1>Liste des rubriques</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Rubrique1</th>
                        <th>Rubrique2</th>
                        <th>Montant</th>
                    </thead>
                    <tbody>
                        <?php
                            include("pagination.php");
                            foreach($query->fetchAll(PDO::FETCH_ASSOC) as $article){
                               //var_dump($article);
                            //while($data=$nbrestotal->fetchAll(PDO::FETCH_ASSOC)){        
                            ?>
                            <tr>
                                <td><?= $article['id'] ?></td>
                                <td><?= $article['rubrique1'] ?></td>
                                <td><?= $article['rubrique2'] ?></td>
                                <td><?= $article['montant'] ?></td>
                            </tr>
                            <?php
                            }
                        ?>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="./?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="./?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </main>
</body>
</html>