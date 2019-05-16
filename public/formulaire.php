<?php
require ('inc/header.php');
require ('exo_matin.php');
var_dump($_SERVER);
?>

<main class="container">


<form method="post">
    <div class="form-group">
        <label for="name">nom</label>
        <input type="text" class="form-control" id="name" name="name" >

    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="prix">prix</label>
        <input type="number" step="0.01" class="form-control" id="prix" name="prix" >

    </div>

    <div class="form-group">
        <label for="date">Date de publication</label>
        <input type="date" class="form-control" id="date" name="date" >

    </div>

    <div class="form-group">
        <label for="nombre">Nombre de vue</label>
        <input type="number"class="form-control" id="nombre" name="nombre" >

    </div>
    <div class="form-group form-check">
        <input type="checkbox" name="publication" class="form-check-input" id="publication">
        <label class="form-check-label" for="publication">Publication d'article</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </main>
<?php
require ('inc/footer.php')
?>