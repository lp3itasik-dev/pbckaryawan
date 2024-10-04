<html>
<head>
	<title>LP3I Tasikmalaya - Cetak</title>
	<link rel="icon" href="<?= base_url() ?>template/global_assets/images/poltek.png" type="image/x-icon">
	<link href="<?= base_url() ?>template/global_assets/css/laporan/style.css" rel="stylesheet" type="text/css">
	<?php $this->load->view('template/layout_2/link.php')?>
	<style>
		body{
			font-family:"Arial";
			font-size:28px;
			line-height:2.0;
		}
		.pl-6{
			padding-left:7px;
		}
		.card-body{
		    margin-left:100px;
			margin-right:100px;
		}
		
	</style>
</head>
<?php
	function tanggal($tanggal){
		switch (date('m',strtotime($tanggal))) {
		  case 1:
			$tanggal=date('d',strtotime($tanggal))." Januari ".date('Y',strtotime($tanggal));
			break;
		  case 2:
			$tanggal=date('d',strtotime($tanggal))." Februari ".date('Y',strtotime($tanggal));
			break;
		  case 3:
			$tanggal=date('d',strtotime($tanggal))." Maret ".date('Y',strtotime($tanggal));
			break;
		  case 4:
			$tanggal=date('d',strtotime($tanggal))." April ".date('Y',strtotime($tanggal));
			break;
		  case 5:
			$tanggal=date('d',strtotime($tanggal))." Mei ".date('Y',strtotime($tanggal));
			break;
		  case 6:
			$tanggal=date('d',strtotime($tanggal))." Juni ".date('Y',strtotime($tanggal));
			break;
		  case 7:
			$tanggal=date('d',strtotime($tanggal))." Juli ".date('Y',strtotime($tanggal));
			break;
		  case 8:
			$tanggal=date('d',strtotime($tanggal))." Agustus ".date('Y',strtotime($tanggal));
			break;
		  case 9:
			$tanggal=date('d',strtotime($tanggal))." September ".date('Y',strtotime($tanggal));
			break;
		  case 10:
			$tanggal=date('d',strtotime($tanggal))." Oktober ".date('Y',strtotime($tanggal));
			break;
		  case 11:
			$tanggal=date('d',strtotime($tanggal))." Nopember ".date('Y',strtotime($tanggal));
			break;
		  case 12:
			$tanggal=date('d',strtotime($tanggal))." Desember ".date('Y',strtotime($tanggal));
			break;
		}
		return $tanggal;
	}
	foreach ($read as $r) {}
?>
<body style="background-color: #fff">
	<div class="mx-auto">
		<div class="">
			<div class="card-header p-0">
				<img src="<?= base_url() ?>template/global_assets/images/head.jpg" class="col-12 p-0" style="z-index: 1;position: inherit;">
				<div class="text-center" style="margin-top:-130px;font-size:30px;font-weight:bold;">
					<b>
						LETTER OF COMMITMENT (LOC)<br>
						AKREDITASI PRODI<br>
						POLITEKNIK LP3I KAMPUS TASIKMALAYA
					</b>
				</div>
			</div><br><br>
			<div class="card-body card-body-1 p-1 mt-2 px-5">
				<div class="form-group row m-0">
					<label class="col-12 pl-6">Saya yang bertanda tangan dibawah ini :</label>
					<label class="col-4 pl-6 pr-1 m-0">Nama <span class="float-right">:</span></label>
					<label class="col-8 pl-1 m-0">
						<?= $r->nama ?>
					</label>

					<label class="col-4 pl-6 pr-1 m-0">Jabatan <span class="float-right">:</span></label>
					<label class="col-8 pl-1 m-0">
						<?= $r->jabatan ?>
					</label>

					<label class="col-4 pl-6 pr-1 m-0">NIK/NIDN <span class="float-right">:</span></label>
					<label class="col-8 pl-1 m-0">
						<?= $r->nik ?>
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
					<label class="col-lg-11 col-10" style="margin-left: 865px;">Mengetahui,</label>
					<div class="col-6 m-auto text-center">
						<img src="data:<?= $r->ttd ?>" height="200px" style="margin-bottom:-50px;"><br>
						<label class="col-12 p-1 text-center" id="namattd">
							<u><b> <?= $r->nama ?> </b><br></u>
							<i>Yang menyatakan</i>
						</label>
					</div>
					<label class="col-6 p-1 text-center" style="margin-top:150px">
						<u><b>H. Rudi Kurniawan, S.T., M.M.</b></u><br>
						<i>Kepala Kampus</i>
					</label>
				</div>
			</div>
			<div style="margin-top: 25px;">
			    <img src="<?= base_url() ?>template/global_assets/images/foot1.jpg" class="col-12 p-0 mb-2 mt-5">
			</div>
		
		</div>
  </div>
</body>
<script>
    window.print();
</script>
</html>
