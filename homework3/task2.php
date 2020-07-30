<?php
    $i = 0;
    do{
        if ($i == 0 ){
            echo $i." - ноль <br/>";
        }
        elseif ($i%2 == 0){
            echo $i." - чётное число <br/>";
        }else{
            echo $i." - нечётное число <br/>";
        }
        $i++;
    }while($i <= 10);