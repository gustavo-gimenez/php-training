<?php

if(isset($_GET['data'])){
    $startWith = $_GET['data'];
    $query = $entityManager->createQuery("SELECT p from Province where p.name like :startWidth");
    $query->setParamter(":startWidth", $startWith . "%");
    
    $result = $query->getResult();
    
    header('content-type: application/json');
    echo json_encode($result);
}

//Me has enviado este dato: data1
