<?php
// list_products.php
require_once "bootstrap.php";
$id = 2;
$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findById($id);

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}
