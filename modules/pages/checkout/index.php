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
                                    <h2 class="heading">Info Pemesan</h2>
                                    <span class="divider"></span> 
                                </header>
                                <div class="box-field">
                                <a href="" class="btn-primary btn-small">Login</a>
                                apabila Anda sudah memiliki Akun
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-field">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="field" placeholder="Nama sesuai KTP" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-field">
                                            <label>Email</label>
                                            <input type="email" class="field" placeholder="Email Aktif" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-field">
                                            <label>No. Handphone</label>
                                            <input type="text" class="field" placeholder="No Handphone aktif" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="info-checkout">
                                <header>
                                    <h2 class="heading">Info Penyewa</h2>
                                    <span class="divider"></span> 
                                </header>
                                <div class="box-field">
                                    <div class="style-radio">
                                        <input type="radio" name="penyewa" value="for-me" checked required>
                                        <label>Saya sebagai penyewa</label>
                                    </div>
                                    <div class="style-radio">
                                        <input type="radio" name="penyewa" value="for-others" required>
                                        <label>Untuk Orang lain</label>
                                    </div>
                                </div>
                                <div class="box-field for-others">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="field" placeholder="Nama sesuai KTP" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box-field">
                                            <label>No. KTP</label>
                                            <input type="text" class="field" placeholder="No. KTP Penyewa" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-field">
                                            <label>No. SIM</label>
                                            <input type="text" class="field" placeholder="No. SIM Penyewa" required>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="info-checkout">
                                <header>
                                    <h2 class="heading">Gunakan Voucher</h2>
                                    <span class="divider"></span>
                                </header>
                                <div class="box-field for-voucher">
                                    <input type="text" class="field" placeholder="masukan kode disini..">
                                    <span class="btn btn-small btn-secondary">Pilih</span>
                                </div>
                            </div>

                            <div class="info-checkout">
                                <header>
                                    <h2 class="heading">Info Pembayaran</h2>
                                    <span class="divider"></span> 
                                </header>
                                <table class="table-line table-info-payment">
                                    <tr>
                                        <td colspan="3" class="item">Mobil Fortuner 2017</td>
                                    </tr>
                                    <tr>
                                        <td>Rp50.000/jam @ 6jam</td>
                                        <td>IDR</td>
                                        <td>300.000</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Pengantaran</td> 
                                        <td>IDR</td>
                                        <td>50.000</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Admin</td> 
                                        <td>IDR</td>
                                        <td>1.000</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Unik</td> 
                                        <td>IDR</td>
                                        <td>134</td>
                                    </tr>

                                    <tr class="total">
                                        <td>Total</td> 
                                        <td>IDR</td>
                                        <td>351.134</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="info-checkout">
                                <button class="btn-secondary on-right"> Lanjutkan ke Pembayaran</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxed">
                        <div class="boxed__header bb">
                            <header>
                                <h2 class="heading">Detail Pemesanan</h2>
                                <span class="divider"></span> 
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