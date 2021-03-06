
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JST | Masuk Website</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/admin/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/admin/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/admin/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/admin/AdminLTE-2.0.5/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page">

        <div class="login-box">



            <div class="login-logo">
               <img src="<?php echo base_url('assets/images/gambarTeksWarnaBGTerang.png') ?>" width="220px" height="70px">
            </div><!-- /.login-logo -->
<div class="panel panel-default top150">
            <div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i> Silakan login Untuk Masuk Website</h4></div>
            <div class="login-box-body">

                <p class="login-box-msg">Masukkan username dan password</p>
                <?php echo form_open("coming_soon/cek_login"); ?>
                    <div class="form-group has-feedback">  
                        <input type="text" class="form-control" name="username" placeholder="username"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>                      
                            <?php echo form_error('password'); ?>              
                    </div>
                    <div class="row">
                       
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                        </div><!-- /.col -->
                    </div>
                <?php echo form_close(); ?>
</div>
</div>
              

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/admin/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/admin/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/admin/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>