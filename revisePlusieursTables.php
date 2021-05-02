<?php require_once 'header.php'; ?>

<div class="revisePlusieursTables">
    <form action="" method="POST" class="formulairerevisePlusieursTables">
        <br />
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<input value=$i type='checkbox' name='table[]' id='$i'/> <label for='$i'> $i </label>";
        }

        ?>

        <button class="button_a" style="border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;">Quelle table voulez-vous réviser ?</button>
    </form>


    <p>
        <?php
        if (isset($_POST['table'])) {

            foreach ($_POST['table'] as $key => $value) {
        ?>
                <br class="arevise"><br>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                ?>
    <p class="revisePLSTables<?php $i ?>">
        <?php
                    $resultat = $i * $value;
                    echo "$value" . ' x ' . "$i" . " = " . "$resultat ";
        ?>
    </p>
<?php

                }
            }
        }
?>
</p> <br>

</div>


<?php require_once 'footer.php'; ?>