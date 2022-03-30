<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //változók értékadása
    $elsoSzint = "Ökoszisztéma";
    $masodikSzint = "Társadalom";
    $harmadikSzint = "Gazdaság";
    $negyedikSzint = "Pénz";
    ?>
    <div id="tartalom">
        <div id="bal">
            <?php
            echo "<img src='./kepek/fenntart.png'
            alt='fenntarthatóság'>"
            ?>
        </div>
        <div id="jobb">
            <h1>A fenntarthatóság szintjei</h1>
            <ul>
                <?php
                echo "<li>$elsoSzint</li>";
                echo "<li>$masodikSzint</li>";
                echo "<li>$harmadikSzint</li>";
                echo "<li>$negyedikSzint</li>";
                ?>
            </ul>
        </div>
    </div>
    <?php
    //második feladat
    $eroforras = array("több, mint amit a természet újratermelni képes"
    ,"a természet újratermelő kapacitásával azonos mértékű"
    ,"kevesebb, mint amit a természet újratermelni képes");

    $kornyezet = array();
    $kornyezet = "a környezet pusztul";
    $kornyezet = "környezeti egyensúly";
    $kornyezet = "a környezet megújul";

    $fenntarthatosag = array();
    array_push($fenntarthatosag, "nem fenntartható");
    array_push($fenntarthatosag, "fenntartható, nem változó állapot");
    array_push($fenntarthatosag, "fenntartható, fejődés");

    echo "<p>A megújuló erőforrások fogyasztása -
             A környezet helyzete -
             Fenntarthatóság
            </p>";
            for($index = 0; $index < count($eroforras);
            $index++){
                echo "<p>$eroforras[$index] - $kornyezet [$index] - $fenntarthatosag[$index]";
            }
    ?>
</body>

</html>