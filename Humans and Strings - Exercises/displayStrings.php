<?php
require_once 'HtmlString.php';

$markup = new HtmlString();
$markup->setString('My strinnnng<br>');
$bold = $markup->getBoldString('My string is bolded!');

echo $bold;
