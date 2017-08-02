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
     
    <?php require 'modules/pages/profile/header-profile.php'; ?>

    <div class="nav-profile">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li data-tab="tab-booking" class="nav-tab-active">Pemesanan</li>
                        <li data-tab="tab-profile">Profil</li>
                        <li data-tab="tab-notif">Notifikasi <span class="dot"></span></li>
                        <li data-tab="tab-message">Pesan <span class="dot"></span></li>
                        <li data-tab="tab-setting">Pengaturan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="section-profile">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- tab content  pesanan -->
                    <div class="content-tab-profile content-tab-profile--active " id="tab-booking">
                        <?php require 'modules/pages/profile/booking.php'; ?>
                    </div>
                    <!-- tab content  pesanan end -->

                    <!-- tab content  profil -->
                    <div class="content-tab-profile" id="tab-profile">
                        <header>
                            <h2 class="heading">profil</h2>
                            <div class="divider"></div>
                        </header>
                    </div>
                    <!-- tab content  profil end -->

                    <!-- tab content  Notifikasi -->
                    <div class="content-tab-profile" id="tab-notif">
                        <?php require 'modules/pages/profile/notif.php'; ?>
                    </div>
                    <!-- tab content  Notifikasi end -->

                    <!-- tab content  pesan -->
                    <div class="content-tab-profile" id="tab-message">
                        <?php require 'modules/pages/profile/message.php'; ?>
                    </div>
                    <!-- tab content  pesan end -->

                    <!-- tab content  setting -->
                    <div class="content-tab-profile" id="tab-setting">
                        <header>
                            <h2 class="heading">Pengaturan</h2>
                            <div class="divider"></div>
                        </header>
                    </div>
                    <!-- tab content  setting end -->

                </div>
            </div>
        </div>
    </section>

    <?php require 'modules/components/footer.php'; ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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


            $('.unread').on('click', function(){
                $(this).removeClass('unread').removeAttr('span').addClass('read');
            });


            $('#btnAddBalance').on('click', function(){
                $('.boxed-form-balance').toggleClass('in-show');

                $(this).toggleClass('form-balance-show');
                
                if($('#btnAddBalance').hasClass('form-balance-show') == true){
                    $(this).html('<i class="zmdi zmdi-close"></i>batalkan');
                }else {
                    $(this).html('<i class="zmdi zmdi-plus"></i>Tambah Deposit');
                }
            });

            $("#accordionMessage > li > .head-message").on('click',function() {
                $(this).toggleClass("active-message").next('div').slideToggle(250).closest('li').siblings().find('div.head-message').removeClass('active-message').next('div').slideUp(250);
            });


            $('.nav-profile ul li').click(function(){
                var tab_id = $(this).attr('data-tab');

                $('.nav-profile ul li').removeClass('nav-tab-active');
                $('.content-tab-profile').removeClass('content-tab-profile--active');

                $(this).addClass('nav-tab-active');
                $("#"+tab_id).addClass('content-tab-profile--active');
            });

        })
    </script>

</body>
</html>