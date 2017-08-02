<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
    <?php require 'modules/components/nav-blank.php'; ?> 

    <section class="container-small section-page">
        <div class="boxed boxed--pad">
            <h1 class="title">Terima kasih</h1>
            <span class="divider"></span>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Pesanan Anda dengan id <strong>1333424</strong> telah kami verifikasi. <br>
                        Cek Email Anda untuk detail invoice
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="on-right">
                        <span>Waktu Pemesanan</span><br>
                        <strong>Senin, 01 April 2017</strong>
                    </div>
                </div>
            </div>
            <br>
            <table class="table-line table-result"> 
                <tr>
                    <td>Jenis item yang disewa</td>
                    <td><strong>Mobil Fortuner 2017</strong></td>
                </tr> 
                <tr>
                    <td>Durasi penyewaan</td>
                    <td><strong>6jam</strong></td>
                </tr>
                <tr>
                    <td>Hari/Tanggal</td>
                    <td><strong>Senin/20 Juli 2017</strong></td>
                </tr>
                <tr>
                    <td>Mulai pukul</td>
                    <td><strong>18:00 WIB</strong></td>
                </tr>
                <tr>
                    <td>Sampai pukul</td>
                    <td><strong>20:00 WIB</strong></td>
                </tr>
                <tr>
                    <td>Metode Pengambilan properti</td>
                    <td><strong>diantar ke tempat</strong></td>
                </tr>
                <tr>
                    <td>Total Pembayaran</td>
                    <td><strong><sub>IDR</sub>351.134</strong></td>
                </tr>
            </table>
        </div>
        <a href="" class="btn-secondary">Lakukan Pemesanan lainnya</a>
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