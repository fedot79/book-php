<?php require_once 'tpl/header.php';
require_once 'models/functions.php';
$bookCat = booksCategories($link,$_GET["link"]);

?>
<main>
    <div class="container">
        <div class="row">
            <?php require_once 'tpl/sidebar.php';?>
            <div class="col-md-10 tabs">
                <div class=" d-flex flex-wrap align-content-around tabs-cell best " id="best">
                   <div  class="col-md-12 text-left category-name"> <p class="cat-name"><?= $_GET["linkName"]?></p><br></div>
                    <?php
                        foreach ($bookCat as $item){
                            if ($item["offer"] > 0) {
                                echo('
                            
                            <div class="tabs-unit text-center ">
                        <a  href="product-page.php?link=' . $item["id"] . '">
                            <img class="sale" src="img/books/sale.png" alt="">
                            <img src="img/books/'.$item["image"].'" alt="">
                            <p class=" tabs-unit-name">'.$item["name"].'</p>
                            <p class="tabs-unit-price">'.$item["price"].'</p>
                        </a>
                    </div>
                            ');
                            }else {
                                echo('
                            
                            <div class="tabs-unit text-center ">
                        <a  href="">
                           
                            <img src="img/books/'.$item["image"].'" alt="">
                            <p class=" tabs-unit-name">'.$item["name"].'</p>
                            <p class="tabs-unit-price">'.$item["price"].'</p>
                        </a>
                    </div>
                            ');
                            }
                        }
                    ?>

                    <div class="col-md-12 d-flex justify-content-end pagination-block">
                        <nav aria-label="..." >
                            <ul class="pagination pagination-sm ">

                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link active-page" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">4</a></li>
                                <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                <li class="page-item"><a class="page-link" href="#!">6</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once 'tpl/footer.php' ?>