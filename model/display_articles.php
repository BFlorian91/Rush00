<?php

    function display_articles()
    {
        $articles = unserialize(file_get_contents("../private/products.csv"));
        foreach ($articles as $key => $val)
            echo "name: " . $val['ref'] . " catégorie:" . $val['category'] . " prix:" . $val['price'] . " img:" . $val['img'] . "<br /><br />";
        
    }