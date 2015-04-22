<?php
require './bootstrap.php';

$repo = $entityManager->getRepository("Province");

$result = $repo->findOneBy(array("name"=> $nameProvince));