<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav.php'; ?>
     
    <?php require 'modules/pages/profile/header-profile.php'; ?>

    <div class="nav-profile">
        <div class="container-small">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                    	<li>
                        	<a href="user-booking.php" class="link-active">Pemesanan</a>
                        </li>
                        <li>
                        	<a href="user-profile.php">Profil</a>
                        </li>
                        <li>
                        	<a href="user-notif.php">Notifikasi <span class="dot"></span></a>
                        </li>
                        <li>
                        	<a href="user-message.php">Pesan <span class="dot"></span></a>
                        </li>
                        <li>
                        	<a href="user-setting.php">Pengaturan</a>
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
					    <h2 class="heading">Pemesanan</h2>
					    <div class="divider"></div>
					</header>
					<div class="booking-content">
						<div class="booking-content__list on-going">
							<div class="content-header">
								<strong>Transporasi - 143645643</strong>
								<span class="on-right">Tanggal Pemesanan 1 Aug 2017</span>
							</div>
							<div class="content-body">
								<div class="row">
									<div class="col-md-8">
										<h2>Mobil Fortuner </h2>
										<ul class="time">
											<li>1 Agustus 2017, 10:40 </li>
											<li><i class="zmdi zmdi-arrow-right"></i></li>
											<li>2 Agustus 2017, 10:40 </li>
										</ul>
									</div>
									<div class="col-md-4">
										<h2 class="font-thin on-right"><sub>IDR</sub> 310.000</h2>
										<label class="on-right label">Pemesanan berhasil</label>					
									</div>
								</div>
							</div>
						</div>
						<div class="booking-content__list on-going">
							<div class="content-header">
								<strong>Perlengkapan  - 143645643</strong>
								<span class="on-right">Tanggal Pemesanan 1 Aug 2017</span>
							</div>
							<div class="content-body">
								<div class="row">
									<div class="col-md-8">
										<h2>Camera Canon EOS 600D </h2>
										<ul class="time">
											<li>1 Agustus 2017, 10:40 </li>
											<li><i class="zmdi zmdi-arrow-right"></i></li>
											<li>2 Agustus 2017, 10:40 </li>
										</ul>
									</div>
									<div class="col-md-4">
										<h2 class="font-thin on-right"><sub>IDR</sub> 100.000</h2>
										<label class="on-right label">Pemesanan berhasil</label>					
									</div>
								</div>
							</div>
						</div>

						<div class="booking-content__list">
							<div class="content-header">
								<strong>Perlengkapan  - 143645643</strong>
								<span class="on-right">Tanggal Pemesanan 1 Aug 2017</span>
							</div>
							<div class="content-body">
								<div class="row">
									<div class="col-md-8">
										<h2>Camera Canon EOS 600D </h2>
										<ul class="time">
											<li>1 Agustus 2017, 10:40 </li>
											<li><i class="zmdi zmdi-arrow-right"></i></li>
											<li>2 Agustus 2017, 10:40 </li>
										</ul>
									</div>
									<div class="col-md-4">
										<h2 class="font-thin on-right"><sub>IDR</sub> 100.000</h2>
										<label class="on-right label label-error">Pemesanan kadaluarsa</label>					
									</div>
								</div>
							</div>
						</div>

						<div class="booking-content__list">
							<div class="content-header">
								<strong>Transportasi - 143645643</strong>
								<span class="on-right">Tanggal Pemesanan 1 Aug 2017</span>
							</div>
							<div class="content-body">
								<div class="row">
									<div class="col-md-8">
										<h2>Yamaha Jupiter MX 150cc </h2>
										<ul class="time">
											<li>1 Agustus 2017, 10:40 </li>
											<li><i class="zmdi zmdi-arrow-right"></i></li>
											<li>2 Agustus 2017, 10:40 </li>
										</ul>
									</div>
									<div class="col-md-4">
										<h2 class="font-thin on-right"><sub>IDR</sub> 100.000</h2>
										<label class="on-right label label-finish">Pemesanan selesai</label>					
									</div>
								</div>
							</div>
						</div>
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


            

            $('#btnAddBalance').on('click', function(){
                $('.boxed-form-balance').toggleClass('in-show');

                $(this).toggleClass('form-balance-show');
                
                if($('#btnAddBalance').hasClass('form-balance-show') == true){
                    $(this).html('<i class="zmdi zmdi-close"></i>batalkan');
                }else {
                    $(this).html('<i class="zmdi zmdi-plus"></i>Tambah Deposit');
                }
            });
        })
    </script>

</body>
</html>

