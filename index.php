<?php
include 'function.php';
include 'customer-list.php';
?>
<head>
    <title>Customer List</title>
    <link rel="stylesheet" href="main.css">
</head>
<form method="post">
    Form:
    <label>
        <input type="text" name="from" placeholder="yyyy/mm/dd">
    </label>
    To:
    <label>
        <input type="text" name="to" placeholder="yyyy/mm/dd">
    </label>
    <button type="submit">Fill</button>

</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $resultList = searchByDate($customer_list, $from, $to);

}
?>

<table border="0" style="border-collapse: collapse; width: 100%; border: 1px solid navy;   ">
    <caption><h2>Customer List</h2></caption>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Birth of date</th>
        <th>Address</th>

    </tr>

    <?php foreach ($resultList as $key => $customer): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

