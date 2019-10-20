<?php

    require_once "basket_utils.php";

    $articles = get_products();
    if ($articles)
    {
        foreach ($articles as $key => $val)
        {
            if ($val['ref'] == $_POST['old_ref'])
            {
                $articles[$key] = [
                    'ref' => $_POST['ref'],
                    'category' => $_POST['category'],
                    'price' => $_POST['price'],
                    'stock' => $_POST['stock'],
                    'img' => $_POST['42-login']
                 ];
            }
        }
         file_put_contents("../private/products.csv", serialize($articles));
    }
    header('location: ../view/articles.php');