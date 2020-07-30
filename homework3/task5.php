<?php
//незнал как решить мне известным способом, пришлось найти команду
$i = "мы гуляли по парку";
function minus($i){
    return $i = str_ireplace(" ", "-", $i);
}
echo minus($i);