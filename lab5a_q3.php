<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function multiplier($num,$num2){
        return $num * $num2;
    }
    echo "<table border =1 cellspacing=0 cellpadding=5>";
    echo "<tr><td>No</td><td>Multiplier</td><td>Answer</td>";
    $num2 = 2;
    for ($i=1; $i <=12 ; $i++) { 
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$num2</td>";
        echo "<td>" .multiplier($i,$num2)."</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>