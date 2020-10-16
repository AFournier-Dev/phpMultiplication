<?php
session_start();
$_SESSION['testUnetable'] = ['result1' => 0, 'result2' => 0, 'result3' => 0, 'result4' => 0, 'result5' => 0, 'result6' => 0, 'result7' => 0, 'result8' => 0, 'result9' => 0, 'result10' => 0];
?>

<?php require_once 'header.php'; ?>

<div class="testUneMultiplication">
    <div class="submit">
        <form action="" method="POST">
            <input type="number" name="table" min="1" max="10" step="1" placeholder="1 à 10" />
            <br>
            <button type="submit">Quelle table voulez-vous tester ?</button>
            <br>
        </form>
    </div>
    <div>
        <br>
        <form action="" method="POST">
            <?php
            if (!empty($_POST) && isset($_POST['table'])) {
                for ($i = 1; $i <= 10; $i++) {
                    $_SESSION['table'] = $_POST['table'];
                    echo intval($_POST['table']) . ' X ' . $i . " = ";
            ?>
                    <input type="number" name="produit<?php echo $i ?>" min="1" max="100" step="1" />
                    <br>
                <?php
                }
                ?>
                <br>
                <button type="submit">Envoyer votre test ?</button>
        </form>
    </div>
    <div>
        <?php
            }
            if (!empty($_POST) && isset($_POST['produit1'])) {

                $multiReussite = 0;

                for ($i = 1; $i <= 10; $i++) {
                    if (intval($_POST['produit' . $i]) === $i * $_SESSION['table']) {
        ?>
                <br>
            <?php
                        echo 'Vous avez trouvé(e) la réponse ' . $i . ' x ' . $_SESSION['table'] . ' = ' . $i * $_SESSION['table'];
                        $multiReussite++;
                    } else {
            ?>
                <br>
        <?php
                        echo 'La réponse attentue pour ' . $i . ' x ' . $_SESSION['table'] . ' = ' . $i * $_SESSION['table'];
                    }
                }
        ?>
        <br><br>
        <?php

                echo 'Taux de réussite : ' . $multiReussite / 10 * 100 . '%';
                $tauxDeReussite = $multiReussite * 10;
                if ($tauxDeReussite < 70) {
        ?>
            <br><br>
        <?php
                    echo 'Encore un petit effort, vous progressez';
                } else if ($tauxDeReussite < 90) {
        ?>
            <br><br>
        <?php
                    echo 'Jolie réussite';
                } else {
        ?>
            <br>
    <?php
                    echo 'Excellent';
                }
            }
    ?>
    </div>




</div>