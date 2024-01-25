<?php
    if(isset($_POST['submit'])){
        $symptome = "";
        for($i = 0; $i <= 16; $i++){
            if(isset($_POST["symptome".$i])){
                $symptome .= $_POST["symptome".$i] . ", ";
            }
        }
        echo $symptome;
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="./test.php" method="post">
    <div>
        <input type="checkbox" name="symp1" id="sympt1" value="maux_de_tete">
        <label for="sympt1">Maux de tête fréquents ou persistants.</label>
    </div>

    <div>
        <input type="checkbox" name="sympt2" id="sympt2" value="fatigue">
        <label for="sympt2">Fatigue excessive.</label>
    </div>

    <div>
        <input type="checkbox" name="sympt3" id="sympt3" value="douleurs_articulaires">
        <label for="sympt3">Douleurs articulaires ou musculaires.</label>
    </div>
    <div>
        <input type="checkbox" name="sympt4" id="sympt4" value="fievre">
        <label for="sympt4">Fièvre inexpliquée.</label>
    </div>
    <div>
        <input type="checkbox" name="sympt5" id="sympt5" value="difficultes_respiratoires">
        <label for="sympt5">Difficultés respiratoires.</label>
    </div>
    <div>
        <input type="checkbox" name="sympt6" id="sympt6" value="problemes_gastro_intestinaux">
        <label for="sympt6">Problèmes gastro-intestinaux tels que nausées, vomissements, ou diarrhée.</label>
    </div>

    <div>
        <input type="checkbox" name="sympt7" id="sympt7" value="problemes_de_vision">
        <label for="sympt7">Problèmes de vision ou changements dans la  vision.</label>
    </div>

    <div>
        <input type="checkbox" name="sympt8" id="sympt8" value="perte_de_poids">
        <label for="sympt8">Perte de poids.</label>
    </div>
    <div>
        <input type="checkbox" name="sympt9" id="sympt9" value="vertiges">
        <label for="sympt9">Vertiges ou étourdissements.</label>
    </div>

    <div>
        <input type="checkbox" name="sympt10" id="sympt10" value="problemes_urinaires">
        <label for="sympt10">Problèmes urinaires, tels que douleur en urinant ou changements dans la fréquence.</label>
    </div>
    <div>
        <input type="checkbox" name="sympt11" id="sympt11" value="sensations_de_picotements">
        <label for="sympt11">Sensations de picotements, engourdissements ou faiblesse.</label>
    </div>
    <button type="submit" name="submit">valider</button>
</form>
</body>
</html>
