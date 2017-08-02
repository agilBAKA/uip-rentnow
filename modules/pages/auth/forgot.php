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
    
    <section class="section-auth">
        <div class="box-auth">
            <h1 class="title">Lupa Password</h1>
            <div class="card-auth">
                <p>Masukan alamat email Anda, kami akan mengirim link untuk me-reset password Anda</p>
                <br>
                <form action="" class="default-form">
                   <div class="box-field">
                        <label for="">Email Anda</label>
                        <input class="field" type="email" placeholder="Email Anda">
                   </div>                 
                   <div class="box-field">
                        <a href="" class="btn-secondary btn-large full">KIRIM</a>
                   </div>
                    
               </form>
            </div>

            <a href="login.php" class="go-auth">
               Masuk
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