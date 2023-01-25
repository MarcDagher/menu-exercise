<?php $menu_items = [
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
            "name" => "Chick Sandwich",
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
// $category = $menu_items["apetizers"];
// foreach ($menu_items["apetizers"] as $item){
//     echo $item['name'] . "</br>";
// }


// foreach ($menu_items as $category => $items){
//     echo $category . "</br>";
//     foreach ($items as $item => $foods){
//         echo "----" . $item . "</br>";
//         foreach ($foods as $food){
//             echo "--------" . $food . "</br>";
//         }
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="apetizers_banner col-sm-6 col-md-4">
                    <h2>Apetizers</h2>
                    <?php foreach ($menu_items["apetizers"] as $item){ ?>
                    <p><?php echo $item["name"] . " " . $item["price"] . "$";?></p>
                    <?php echo '<img src="'.$item["image"].'" alt="logo">';}?> </br>
                    <a href="order_now.php">Order Now</a>    
            
            </div>

            <div class="sandwiches_banner col-sm-6 col-md-4"> 
                    <h2>Sandwiches</h2>
                    <?php foreach($menu_items["sandwiches"] as $items){?>
                    <p><?php echo $items["name"] . " " . $items["price"] . "$";?></p>
                    <?php echo '<img src="'.$items["image"].'"  alt="logo">';}?> </br>
                    <a href="order_now.php">Order Now</a> 
            </div>
            <div class="salads_banner col-sm-12 col-md-4">
                    <h2>Salads</h2>
                    <?php foreach($menu_items["salads"] as $value){?>
                    <p><?php echo $value["name"] . " " . $value["price"] . "$";?></p>
                    <?php echo '<img src="'.$value["image"].'"  alt="logo">';}?> </br>
                    <a href="order_now.php">Order Now</a> 
            </div>
        </div>
                    
    </div>

</body>
</html>