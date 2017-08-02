<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
     
    <section class="section-promo">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <a href="promo.php" class="link">kembali ke semua promo</a>
                    <div class="box-detail-promo">
                        <img src="dist/images/destination/2.jpg" alt="">
                        <h1 class="title">
                            promo name Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis sit aut tempora
                        </h1>
                        <p>
                            Jujubes bonbon cake oat cake wafer. Halvah muffin fruitcake danish gummies jelly-o. Bear claw caramels danish lollipop ice cream marshmallow.
                        </p>
                        <div class="box-voucher">
                            <strong>Gunakan kode voucher berikut</strong>
                            <div class="val-voucher">
                                rent400K
                            </div>
                            <span>promo berlaku hingga</span>
                            <strong>1 Augustus - 2 Agustus</strong>
                        </div>
                        <ul class="term-voucher">
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, voluptatem, cumque! Labore rerum sit harum   
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, voluptatem, cumque!  
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, voluptatem, cumque! Labore rerum sit harum quia iure
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, voluptatem, cumque! Labore rerum sit harum quia iure deserunt assumenda.
                            </li>

                        </ul>
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

        })
    </script>

</body>
</html>

