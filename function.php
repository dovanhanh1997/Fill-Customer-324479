<?php
function searchByDate($arrayList, $from, $to)
{
    if (empty($from) && empty($to)) {
        return $arrayList;
    }

    $array = [];
    foreach ($arrayList as $value):
        if ($from <= $value['day_of_birth'] && $value['day_of_birth'] <= $to) {
            array_push($array, $value);
        }
    endforeach;
    return $array;
}

