```
<?php
$pageTitle = "Tester vos connaissances en AJAX !";
require_once "header.php";
?>
<div class="container">
    <div class="row">
        <form method="get" class="col-12">
            <?php for ($i = 0; $i < 5; $i++) :
                $rand1 = rand(1, 10);
                $rand2 = rand(1, 10);
            ?>
                <div class="form-group">
                    <label for="multiplication<?= $i ?>"><?php echo $rand1 . " * " . $rand2 ?></label>
                    <input type="text" name="response[]" class="form-control" id="multiplication<?= $i ?>" placeholder="Votre réponse">
                    <input type="hidden" name="rand1[]" value="<?= $rand1 ?>">
                    <input type="hidden" name="rand2[]" value="<?= $rand2 ?>">
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary">Tester !</button>
        </form>
    </div>
    <div class="row">
        <div id="responses" class="col-12"></div>
        <p class="col-12 text-center" id="scoreParagraph">Votre score est de <span id="score"></span>/5 !</p>
    </div>
</div>
<script src="ajax.js"></script>
<?php
require_once "footer.php";