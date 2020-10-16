<?php require_once 'header.php'; ?>

<div class="revisePlusieursTables">
    <form action="" method="POST" class="formulairerevisePlusieursTables">
        <br />
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<input value=$i type='checkbox' name='table[]' id='$i'/> <label for='$i'> $i </label>";
        }

        ?>
        <button>Quelle table voulez-vous réviser ?</button>
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