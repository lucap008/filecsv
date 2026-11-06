<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Lettura File CSV</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 2px;
        }
    </style>
</head>
<body>

<table>
<?php
    $file = fopen("log.csv", "r");
    
    if (!$file) {
        die("Errore nell'apertura del file");
    }

    while (!feof($file)) {
        $row = fgets($file);
        if ($row!==false && $row!=="") {
            $dati = explode(",", $row);
            echo "<tr>";
            for ($i=0; $i<count($dati); $i++) {
                echo "<td>" . $dati[$i] . "</td>";
            }
            echo "</tr>";
        }
    }
    fclose($file);
?>
</table>

</body>
</html>