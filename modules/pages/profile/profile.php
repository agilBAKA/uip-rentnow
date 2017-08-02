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
                        	<a href="user-booking.php">Pemesanan</a>
                        </li>
                        <li>
                        	<a href="user-profile.php" class="link-active">Profil</a>
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
					    <h2 class="heading">Profil</h2>
					    <div class="divider"></div>
					</header>


                    <div class="boxed boxed--pad">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="box-field">
                                    <label>Nama lengkap</label>
                                    <input type="text" class="field" value="Devi Krisdiansyah" placeholder="Tulis disini">
                                </div>
                                <div class="box-field">
                                    <label>Email</label>
                                    <input type="email" class="field" value="devi.krisdiansyah@gmail.com" placeholder="Tulis disini">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box-field for-photo">
                                    <label>Foto Profil</label>
                                    <div class="drop-photo">
                                         <input type="file" class="droparea avatar" name="xfile" data-post="modules/components/upload.php" data-width="150" data-height="150" data-crop="true"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-field">
                            <label>No. Hp</label>
                            <input type="email" class="field" value="081228074339" placeholder="Tulis disini">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-field">
                                    <label>Tanggal lahir</label>
                                    <input type="date" class="field">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-field">
                                    <label>Jenis kelamin</label>
                                    <div class="style-radio">
                                        <input type="radio" name="gender">
                                        <label>Laki-laki</label>
                                    </div>
                                    <div class="style-radio">
                                        <input type="radio" name="gender">
                                        <label>Wanita</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-act">
                            <button class="btn btn-small btn-secondary">Simpan</button>
                        </div>
                    </div>

                    <div class="boxed boxed--pad">
                        <div class="box-field">
                            <label>Alamat</label>
                            <input type="text" class="field" placeholder="isi disini">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box-field">
                                    <label>Jenis Identitas</label>
                                    <select class="field">
                                        <option selected disabled>-- pilih --</option>
                                        <option value="sim">SIM</option>
                                        <option value="ktp">KTP</option>
                                        <option value="passport">Passport</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="box-field">
                                    <label>No Identitas</label>
                                    <input type="text" class="field" placeholder="isi no Identitas">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-field">
                                    <label>Upload Foto Identitas</label>
                                    <div class="drop-photo">
                                         <input type="file" class="droparea upload-id" name="xfile" data-post="modules/components/upload.php" data-width="400" data-height="250" data-crop="false"/>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="profile-act">
                            <button class="btn btn-small btn-secondary">Simpan</button>
                        </div>                  
                    </div>

                    <div class="boxed boxed--pad">
                        <ul class="connected-social-media">
                            <li>
                                <strong>Terhubung dengan facebook</strong>
                                <button class="btn btn-small btn-secondary">Hubungkan</button>
                            </li>
                            <li>
                                <strong>Terhubung dengan Google plus</strong>                                
                                <button class="btn btn-small btn-secondary">Hubungkan</button>
                            </li>
                        </ul>
                    </div>

                    <div class="boxed boxed--pad">
                        <div class="row">
                            <div class="col-md-8">
                                <p>Apakah Anda ingin menonaktifkan akun Anda?</p>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-small btn-full btn-secondary">
                                    Nonaktifkan Akun saya
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
	        </div>
        </div>
    </section>

    <?php require 'modules/components/footer.php'; ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/vendor/droparea.js"></script>
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

            $('.droparea').droparea({
                'instructions': '',
                'init' : function(result){
                    //console.log('custom init',result);
                },
                'start' : function(area){
                    area.find('.error').remove(); 
                },
                'error' : function(result, input, area){
                    $('<div class="error">').html(result.error).prependTo(area); 
                    return 0;
                    //console.log('custom error',result.error);
                },
                'complete' : function(result, file, input, area){
                    if((/image/i).test(file.type)){
                        area.find('img').remove();
                        //area.data('value',result.filename);
                        area.append($('<img>',{
                            'src': result.path + result.filename + '?' + Math.random(),
                            'class' : ''
                        }));
                    } 
                    //console.log('custom complete',result);
                }
            });


        })
    </script>

</body>
</html>

