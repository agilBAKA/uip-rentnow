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
                       <h1 class="title">F A Q</h1>
                    </header>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda minus animi officia debitis soluta impedit, excepturi ullam porro eligendi, explicabo cumque, nemo corrupti. Doloremque ducimus consequuntur officiis molestias quis, repudiandae!
                    </p>
                    <div class="box-faq">
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
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

             $('.title-faq').on('click', function () {
               $(this).toggleClass('in-active');
               $(this).next().toggleClass('content-show');
            })

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

