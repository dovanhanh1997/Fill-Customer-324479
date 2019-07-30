<?php
function searchByDate($customers, $from, $to)
{
    if (empty($from) && empty($to)) {
        return $customers;
    };

    $resultArray = [];
    foreach ($customers as $customer) {
        if ($from <= $customer['day_of_birth'] && $customer['day_of_birth'] <= $to) {
            array_push($resultArray, $customer);
        }
    }
    return $resultArray;
}

