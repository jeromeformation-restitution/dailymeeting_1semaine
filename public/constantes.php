<?php
require ('inc/header.php')
?>

<?php
    define("IBRA","bonjour !");
    echo IBRA;
    echo "<br>";
    const IBRA2 = "hello !";
    echo IBRA2;

    $produits = [

    [
        "name" => "Hamac",
        "description" => "toto",
        "image-name" => "hammock.jpg"

    ],
    [
        "name" => "Parasol",
        "description" => "toto",
        "image-name" => "umbrella.jpg"
        ]

    ]



?>

<main class="container">
    <section class="row">
    <?php foreach ($produits as $produit) : ?>
    <div class="card" style="width: 18rem;">
        <img src="images/uploads/<?= $produit["image-name"] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $produit["name"]?></h5>
            <p class="card-text"><?= $produit["description"]?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php endforeach; ?>
    </section>
</main>
<?php
require ('inc/footer.php')
?>
