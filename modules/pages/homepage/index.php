<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'modules/components/head.php'; ?>
    <link href="dist/css/select2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
    <div class="box-slider">
        <div id="content-slider">
            <a href="promo.php">
                <img src="dist/images/slider/slider-1.jpg" alt="">
            </a>
            <a href="promo.php">
                <img src="dist/images/slider/slider-2.jpg" alt="">
            </a>
            <a href="promo.php">
                <img src="dist/images/slider/slider-3.jpg" alt="">
            </a>
        </div>
    </div>
    <header class="header-pages">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-8">
                    <h1 class="title">Kami menawarkan yang terbaik tersedia disekitar Anda</h1>
                    <h3>Yogyakarta, 23 Mei - 30 Mei 2017</h3>
                </div>
                <div class="col-md-4">
                    <a href="list.php" class="btn-secondary on-right">
                        Tentukan Perjalanan Anda <i class="zmdi zmdi-search"></i>
                    </a>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12 search-properties-home">
                    <ul class="tabs-properties">
                        <li class=" tabs-properties--selected" data-tab="tab-transportation">Transportasi</li>
                        <li class="" data-tab="tab-accomodation">Akomodasi</li>
                        <li class="" data-tab="tab-gear">Perlengkapan</li>
                    </ul>
                    <div class="container-tab-content container-tab-content--selected" id="tab-transportation">
                        <form action="" class="box-search">
                            <div class="box-field box-field--destination">                            
                                <label><i class="zmdi zmdi-pin"></i> Kota Tujuan</label>
                                <select class="select-kota--transportation">
                                    <option value="">Jakarta</option>
                                    <option value="">Bandung</option>
                                    <option value="" selected>Yogyakatra</option>
                                    <option value="">Malang</option>
                                    <option value="">Surabaya</option>
                                    <option value="">Bali</option>
                                    <option value="">Lombok</option>
                                </select>
                            </div>
                            <div class="box-field search-range-transportation" id="searchRange">
                                <label><i class="zmdi zmdi-calendar"></i> Tanggal sewa</label>
                                <div class="box-range">
                                    <div class="field-search">
                                        <input type="text" id="search-form" placeholder="Dari">
                                    </div>
                                    <div class="arrows"><i class="zmdi zmdi-arrow-right"></i></div>
                                    <div class="field-search">
                                        <input type="text" id="search-to" placeholder="Hingga">
                                    </div>
                                </div>
                            </div>
                            <div class="box-field">
                                <button class="btn-secondary btn-small">Cari Transportasi</button>
                            </div>
                        </form>
                    </div>
                    <div class="container-tab-content" id="tab-accomodation">
                        <form action="" class="box-search">
                            <div class="box-field box-field--destination">                            
                                <label><i class="zmdi zmdi-pin"></i> Kota Tujuan</label>
                                <select class="select-kota--accomodation">
                                    <option value="">Jakarta</option>
                                    <option value="">Bandung</option>
                                    <option value="" selected>Yogyakatra</option>
                                    <option value="">Malang</option>
                                    <option value="">Surabaya</option>
                                    <option value="">Bali</option>
                                    <option value="">Lombok</option>
                                </select>
                            </div>
                            <div class="box-field search-range-accomodation" id="searchRange">
                                <label><i class="zmdi zmdi-calendar"></i> Tanggal sewa</label>
                                <div class="box-range">
                                    <div class="field-search">
                                        <input type="text" id="search-form" placeholder="Dari">
                                    </div>
                                    <div class="arrows"><i class="zmdi zmdi-arrow-right"></i></div>
                                    <div class="field-search">
                                        <input type="text" id="search-to" placeholder="Hingga">
                                    </div>
                                </div>
                            </div>
                            <div class="box-field">
                                <button class="btn-secondary btn-small">Cari Akomodasi</button>
                            </div>
                        </form>
                    </div>
                    <div class="container-tab-content" id="tab-gear">
                        <form action="" class="box-search">
                            <div class="box-field box-field--destination">                            
                                <label><i class="zmdi zmdi-pin"></i> Kota Tujuan</label>
                                <select class="select-kota--gear">
                                    <option value="">Jakarta</option>
                                    <option value="">Bandung</option>
                                    <option value="" selected>Yogyakatra</option>
                                    <option value="">Malang</option>
                                    <option value="">Surabaya</option>
                                    <option value="">Bali</option>
                                    <option value="">Lombok</option>
                                </select>
                            </div>
                            <div class="box-field search-range-gear" id="searchRange">
                                <label><i class="zmdi zmdi-calendar"></i> Tanggal sewa</label>
                                <div class="box-range">
                                    <div class="field-search">
                                        <input type="text" id="search-form" placeholder="Dari">
                                    </div>
                                    <div class="arrows"><i class="zmdi zmdi-arrow-right"></i></div>
                                    <div class="field-search">
                                        <input type="text" id="search-to" placeholder="Hingga">
                                    </div>
                                </div>
                            </div>
                            <div class="box-field">
                                <button class="btn-secondary btn-small">Cari Perlengkapan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-page section-transportation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="header-section">
                        <h2 class="heading">
                            TRANSPORTASI di Yogyakarta
                        </h2>
                        <a href="list.php" class="link">Lihat semua Transportasi</a>
                    </header>
                </div>
            </div>
            <div class="row list-item">

                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-page section-accomodation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="header-section">
                        <h2 class="heading">
                            AKOMODASI di Yogyakarta
                        </h2>
                        <a href="list.php" class="link">Lihat semua Akomodasi</a>
                    </header>
                </div>
            </div>
            <div class="row list-item">

                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-page section-tools">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="header-section">
                        <h2 class="heading">
                            PERLENGKAPAN di Yogyakarta
                        </h2>
                        <a href="list.php" class="link">Lihat semua Perlengkapan</a>
                    </header>
                </div>
            </div>
            <div class="row list-item">

                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="detail.php" target="_blank">
                            <figure class="card__cover">
                                <img src="dist/images/thumb.jpg" alt="">
                            </figure>
                            <div class="card__content">
                                <h3>Mazda CX-5 Grand Touring</h3>
                                <label class="price">
                                    <span>Harga mulai dari</span>
                                    <sub>IDR</sub>100.000
                                </label>
                                <ul class="rating">
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                    <li class="unrated">
                                        <i class="zmdi zmdi-star"></i>
                                    </li>                                  
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-page section-destination">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Destinasi Terbaik</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 box-destination">
                    <a href="">
                        <div class="card-background" style="background-image: url(dist/images/cover.jpg);">
                            <div class="card-background__inner">
                                <h2>Surabaya</h2>
                                <p>
                                    Tiramisu muffin gingerbread lollipop dessert lollipop fruitcake. Apple pie cheesecake soufflé apple pie.
                                </p>  
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 box-destination">
                    <a href="">
                        <div class="card-background" style="background-image: url(dist/images/cover.jpg);">
                            <div class="card-background__inner">
                                <h2>Surabaya</h2>
                                <p>
                                    Tiramisu muffin gingerbread lollipop dessert lollipop fruitcake. Apple pie cheesecake soufflé apple pie.
                                </p>  
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 box-destination">
                    <a href="">
                        <div class="card-background" style="background-image: url(dist/images/cover.jpg);">
                            <div class="card-background__inner">
                                <h2>Surabaya</h2>
                                <p>
                                    Tiramisu muffin gingerbread lollipop dessert lollipop fruitcake. Apple pie cheesecake soufflé apple pie.
                                </p>  
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 box-destination">
                    <a href="">
                        <div class="card-background" style="background-image: url(dist/images/cover.jpg);">
                            <div class="card-background__inner">
                                <h2>Surabaya</h2>
                                <p>
                                    Tiramisu muffin gingerbread lollipop dessert lollipop fruitcake. Apple pie cheesecake soufflé apple pie.
                                </p>  
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 box-destination">
                    <a href="">
                        <div class="card-background" style="background-image: url(dist/images/cover.jpg);">
                            <div class="card-background__inner">
                                <h2>Surabaya</h2>
                                <p>
                                    Tiramisu muffin gingerbread lollipop dessert lollipop fruitcake. Apple pie cheesecake soufflé apple pie.
                                </p>  
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 box-destination">
                    <a href="">
                        <div class="card-background" style="background-image: url(dist/images/cover.jpg);">
                            <div class="card-background__inner">
                                <h2>Surabaya</h2>
                                <p>
                                    Tiramisu muffin gingerbread lollipop dessert lollipop fruitcake. Apple pie cheesecake soufflé apple pie.
                                </p>  
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require 'modules/components/footer.php'; ?> 

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="dist/js/vendor/jquery.daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('#btn-more').on('click', function () {
                $('body').addClass('no-scroll');
                $('.menu__additional').addClass('menu__additional--active');
                $('.btn-close-menu').addClass('btn-close-menu--active');
                $(".menu").append('<div class="overlay"></div>');

            });

            $("#content-slider").slick({
                dots: true,
                arrows:false,
                infinite: true,
                slidesToShow: 1,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });

             $("select.select-kota--transportation").select2();
             $("select.select-kota--accomodation").select2();
             $("select.select-kota--gear").select2();

            // search range
            function funIdSearch(ids){
                $(ids).dateRangePicker({
                    stickyMonths: true,
                    autoClose: true,
                    startDate:'+1',
                    format: 'DD MMM YYYY',
                    customArrowPrevSymbol: '<i class="zmdi zmdi-arrow-left"></i>',
                    customArrowNextSymbol: '<i class="zmdi zmdi-arrow-right"></i>',
                    getValue: function()
                    {
                        if ($('#search-form').val() && $('#search-to').val() )
                            return $('#search-form').val() + ' to ' + $('#search-to').val();
                        else
                            return '';
                    },
                    setValue: function(s,s1,s2)
                    {
                        $('#search-form').val(s1);
                        $('#search-to').val(s2);
                    }
                });
                
            }

            funIdSearch('.search-range-transportation');
            funIdSearch('.search-range-accomodation');
            funIdSearch('.search-range-gear');




            function close(eventClose){
                $(eventClose).on('click', function () {
                    $(".overlay").hide();
                    $('body').removeClass('no-scroll');
                    $('.menu__additional').removeClass('menu__additional--active');
                    $('.btn-close-menu').removeClass('btn-close-menu--active');
                });
            }

            close('#btn-close-menu');
            close('.overlay');

            $('ul.tabs-properties li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs-properties li').removeClass('tabs-properties--selected');
                $('.container-tab-content').removeClass('container-tab-content--selected');

                $(this).addClass('tabs-properties--selected');
                $("#"+tab_id).addClass('container-tab-content--selected');
            })


            var win = $(window).width();
            if( win < 480 ) {
                $('.list-item').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:false,
                    centerMode: true,
                    centerPadding: '60px'
                })
            }else {
                $('.list-item').unslick()
            }
        })
    </script>
</body>
</html>