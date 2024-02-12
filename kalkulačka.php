<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kalkulator</title>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        input, select, button {
            margin: 10px;
            padding: 8px;
            font-size: 16px;
        }
 
        
</style>
</head>
<body>
<?php
$result = '';
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch ($operator) {
        case 'sčítání':
            $result = $num1 + $num2;
            break;
        case 'odčítání':
            $result = $num1 - $num2;
            break;
        case 'násobení':
            $result = $num1 * $num2;
            break;
        case 'dělení':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Nejde dělit nulou';
            }
            break;
        default:
            $result = 'Blbý input';
            break;
    }
}
?>
<h2>Kalkulačka</h2>
<form method="post" action="">
<input type="text" name="num1" placeholder="Zadej první čislo" required>
<select name="operator" required>
<option value="add">+</option>
<option value="subtract">-</option>
<option value="multiply">*</option>
<option value="divide">/</option>
</select>
<input type="text" name="num2" placeholder="Zadej druhé číslo" required>
<button type="submit" name="submit">Výpočet</button>
</form>
<?php
if ($result !== '') {
    echo '<h3>Váš výsledek je: ' . $result . '</h3>';
}
?>
</body>
</html>