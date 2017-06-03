<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
     <link href="dist/css/select2.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css"/>
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
    <header class="header-pages">
        <div class="container">
            <div class="row">
                <form action="" class="default-form search-form">
                    <div class="field field--destination">
                        <label>Kota Tujuan</label>
                        <i class="zmdi zmdi-pin"></i>
                        <select class="select-kota">
                            <option value="">Jakarta</option>
                            <option value="">Bandung</option>
                            <option value="" selected>Yogyakatra</option>
                            <option value="">Malang</option>
                            <option value="">Surabaya</option>
                            <option value="">Bali</option>
                            <option value="">Lombok</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Tanggal Penyewaan</label>
                        <i class="zmdi zmdi-calendar"></i>
                        <input type="text" class="date" id="date">
                    </div>
                    <div class="field">
                        <button class="btn-secondary btn-small">Ubah Pencarian</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="">Beranda</a>
                        </li>
                        <li>
                            <a href="">Perlengkapan</a>
                        </li>
                        <li>
                            <a href="">Yogyakarta</a>
                        </li>
                        <li>
                            <span>nama item</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="section-page page-detail">
        <div class="container">
            <div class="boxed detail-item">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider-item">
                            <div class="cover-image" id="cover-image">
                                <img src="dist/images/cover-item.jpg" alt="">
                                <img src="dist/images/cover-item.jpg" alt="">
                                <img src="dist/images/cover-item.jpg" alt="">
                                <img src="dist/images/cover-item.jpg" alt="">
                                <img src="dist/images/cover-item.jpg" alt="">
                                <img src="dist/images/cover-item.jpg" alt="">
                            </div>
                            <div class="thumb-image" id="thumb-image">
                                <img src="dist/images/thumb.jpg" alt="">
                                <img src="dist/images/thumb.jpg" alt="">
                                <img src="dist/images/thumb.jpg" alt="">
                                <img src="dist/images/thumb.jpg" alt="">
                                <img src="dist/images/thumb.jpg" alt="">
                                <img src="dist/images/thumb.jpg" alt="">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="detail-item__content">
                            <div class="content-item__info">
                                <h1 class="title-bold">Mobil Fortuner</h1>
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
                                    <li>
                                        <i class="zmdi zmdi-star"></i>
                                    </li>
                                </ul>
                                <label class="address">
                                    <i class="zmdi zmdi-pin"></i>
                                    <span>
                                       Jl. Tanjung No.126, Nitikan, Umbulharjo, Sorosutan, Yogyakarta - 134567
                                    </span> 
                                </label>
                                <div class="box-verified">
                                    <i class="zmdi zmdi-shield-check"></i>
                                    Terverifikasi
                                </div>
                            </div>
                            <div class="content-item__price">
                                <div class="box-price">
                                    <span>Harga Mulai Dari</span>
                                    <label><sub>Rp</sub>1.000.000</label>
                                </div>
                                <a href="" class="btn-secondary btn-small">
                                    RENTNOW
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="boxed">
                        <ul class="tabs">
                            <li data-tab="informasi" class="tabs--selected">
                                Informasi
                            </li>
                            <li data-tab="fasilitas">
                                Fasilitas
                            </li>
                            <li data-tab="review">
                                Review
                            </li>
                        </ul>
                        <div class="tab-content tab-content--selected" id="informasi">
                            <p>
                                Tart sesame snaps pastry. Ice cream croissant chocolate cake bonbon cotton candy jujubes dessert brownie. Tart candy liquorice fruitcake liquorice powder wafer cupcake lemon drops. Candy canes dessert halvah icing tootsie roll icing cake carrot cake.

                            </p>
                        </div>
                        <div class="tab-content" id="fasilitas">
                            <div class="box-fasilitas">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                         <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <i class="zmdi zmdi-check"></i>
                                            <span>Faslitas</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="review">
                            <div class="box-review">
                                <div class="box-review__list">
                                    <label>Devi Krisdiansyah</label><span>24 Mei 2016</span>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo fugiat maiores rerum dicta praesentium ratione quisquam deleniti fuga nulla et ipsam ad, alias voluptatum. Beatae eligendi odio, modi laborum.
                                    </p>
                                </div>
                                 <div class="box-review__list">
                                    <label>Devi Krisdiansyah</label><span>24 Mei 2016</span>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo fugiat maiores rerum dicta praesentium ratione quisquam deleniti fuga nulla et ipsam ad, alias voluptatum. Beatae eligendi odio, modi laborum.
                                    </p>
                                </div>
                                 <div class="box-review__list">
                                    <label>Devi Krisdiansyah</label><span>24 Mei 2016</span>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo fugiat maiores rerum dicta praesentium ratione quisquam deleniti fuga nulla et ipsam ad, alias voluptatum. Beatae eligendi odio, modi laborum.
                                    </p>
                                </div>
                                 <div class="box-review__list">
                                    <label>Devi Krisdiansyah</label><span>24 Mei 2016</span>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo fugiat maiores rerum dicta praesentium ratione quisquam deleniti fuga nulla et ipsam ad, alias voluptatum. Beatae eligendi odio, modi laborum.
                                    </p>
                                </div>
                                 <div class="box-review__list">
                                    <label>Devi Krisdiansyah</label><span>24 Mei 2016</span>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo fugiat maiores rerum dicta praesentium ratione quisquam deleniti fuga nulla et ipsam ad, alias voluptatum. Beatae eligendi odio, modi laborum.
                                    </p>
                                </div>
                                 <div class="box-review__list">
                                    <label>Devi Krisdiansyah</label><span>24 Mei 2016</span>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quo fugiat maiores rerum dicta praesentium ratione quisquam deleniti fuga nulla et ipsam ad, alias voluptatum. Beatae eligendi odio, modi laborum.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31625.48667700301!2d110.38792822864993!3d-7.770109062417544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac4d7b5fcf34f8e4!2sGadjah+Mada+University!5e0!3m2!1sen!2sid!4v1496139756704" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <?php require 'modules/components/footer.php'; ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("select.select-kota").select2();

            $('#date').datepicker({
                format: 'dd/mm/yyyy',
                startDate: '+1d',
                autoclose:true,
                todayHighlight: true,
            }).datepicker("setDate", "0");

            $('#cover-image').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '#thumb-image',
                prevArrow:"<button class='slick-arrow-left'><i class='zmdi zmdi-chevron-left'></i></button>",
                nextArrow:"<button class='slick-arrow-right'><i class='zmdi zmdi-chevron-right'></i></button>"
            });
            $('#thumb-image').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '#cover-image', 
                dots: false,
                arrows: false,
                centerMode: false,
                focusOnSelect: true
            });

            $('ul.tabs li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('tabs--selected');
                $('.tab-content').removeClass('tab-content--selected');

                $(this).addClass('tabs--selected');
                $("#"+tab_id).addClass('tab-content--selected');
            })

        })
    </script>

</body>
</html>