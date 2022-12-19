<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stilos.css">
</head>
<body>
    


<?php 
    
    // require 'includes/app.php';
    // incluirTemplate('header');
    include_once('navegacion.php')
?>
    <main>

        <?php
            $response = json_decode(file_get_contents('http://localhost:8080/bienesraices/api_productos.php?id_categoria=6'), true);
            if($response['statuscode'] == 200) {
                foreach($response['items'] as $item) {
                    include('layout/items.php');
                }
            } else {
                echo $response['response'];
            }

        ?>

    </main>
    
    <script src="js/main.js"></script>

    </body>
</html>


 