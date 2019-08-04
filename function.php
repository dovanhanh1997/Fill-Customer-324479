<?php
function searchByDate($customerList,$from,$to){
    if (empty($from) && empty($to)){
        return $customerList;
    }

    $array = [];
    foreach ($customerList as $value) {
        if ($from <= $value['day_of_birth'] && $value['day_of_birth'] <= $to){
            array_push($array,$value);
        }
    }
    return $array;
}
