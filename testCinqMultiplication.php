<?php
session_start();
$_SESSION['testCinqMultiplication']=['result1' => 0, 'result2' => 0, 'result3' => 0, 'result4' => 0, 'result5' => 0,];
?>

<?php require_once 'header.php'; ?>




<?php require_once 'footer.php'; ?>





  
<div class="column" id="testCinqMultiplication">
<form action="" method="POST" class="testCinqMultiplication" >
<?php 
    for($i=1; $i <=5; $i++){
        $variableA = rand(1,10);
        $variableB = rand(1,10);
        echo $variableA . ' x ' . $variableB . ' = '; ?>
        <input type="number" id="produitTest5<?php echo $i?>" name="produitTest5<?php echo $i?>" min="1" max="100" step="1" placeholder="1 à 100"/>
        <input type="hidden" id="resultProduitTest5<?php echo $i?>" name="resultProduitTest5<?php echo $i?>"  value="<?php echo $variableA*$variableB?>">
        <br>
        <?php 
        }
        ?>
        <button style="border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;"type="submit">Quelle sont vos réponses ?</button>
</form> 

<?php

if(!empty($_POST) && isset($_POST['resultProduitTest51'])){
    $multiReussiteTest5=0;
    for($i=1; $i <=5; $i++){
        if(intval($_POST['produitTest5'.$i]) === (intval($_POST['resultProduitTest5'.$i]))){
            ?>
            <br>
            <?php
            echo 'Vous avez trouvé(e) la  bonne réponse ';
            $multiReussiteTest5 ++;
        }
        else{
            ?>
            <br>
            <?php
            echo 'Désolé, vous vous êtes trompé(e)';
        }
    }

}
?>
            <br><br>
            
<div>
<?php
if (!empty($_POST) && isset($_POST['resultProduitTest51'])){


    echo 'Taux de réussite : ' . $multiReussiteTest5/5*100 . '%';
    $multiReussiteTest5 = $multiReussiteTest5*20;
    if ($multiReussiteTest5 <70){
        ?>
        <br><br>
        <?php
        echo 'Encore un petit effort, vous progressez';
    }
    else if ($multiReussiteTest5 <90){
        ?>
        <br><br>
        <?php
        echo 'Jolie réussite';
    }
    else {
        ?>
        <br>
        <?php
        echo 'Excellent';
    }}
    ?>
</div>


</div>



    

 