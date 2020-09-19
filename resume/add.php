<?php

include 'connection.php';

error_log('hit this file.. -sm',0);


$name= mysqli_real_escape_string($db, $_POST['recipe_name']);
$category= mysqli_real_escape_string($db, $_POST['category']);
$pic_url = mysqli_real_escape_string($db, $_POST['pic_url']);
$ingredients = mysqli_real_escape_string($db, $_POST['ingredients']);

mysqli_query($db, "INSERT INTO recipe_data (name, category, pic_url, ingredients) VALUES ('$name', '$category', '$pic_url', '$ingredients')");



?>