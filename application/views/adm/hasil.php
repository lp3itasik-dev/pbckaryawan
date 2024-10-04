<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LP3I Tasikmalaya - Kegiatan</title>
	<?php $this->load->view('template/layout_2/link.php')?>
	<script src="<?= base_url() ?>template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
</head>

<body>

	<!-- Main navbar -->
	<?php $this->load->view('template/layout_2/navbar.php')?>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php $this->load->view('template/layout_2/sidebar.php')?>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Kegiatan</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content pt-0">

				<!-- Main charts -->
				<div class="row">

					<div class="col-xl-12">

						<!-- Traffic sources -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title"><i class="icon-calendar2"></i> &nbsp; Hasil Pengisian</h5>
							</div>
							<div class="card-body">
							  <div class="table-responsive">
									<table class="table table-framed" id="datatable-basic">
										<thead class="bg-lp3i-dark">
											<tr>
												<th width="50px" class="text-center">NO</th>
												<th width="100px" class="text-center">NAMA</th>
												<th width="100px" class="text-center">JABATAN</th>
												<th width="100px" class="text-center">CABANG</th>
												<th width="100px" class="text-center">WAKTU</th>
												<th width="100px" class="text-center">TTD</th>
												<th width="50px" class="text-center">AKSI</th>
											</tr>
										</thead>
										<tbody>
										    <?php
										    $no=1;
										    foreach($read as $r){
													echo'
													<tr>
														<td width="50px" class="text-center">'.$no++.'</td>
														<td width="100px" class="text-center">'.$r->nama.'</td>
														<td width="100px" class="text-center">'.$r->jabatan.'</td>
														<td width="100px" class="text-center">'.$r->cabang.'</td>
														<td width="100px" class="text-center">'.date('H.i',strtotime($r->waktu)).'</td>
														<td width="100px" class="text-center"><img src="data:'.$r->ttd.'" height="50px"></td>
														<td width="50px" class="text-center">
															<button class="btn btn-danger" onclick="return hapus(`'.$r->id.'`,`'.$r->nama.'`)">HAPUS</button>
															<a class="btn bg-lp3i" href="'.base_url().'adm/cetak/'.$r->id.'" target="_blank">CETAK</a>
														</td>
													</tr>
													';
												}
										    ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /traffic sources -->

					</div>
				</div>
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
	<script>
		//window.top.close();
        $('#datatable-basic').DataTable({
        	autoWidth: false,
        	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': '→', 'previous': '←' }
            }
        });
        function hapus(id,nama){
					$('#myModal').modal({backdrop: 'static', keyboard: false});
					$('.modal-title').html('Hapus');
          $('#kegiatan').html(nama);
          $('#submit').html('HAPUS');
          $('.input').addClass('d-none');
          $('.hapus').removeClass('d-none');
          $('#formId').attr('action', '<?= base_url() ?>Adm/delete_hasil/'+id);
        }
	</script>
	<div id="myModal" class="modal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-lp3i-dark">
					<h5 class="modal-title">Basic modal</h5>
					<button type="button" class="close" data-dismiss="modal">×</button>
			  </div>
				<form id="formId" action="" method="POST">
					<div class="modal-body input">
						<div class="form-group row">
							<label class="col-form-label col-lg-3">NAMA KEGIATAN<span class="float-right">:</span></label>
							<div class="col-lg-9">
								<input type="text" class="form-control" name="nama">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-form-label col-lg-3">NAMA KEGIATAN<span class="float-right">:</span></label>
							<div class="col-lg-9">
								<input type="date" class="form-control" name="tanggal" value="<?= date('Y-m-d')?>" >
							</div>
						</div>
					</div>
					<div class="modal-body hapus h5">
						Anda yakin ingin menghapus Hasil Pengisian <b id="kegiatan"></b>?
					</div>
					<div class="modal-footer bg-lp3i-dark">
						<button id="tutup" type="button" class="btn bg-grey" data-dismiss="modal">TUTUP</button>
						<button id="submit" type="submit" class="btn bg-lp3i">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
