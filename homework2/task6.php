<?php
    $val = 3;
    $pow = 3;
function power($val,$pow){
    if ($pow != 1) {
        return $val * power ($val, $pow - 1);
    }
    return 1;
    }
   echo power($val, $pow+1);
?>

