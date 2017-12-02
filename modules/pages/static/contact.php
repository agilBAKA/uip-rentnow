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
                        <h1 class="title">Kontak</h1>
                    </header>

                    <div class="boxed boxed--pad">
                        <form action="">
                            <div class="box-field">
                                <label>Nama Lengkap</label>
                                <input type="text" class="field" placeholder="Tulis Nama lengkap Anda">
                            </div>
                            <div class="box-field">
                                <label>Email</label>
                                <input type="email" class="field" placeholder="Tulis Email Anda">
                            </div>
                            <div class="box-field">
                                <label>Subjet</label>
                                <input type="text" class="field" placeholder="Tulis subjet pesan">
                            </div>
                            <div class="box-field">
                                <label>Pesan Anda</label>
                                <textarea placeholder="Tulis disini..." rows="5" class="field" style="height: 100px;"></textarea>
                            </div>
                            <div class="box-field">
                                <button class="btn btn-secondary on-right" style="min-width: 120px;">Kirim</button>
                            </div>

                        </form>
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

