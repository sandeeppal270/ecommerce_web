<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Mioca - Handmade Goods eCommerce HTML Template</title>
    <meta name="description" content="Mioca - Handmade Goods eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/png">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css
" rel="stylesheet">


    <!-- vendor css (Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    <style>
    /* Choose all input elements that have the attribute: type="radio" and make them disappear.*/
    input[type="radio"] {
        display: none;
    }

    /* The label is what's left to style. 
As long as its 'for' attribute matches the input's 'id', it will maintain the function of a radio button. */
    label {
        padding: 1em;
        display: inline-block;
        border: 1px solid grey;
        cursor: pointer;
    }

    .blank-label {
        display: none;
    }

    /* The '+' is the adjacent sibling selector.
It selects what ever element comes right after it,
as long as it is a sibling. */
    input[type="radio"]:checked+label {
        background: skyblue;
        color: #fff;
    }
    </style>

</head>

<body>


    <!-- Header Area Start -->
    <?php
   include 'navbar.php';
    ?>
    <!-- OffCanvas Menu End -->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Single Product Details</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/1.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/2.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/3.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/4.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/5.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/1.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/2.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/3.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/4.jpg"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/5.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>Hand-Made Garlic Mortar</h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price text-primary">&#8377;20.90</li>
                                <li class="old-price"><del>&#8377;30.90</del></li>
                            </ul>
                        </div>
                        <!-- <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                        </div> -->
                        <div class="stock mt-10px">
                            <span class="avallabillty">Availability: <span class="in-stock text-primary"><i
                                        class="fa fa-check text-primary"></i>In Stock</span></span>
                        </div>
                        <div class="stock mt-30px">
                            <span class="avallabillty">Choose Style: <span
                                    class="in-stock text-primary">T-Shirt</span></span>
                        </div>
                        <div class="stock mt-30px">
                            <a href=""><span class="avallabillty"><i class="fa fa-file-archive-o"
                                        aria-hidden="true"></i> Size Chart</span></a>
                        </div>
                        <div class="stock mt-30px">
                            <span class="avallabillty">Size:
                                <input type="radio" id="s" name="size" value="" />
                                <label for="s">S</label>

                                <input type="radio" id="m" name="size" value="" />
                                <label for="m">M</label>

                                <input type="radio" id="l" name="size" value="" />
                                <label for="l">L</label>

                                <input type="radio" id="xl" name="size" value="" />
                                <label for="xl">XL</label>
                                <input type="radio" id="xxl" name="size" value="" />
                                <label for="xxl">XXL</label>
                            </span>
                        </div>
                        <div class="stock mt-30px">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-1 p-0">
                                        <div class="row pt-2">
                                        <span class="avallabillty">Color:</span>
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-11">
                                        <input type="radio" name="color" id="red" value="red" />
                                        <label for="red"><span class="red"></span></label>

                                        <input type="radio" name="color" id="green" />
                                        <label for="green"><span class="green"></span></label>

                                        <input type="radio" name="color" id="yellow" />
                                        <label for="yellow"><span class="yellow"></span></label>

                                        <input type="radio" name="color" id="olive" />
                                        <label for="olive"><span class="olive"></span></label>

                                        <input type="radio" name="color" id="orange" />
                                        <label for="orange"><span class="orange"></span></label>

                                        <input type="radio" name="color" id="teal" />
                                        <label for="teal"><span class="teal"></span></label>

                                        <input type="radio" name="color" id="blue" />
                                        <label for="blue"><span class="blue"></span></label>

                                        <input type="radio" name="color" id="violet" />
                                        <label for="violet"><span class="violet"></span></label>

                                        <input type="radio" name="color" id="purple" />
                                        <label for="purple"><span class="purple"></span></label>

                                        <input type="radio" name="color" id="pink" />
                                        <label for="pink"><span class="pink"></span></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>
                            <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni
                                nostrud
                                exercitation ullamco laboris </p>
                        </div>

                        <div class="pro-details-quality">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-2 p-1">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 p-1">
                                        <div class="pro-details-cart">
                                            <a class="btn btn-primary add-cart" style="background-color:skyblue;"> Add
                                                To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 p-1">
                                        <div class="pro-details-cart">
                                            <a class="btn btn-primary add-cart" style="background-color:skyblue;"> Buy
                                                it
                                                now</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">Handmade, </a>
                                </li>
                                <li>
                                    <a href="#">Furniture, </a>
                                </li>
                                <li>
                                    <a href="#">Decore</a>
                                </li>
                            </ul>
                        </div>
                        <div class="payment-img">
                            <a href="#"><img src="assets/images//icons/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details2" class="btn btn-primary"
                        style="background-color:skyblue;">Information</a>
                    <a class="active btn btn-primary" data-bs-toggle="tab" href="#des-details1"
                        style="background-color:skyblue;">Description</a>
                    <!-- <a class="btn btn-primary" data-bs-toggle="tab" href="#des-details3"
                        style="background-color:skyblue;">Reviews (02)</a> -->
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed utlo perspiciatis unde
                                omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                ratione voluptatem sequi nesciunt.

                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/review-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="assets/images/review-image/2.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="rating-product">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Name" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Email" type="email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <button class="btn btn-primary btn-hover-color-primary"
                                                            type="submit" value="Submit"
                                                            style="background-color:skyblue;">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->

    <!-- Related product Area Start -->
    <div class="related-product-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center line-height-1">
                        <h2 class="title">Related Products</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                <div class="new-product-wrapper swiper-wrapper">
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.php" class="image">
                                    <img src="assets/images/product-image/9.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/9.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="single-product.php">Hand-Made Garlic Mortar
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">&#8377;38.50</span>
                                </span>
                            </div>
                            <button title="Add To Cart" class="add-to-cart btn btn-primary"
                                style="background-color:skyblue;">Add
                                To Cart</button>
                        </div>
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.php" class="image">
                                    <img src="assets/images/product-image/10.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                </span>
                            </div>
                            <div class="content">

                                <h5 class="title"><a href="single-product.php">Handmade Ceramic Pottery
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">&#8377;38.50</span>
                                    <span class="old">&#8377;45.50</span>
                                </span>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart btn btn-primary"
                                style="background-color:skyblue;">Add
                                To Cart</button>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/11.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/11.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">Sale</span>
                                </span>

                            </div>
                            <div class="content">

                                <h5 class="title"><a href="single-product.html">Hand Painted Bowls
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">&#8377;38.50</span>
                                </span>
                            </div>
                            <button title="Add To Cart" class="add-to-cart btn btn-primary"
                                style="background-color:skyblue;">Add
                                To Cart</button>
                        </div>
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/12.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/1.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="sale">-5%</span>
                                </span>

                            </div>
                            <div class="content">

                                <h5 class="title"><a href="single-product.html">Antique Wooden Farm
                                        Large
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">&#8377;38.50</span>
                                    <span class="old">&#8377;40.50</span>
                                </span>
                            </div>
                            <button title="Add To Cart" class="add-to-cart btn btn-primary"
                                style="background-color:skyblue;">Add
                                To Cart</button>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/6.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                </span>

                            </div>
                            <div class="content">

                                <h5 class="title"><a href="single-product.html">Handmade Jute Basket
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">&#8377;38.50</span>
                                </span>
                            </div>
                            <button title="Add To Cart" class="add-to-cart btn btn-primary"
                                style="background-color:skyblue;">Add
                                To Cart</button>
                        </div>
                    </div>
                    <div class="new-product-item swiper-slide">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/7.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/7.jpg" alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>

                            </div>
                            <div class="content">

                                <h5 class="title"><a href="single-product.html">Knitting yarn & crochet
                                        hook
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">&#8377;38.50</span>
                                </span>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart</button>
                        </div>
                        <!-- Single Prodect -->
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related product Area End -->

    <?php
include 'footer.php';
?>
    <!-- script for size button -->
    <script>
    &#8377;('#other-field').focus(function() {
        &#8377;('#other').prop("checked", true);
    });
    </script>
</body>

</html>