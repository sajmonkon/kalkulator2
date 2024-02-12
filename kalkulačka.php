<?php
if(isset($_POST['calculate'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    switch($operator){
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if($num2 != 0){
                $result = $num1 / $num2;
            } else {
                echo "Nelze dělit nulou.";
            }
            break;
        default:
            echo "Neplatný operátor.";
    }

    echo "Výsledek: $result";
}
?>