<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
		integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link href="<?= base_url('frontend-test/assets/fonts/') ?>" rel="stylesheet">
	<title>BIT IND · Bootstrap</title>


	<style>
		/* .navbar {
            font-family: 'Montserrat', sans-serif;
        } */
		@font-face {
			font-family: "MontserratBlack";
			src: url("<?= base_url('frontend-test/assets/fonts/montserrat/Montserrat-Black.otf') ?>") format("opentype")
		}

		@font-face {
			font-family: "MontserratBold";
			src:
				url("<?= base_url('frontend-test/assets/fonts/montserrat/Montserrat-Bold.otf') ?>") format("opentype")
		}

		@font-face {
			font-family: "MontserratHairline";
			src:
				url("<?= base_url('frontend-test/assets/fonts/montserrat/Montserrat-Hairline.otf') ?>") format("opentype")
		}

		@font-face {
			font-family: "MontserratLight";
			src:
				url("<?= base_url('frontend-test/assets/fonts/montserrat/Montserrat-Light.otf') ?>") format("opentype")
		}

		@font-face {
			font-family: "MontserratRegular";
			src:
				url("<?= base_url('frontend-test/assets/fonts/montserrat/Montserrat-Regular.otf') ?>") format("opentype")
		}



		body {
			font-family: 'MontserratLight';
		}

		h1.head-banner1 {
			font-family: 'MontserratBold';
		}

		h1.head-banner2 {
			font-family: 'MontserratBold';
		}

		h1.head-card {
			font-family: 'MontserratBold';
			font-size: 2em;
		}

		h1.head-mini-card {
			font-family: 'MontserratBold';
			font-size: 1em;
			text-align: center;
		}

		p {
			font-family: 'MontserratLight';
		}

		p.body-mini-card {
			font-family: 'MontserratLight';
			font-size: 0.8em;
			text-align: center;
		}

		p.laravel-cheklist {
			font-size: 0.9em;
		}

		.hide-li-dot ul li {
			font-family: 'MontserratRegular';
			list-style-type: none;
			padding: 0px;
			margin: 0px;
			text-decoration: none;
		}

		.hide-li-dot ul li a {
			font-family: 'MontserratRegular';
			color: rgb(153, 153, 153);
		}

		.footer__contact a,
		.footer__contact,
		.footer__address {
			color: rgb(153, 153, 153);

		}

		.footer__column-title {
			font-family: 'MontserratRegular';
			text-transform: uppercase;
			font-weight: bold;
			font-size: 1em;
			color: rgb(140, 140, 140);
		}

		.footer-copyright {
			font-size: 0.7em;
			color: rgb(153, 153, 153);

		}

		.borderless td,
		.borderless th {
			border: none;
		}

		.navbar.nav.nav-item.nav-link {
			font-family: 'MontserratLight';
		}

		.card-text {
			color: #0F174A;
		}

		.logo {
			size: 15rem;
		}

		/* .navbar-nav>li {
            padding-left: 15px;
            padding-right: 15px;
        } */

		/* nav div ul li a.text-color {
            color: whitesmoke;
        } */

		/* .navbar.scrolled {
            -webkit-box-shadow: 0 8px 6px -6px #888888;
            -moz-box-shadow: 0 8px 6px -6px #888888;
            box-shadow: 0 8px 6px -6px #888888;
            background-color: #fff !important;
            color: black !important;
        transition: background-color 200ms linear;
        }*/
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		.btn-circle {
			/* width: 50px;
            height: 50px; */
			/* padding: 6px 0px; */
			border-radius: 25px;
			/* font-size: 12px; */
			text-align: center;
			padding: 9px 20px;
		}

		.text-divider {
			margin: 2em 0;
			line-height: 0;
			text-align: center;
		}

		.text-divider span {
			background-color: #f5f5f5;
			padding: 1em;
		}

		.text-divider:before {
			content: " ";
			display: block;
			border-top: 1px solid #e3e3e3;
			border-bottom: 1px solid #f7f7f7;
		}

		.list-group-item {
			background-color: transparent;
		}

		/* .card-columns {
            @include media-breakpoint-only(lg) {
                column-count: 4;
            }

            @include media-breakpoint-only(xl) {
                column-count: 5;
            }
        } */

		.bg-primary-1 {
			background-color: #008fee;
		}

		.bg-primary-2 {
			background-color: #007fde;
		}

		@media (min-width: 34em) {
			.card-columns {
				-webkit-column-count: 1;
				-moz-column-count: 1;
				column-count: 1;
			}
		}

		@media (min-width: 48em) {
			.card-columns {
				-webkit-column-count: 2;
				-moz-column-count: 2;
				column-count: 2;
			}
		}

		@media (min-width: 62em) {
			.card-columns {
				-webkit-column-count: 3;
				-moz-column-count: 3;
				column-count: 3;
			}
		}

		@media (min-width: 75em) {
			.card-columns {
				-webkit-column-count: 4;
				-moz-column-count: 4;
				column-count: 4;
			}
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

	</style>

</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-white border-bottom border-top">
			<div class="container">
				<a class="navbar-brand" width="30" height="30" aria-label="Logo Niagahoster"
					href="https://www.niagahoster.co.id/">
					<img class=" img-fluid d-none d-md-block"
						src="<?= base_url('frontend-test/assets/svg/') ?>n-logo.svg" alt="logo">
					<!-- <h1 class="logo">NIAGAHOSTER</h1> -->
					<img class="logo img-fluid d-block d-md-none"
						src="<?= base_url('frontend-test/assets/svg/') ?>n-logo.svg" alt="logo">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Hosting <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Domain</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Server</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Website</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Afiliasi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Promo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pembayaran</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Review</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Kontak</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- <nav class="navbar navbar-light navbar-expand-lg bg-dark border-bottom border-top">
            <div class="container">
                <a class="navbar-brand" aria-label="Logo Niagahoster" href="https://www.niagahoster.co.id/">
                    <img class="img-fluid d-none d-md-block" src="https://www.niagahoster.co.id/assets/images/2019/navbar/nh-logo.svg" alt="logo">
                    <img class="img-fluid d-block d-md-none" src="https://www.niagahoster.co.id/assets/images/2019/navbar/n-logo.svg" alt="logo">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Hosting <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Domain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Server</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Afiliasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
	</div>

	<div class="container-fluid  border-bottom pb-5 mt-4">
		<div class="container">
			<div class="row pt-5">
				<div class="col-lg">
					<h1 class="head-banner1">PHP Hosting</h1>
					<h2 class="font-weight-normal">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
					<br>

					<p><i class="text-success fas fa-check-circle"></i> Solusi PHP untuk performa query yang lebih cepat
					</p>
					<p><i class="text-success fas fa-check-circle"></i> Konsumsi memori yang lebih rendah.
					</p>
					<p><i class="text-success fas fa-check-circle"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHp 5.6, PHP
						7
					</p>
					<p><i class="text-success fas fa-check-circle"></i> Fitur enkripsi IonCube dan Zend Guard Loaders
					</p>
				</div>
				<div class="col-lg">
					<img src="<?= base_url('frontend-test/assets/svg/Banner_hosting-01.svg') ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="card-group">
			<div class="card border-0 bg-transparent ">
				<div class="card-body d-flex justify-content-center">
					<img src="<?= base_url('frontend-test/assets/svg/Hosting_zendguard.svg') ?>" alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<p class="text-center">PHP Zend Guard Loader</p>
				</div>
			</div>
			<div class="card border-0">
				<div class="card-body d-flex justify-content-center">
					<img src="<?= base_url('frontend-test/assets/svg/Hosting_composer.svg') ?>" alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<p class="text-center">PHP Composer</p>
				</div>
			</div>
			<div class="card border-0">
				<div class="card-body d-flex justify-content-center">
					<img src="<?= base_url('frontend-test/assets/svg/Hosting_ioncube.svg') ?>" alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<p class="text-center">PHP ionCube Loader</p>
				</div>
			</div>
		</div>


		<div class="col-lg p-5">
			<div class="">
				<h1 class="head-banner2 text-center">Paket Hosting Singapura yang Tepat</h1>
				<h3 class="text-center">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
			</div>
		</div>

	</div>

	<div class="container">
		<div class="">
			<div class="card-columns">
				<?php 
				foreach ($paket as $row) :?>
				<?php if ($row['best'] == true) : ?>
<div class="card  border-primary p-0 mx-auto" style="word-wrap:normal;">
					<ul class="list-group list-group-flush text-center">
						<div class="card-header p-0 bg-primary-1 text-white">
							<li class="list-group-item text-wrap">
								<h1 class="head-card"><?= $row['nama_paket']?></h1>
							</li>
							<li class="list-group-item inline">
								<p><del>Rp <?= $row['harga_lama']?></del></p>
								Rp<h1><?= $row['harga_paket'] ?></h1>/bln
							</li>
							<li class="list-group-item bg-primary-2"><b><?= $row['pengguna_paket'] ?></b> Pengguna Terdaftar</li>
						</div>
						<div class="card-body ">
							<li class="list-group-item justify-content-center">
								<p>
									<b>0.5X RESOURCE POWER</b>
									<b>500 MB</b> Disk Space
									<b>Unlimited</b> Bandwidth
									<b>Unlimited</b> Databases
									<b>1</b> Domain
									<b>Instant</b> Backup
									<b>Unlimited SSL</b> Gratis Selamanya
								</p>
								<button type="button" class="btn btn-primary btn-circle"><b>Pilih Sekarang</b></button>
							</li>
						</div>
					</ul>
				</div>
				<?php else: ?>
				<div class="card mx-auto">
					<ul class="list-group list-group-flush text-center">
						<li class="list-group-item">
							<h1 class="head-card"><?= $row['nama_paket']?></h1>
						</li>
						<li class=" list-group-item">
							<p><del>Rp <?= $row['harga_lama']?></del></p>
							Rp<h1><?= $row['harga_paket'] ?></h1>/bln
						</li>
						<li class="list-group-item"><b><?= $row['pengguna_paket'] ?></b> Pengguna Terdaftar</li>
						<div class="card-body">
							<li class="list-group-item justify-content-center">
								<p>
									<b>0.5X RESOURCE POWER</b>
									<b>500 MB</b> Disk Space
									<b>Unlimited</b> Bandwidth
									<b>Unlimited</b> Databases
									<b>1</b> Domain
									<b>Instant</b> Backup
									<b>Unlimited SSL</b> Gratis Selamanya
								</p>
								<button type="button" class="btn btn-outline-dark btn-circle"><b>Pilih
										Sekarang</b></button>
							</li>
						</div>
					</ul>
				</div>
				<?php endif ?>
				<?php endforeach ?>
				
				
			</div>
		</div>
	</div>


	<div class="container">
		<div class="col-lg-12 p-5 text-center">
			<h2>Powerful dengan Limit PHP yang Lebih Besar</h2>
		</div>
		<div class="row">
			<div class="col-lg">
				<table class="table table-lg table-striped border text-center">
					<tbody>
						<tr>
							<td><i class="text-success fas fa-check-circle"></i></td>
							<td>
								max execution time 300s
							</td>
						</tr>
						<tr>
							<td><i class="text-success fas fa-check-circle"></i></td>
							<td>
								max execution time 300s
							</td>
						</tr>
						<tr>
							<td><i class="text-success fas fa-check-circle"></i></td>
							<td>
								php memory limit 1024 MB
							</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="col-lg">
				<table class="table table-lg table-striped border text-center">
					<tbody>
						<tr>
							<td><i class="text-success fas fa-check-circle"></i></td>
							<td>
								post max size 128 MB
							</td>
						</tr>
						<tr>
							<td><i class="text-success fas fa-check-circle"></i></td>
							<td>upload max filesize 128 MB
							</td>
						</tr>
						<tr>
							<td><i class="text-success fas fa-check-circle"></i></td>
							<td>max input vars 2500
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-lg-12 p-5 text-center">
			<h2>Semua Paket Hosting Sudah Termasuk</h2>
		</div>
		<div class="card-group">
			<div class="card border-0 bg-transparent ">
				<div class="card-body d-flex justify-content-center">
					<img style="max-width:60px" src="<?= base_url('frontend-test/assets/svg/Hosting_PHP.svg') ?>"
						alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<h1 class="head-mini-card ">PHP Semua Versi</h1>
					<p class="body-mini-card">
						Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!
					</p>
				</div>
			</div>
			<div class="card border-0">
				<div class="card-body d-flex justify-content-center">
					<img style="max-width:60px" src="<?= base_url('frontend-test/assets/svg/Hosting_My_SQL.svg') ?>"
						alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<h1 class="head-mini-card">MySQL Versi 5.6</h1>
					<p class="body-mini-card">
						Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur.
					</p>
				</div>
			</div>
			<div class="card border-0">
				<div class="card-body d-flex justify-content-center">
					<img style="max-width:60px" src="<?= base_url('frontend-test/assets/svg/Hosting_CPanel.svg') ?>"
						alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<h1 class="head-mini-card">Panel Hosting cPanel</h1>
					<p class="body-mini-card">
						Kelola website dengan panel canggih yang familiar di hati Anda.
					</p>
				</div>
			</div>

		</div>
		<div class="card-group">
			<div class="card border-0 bg-transparent ">
				<div class="card-body d-flex justify-content-center">
					<img style="max-width:60px"
						src="<?= base_url('frontend-test/assets/svg/Hosting_garansi_uptime.svg') ?>" alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<h1 class="head-mini-card ">Garansi Uptime 99.9%</h1>
					<p class="body-mini-card">
						Data center yang mendukung kelangsungan website Anda 24/7.
					</p>
				</div>
			</div>
			<div class="card border-0">
				<div class="card-body d-flex justify-content-center">
					<img style="max-width:60px" src="<?= base_url('frontend-test/assets/svg/Hosting_InnoDB.svg') ?>"
						alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<h1 class="head-mini-card">Database InnoDB unlimited</h1>
					<p class="body-mini-card">
						Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.
					</p>
				</div>
			</div>
			<div class="card border-0">
				<div class="card-body d-flex justify-content-center">
					<img style="max-width:60px"
						src="<?= base_url('frontend-test/assets/svg/Hosting_My_SQL_remote.svg') ?>" alt="">
				</div>
				<div class="card-footer bg-transparent border-0">
					<h1 class="head-mini-card">Wildcard Remote MySQL</h1>
					<p class="body-mini-card">
						Mendukung s/d 25 max_user_connections dan 100 max_connections.
					</p>
				</div>
			</div>

		</div>
	</div>


	<div class="container-fluid border-bottom">
		<div class="container">
			<div class="col-lg-12 p-5 text-center">
				<h2>Mendukung Penuh Framework Laravel</h2>
			</div>

			<div class="row">
				<div class="col-lg">
					<p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP
						hosting murah kami
						mendukung penuh framework favorit Anda</p>
					<br>

					<p class="laravel-cheklist"><i class="text-success fas fa-check-circle"></i> Install Laravel <b>1
							klik</b> dengan Softaculous
						Installer.
					</p>
					<p class="laravel-cheklist"><i class="text-success fas fa-check-circle"></i> Mendukung ekstensi
						<b>PHP
							MCrypt, phar, mbstring,
							json,</b> dan<b> fileinfo.</b>
					</p>
					<p class="laravel-cheklist"><i class="text-success fas fa-check-circle"></i> Tersedia
						<b>Composer</b>
						dan <b>SSH</b> untuk
						menginstall packages pilihan Anda
					</p>
					<small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
					<br><br>
					<button class="btn btn-primary btn-circle"><b>Pilih Hosting Anda</b></button>
				</div>
				<div class="col-lg">
					<img src="<?= base_url('frontend-test/assets/svg/Banner_laravel_hosting.svg') ?>" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="container text-center">
		<div class="col-lg-12 p-5 text-center">
			<h2>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h2>
		</div>
		<table class="table table-sm borderless">
			<tbody>

				<tr>
					<td class="text-left">
						IcePHP<br>
						apc<br>
						apcu<br>
						apm<br>
						ares<br>
						bcmath<br>
						bcompiler<br>
						big_int<br>
						bitset<br>
						bloomy<br>
						bz2_filter<br>
						clamav<br>
						coin_acceptor<br>
						crack<br>
						dba<br>
					</td>
					<td class="text-left">
						IcePHP<br>
						apc<br>
						apcu<br>
						apm<br>
						ares<br>
						bcmath<br>
						bcompiler<br>
						big_int<br>
						bitset<br>
						bloomy<br>
						bz2_filter<br>
						clamav<br>
						coin_acceptor<br>
						crack<br>
						dba<br>
					</td>
					<td class="text-left">
						IcePHP<br>
						apc<br>
						apcu<br>
						apm<br>
						ares<br>
						bcmath<br>
						bcompiler<br>
						big_int<br>
						bitset<br>
						bloomy<br>
						bz2_filter<br>
						clamav<br>
						coin_acceptor<br>
						crack<br>
						dba<br>
					</td>
					<td class="text-left">
						IcePHP<br>
						apc<br>
						apcu<br>
						apm<br>
						ares<br>
						bcmath<br>
						bcompiler<br>
						big_int<br>
						bitset<br>
						bloomy<br>
						bz2_filter<br>
						clamav<br>
						coin_acceptor<br>
						crack<br>
						dba<br>
					</td>
				</tr>

			</tbody>
		</table>
		<button type="button" class="btn btn-outline-dark btn-circle"><b>Selengkapnya</b></button>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg pb-5">
				<h2>Linux Hosting yang Stabil dengan Teknologi LVE</h2><br>
				<p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE
						CloudLinux</b> untuk stabilitas server Anda. DIlengkapi dengan <b>SSD</b> dengan kecepatan
					<b>MySQL</b> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b>
					secutiry <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.</p>
				<br>


				<button class="btn btn-primary btn-circle"><b>Pilih Hosting Anda</b></button>
			</div>
			<div class="col-lg d-flex align-items-end">
				<img src="<?= base_url('frontend-test/assets/images/Image_support.png') ?>" alt="">
			</div>
		</div>
	</div>

	<div class="container-fluid bg-light ">
		<div class="container p-3">
			<p>Bagikan jika Anda menyukai halaman ini.</p>
		</div>
	</div>
	<div class="container-fluid bg-primary text-white" style="height: 150px;">
		<div class="container p-3">
			<p class="d-flex justify-content-center align-items-center">Bagikan jika Anda menyukai halaman ini.</p>
		</div>
	</div>
	<div class="container-fluid bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-3">
					<h3 class="footer__column-title">Hubungi Kami</h3>
					<p class="footer__contact"><a href="tel:+62742885822">0274-2885822</a><br><a
							href="https://api.whatsapp.com/send?phone=62895395186038">0895395186038</a><br>Senin -
						Minggu<br>24
						Jam Non Stop</p>
					<p class="footer__address">Jl. Palagan Tentara Pelajar<br>No 81 Jongkang, Sariharjo,<br>Ngaglik,
						Sleman<br>Daerah Istimewa Yogyakarta<br>55581</p>
				</div>
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3 mt-5 mt-sm-0">
					<h3 class="footer__column-title">Layanan</h3>
					<ul class="-list">
						<li><a class="" href="https://www.niagahoster.co.id/domain-murah">Domain</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/hosting-indonesia">Shared
								Hosting</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/cloud-hosting">Cloud Hosting</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/cloud-vps-hosting">Cloud VPS
								Hosting</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/promosi-transfer">Transfer
								Hosting</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/membuat-blog-weebly">Web
								Builder</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/ssl-murah">Keamanan
								SSL/HTTPS</a>
						</li>
						<li><a class="" href="https://www.niagaweb.co.id/">Jasa Pembuatan Website</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/afiliasi">Program Afiliasi</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/whois">Whois</a></li>
						<li><a class="" href="https://status.niagahoster.co.id/" target="__blank">Niagahoster
								Status</a></li>
					</ul>
				</div>
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h3 class="footer__column-title">Service Hosting</h3>
					<ul class="-list">
						<li><a class="" href="https://www.niagahoster.co.id/hosting-murah">Hosting Murah</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/hosting-indonesia">Hosting
								Indonesia</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/hosting-singapore">Hosting
								Singapore
								SG</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/wordpress-hosting">Hosting
								Wordpress</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/email-hosting">Email Hosting</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/reseller-hosting">Reseller
								Hosting</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/web-hosting-unlimited">Web
								Hosting
								Unlimited</a></li>
					</ul>
				</div>
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h3 class="footer__column-title">Kenapa Pilih Niagahoster?</h3>
					<ul class="-list">
						<li><a class="" href="https://www.niagahoster.co.id/hosting-terbaik">Hosting
								Terbaik</a>
						</li>
						<li><a class="" href="https://www.niagahoster.co.id/datacenter-hosting">Datacenter
								Hosting
								Terbaik</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/hosting-indonesia#hosting-price">Domain
								Gratis</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/domain-gratis">Bagi-bagi Domain
								Gratis</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/hosting-gratis">Bagi-bagi
								Hosting
								Gratis</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/review">Review Pelanggan</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3">
					<h3 class="footer__column-title">Tutorial</h3>
					<ul class="-list">
						<li><a class="" href="https://www.niagahoster.co.id/ebook">Ebook Gratis</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/kb">Knowledgebase</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/blog">Blog</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/pembayaran">Cara Pembayaran</a>
						</li>
						<li><a class="" href="https://course.niagahoster.co.id">Niaga Course</a></li>
					</ul>
				</div>
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3 mt-5 mt-sm-0">
					<h3 class="footer__column-title">Tentang Kami</h3>
					<ul class="-list">
						<li><a class="" href="https://www.niagahoster.co.id/about-us">Tentang</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/promosi">Penawaran &amp; Promo
								Spesial</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/poin">Niagahoster Poin</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/karir">Karir</a></li>
						<li><a class="" href="https://www.niagahoster.co.id/kontak">Kontak Kami</a></li>
					</ul>
				</div>
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<h3 class="footer__column-title">Newsletter</h3>
					<form id="newsletter" class="footer__newsletter">
						<label for="newsletter-email" class="visuallyhidden">Berlangganan Email </label>
						<input id="newsletter-email" class="footer__newsletter-input" name="email" type="text"
							placeholder="youremail.gmail.com">
						<div class="footer__newsletter-btn-wrapper">
							<a id="newsletter-btn" href="javascript:void(0)"
								class="footer__newsletter-btn">Berlangganan</a>
						</div>
					</form>
				</div>
				<div class="col-12 hide-li-dot col-sm-6 col-lg-3 mt-5 mt-lg-0">
					<ul class="footer__social-icon-list">
						<li>
							<a class="footer__social-icon footer__social-icon--facebook" aria-label="Facebook"
								href="https://www.facebook.com/niagahoster">
								<i class="fab fa-facebook-f" alt="facebook"></i>
							</a>
						</li>
						<li>
							<a class="footer__social-icon  footer__social-icon--instagram" aria-label="Instagram"
								href="https://www.instagram.com/niagahoster.id">
								<i class="fab fa-instagram" alt="instagram"></i>
							</a>
						</li>
						<li>
							<a class="footer__social-icon footer__social-icon--linkedin" aria-label="Linkedin"
								href="https://www.linkedin.com/company/niagahoster">
								<i class="fab fa-linkedin-in" alt="linkedin"></i>
							</a>
						</li>
						<li>
							<a class="footer__social-icon footer__social-icon--twitter" aria-label="Twitter"
								href="https://twitter.com/niagahoster">
								<i class="fab fa-twitter" alt="twitter"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 hide-li-dot col-md-7">
					<p class="footer-copyright  text-center text-md-left">Copyright ©2020 Niagahoster | Hosting powered
						by
						PHP7, CloudLinux, CloudFlare, BitNinja and DC DCI-Indonesia. Cloud VPS Murah powered by Webuzo
						Softaculous, Intel SSD and cloud computing technology</p>
				</div>
				<div class="col-12 hide-li-dot col-md-5 mt-5 mt-md-0">
					<div class="footer__privacy-policy  text-center text-md-right">
						<a href="https://www.niagahoster.co.id/syarat-dan-ketentuan">Syarat dan Ketentuan</a>
						<span>|</span>
						<a href="https://www.niagahoster.co.id/kebijakan-privasi">Kebijakan Privasi</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	< </script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
			integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		</script>
</body>

</html>
