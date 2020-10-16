<?php require_once 'header.php'; ?>

<div class="reviseUneTable">
    <form action="" method="POST" class="formulaire">
        <input type="number" name="table" min="1" max="10" step="1" placeholder="1 à 10" />
        <button type="submit">Quelle table voulez-vous réviser</button>
    </form>
    <p class="pReviseUneTable">
        <?php
        if (empty($_POST['table'])) {
            echo 'Merci d\'indiquer la table que vous voulez réviser.';
        } else {
            $table = $_POST['table'];
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $i * $table;
        ?>
                <br>
        <?php
                echo "$table" . ' x ' . "$i" . " = " . "$resultat ";
            }



            /* switch ($table) {
        case 1:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 2:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 3:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 4:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 5:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 6:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 7:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 8:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 9:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;
        case 10:
            for ($i=1; $i <= 10 ; $i++) { 
                $resultat = $i*$table;
                echo "$i" . 'x' . "$table" . "=" . "$resultat "  ;}
            break;

        }
            */
        }


        ?>

</div>

</p>



<?php require_once 'footer.php'; ?>