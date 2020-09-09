<?php
/* data */
$contacts = json_decode(file_get_contents('data/contacts.json'));
$hero = json_decode(file_get_contents('data/hero.json'));
$consultation = json_decode(file_get_contents('data/consultation.json'));
$products = json_decode(file_get_contents('data/products.json'));
/* data */

/* page blocks */
include 'blocks/header.php';
include 'blocks/hero.php';
include 'blocks/consultation.php';
include 'blocks/products.php';
include 'blocks/footer.php';
/* page blocks */