<?php

$menu_items = [
    "apetizers" => [
        [
            "name" => "Chicken Wings",
            "price" => 5.75,
            "image" => "./images/wings_1.webp"
        ],
        [
            "name" => "Beef Wings",
            "price" => 4.99,
            "image" => './images/wings_2.JPG'
        ],
        [
            "name" => "Fish Wings",
            "price" => 11.99,
            "image" => './images/wings_3.webp'
        ],
        [
            "name" => "Veg Wings",
            "price" => 9.99,
            "image" => './images/wings_3.webp'
        ]
    ],
    "sandwiches" => [
        [
            "name" => "Chicken Sandwich",
            "price" => 10.99,
            "image" => './images/sand_1.webp'
        ],
        [
            "name" => "Beef Sandwich",
            "price" => 12.99,
            "image" => './images/sand_2.webp'
        ],
        [
            "name" => "Fish Sandwich",
            "price" => 11.99,
            "image" => './images/sand_3.jpg'
        ],
        [
            "name" => "Veg Sandwich",
            "price" => 9.99,
            "image" => './images/sand_4.jpg'
        ],
    ],
    "salads" => [
        [
            "name" => "Chicken Salad",
            "price" => 10.99,
            "image" => './images/salad_1.webp'
        ],
        [
            "name" => "Beef Salad",
            "price" => 12.99,
            "image" => './images/salad_2.jpg'
        ],
        [
            "name" => "Fish Salad",
            "price" => 11.99,
            "image" => './images/salad_3.jpg'
        ],
        [
            "name" => "Veg Salad",
            "price" => 9.99,
            "image" => './images/salad_4.jpg'
        ]
    ]
];

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

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
