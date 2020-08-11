<?php

// Get 10 most recent product IDs in date descending order.
$query = new WC_Product_Query( array(
    'orderby' => 'title',
    'order' => 'DESC',
) );
$products = $query->get_products();

dump($products);

foreach ($products as $product) {
    echo $product->get_name().'<br>';
    echo $product->get_slug().'<br>';
    echo $product->get_date_created().'<br>';
    echo $product->get_status().'<br>';
    echo $product->get_description().'<br>';
    echo $product->get_short_description().'<br>';
    echo $product->get_price().'<br>';
    echo '<br>';
}

