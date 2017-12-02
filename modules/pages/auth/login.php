<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
    
    <section class="section-auth">
        <div class="box-auth">
            <h1 class="title">Masuk</h1>
            <div class="card-auth">
                <form action="" class="default-form">
                   <div class="box-field">
                        <label for="">Email Anda</label>
                        <input class="field" type="email" placeholder="Email Anda">
                   </div>
                   <div class="box-field">
                        <label for="">Password Anda</label>
                        <input class="field" type="password" placeholder="Password Anda">
                   </div>
                   <div class="box-field">
                       <div class="row">
                           <div class="col-md-6">
                               <input type="checkbox">
                               remember me
                           </div>
                           <div class="col-md-6">
                               <a href="forgot.php" class="link on-right">Lupa Password?</a>
                           </div>
                       </div>
                   </div>
                   <div class="box-field">
                        <a href="" class="btn-secondary btn-large full">MASUK</a>
                   </div>
                   <div class="or"><span>Masuk dengan</span></div>
                   <div class="row">
                       <div class="col-md-6 col-sx-6 col-sm-6">
                            <a href="" class="btn btn-social btn-fb full"><i class="zmdi zmdi-facebook-box"></i>Facebook</a>
                       </div>
                       <div class="col-md-6 col-sx-6 col-sm-6">
                            <a href="" class="btn btn-social btn-g full"><i class="zmdi zmdi-google-plus"></i>Google+</a>
                       </div>

                   </div>
               </form>
            </div>

            <a href="register.php" class="go-auth">
                Belum jadi member? Daftar sekarang!
            </a>
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

            var win = $(window).width();
            if( win < 480 ) {
            $(window).on('scroll', function () {
                if($(this).scrollTop() > 50) {
                    $('ul.menu__main').addClass('is-hide');
                } else {
                    $('ul.menu__main').removeClass('is-hide');
                }
                });
            }
           
        })
    </script>

</body>
</html>