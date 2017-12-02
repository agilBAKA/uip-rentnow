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
                    <header>
                        <h1 class="title">Syarat Penggunaan</h1>
                    </header>

                    <h5 class="font-bold">
                        DUIS DAPIBUS NISI ET ENIM CONSECTETUR, EGET ORNARE ORCI LUCTUS. VESTIBULUM SCELERISQUE, LEO ET FAUCIBUS CONGUE, ORCI MI LUCTUS IPSUM, EU VULPUTATE FELIS SAPIEN SED LEO. IN EU VELIT AT URNA MOLESTIE POSUERE NEC A MAURIS. MORBI FAUCIBUS ORCI METUS, EU ACCUMSAN ORCI TEMPOR A. FUSCE FEUGIAT INTERDUM NUNC, AC LOBORTIS MI MALESUADA AT. DUIS AT NISI ODIO
                    </h5>

                    <strong class="updated">Terkahir diubah 1 agustus 2017</strong>


                    <p>
                         Marzipan cake sweet wafer chupa chups pie croissant. Gummies chocolate bar sugar plum. Jujubes candy pudding caramels liquorice tiramisu. Chocolate liquorice powder. Soufflé cookie icing chocolate cake lemon drops brownie tart. Lollipop dragée lemon drops icing candy canes sweet roll. Sweet tootsie roll jelly sweet dessert chocolate bar muffin cake pastry. Pudding bonbon lemon drops ice cream jelly beans. Cupcake liquorice bear claw donut biscuit. Gingerbread jelly-o wafer. Danish cheesecake marzipan sweet sesame snaps sugar plum. Tiramisu tart liquorice carrot cake.
                    </p>  
                    <p>
                        Cotton candy gingerbread pastry halvah oat cake. Candy canes apple pie tiramisu. Apple pie sweet roll chocolate bar. Muffin wafer brownie tootsie roll dragée candy. Cheesecake marshmallow lollipop sugar plum marshmallow candy. Sweet sugar plum cotton candy croissant powder sesame snaps danish. Oat cake jujubes chupa chups cheesecake jelly gummi bears dragée lollipop chocolate. Tootsie roll chupa chups oat cake cake bear claw chupa chups jujubes. Liquorice jujubes pudding tootsie roll bear claw gingerbread. Pastry macaroon jujubes. Topping cupcake pie halvah tootsie roll cookie. Bonbon oat cake pie sweet wafer pastry cake cotton candy.
                    </p>

                    <p>
                         Marzipan cake sweet wafer chupa chups pie croissant. Gummies chocolate bar sugar plum. Jujubes candy pudding caramels liquorice tiramisu. Chocolate liquorice powder. Soufflé cookie icing chocolate cake lemon drops brownie tart. Lollipop dragée lemon drops icing candy canes sweet roll. Sweet tootsie roll jelly sweet dessert chocolate bar muffin cake pastry. Pudding bonbon lemon drops ice cream jelly beans. Cupcake liquorice bear claw donut biscuit. Gingerbread jelly-o wafer. Danish cheesecake marzipan sweet sesame snaps sugar plum. Tiramisu tart liquorice carrot cake.
                    </p>  
                    <p>
                        Cotton candy gingerbread pastry halvah oat cake. Candy canes apple pie tiramisu. Apple pie sweet roll chocolate bar. Muffin wafer brownie tootsie roll dragée candy. Cheesecake marshmallow lollipop sugar plum marshmallow candy. Sweet sugar plum cotton candy croissant powder sesame snaps danish. Oat cake jujubes chupa chups cheesecake jelly gummi bears dragée lollipop chocolate. Tootsie roll chupa chups oat cake cake bear claw chupa chups jujubes. Liquorice jujubes pudding tootsie roll bear claw gingerbread. Pastry macaroon jujubes. Topping cupcake pie halvah tootsie roll cookie. Bonbon oat cake pie sweet wafer pastry cake cotton candy.
                    </p>
              
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

