<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <input type="text" name="f1" placeholder="1er element"></input>
    <input type="text" name="f2" placeholder="2em element"></input>
    <button>Valider</button>
</form>
<form>
<button name="test">Test</button>
</form>
    <?php
    function pgcd($a,$b){
        $c = min($a,$b);
        for($i = $c;$i>0;$i= $i-1){
            if($a%$i == 0 && $b%$i ==0){
                return $i;
            }
        }
        return " n'existe pas";
    }
    if(isset($_GET["f1"]) && isset($_GET["f2"])){
        echo "le résultat est = ";
        echo pgcd((int)$_GET["f1"],(int)$_GET["f2"]);
    }
    if(isset($_GET['test'])){
        echo "ça marche mon reuf";
    }
    ?>
</body>
</html>