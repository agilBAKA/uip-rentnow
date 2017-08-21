<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
     
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
    
    <section class="section-auth">
        <div class="box-auth">
            <h1 class="title"> Password Baru</h1>
            <div class="card-auth">
                <form action="" class="default-form">
                   <div class="box-field">
                        <label for="">Password Baru Anda</label>
                        <input class="field" type="password" placeholder="Password Anda">
                        <span class="info">Minimal 6 karakter</span>
                   </div>
                   <div class="box-field">
                        <label for="">Konfirmasi Password Baru Anda</label>
                        <input class="field" type="password" placeholder="konfirmasi Password Anda">
                   </div>


                   <div class="box-field">
                        <a href="" class="btn-secondary btn-large full">MASUK</a>
                   </div>
                    
               </form>
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