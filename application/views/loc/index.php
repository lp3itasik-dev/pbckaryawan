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
			font-family:"Arial";
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
				padding-right:80px!important;
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
				<form action="<?= base_url() ?>Loc/Add/" method="POST" class="h5">
				<div class="row">
					<div class="col-xl-12">

						<!-- Traffic sources -->
						<div class="card mb-0 p-0">
							<div class="card-header p-0">
								<img src="<?= base_url() ?>template/global_assets/images/head.jpg" class="col-12 p-0" style="z-index: 1;position: inherit;">
								<div class="text-center headtext">
									<b>
										LETTER OF COMMITMENT (LOC)<br>
										AKREDITASI PRODI<br>
										POLITEKNIK LP3I KAMPUS TASIKMALAYA
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

										<label class="col-3">NIK/NIDN <span class="float-right">:</span></label>
										<label class="col-8">
											<input type="text" name="nik" class="form-control">
										</label>

										<label class="col-12 p-1" style="text-align: justify;">
											Dengan ini saya menyatakan bahwa saya <b>BERSEDIA</b> dan <b>SIAP</b> untuk memberikan andil dan konstribusi maksimal
											untuk mendukung proses <b>Akreditasi Program Studi Manajemen Pemasaran dan Manajemen Keuangan Perbankan.</b>
											Adapun peran dan andil yang dapat saya laksanakan adalah sebagai berikut :
										</label>
										<label class="col-12 p-1 mb-0">
											<ol class="mb-0">
												<li>Memberikan dokumen dan data-data yang diperlukan untuk keperluan Akreditasi</li>
												<li>Memberikan masukan dan saran untuk kelancaran proses Akreditasi</li>
												<li>Membantu proses Visitasi, dari mulai persiapan sampai dengan selesainya proses Akreditasi</li>
												<li>Mendukung dan membantu segala jenis persiapan dan kebutuhan proses Akreditasi</li>
											</ol>
										</label>
										<label class="col-12 p-1" style="text-align: justify;">
											Demikian <i>Letter of Commitment (LOC)</i> ini saya buat atas dasar keikhlasan hati dengan menjunjung nilai luhur lembaga dan akan dilaksanakan dengan penuh rasa tanggung jawab.
										</label>
										<label class="col-4"><b>POLITEKNIK LP3I</b></label>
										<label class="col-8"></label>
										<label class="col-4"><b>KAMPUS TASIKMALAYA</b></label>
										<label class="col-8"></label>
										<label class="col-lg-11 col-10" style="margin-left: 650px;"><b>Mengetahui,</b></label>
										<div class="col-lg-6 col-12 m-auto">
											<div id="content">
												<div id="signatureparent">
													<div id="signature"></div></div>
													<textarea id="output" class="d-none" name="signature"></textarea>
											</div>
											<label class="col-12 p-1 text-center" id="namattd">
												<b>(Yang Menyatakan)</b>
											</label>
										</div>
										<label class="col-lg-6 col-12 p-1 text-center" style="margin-top:200px;">
											<u><b>H. Rudi Kurniawan, S.T., M.M.</b></u><br>
											Kepala Kampus 
										</label>
									</div>
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
