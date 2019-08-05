<?php require_once 'models/functions.php';
$categories = getCategories($link);



?>
<div class="col-md-2 left-menu">
    <p class="left-menu-cat">Categories</p>
    <nav >

        <li id="all" class="act menu-head" >ALL</li>
        <?php
        foreach ($categories as $category) {
            if ($category["parent_id"] == 0){
                echo ('<li class="all-child menu-head fict ">'.$category["name"].'</li>');
                $child = $category["id"];

            }if($category["parent_id"] == $child){
                echo ('<li class="fict-child"><a href="category_page.php?link=' . $category["id"] . '&linkName='.$category["name"].'">'.$category["name"].'</a></li>');
            }



        };
        ?>


    </nav>
</div>