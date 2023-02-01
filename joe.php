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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Order Page</h1>
        <form action="./joe_order.php" method="POST">
            <div class="row">
                <?php foreach ($menu_items as $category => $items) { ?>
                    <div class="col-4">
                        <h3><?php echo $category ?></h3>

                        <?php foreach ($items as $index => $item) { ?>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-6">
                                    <img src="<?php echo $item['image'] ?>" alt="" />
                                </div>
                                <div class="col-6">
                                    <p><?php echo $item['name'] ?></p>
                                    <p><?php echo $item['price'] ?></p>
                                    <input type="checkbox" name="order[<?php echo $category?>][]" value="<?php echo $index ?>" />
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" style="width: 100%; margin: 20px 0;">ORDER</button>
        </form>
    </div>

</body>

</html>