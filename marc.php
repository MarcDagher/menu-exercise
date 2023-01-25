<?php

/** 
 * Exercise 1
 * Display the menu of the restaurant. Show every category of the menu and the products below it. Every product should have a name, a price and an image.
 * Use the $menu_items array to display the menu
 *  
 */

/**
 * Exercise 2 
 * Create a form in which you are displaying the menu items with a checkbox which allows the user to select the items he wants to order.
 * When the user submits the form, display the selected items in a table. with the name and price shown
 * At the bottom, the total price of the order should be displayed
 * if the total price is more than 20$, the user should get a 10% discount
 * the original total, the discounted amount, and the discounted should be shown 
 */

/**
 *  Exercise 3
 * Make everything look nice using you knowledge of HTML, CSS & Bootstrap
 */
$menu_items = [
    "apetizers" => [
        [
            "name" => "Chiken Wings",
            "price" => 5.75,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Beef Wings",
            "price" => 4.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Fish Wings",
            "price" => 11.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Veg Wings",
            "price" => 9.99,
            "image" => 'https://picsum.photos/200/300'
        ]
    ],
    "sandwiches" => [
        [
            "name" => "Chiken Snadwich",
            "price" => 10.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Beef Snadwich",
            "price" => 12.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Fish Snadwich",
            "price" => 11.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Veg Snadwich",
            "price" => 9.99,
            "image" => 'https://picsum.photos/200/300'
        ],
    ],
    "salads" => [
        [
            "name" => "Chiken Salad",
            "price" => 10.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Beef Salad",
            "price" => 12.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Fish Salad",
            "price" => 11.99,
            "image" => 'https://picsum.photos/200/300'
        ],
        [
            "name" => "Veg Salad",
            "price" => 9.99,
            "image" => 'https://picsum.photos/200/300'
        ]
    ]
];
