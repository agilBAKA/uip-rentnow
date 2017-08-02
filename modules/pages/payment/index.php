<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav-blank.php'; ?> 
    

    <section class="section-page section-checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="boxed boxed--pad">
                        <form action="">  
                            <div class="info-checkout">
                                 <header>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2 class="heading">Info Penyewa</h2>
                                            <span class="divider"></span> 
                                        </div>
                                        <div class="col-md-4">
                                            <a href="" class="btn-default btn-small on-right">Ubah</a>
                                        </div>
                                    </div>
                                </header>
                                <div class="overview">
                                    <table>
                                        <tr>
                                            <td>
                                                <span>Pemesan</span>
                                                <strong>Devi krisdiansyah</strong>
                                            </td>
                                            <td>
                                                <span>Email</span>
                                                <strong>devi.krisdiansyah@gmail.com</strong>
                                            </td>
                                            <td>
                                                <span>No. Handphone</span>
                                                <strong>081220743339</strong>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="info-checkout">
                                <header> 
                                    <h2 class="heading">Info Penyewa</h2>
                                    <span class="divider"></span> 
                                </header>
                                <div class="overview">
                                    <table>
                                        <tr>
                                            <td>
                                                <span>Penyewa</span>
                                                <strong>Devi krisdiansyah</strong>
                                            </td>
                                            <td>
                                                <span>No KTP</span>
                                                <strong>123414052009123</strong>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="info-checkout">
                                <header>
                                    <h2 class="heading">Pembayaran</h2>
                                    <span class="divider"></span>
                                    <br>
                                    <br>
                                    <strong>Pembayaran diambil memalui saldo Anda di rentnow</strong>
                                </header>
                                <div class="box-result-payment">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <span>Total Pembayaran</span>
                                            <h2 class="price"><sub>IDR</sub>351.134</h2>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="" class="btn-secondary on-right">Bayar Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Dengan Anda melakukan pembayaran, Anda berarti menyetujui <a href="" class="link">Syarat dan ketentuan</a> yang berlaku di aplikasi rentnow
                                </p>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="boxed">
                        <div class="boxed__header bb">
                            <header>
                                <h2 class="heading">Saldo Anda</h2>
                                <span class="divider"></span>
                            </header>
                        </div>
                        <div class="boxed__body">
                            <div class="info-saldo">
                                <h2><sub>IDR</sub>10.000.000</h2>
                                <span>Terakhir diperbarui 20 April 2017</span>
                                <a href="" class="btn-secondary btn-small">
                                    Lakukan Topup
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="boxed">
                        <div class="boxed__header bb">
                            <header>
                                <h2 class="heading">ID Pemesanan</h2>
                                <span class="divider"></span>
                                <span class="id-booking font-thin font-large">112345</span>
                            </header>
                        </div>
                        <div class="boxed__body">
                            <div class="detail-booking">
                                <figure>
                                    <img src="dist/images/thumb.jpg" alt="">
                                </figure>
                                <div class="detail-booking__info">
                                    <strong>Mobil Fortuner 2017</strong>
                                    <ul class="rating">
                                        <li>
                                            <i class="zmdi zmdi-star"></i>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-star"></i>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-star"></i>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-star"></i>
                                        </li>
                                        <li class="unrated">
                                            <i class="zmdi zmdi-star"></i>
                                        </li>                                  
                                    </ul>
                                    <table>
                                        <tr>
                                            <td>Durasi Penyewaan</td>
                                            <td>6jam</td>
                                        </tr>
                                        <tr>
                                            <td>Hari/Tanggal</td>
                                            <td>Senin/20 Juli 2017</td>
                                        </tr>
                                        <tr>
                                            <td>Mulai pukul</td>
                                            <td>18:00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Sampai pukul</td>
                                            <td>20:00 WIB</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boxed boxed-pengantaran">
                        <h3 class="sub-heading">Metode Pengantaran properti:</h3>
                        <strong>Diantar ke alamat</strong>
                        <p>Jl. Tanjung Nitikan Baru No.126, Umbulharjo, Sorosutan. Yogyakarta</p>
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
            $('input[name=penyewa]').click(function() {
                // console.log($('input[name=jenis-donasi]:checked').val());

                if($('input[name=penyewa]:checked').val() === 'for-others') {
                    $('.for-others').show();
                }else {
                    $('.for-others').hide();
                }
            });
        })
    </script>

</body>
</html>