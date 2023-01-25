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
// foreach ($menu_items["apetizers"] as $apetizer){
//     print_r($apetizer);
// }
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
        <form action="./order_now.php" method="post" >
            <div class="row">
                    <div class="section-1 col-sm-6 col-md-4">
                        <h2>Apetizers</h2>   
                        <?php foreach($menu_items["apetizers"] as $apetizer){?>
                        <label  for="<?php echo $apetizer["name"];?>">
                            <input type="checkbox"  name="apetizers_box[]" value="<?php echo $apetizer["name"] . " " . $apetizer["price"];?>"  id="apetizers_box">
                            <?php echo $apetizer["name"]  . " (" . $apetizer["price"] . "$)" . "</br>";}?>
                        </label>
                    </div>
                    <div class="section-2 col-sm-6 col-md-4">
                        <h2>Sandwiches</h2>   
                        <?php foreach($menu_items["sandwiches"] as $sandwiches){?>
                        <label for="<?php echo $sandwiches["name"];?>"> 
                            <input type="checkbox" name="sandwiches_box[]" value="<?php echo $sandwiches["name"] . " " . $sandwiches["price"];?>" id="sandwiches_box">
                            <?php echo $sandwiches["name"]  . " (" . $sandwiches["price"] . "$)" . "</br>";}?>
                        </label>
                    </div>
                    
                    <div class="section-3 col-sm-12 col-md-4">
                        <h2>Salads</h2>   
                        <?php foreach($menu_items["salads"] as $salads){?>
                        <label for="<?php echo $salads["name"];?>"> 
                            <input type="checkbox" name="salads_box[]" value="<?php echo $salads["name"] . " " . $salads["price"];?>" >
                            <?php echo $salads["name"] . " (" . $salads["price"] . "$)" . "</br>";}?> 
                        </label> </br>
                    </div>
                    <input type="submit" name="submit-2" value="Submit Order">
            </div>



        <?php 
        if (isset($_POST["submit-2"])){?>
            <table border="2px solid black">
                <tr>
                    <th>Item Name / Item Price</th>
                </tr>

                <?php if( !empty($_POST["apetizers_box"])){?>
                <?php foreach($_POST["apetizers_box"] as $apetizers_box){?>
                <tr>
                    <td><?php echo $apetizers_box. "$" . "</br>";}}?></td>
                </tr>

                <?php if(!empty($_POST["sandwiches_box"])){?>
                    <?php foreach($_POST["sandwiches_box"] as $sandwiches_box){?>
                    <tr>
                        <td><?php echo $sandwiches_box . "$" . "</br>";}}?></td>
                    </tr>

                <?php if (!empty($_POST["salads_box"])){?>
                    <?php foreach($_POST["salads_box"] as $salads_box){?>
                    <tr>
                        <td><?php echo $salads_box . "$" . "</br>";}}?></td>
                    </tr>

                <?php if(empty($_POST["apetizers_box"]) && empty($_POST["sandwiches_box"]) && empty($_POST["salads_box"])){ ?>
                    <tr>
                        <td><?php echo "N/A";?></td>
                        <td><?php echo "N/A";}} ?></td>
                    </tr>    
            </table>
        </form> </br>
    </div>
</body>
</html>

