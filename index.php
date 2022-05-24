<?php

include 'data.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>FAQ</title>

    <style>
        ul{
            list-style-type: none;
            padding-left: 0;
        }
        ul li{
            padding-bottom: 10px;
        }
        p{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>


    <main class="container">

        <ul>
            <?php foreach($faq as $key => $quests) { ?>
                <li class="mt-5 mb-3">
                    <h3><?php echo "{$key}"; ?></h3>
                </li>
                <li>
                    <?php 
                        foreach($quests as $item)
                        {
                            echo "{$item}";
                        }
                    ?>
                </li>
            <?php  } ?>
        </ul>
        <a href=""></a>

    </main>

    
</body>
</html>