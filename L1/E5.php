<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 5</title>
</head>
<body>
    <ul>
        <?php
            $x = 144;
            $y = 999;

            echo "<li>X: $x</li>";
            echo "<li>Y: $y</li>";
            echo "<li>Add: ".($x+$y)."</li>";
            echo "<li>Sub: ".($x-$y)."</li>";
            echo "<li>Mult: ".($x*$y)."</li>";
            echo "<li>Div: ".($x/$y)."</li>";
        ?>
    </ul>
</body>
</html>