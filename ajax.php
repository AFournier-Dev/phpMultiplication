```
<?php
if (!empty($_POST)) {
    $data = [];
    $rightAnswers = 0;
    for ($i = 0; $i < 5; $i++) {
        if (intval($_POST["response"][$i]) === intval($_POST["rand1"][$i] * intval($_POST["rand2"][$i]))) {
            $data["results"][] = "<p class='col-12 text-center'>C'est la bonne réponse ! " . $_POST['rand1'][$i] . " * " . $_POST['rand2'][$i] . " est bien égale à " . $_POST['response'][$i] . "</p>";
            $rightAnswers++;
        } else {
            $rightResult = intval($_POST["rand1"][$i] * intval($_POST["rand2"][$i]));
            $data["results"][] = "<p class='col-12 text-center'>C'est la mauvaise réponse ! " . $_POST['rand1'][$i] . " * " . $_POST['rand2'][$i] . " n'est pas égale à " . $_POST['response'][$i] . " mais à " . $rightResult . "</p>";
        }
    }
    $data["rightAnswers"] = $rightAnswers;
    $data["color"] = $rightAnswers < 3 ? "red" : "green";
}
echo json_encode($data);