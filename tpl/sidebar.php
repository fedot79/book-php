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

               };
                foreach ($categories as $category){
                    if ($category["parent_id"] == $child){
                        echo ('<li class="fict-child"><a class="cat" href="category_page.php">'.$category["name"].'</a></li>');
                    }

                }


            };
            ?>

        <li class="all-child menu-head non ">Non - Fiction</li>
        <li class="non-child"><a href="category_page.php">Comic</a></li>
        <li class="non-child"><a href="category_page.php">Cook</a></li>
        <li class="non-child"><a href="category_page.php">Psyhology</a></li>
        <li class="non-child"><a href="category_page.php">Medical</a></li>
        <li class="non-child"><a href="category_page.php">Art</a></li>
        <li class="non-child"><a href="category_page.php">Photography</a></li>
        <li class="non-child"><a href="category_page.php">Law</a></li>
        <li class="non-child"><a href="category_page.php">History</a></li>
        <li class="non-child"><a href="category_page.php">Business</a></li>
        <li class="non-child"><a href="category_page.php">Computer</a></li>
        <li class="all-child menu-head other ">Other</li>
        <li class="other-child"><a href="category_page.php">Baby</a></li>
        <li class="other-child"><a href="category_page.php">Sex</a></li>
        <li class="other-child"><a href="category_page.php">Travel</a></li>
        <li class="other-child"><a href="category_page.php">Science</a></li>
        <li class="other-child"><a href="category_page.php">Sports</a></li>
    </nav>
</div>