<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>LP3I Tasikmalaya - Dashboard</title>
	<?php $this->load->view('template/layout_2/link.php')?>
	<style>
	.form-control{
		border:2px solid #ddd;
		border-top-color:#ddd!important;
		border-radius: 5px;
		padding: 5px;
	}
	.form-control:not(.border-bottom-1):not(.border-bottom-2):not(.border-bottom-3):focus {
    border-color: #0a5387;
		border-top-color:#0a5387!important;
	}
	</style>
	<script src="<?= base_url() ?>template/global_assets/js/plugins/jSignature-master/libs/modernizr.js"></script>
	<style type="text/css">
		body{
			font-family:"Times New Roman";
			font-size:12px;
		}
		button{
			font-family:"Calibri";
		}
		#signatureparent {
			color:#0a5387;
			background-color:#fff;
			/*max-width:600px;*/
		}

		/*This is the div within which the signature canvas is fitted*/
		#signature {
			border:2px solid #ddd;
			border-radius: 10px;
			background-color:fff;
		}
		.jSignature{
			height: 200px!important;
			width: 100%!important;
		}
		/* Drawing the 'gripper' for touch-enabled devices */
		html.touch #scrollgrabber {
			float:right;
			width:4%;
			margin-right:2%;
			background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAFCAAAAACh79lDAAAAAXNSR0IArs4c6QAAABJJREFUCB1jmMmQxjCT4T/DfwAPLgOXlrt3IwAAAABJRU5ErkJggg==)
		}
		html.borderradius #scrollgrabber {
			border-radius: 1em;
		}
		.headtext {
			margin-top: -40px;
		}
		@media screen and (min-width: 992px) {
		  .headtext {
		    font-size:24px;
				margin-top: -100px;
		  }
			.card-body-1{
				padding-left:80px!important;
			}
			.card-body-2{
				padding-left:100px!important;
				margin-top:-100px!important;
			}
		}
	</style>
</head>

