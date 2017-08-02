<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
     <link href="dist/css/select2.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
    <header class="header-pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="box-search">
                        <div class="box-field box-field--destination">                            
                            <label><i class="zmdi zmdi-pin"></i> Kota Tujuan</label>
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
                        <div class="box-field" id="searchRange">
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
                            <button class="btn-secondary btn-small">Ubah Pencarian</button>
                        </div>
                    </form>
                </div>
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

    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="dist/js/vendor/jquery.daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
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

            // search range
            $('#searchRange').dateRangePicker({
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

            $("select.select-kota").select2();

            $(".slider-promo").slick({
                dots: true,
                arrows:false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
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