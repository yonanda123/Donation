<!DOCTYPE html>
<html>

<head>
	<link href="<?php echo base_url('assets/front/images/logo-lenterakasih.jpg'); ?>" rel="shortcut icon">
	<?php $this->load->view('layout/meta'); ?>
	<title>Home - Lentera Kasih</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body>

	<?php $this->load->view('layout/header'); ?>

	<!--main-->
	<div class="container-fluid-full">

		<!--slider-->
		<br><br><br><br>
		<div class="row">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
					</ol>

					<div id="row bg-img" id="rentyour">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo base_url('assets/front/images/slider/13.jpg') ?>" alt="0">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/14.jpeg') ?>" alt="1">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/15.jpg') ?>" alt="2">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/16.jpeg') ?>" alt="3">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/17.jpg') ?>" alt="4">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/18.jpg') ?>" alt="5">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end slider-->


		<div class="row" id="city">
			<div class="section">
				<div class="col-md-12 text-center">
					<h5 class="font-purple font-bold font-xl">Paguyuban Lentera Kasih</h5>
					<p class="font-medium font-md">“MEMANDANG MEREKA PAKAI HATI, CINTA & KASIH”</p>
					

				</div>

				<div class="dropdown col-md-12" style="margin-bottom: 16px;">
					<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						sorting
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo base_url('/') ?>">Time</a></li>
						<li><a href="<?php echo base_url('home/ascending') ?>">A-Z</a></li>
						<li><a href="<?php echo base_url('home/descending') ?>">Z-A</a></li>
					</ul>
				</div>

				<?php
				foreach ($donasi as $row) {
				?>

					<a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
						<div class="flex-container_item col-md-4">
							<div class="thumbnail" style="padding: 0;">
								<img style="width: 300px; height: 250px;" src="<?php echo base_url('assets/' . $row->img1); ?>" />
								<div class="caption">
									<h4 style="width: 300px; height: 60px;" class="font-bold"><?php echo $row->nama_donasi; ?></h4>
									<h4>&nbsp;<span class="badge"><?php echo $row->kategori_donasi; ?></span></h4>
								</div>
								<hr>
								<div class="col-md-6">
									<h5>&nbsp;Sisa Hari</h5>
									<h4><span class="m-card_footer">&nbsp;<?php echo $row->masa_aktif; ?></span></h4>
								</div>
								<div class="col-md-6">
									<h5>&nbsp;Terkumpul</h5>
									<h4><span class="m-card_footer">&nbsp;<?php echo 'Rp.' . nominal($row->perolehan_donasi); ?></span></h4>
								</div>
								<hr>
								<hr>
								<hr>
							</div>
						</div>
					<?php

				} ?>
					</a>
			</div>
		</div>

		<div class="row bg-img" id="rentyour">
			<div class="section font-white">
				<div class="col-md-14 text-center">
					<h2 class="font-lg font-bold ">Sekilas Lentera Kasih</h2><br>
					<div class="col-md-6">
						<p class="font-md font-medium">Paguyuban Lentera Kasih, yang berlokasi di Jl. Raden Intan no 14 Malang, merupakan sebuah komunitas yang peduli terhadap penyandang disabilitas, yang memiliki anggota sebanyak 187 orang, para anggota tersebut adalah para orang tua penyandang disabilitas. Dalam komunitas ini, terpancar semangat juang yang tinggi, di mana keterbatasan bukanlah penghalang untuk meraih prestasi.</p>
					</div>
					<div class="col-md-6">
						<p class="font-md font-medium">Meskipun menghadapi perlakuan diskriminatif dan pandangan sebelah mata dari orang lain, para penyandang disabilitas di paguyuban ini menjalani hidup dengan kesabaran, menerima kenyataan, dan menjadikan keterbatasan sebagai sumber kekuatan. Mereka juga tetap optimis dan bahagia dalam menjalani hidup mereka, mampu tersenyum meskipun dihadapkan pada tantangan yang tidak mudah.</p>
						
					</div>
					<br>
					<br>
				</div>
			</div>
		</div>

		<div class="container-fluid" id="subscribe">
			<div class="section section-p">
				<div class="section-c">
					<h1><strong>They Are NOT Less They Are Just Diffirent</strong></h1>
				</div>
				<div class="row row-w">
					<!-- <div class="col-md-3 col-ce">
						<img class="img-partner" src="<?php echo base_url('assets/front/images/mandirisyariah.jpg'); ?>">
						<h6 class="font-bold">Mandiri Syariah</h6>
					</div>
					<div class="col-md-3 col-ce">
						<img class="img-partner" src="<?php echo base_url('assets/front/images/muammalat.png'); ?>">
						<h6 class="font-bold">Muamalat</h6>
					</div>
					<div class="col-md-3 col-ce">
						<img class="img-partner" src="<?php echo base_url('assets/front/images/mandiri.jpg'); ?>">
						<h6 class="font-bold">Mandiri</h6>
					</div>
					<div class="col-md-3 col-ce">
						<img class="img-partner" src="<?php echo base_url('assets/front/images/bca.jpg'); ?>">
						<h6 class="font-bold">BCA</h6>
					</div> -->
				</div>
			</div>
		</div>

		<?php $this->load->view('layout/footer'); ?>

	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<?php $this->load->view('layout/js'); ?>

</body>

</html>