<?php
function searchByDate($arrayList, $from, $to)
{
    if (empty($from) && empty($to)) {
        return $arrayList;
    }

    $array = array();
    foreach ($arrayList as $customer) {
        if ($from <= $customer['day_of_birth'] && $customer['day_of_birth'] <= $to) {
            array_push($array, $customer);
        }
    }
    return $array;
}
