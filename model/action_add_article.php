<?php

    $articles = unserialize(file_get_contents('../private/products.csv'));
    $articles[] = [
       'ref' => $_POST['ref'],
       'category' => $_POST['category'],
       'price' => $_POST['price'],
       'stock' => $_POST['quantity'],
       'img' => $_POST['42-login']
    ];
    file_put_contents("../private/products.csv", serialize($articles));
    header('location: /view/articles.php');