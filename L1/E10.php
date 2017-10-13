<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 10</title>
    <style>
        html {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <?php
        function repeatChar($char, $n) {
            $string = "";

            for($i = 0; $i < $n; $i++) {
                $string .= $char;
            }

            return $string; 
        }

        function printP($h) {
            for($i = 1; $i <= $h; $i += 2) {
                echo repeatChar("&nbsp;", ($h - $i) / 2).repeatChar("*", $i)."<br />";
            }
        }
        
        printP(9);
    ?>
</body>
</html>