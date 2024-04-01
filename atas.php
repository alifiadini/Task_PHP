<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Website Cars</title>
</head>
<body>
    
    <div class="container">
        <?php
            // Looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $velue <br>";

                echo "<a href='index.php?hal=$key'>$value</a> ";
            }
        ?>
    </div>