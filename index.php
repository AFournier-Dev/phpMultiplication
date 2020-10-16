

<?php // $_SESSION(session_start()) ?>
<?php require_once 'header.php'; ?>



<div class="index" id="index">
<h1 class="h1index">Présentation du site</h1>
<p class="p1index">Bonjour je vous souhaite la bienvenue sur mon site de révision des multiplications. A chaque fois que cette page sur laquelle vous vous trouvez est rafraichît une nouvelle table de multiplication s'affiche.
<br><br>
Vous pouvez réviser une table ou plusieurs tables dan sles onglets concernés. Deux autres onglets pour des tests afin de vous sentir plus à l'aise, soit avec une table à réviser , soit avec un test de cinque multiplication au hasard.
<br><br>
Amusez vous bien !</p> 

<p class="p2index">
<?php
//afficher une table au hasard 
$table= rand(1,10);
for ($i=1; $i <= 10 ; $i++) { 
    $resultat = $i*$table;
    ?>
        <br>
        <?php
    echo "$table" . ' x ' . "$i" . " = " . "$resultat "  ;
    
}    
?>
</p>
</div>

<?php require_once 'footer.php'; ?>