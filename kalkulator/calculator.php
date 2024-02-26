<!DOCTYPE html>
<html>
<head>
    <title>Výsledek</title>
</head>
<body>
    <h2>Výsledek:</h2>
    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Nelze dělit nulou!";
                }
                break;
            default:
                $result = "Neplatný operátor!";
                break;
        }
        
        echo "<p>{$num1} {$operator} {$num2} = {$result}</p>";
    }
    ?>
</body>
</html>