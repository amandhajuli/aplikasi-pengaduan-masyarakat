<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Agency - Start Bootstrap Theme</title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url('assets/template_landing_page') ?>/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				Desa Sarimukti
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profil">Profil</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cara">Cara Pengaduan</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#bantuan">Bantuan</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#kontak">Hubungi kami</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container">
			<div class="masthead-subheading">Selamat Datang di Website</div>
			<div class="masthead-heading text-uppercase">Desa Sarimukti</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('auth/login') ?>">login</a>
			<!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?= base_url('auth/login') ?>">Daftar</a> -->
		</div>
	</header>
	<!-- cara melapor -->
	<section class="page-section" id="cara">
		<div class="container">
			<h3>Cara Pengaduan</h3>
			<hr />
			<br>
			<ol>
				<li>
					<p>Klik menu &quot;<a href="auth/login">Login</a>&quot; untuk masuk</p>
				</li>
				<li>
					<p>Jika belum memiliki akun klik <a href="auth/daftar">daftar</a></p>
				</li>
				<li>
					<p>
						setelah masuk ke dashboard kelik tambah pengaduan
					</p>
				</li>
				<li>
					<p>Perhatikan beberapa hal di bawah ini :
						<br>- Semua kotak yang ada wajib diisi.
						<br>- Pastikan informasi yang diberikan sedapat mungkin memenuhi unsur 4W 1H.
					</p>
				</li>
				<li>
					<p>Setelah selesai mengisi, silakan klik tombol &quot;Kirim Pengaduan&quot;
						untuk melanjutkan proses pelaporan Anda.
					</p>
				</li>
				<li>
					<p>
						Untuk Bantuan mengenai cara melaporkan pengaduan, bisa dilihat di menu <strong><a
								href="#bantuan">Bantuan</a></strong>
						yang telah tersedia di aplikasi.
					</p>
				</li>
			</ol>
		</div>
	</section>
	<!-- About-->
	<section class="page-section" id="bantuan">
		<div class="container">
			<h3>Bantuan</h3>
			<hr />

			<p>Anda dapat menyampaikan pengaduan Anda melalui tiga cara:</p>
			<p><strong>1. Secara Online</strong></p>
			<ul>
				<li>
					Login terlebih dahulu atau daftar jika belum memiliki akun
				</li>
				<li>
					pilih tambah pengaduan di menu dan isi pengaduan anda
				</li>
				<li>
					Bila ada data atau dokumen pelengkap yang ingin
					disampaikan langsung, dapat menghubungi
					<strong><a href="#kontak">Bagian Pengaduan Masyarakat</a></strong>
				</li>
			</ul>
			<p>&nbsp;</p>
			<p>
				<strong>2. Melalui Surat</strong>
			</p>
			<ul>
				<li>
					Kirimkan surat pengaduan Anda ke alamat
					<strong><a href="#kontak">ini</a></strong>
				</li>
			</ul>
			<p>&nbsp;</p>
			<p>
				<strong>3. Datang Langsung</strong>
			</p>
			<ul>
				<li>
					Silahkan datang langsung ke alamat
					<strong><a href="#kontak">Bagian Hubungan Masyarakat</a></strong>
				</li>
			</ul>
		</div>
	</section>
	<!-- Contact-->
	<section class="page-section" id="kontak" style="">
		<div class="container">
			<div class="text-center">
				<h2 class="section-heading text-uppercase">Hubungi kami</h2>
			</div>
			<div class="col-md-6">
                <hr>
				<h4>Kantor</h4>
				<p>Jalan Raya Cidadap</p>
				<p>Karangnunggal, Tasikmalaya Jawa Barat 46186</p>
				<hr>
			</div>
			<div class="col-md-6">
				<h4>Contact Info:</h4>
				<p>031 3095331</p>
				<p>http://sarimukti.sideka.id/id</p>
				<p>desa@sarimukti.com</p>
				<p>&nbsp;</p>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="footer py-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 text-lg-left">Copyright © UKK RPL 2020 Created by <a href="https://andi.dherpl.site">Andi</a> </div>
				<div class="col-lg-4 my-3 my-lg-0">
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a
						class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a
						class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<div class="col-lg-4 text-lg-right">
                Source Code From <a href="https://github.com/andidev30/aplikasi-pengaduan-masyarakat">github andidev30</a>
                </div>
			</div>
		</div>
	</footer>


	<!-- Bootstrap core JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!-- Contact form JS-->
	<script src="<?= base_url('assets/template_landing_page') ?>/assets/mail/jqBootstrapValidation.js"></script>
	<script src="<?= base_url('assets/template_landing_page') ?>/assets/mail/contact_me.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url('assets/template_landing_page') ?>/js/scripts.js"></script>
</body>

</html>
