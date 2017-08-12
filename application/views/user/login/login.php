<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2017 19:12:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Prêmio Mestres da Educação 2017</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url('assets/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<!--<div class="preloader">-->
<!--    <svg class="circular" viewBox="25 25 50 50">-->
<!--        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>-->
<!--</div>-->
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->



<section id="wrapper" class="login-register login-sidebar"  style="background-image:url(<?= base_url('assets/images/background/login-register.jpg') ?>);">
    <div class="login-box card">
        <div class="card-block">
            <?php $attributes = array('class' => 'form-horizontal form-material', 'id' => 'myform'); ?>
            <?= form_open('user/login' , $attributes) ?>

                <a href="javascript:void(0)" class="text-center db"><img src="<?= base_url('assets/images/mestres.png')?>" width="180" alt="Home" /><br/></a>
                <?php if (validation_errors()) : ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($error)) : ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" name="matricula" id="matricula" type="text" required="" placeholder="Matrícula">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="cpf" id="cpf" type="text" required="" placeholder="CPF (Apenas Números)">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Lembrar-me </label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Acessar</button>
                    </div>
                </div>


            </form>

        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url('assets/plugins/bootstrap/js/tether.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url('assets/js/jquery.slimscroll.js')?>"></script>
<!--Wave Effects -->
<script src="<?= base_url('assets/js/waves.js')?>"></script>
<!--Menu sidebar -->
<script src="<?= base_url('assets/js/sidebarmenu.js')?>"></script>
<!--stickey kit -->
<script src="<?= base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('assets/js/custom.min.js')?>"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js')?>"></script>
</body>

</html>





<!--
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Login</h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="matricula">Matrícula</label>
					<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Sua Matrícula">
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF (apenas números)">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Login">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->