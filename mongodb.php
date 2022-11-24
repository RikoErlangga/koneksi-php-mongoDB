<?php

$manager = new MongoDB\Driver\Manager ("mongodb+srv://rikoerlangga:12345@cluster0.xnrepy2.mongodb.net/?retryWrites=true&w=majority");

// Query Class
$query = new MongoDB\Driver\Query(array("restaurant_id" => "40356018"));

// Select Database Collection
$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

// Convert cursor to array and print results
echo "<pre>";
print_r($cursor->toArray());
echo "<pre>";

?>