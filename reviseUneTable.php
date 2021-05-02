<?php require_once 'header.php'; ?>

<div class="reviseUneTable">
    <form action="" method="POST" class="formulaire">
        <input type="number" name="table" min="1" max="10" step="1" placeholder="1 à 10" />
        <button style="border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;" type="submit">Quelle table voulez-vous réviser</button>
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
        }
        ?>

</div>

</p>



<?php require_once 'footer.php'; ?>