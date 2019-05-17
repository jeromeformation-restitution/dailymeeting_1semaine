<?php
require ('../inc/header.php');
require ('recup_info.php');
?>

<h1>Jeu difficile</h1>
<hr>

<main>
    <form action="" method="post">
        <div>
            <label for="lettre">Saisir ici : </label>
            <input type="text" id="lettre" name="lettre" autofocus maxlength="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>

    </form>
</main>


<?php
require ('../inc/footer.php')
?>