<body>

	<!-- Main navbar -->
	<?php $this->load->view('template/layout_2/navbar2.php')?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content container">

				<!-- Main charts -->
				<form action="<?= base_url() ?>Pbc/Input/" method="POST" class="h5">
				<div class="row">
					<div class="col-xl-12">

						<!-- Traffic sources -->
						<div class="card mb-0 p-0">
							<div class="card-header p-0">
								<img src="<?= base_url() ?>template/global_assets/images/head.jpg" class="col-12 p-0" style="z-index: 1;position: inherit;">
								<div class="text-center headtext">
									<b>
										SURAT PERNYATAAN<br>
										PBC (PERSONAL BUSSINES COMITMENT)
									</b>
								</div>
							</div>

								<div class="card-body card-body-1 p-1 mt-2">
									<div class="form-group row m-0">
										<label class="col-12">Saya yang bertanda tangan dibawah ini :</label>
										<label class="col-3">Nama <span class="float-right">:</span></label>
										<label class="col-8">
											<input type="text" name="nama" class="form-control" onkeyup="return namattd()">
										</label>

										<label class="col-3">Jabatan <span class="float-right">:</span></label>
										<label class="col-8">
											<input type="text" name="jabatan" class="form-control">
										</label>

										<label class="col-3">Cabang <span class="float-right">:</span></label>
										<label class="col-8">
											<input type="text" name="cabang" class="form-control">
										</label>

										<label class="col-12 p-1">
											Dengan ini saya menyatakan bahwa saya <b>BERSEDIA</b> dan <b>SIAP</b> untuk memberikan andil dan konstribusi maksimal
											untuk mensukseskan dan menembus target PMB tahun 2023/2024 sebnayak <b>250 Register</b> dan <b>Target Omset 3.050.000.000.</b>
											Adapun peran dan andil yang dapat saya laksanakan adalah sebagai berikut :
										</label>
										<label class="col-12 p-1 mb-0">
											<ol class="mb-0">
												<li>Target Registrasi mahasiswa Tingkat 1 (Satu) sebanyak 5 orang</li>
												<li>Posting Content tentang LP3I di akun Sosmed pribadi yang sudah disiapkan oleh TIM marketing 1 minggu sekali</li>
												<li>Semua karyawan wajib like, share dan comment setiap postingan di media social LP3I tasikmalaya</li>
												<li>Semua karyawan wajib me re-post content media social LP3I Tasikmalaya minimal 1 Minggu 2 kali Re-post Content LP3I Tasikmalaya</li>
												<li>Melakukan hunting aplikan prospek </li>
												<li>Membantu sebar brosur, poster & tools marketing lainnya</li>
												<li>Mensuport event-event cabang khususnya dalam rangka pencapaian target PMB 2023/2024</li>
												<li>Membantu marketing dalam kegiatan presentasi sekolah </li>
												<li>Memberikan Masukan-masukan dalam proses PMB 2023/2024</li>
												<li>Seluruh karyawan wajib memfollow, like dan subcribe akun social media (Facebook, Instagram, Tiktok, Youtube) LP3I dan mengajak minimal 5 anggota keluarganya</li>
												<li>Merekomendasikan 10 data calon aplikan (data bisa diambil dari tetangga, kerabat dekat, saudara atau relasi)</li>
											</ol>
										</label>
										<label class="col-12 p-1">
											Pernyataan ini saya tegaskan atas dasar keikhlasan hati dengan menjungjung nilai luhur lembaga.
											Oleh karena hal tersebut, saya SIAP menerima sanksi administratif (terlampir) jika kelak dapat
											menetap hal-hal tersebut di atas sesuai dengan ketentuan yang berlaku.<br>
											Demikian pernyataan ini saya sampaikan untuk dapat dimaklumi dengan penuh rasa tanggungjawab.
										</label>
										<label class="col-4">Dibuat di <span class="float-right">:</span></label>
										<label class="col-8"> Tasikmalaya</label>
										<label class="col-4">Tanggal <span class="float-right">:</span></label>
										<label class="col-8"> 30 Desember 2022</label>
										<label class="col-lg-11 col-10" style="margin-left: 715px;">Mengetahui,</label>
										<div class="col-lg-6 col-12 m-auto">
											<div id="content">
												<div id="signatureparent">
													<div id="signature"></div></div>
													<textarea id="output" class="d-none" name="signature"></textarea>
											</div>
											<label class="col-12 p-1 text-center" id="namattd">
												(Yang Menyatakan)
											</label>
										</div>
										<label class="col-lg-6 col-12 p-1 text-center" style="margin-top:200px">
											<u>H.Rudi Kurniawan, ST.MM</u><br>
											Kepala Kampus LP3I
										</label>
									</div>
								</div>
								<img src="<?= base_url() ?>template/global_assets/images/foot1.jpg" class="col-12 p-0 mb-2 mt-5">
						</div>
						<div class="card mb-0 p-0 mt-3">
							<div class="card-header p-0">
								<img src="<?= base_url() ?>template/global_assets/images/head.jpg" class="col-12 p-0" style="z-index: 1;position: inherit;">
							</div>
							<div class="card-body card-body-2 p-1 mt-2">
								<label class="col-12 p-1 m-0">
									<b>A.	Reward</b>
								</label>
								<label class="col-12 p-1">
									<ul class="pl-3">
										<li>
											Jika tercapai target 5 orang s.d akhir PMB, maka karyawan berhak mendapat :
											<ol class="pl-3">
												<li>Fee sebesar 500.000 dari biaya pendidikan yang dibayarkan per register (Aplikan Data Mentah atau Non Sekolah Binaan dan di maintenance sampai tutup PMB. Fee diberikan 50% setelah aplikan registrasi 30% dari harga deal dan 50% lagi setelah tutup PMB.</li>
												<li>Fee sebesar 250.000 Jika di maintenance langsung  oleh yang bersangkutan atau oleh tim presenter (Sekolah Binaan atau Non Binaan)</li>
												<li>Fee Sebesar Rp. 100.000 jika aplikan yang registrasi Keponakan atau Sepupu (Ada Potongan Relasi Keluarga), kecuali jika aplikan mendapatkan biaya pendidikan Rp 0, maka fee tersebut tidak berlaku.</li>
												<li>Tidak dapat Fee MGM jika Aplikan yang registrasi Anak Kandung dan Adik Kandung</li>
											</ol>
										</li>
									</ul>
								</label>
								<label class="col-12 p-1 m-0">
									<b>B.	Punishment </b>
								</label>
								<label class="col-12 p-1">
									<ul class="pl-3">
										<li>
											Jika karyawan sama sekali tidak menyumbang aplikan satu orang pun maka karyawan hanya mendapatkan Alokasi Dana PMB 2023/2024 sebesar 50% :<br>
											Keterangan :
											<ul class="pl-3">
												<li>Fee MGM Bisa dicairkan apabila regisrasi minimal 30% dari Harga Deal (Kecuali point reward no. 1 dicairkan pada saat tutup PMB 2023/2024)</li>
												<li>Pengembalian Fee MGM apabila aplikan DO dan meminta uang kembali termasuk di terima di PTN</li>
											</ul>
										</li>
									</ul>
								</label>
							</div>
							<img src="<?= base_url() ?>template/global_assets/images/foot1.jpg" class="col-12 p-0 mb-2 mt-5">
						</div>
						<button class="btn btn-lg btn-success mt-3 btn-block">SIMPAN</button>
						<!-- /traffic sources -->

					</div>
				</div>
				</form>
				<!-- /dashboard content -->
			</div>
			<!-- /content area -->

			<!-- Footer -->
			<?php $this->load->view('template/layout_2/footer.php')?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<script src="<?= base_url() ?>template/global_assets/js/plugins/jSignature-master/libs/jquery.js"></script>
	<script type="text/javascript">
	jQuery.noConflict()
	</script>
	<script src="<?= base_url() ?>template/global_assets/js/plugins/jSignature-master/libs/jSignature.min.noconflict.js"></script>

	<script>
	function namattd(){
		var nama = $('[name="nama"]').val();
		$("#namattd").html("( "+nama+" )");
	}
	(function($){

	$(document).ready(function() {

		var $sigdiv = $("#signature").jSignature({'UndoButton':true});

		document.getElementById("signature").onchange = function() {myFunction()};

		function myFunction() {
		var data = $sigdiv.jSignature('getData', 'image');

								// Storing in textarea
								$('#output').val(data);

								// Alter image source
								$('#sign_prev').attr('src',"data:"+data);
								$('#sign_prev').show();
		}
		$('#click').click(function(){
				// Get response of type image
				var data = $sigdiv.jSignature('getData', 'image');

				// Storing in textarea
				$('#output').val(data);

				// Alter image source
				$('#sign_prev').attr('src',"data:"+data);
				$('#sign_prev').show();
		});

	})

	})(jQuery)
	</script>
</body>
</html>
