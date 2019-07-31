<?php
require_once 'models/bd.php';


function getCategories($link){
    $query = 'SELECT * FROM categories';
    $categories = mysqli_query($link,$query);
    return $categories;
}
getCategories($link);
