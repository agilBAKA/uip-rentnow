<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav-logged.php'; ?>
     
    <?php require 'modules/pages/profile/header-profile.php'; ?>

     <div class="nav-profile">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <a href="user-booking.php" >
                                <i class="zmdi zmdi-format-list-bulleted"></i>
                                <span class="txt">Pemesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-profile.php">
                                <i class="zmdi zmdi-account"></i>
                                <span class="txt">Profil</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-notif.php" class="link-active">
                                <i class="zmdi zmdi-notifications"></i>
                                <span class="txt">Notifikasi</span>
                                <span class="dot"></span>
                            </a>
                        </li>
                        <li>
                            <a href="user-message.php">
                                <i class="zmdi zmdi-email"></i>
                                <span class="txt">Pesan</span>
                                <span class="dot"></span>
                            </a>
                        </li>
                        <li>
                            <a href="user-setting.php">
                                <i class="zmdi zmdi-settings"></i>
                                <span class="txt">Pengaturan</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="section-profile">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                	<header>
					    <h2 class="heading">Notif</h2>
					    <div class="divider"></div>
					</header>
					<ul class="list-notification">
                        <li class="unread">
                            <span class="bullet-notif"></span>
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="unread">
                            <span class="bullet-notif"></span>
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="unread">
                            <span class="bullet-notif"></span>
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        
                    </ul>          
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

            $('#toggleMenu').on('click', function(){
                $('.nav-account__body').toggleClass('is-show');
            })

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

            $('#btnAddBalance').on('click', function(){
                $('.boxed-form-balance').toggleClass('in-show');

                $(this).toggleClass('form-balance-show');
                
                if($('#btnAddBalance').hasClass('form-balance-show') == true){
                    $(this).html('<i class="zmdi zmdi-close"></i><span>Batalkan</span>');
                }else {
                    $(this).html('<i class="zmdi zmdi-plus"></i><span>Tambah Deposit</span>');
                }
            });

            $('.unread').on('click', function(){
                $(this).removeClass('unread').removeAttr('span').addClass('read');
            });


        })
    </script>

</body>
</html>

