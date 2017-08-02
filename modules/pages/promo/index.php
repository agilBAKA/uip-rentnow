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
                    <h1 class="title">Promo rentnow</h1>
                    <div class="divider"></div>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="detail-promo.php" class="card list-promo">
                        <img src="dist/images/destination/1.jpg" alt="">
                        <div class="list-promo__content">
                            <strong>Promo name</strong>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi facere, deleniti nam vero, rem illo unde. Velit sapiente mollitia...
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="detail-promo.php" class="card list-promo">
                        <img src="dist/images/destination/2.jpg" alt="">
                        <div class="list-promo__content">
                            <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero a est alias nihil...</strong>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi facere, deleniti nam vero, rem illo unde. Velit sapiente mollitia...
                            </p>
                        </div>
                    </a>
                </div>
                
                <div class="col-md-6">
                    <a href="detail-promo.php" class="card list-promo">
                        <img src="dist/images/destination/2.jpg" alt="">
                        <div class="list-promo__content">
                            <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero a est alias nihil...</strong>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi facere, deleniti nam vero, rem illo unde. Velit sapiente mollitia...
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="detail-promo.php" class="card list-promo">
                        <img src="dist/images/destination/3.jpg" alt="">
                        <div class="list-promo__content">
                            <strong>Promo name</strong>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi facere, deleniti nam vero, rem illo unde. Velit sapiente mollitia...
                            </p>
                        </div>
                    </a>
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

