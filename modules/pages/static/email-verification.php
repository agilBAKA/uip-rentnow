<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
     
    <section class="section-static">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-vefirication">
                        <img src="dist/images/email.png" alt="">
                        <h2 class="heading">Akun anda telah aktif</h2>
                        <div class="divider"></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, molestiae!
                        </p>
                    </div>
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

