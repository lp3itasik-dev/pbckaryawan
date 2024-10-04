<html>
<head>
	<title>LP3I Tasikmalaya - Cetak</title>
	<link rel="icon" href="<?= base_url() ?>template/global_assets/images/poltek.png" type="image/x-icon">
	<link href="<?= base_url() ?>template/global_assets/css/laporan/style.css" rel="stylesheet" type="text/css">
	<?php $this->load->view('template/layout_2/link.php')?>
	<style>
		body{
			font-family:"Times New Roman";
			font-size:14px;
		}
		.pl-6{
			padding-left:200px;
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
		<div class="bayangprint" style="width:950px;margin-top:20px">
			<div class="card-header p-0">
				<img src="<?= base_url() ?>template/global_assets/images/head.jpg" class="col-12 p-0" style="z-index: 1;position: inherit;">
				<div class="text-center" style="margin-top:-60px;font-size:16px">
					<b>
						SURAT PERNYATAAN<br>
						PBC (PERSONAL BUSSINES COMITMENT)
					</b>
				</div>
			</div>
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

					<label class="col-4 pl-6 pr-1 m-0">Cabang <span class="float-right">:</span></label>
					<label class="col-8 pl-1 m-0">
						<?= $r->cabang ?>
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
					<label class="col-2 pr-0">Dibuat di <span class="float-right">:</span></label>
					<label class="col-10 pl-1"> Tasikmalaya</label>
					<label class="col-2 pr-0">Tanggal <span class="float-right">:</span></label>
					<label class="col-10 pl-1"> 30 Desember 2022</label>
					<label class="col-lg-11 col-10" style="margin-left: 575px;">Mengetahui,</label>
					<div class="col-6 m-auto text-center">
						<img src="data:<?= $r->ttd ?>" height="100px"><br>
						<label class="col-12 p-1 text-center" id="namattd">
							( <?= $r->nama ?> )
						</label>
					</div>
					<label class="col-6 p-1 text-center" style="margin-top:130px">
						<u>H. Rudi Kurniawan, S.T., M.M.</u><br>
						Kepala Kampus LP3I
					</label>
				</div>
			</div>
			<img src="<?= base_url() ?>template/global_assets/images/foot1.jpg" class="col-12 p-0 mb-2 mt-5">
		</div>

		<div class="bayangprint" style="width:950px;margin-top:20px">
			<div class="card-header p-0">
				<img src="<?= base_url() ?>template/global_assets/images/head.jpg" class="col-12 p-0" style="z-index: 1;position: inherit;">
			</div>
			<div class="card-body card-body-2 p-1 pl-5 pr-5" style="margin-top:-100px">
				<label class="col-12 p-1 m-0 pl-5">
					<b>A.	Reward</b>
				</label>
				<label class="col-12 p-1 pl-5">
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
				<label class="col-12 p-1 m-0 pl-5">
					<b>B.	Punishment </b>
				</label>
				<label class="col-12 p-1 pl-5">
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
			<img src="<?= base_url() ?>template/global_assets/images/foot1.jpg" class="col-12 p-0 mb-2" style="margin-top:300px">
		</div>
  </div>
</body>
</html>
