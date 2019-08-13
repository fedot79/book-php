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

function booksCategories($link,$cat_id){
    $query = "SELECT * FROM books WHERE category_id = '$cat_id'";
    $bookCat = mysqli_query($link,$query);
    return $bookCat;
}
function getBook($link,$book_id){
    $query = "SELECT * FROM books WHERE id = '$book_id'";
    $res = mysqli_query($link,$query);
    $book = mysqli_fetch_all($res,MYSQLI_ASSOC);
    return $book;
}