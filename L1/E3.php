<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>English</th>
            <th>Spanish</th>
        </tr>
        <?php
            $translations = array(
                "bread" => "pan",
                "table" => "mesa",
                "computer" => "ordenador",
                "water" => "agua",
                "tournament" => "torneo",
                "window" => "ventana",
                "store" => "tienda",
                "developer" => "desarrollador",
                "password" => "contraseña",
                "house" => "casa"
            );

            foreach($translations as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        ?>
    </table>
</body>
</html>