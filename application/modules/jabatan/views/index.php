<section class="row">
	<div class="col-sm-12">
		<section class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('msg') ?>
				<!-- <div class="card mb-4">
					<div class="card-block"> -->
						<button data-toggle="modal" data-target="#addModal" class="btn btn-sm btn-subtle mb-3" type="button"><em class="fa fa-plus"></em> Add Data Jabatan</button>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Jabatan</th>
										<th colspan="2">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($querys as $row): ?>
										<tr>
											<td width="15px"><?= $no++ ?></td>
											<td><?= $row->nama_jabatan ?></td>
											<td width="15px" style="padding-right: 0px;"><a href="<?= site_url('jabatan/delete/' . $row->id_jabatan) ?>" class="btn btn-secondary margin" onclick="return confirm('Apakah kamu ingin menghapus data anggota dengan id <?=$row->id_jabatan?>')"><span class="fa fa-trash"></span></a></td>
											<td width="15px" style="padding-right: 0px;"><a href="<?= site_url('anggota/edit/' . $row->id_jabatan) ?>" class="btn btn-secondary margin" data-toggle="modal" data-target="#editModal<?=$row->id_jabatan?>"><span class="fa fa-edit"></span></a></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
				<!-- 	</div> -->

			</div>
		</section>
	</div>
<section>

<!-- Modal add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modalfacilities" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalfacilitiesLabel">Input Data Jabatan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('jabatan/add') ?>" method="post">
					<div class="form-group">
						<label for="nama_jabatan">Name facilities</label>
						<input type="text" name="nama_jabatan" class="form-control" placeholder="input jabatan">
						<?php echo form_error('nama_jabatan', '<div class="text-danger small ml-3">') ?>
					</div>
					<div class="modal-footer">
						<button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-sm btn-primary">Add Data Jabatan</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal edit -->
<?php foreach ($querys as $row): ?>
	<div class="modal fade" id="editModal<?= $row->id_jabatan ?>" tabindex="-1" role="dialog" aria-labelledby="modalfacilities" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalfacilitiesLabel">Edit Data Jabatan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('jabatan/update') ?>" method="post">
						<input type="hidden" class="form-control" name="id_jabatan" value="<?= $row->id_jabatan ?>">
						<div class="form-group">
							<label for="nama_jabatan">Jabatan</label>
							<input type="text" name="nama_jabatan" class="form-control" value="<?= $row->nama_jabatan ?>">
							<?php echo form_error('nama_jabatan', '<div class="text-danger small ml-3">') ?>
						</div>
						<div class="modal-footer">
							<button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-sm btn-primary">Update Data Jabatan</button>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>