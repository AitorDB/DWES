<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercise 4</title>
</head>
<body>
    <table border="1">
        <?php
            $schedule = array(
                array("LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES"),
                array("DWES", "DIW", "DIW", "DAW", "DWEC"),
                array("DWES", "DIW", "DIW", "EIE", "DWEC"),
                array("HLC", "DIW", "EIE", "DIW", "DWEC"),
                array("DWEC", "DWES", "EIE", "DWES", "EIE"),
                array("DWEC", "DWES", "DAW", "DWES", "HLC"),
                array("DWEC", "DWES", "DAW", "DWES", "HLC")
            );

            for($i = 0; $i < count($schedule); $i++) {
                echo "<tr>";

                for($j = 0; $j < count($schedule[$i]); $j++) {
                    echo ($i == 0 ? "<th>" : "<td>").$schedule[$i][$j].($i == 0 ? "</th>" : "</td>");
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>