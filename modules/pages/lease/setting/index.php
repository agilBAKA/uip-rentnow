<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
</head>
<body class="body-pages">
	<?php require 'modules/components/nav-after-login.php'; ?>
    <section class="section section-lease">
        <div class="content-setting">
            <div class="container">
                <div class="row">
                     <?php require 'modules/pages/lease/setting/personal.php'; ?>
                </div>
            </div>
        </div>

          <div class="content-setting">
            <div class="container">
                <div class="row">
                     <?php require 'modules/pages/lease/setting/vendor.php'; ?>
                </div>
            </div>
        </div>


    </section>
    
    <?php require 'modules/components/footer.php'; ?>
    <?php require 'modules/components/modal-subscribe.php'; ?>
    
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="dist/js/vendor/droparea.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
             $('#birthdate').datepicker({
                 autoclose: true
             });

             $('.style-select select').each(function(){
                var $this = $(this), numberOfOptions = $(this).children('option').length;
              
                $this.addClass('select-hidden'); 
                $this.wrap('<div class="select"></div>');
                $this.after('<div class="select-styled"></div>');

                var $styledSelect = $this.next('div.select-styled');
                $styledSelect.text($this.children('option').eq(0).text());
              
                var $list = $('<ul />', {
                    'class': 'select-options'
                }).insertAfter($styledSelect);
              
                for (var i = 0; i < numberOfOptions; i++) {
                    $('<li />', {
                        text: $this.children('option').eq(i).text(),
                        rel: $this.children('option').eq(i).val()
                    }).appendTo($list);
                }
              
                var $listItems = $list.children('li');
              
                $styledSelect.click(function(e) {
                    e.stopPropagation();
                    $('div.select-styled.active').not(this).each(function(){
                        $(this).removeClass('active').next('ul.select-options').hide();
                    });
                    $(this).toggleClass('active').next('ul.select-options').toggle();
                });
              
                $listItems.click(function(e) {
                    e.stopPropagation();
                    $styledSelect.text($(this).text()).removeClass('active');
                    $this.val($(this).attr('rel'));
                    $list.hide();
                    //console.log($this.val());
                });
              
                $(document).click(function() {
                    $styledSelect.removeClass('active');
                    $list.hide();
                });

            });
        })
    </script>
    
</body>
</html>