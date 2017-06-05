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
                        <input type="text" class="date">
                    </div>
                    <div class="field">
                        <button class="btn-secondary btn-small">Ubah Pencarian</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                     <?php require 'modules/pages/properties/main.php'; ?>
                </div>
                <div class="col-md-4">
                    <div class="slider-promo">
                        <a href="">
                            <img src="dist/images/destination/1.jpg" alt="">
                        </a>
                        <a href="">
                            <img src="dist/images/destination/2.jpg" alt="">
                        </a>
                        <a href="">
                            <img src="dist/images/destination/2.jpg" alt="">
                        </a>
                    </div>

                    <?php require 'modules/pages/properties/filter.php'; ?>
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
             $('#btn-more').on('click', function () {
                $('body').addClass('no-scroll');
                $('.menu__additional').addClass('menu__additional--active');
                $('.btn-close-menu').addClass('btn-close-menu--active');
                $(".menu").append('<div class="overlay"></div>');

            });


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
            $("select.select-kota").select2();

            $('.date').datepicker({
                format: 'dd/mm/yyyy',
                startDate: '+1d',
                autoclose:true,
                todayHighlight: true,
            }).datepicker("setDate", "0");

            $(".slider-promo").slick({
                dots: true,
                arrows:false,
                infinite: true,
                speed: 300,
                slidesToShow: 1
            });

            $('.filter-header').on('click', function(){
                $(this).next().toggleClass('filter-hide');
                $(this).find('i').toggleClass('rotate');
            });

            $('#filter-now').on('click', function(){
                $('.sidebar-filter').addClass('sidebar-filter--show')
                $('body').addClass('no-scroll')
            });
            $('#finish-filter').on('click', function(){
                $('.sidebar-filter').removeClass('sidebar-filter--show')
                $('body').removeClass('no-scroll')
            });

        })
    </script>

</body>
</html>