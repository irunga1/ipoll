<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->load->view("template_header") ?>
	<!-- template -->

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
		<meta name="author" content="GeeksLabs">
		<meta name="keyword"
			content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
		<link rel="shortcut icon" href="img/favicon.png">

		<title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
		<!-- bootstrap theme -->
		<link href="<?php echo base_url(); ?>public/css/bootstrap-theme.css" rel="stylesheet">
		<!--external css-->
		<!-- font icon -->
		<link href="<?php echo base_url(); ?>public/css/elegant-icons-style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>public/css/font-awesome.min.css" rel="stylesheet" />
		<!-- Custom styles -->
		<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>public/css/style-responsive.css" rel="stylesheet" />
	</head>
<body>
	<section id="container" class="">
		<?php $this->load->view("template_header"); ?>
		<section id="main-content">
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
					
						<h3 class="page-header"><i class="fa fa fa-bars"></i> <?php echo  (isset($title)) ? $title : "default";?></h3>
						<ol class="breadcrumb">
							<?php
								//$brdc = array();
								if(isset($breadcrumb)){
									$brdc =  explode(",",$breadcrumb);
								}
								else{
									$brdc[0] = "Inicio";
									$brdc[1] = "Index";

								}
								
								
							?>
							<li><i class="fa fa-home"></i><a href="index.html"><?php echo $brdc[0]; ?></a></li>
							<li><i class="fa fa-bars"></i><?php echo $brdc[1]; ?></li>
							
						</ol>
					</div>
				</div>
				<!-- page start-->
				<?php $view = (isset($view)) ? $view : "default/default";?>
				<?php $this->load->view($view) ?>
				<!-- page end-->
			</section>
		</section>
		<!--main content end-->
		<div class="text-right">
			<div class="credits">
				<!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
				Designed by <a href="https://bootstrapmade.com/">@irunga1</a>
			</div>
		</div>
		<?php $this->load->view("template_footer"); ?>			
	</section>
    

    

</body>

</html>
