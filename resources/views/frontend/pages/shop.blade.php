@extends("layouts.index_frontend")
@section('shop')
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->


    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">


                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="{{route("shop.index")}}">All Product</a>
                                    </li>
                                    @foreach ($categories as $categorie)
                                    <li>
                                        {{-- <a href="{{ route('shop.category', $categorie->id) }}">{{$categorie->name}}</a> --}}
                                        {{-- <a href="{{ route('shop.filter', ['categorie' => $categorie->id]) }}"> --}}
                                            {{-- <a href="{{ route('shop.filter', ['category' => $categorie->id]) }}"> --}}
                                                <a href="{{ route('shop.filter', ['category' => $categorie->id]) }}">

                                                {{ $categorie->name }}</a>
                                                <span>({{$categorie->count()}})</span>

                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>



                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p>
                                        {{-- <p><span>{{ $nbr_products }}</span> Product(s) Found</p> --}}
                                        <p><span>{{ count($products) }} </span> Product Found</p>

                                </div>
{{-- original --}}
                                {{-- <form  id="sort-form" method="GET" action="{{ route('shop.sort') }}" class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select name="criteria" id="sort-by">
                                        <option data-display="Select" value="product">product</option>
                                        <option value="name" >name</option>
                                        <option value="price">price</option>
                                    </select>
                                    <button type="submit" class="btn ">Trier</button>
                                </form> --}}



                                <form id="sort-form" method="GET" action="{{ route('shop.sort') }}" class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select name="criteria" id="sort-by">
                                        <option data-display="Select" value="product">product</option>
                                        <option value="name_asc">name (asc)</option> <!-- Tri ascendant par nom -->
                                        <option value="name_desc">name (desc)</option> <!-- Tri descendant par nom -->
                                        <option value="price_asc">price (asc)</option>
                                        <option value="price_desc">price (desc)</option>
                                    </select>
                                    <button type="submit" class="btn">Trier</button>
                                </form>



                                {{-- <div class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select>
                                        <option data-display="Select">name</option>
                                        <option value="1">price</option>
                                        <option value="2">product</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="single_product_menu d-flex">
                                    <h5>show :</h5>
                                    <div class="top_pageniation">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                        </ul>
                                    </div>
                                </div> --}}
                                {{-- <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ asset('storage/img/produit/' . $product->image) }}" alt="">
                                <div class="single_product_text">
                                    <h4>{{ $product->name }}</h4>
                                    <h3>${{ $product->prix }}.00</h3>
                                    @if ($product->stock > 0)

                                    <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    @else
                                    <a  class="add_cart"> Out of stock<i class="ti-heart"></i></a>

                                    @endif

                                    {{-- <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        @if ($loop->iteration % 3 == 0)
                        </div>
                        <div class="row align-items-center latest_product_inner">
                        @endif
                        @endforeach
                    </div>
                    <div class="d-flex align-items-center justify-content-center text-center">
                        {{ $products->links() }}
                    </div>

{{-- suivant precedent --}}





                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--================End Category Product Area =================-->

    <!-- product_list part start-->
  <!-- product_list part start-->
  <section class="product_list best_seller">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @foreach ($products as $product)
                        <div class="single_product_item">
                            <img src="{{ asset('storage/img/produit/' . $product->image) }}" alt="">
                            <div class="single_product_text">
                                <h4>{{ $product->name }}</h4>
                                <h3>${{ $product->prix }}.00</h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/price_rangs.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
@endsection
