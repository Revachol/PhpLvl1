<?php
switch ($_POST[action]){
    case addition:
        echo $_POST[first] + $_POST[second];
        break;
    case subtraction:
        echo $_POST[first] - $_POST[second];
        break;
    case multiplication:
        echo $_POST[first] * $_POST[second];
        break;
    case division:
        if (!$_POST[second] == 0){
            echo $_POST[first] / $_POST[second];
            break;
        }else{
            echo "Калькулятор не поддерживает деление на ноль";
        }

}