<?php
/* data */
$contacts = json_decode(file_get_contents('data/contacts.json'));
$hero = json_decode(file_get_contents('data/hero.json'));
$consultation = json_decode(file_get_contents('data/consultation.json'));
$products = json_decode(file_get_contents('data/products.json'));
$support = json_decode(file_get_contents('data/support.json'));
$trust = json_decode(file_get_contents('data/trust.json'));
$reviews = json_decode(file_get_contents('data/reviews.json'));
/* data */

/* page blocks */
include 'blocks/header.php';
include 'blocks/hero.php';
include 'blocks/consultation.php';
include 'blocks/products.php';
include 'blocks/support.php';
include 'blocks/trust.php';
include 'blocks/reviews.php';
include 'blocks/footer.php';
/* page blocks */