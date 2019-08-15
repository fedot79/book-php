<?php
require_once 'bd.php';
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$id = $_POST['id'];
mysqli_query($link,"INSERT INTO comments (us_name,us_mail,com_text,book_id) VALUES ('$name','$email','$text','$id')") or die("Какая-то ошибка");
$redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");
