<?php require_once 'tpl/header.php';
require_once 'models/functions.php';
$book = getBook($link,$_GET["link"]);

?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left product-bread">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Discounts and Clearance</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href=""> Sonatini Hippeastrum Alaska</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 product-panel">
                <div class=" panel-left"><img src="img/books/<?php echo($book[0]["image"])?>" alt=""></div>
                <div class=" panel-right">
                    <h3><?php echo($book[0]["name"])?></h3>
                    <span class="stock">In Stock</span>
                    <p><?php echo($book[0]["short_description"])?></p>
                    <div class="add-cart">
                        <button class="product-btn">Add to cart</button>
                        <span class="add-cart-head">Our price : <span class="add-cart-head-price">$<?php echo($book[0]["price"])?></span> </span><br>
                        <span class="add-cart-save">Was $ <?php echo($book[0]["price"]+30)?> Save 20% </span><br>
                        <hr>
                        <img src="img/safe.png" alt=""><span class="safe">Safe, Secure Shopping</span><br>
                        <a href=""><img src="img/paypal.png" alt=""></a>
                        <a href=""><img src="img/mcard.png" alt=""></a>
                        <a href=""><img src="img/visa.png" alt=""></a>
                        <a href=""><img src="img/amexpr.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 product-info">
                <div class="col-md-10 tabs tabs-info">
                    <ul class="nav nav-tabs ">
                        <li class="nav-item ">
                            <button type="button" class="nav-link active tabs-head active-tab info-tab"   >Product Information</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link active tabs-head info-tab"  >Other details</button>
                        </li>
                    </ul>
                    <div class=" d-flex flex-wrap align-content-around tabs-cell info-text " >
                        <p><?php echo($book[0]["description"])?></p>
                    </div>

                </div>
                <div class="comments">
                    <p class="comment-head">Product review</p>
                    <div class="us-foto">
                        <img src="img/us-foto.png" alt="">
                        <p class="  us-name">Name 1</p>
                    </div>
                    <div class=" text-center us-text">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially
                        </p>
                    </div>
                    <hr>
                    <div class="us-foto">
                        <img src="img/us-foto.png" alt="">
                        <p class="  us-name">Name 1</p>
                    </div>
                    <div class=" text-center us-text">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially
                        </p>
                    </div>
                    <hr>
                    <p class="comment-head">Write a comment</p>
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Your name</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail1" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Your email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Message </label>
                            <div class="col-sm-10">
                                <textarea name="" class="form-control" id="inputEmail2" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="product-btn submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 may-like">
                <p class="like-head">You may also like</p>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>
                <hr>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>
                <hr>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>
                <hr>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>
                <hr>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>
                <hr>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>
                <hr>
                <div class="like-unit">
                    <img src="img/books/like-book.png" alt="">
                    <span class="like-name">The Hare With Amber</span>
                    <span class="like-price">$50</span><br>
                    <button type="button" class="like-button">Read more</button>
                </div>

            </div>

        </div>
    </div>
</main>

<?php require_once 'tpl/footer.php' ?>
