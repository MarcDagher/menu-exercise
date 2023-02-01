<?php

require('menu_items.php');  // This is the file that contains the menu items, I extracted it so I don't have to copy paste the entire array in every file I work in

$orderItems = $_POST['order'];
$total = 0;

if (isset($orderItems) && !empty($orderItems)) {
    foreach ($orderItems as $cateogry => $items) {
   
        foreach ($items as $itemIndex) {
            $item = $menu_items[$cateogry][$itemIndex];
            echo '<p>' . $item['name'] . ' ' . $item['price'] . '</p>';
            $total += $item['price'];
        }
    }
}

echo '<p>Total: ' . $total. '</p>';