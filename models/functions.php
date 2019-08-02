<?php
require_once 'models/bd.php';


function getCategories($link){
    $query = 'SELECT * FROM categories';
    $categories = mysqli_query($link,$query);
    return $categories;
}
function bestBooks($link){
    $query = 'SELECT * FROM books ORDER BY best DESC ';
    $best = mysqli_query($link,$query);
    return $best;
}
function newBooks($link){
    $query = 'SELECT * FROM books ORDER BY created_at DESC ';
    $new = mysqli_query($link,$query);
    return $new;
}

