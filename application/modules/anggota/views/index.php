<section class="row">
	<div class="col-sm-12">
		<section class="row">
			<div class="col-md-12">
				<div class="card mb-4">
					<?php echo $this->session->flashdata('msg') ?>
					<div class="card-block">
						<?= anchor('anggota/add', '<button class="btn btn-sm btn-subtle mb-3" type="button"><em class="fa fa-plus"></em> Tambah Data Anggota</button>'); ?>
						<?= anchor('anggota/add', '<button class="btn btn-sm btn-subtle mb-3" type="button"><em class="fa fa-plus"></em> Tambah Calon Ketua</button>'); ?>
						<div class="table-responsive">
							<table class="table table-striped" style="text-align: center;">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Anggota</th>
										<th>Nama Anggota</th>
										<th>Jabatan</th>
										<th colspan="3">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($querys as $row): ?>
										<tr>
											<td width="15px"><?= $no++ ?></td>
											<td><?= $row->kode_anggota ?></td>
											<td><?= $row->nama_anggota ?></td>
											<td><?= $row->jabatan ?></td>
											<td width="15px" style="padding-right: 0px;"><a href="<?= site_url('anggota/edit/' . $row->id_anggota) ?>" class="btn btn-secondary margin"><span class="fa fa-edit"></span></a></td>
											<td width="15px" style="padding-right: 0px;"><a href="<?= site_url('anggota/delete/' . $row->id_anggota) ?>" class="btn btn-secondary margin" onclick="return confirm('Apakah kamu ingin menghapus data anggota dengan id <?=$row->id_anggota?>')"><span class="fa fa-trash"></span></a></td>
											<td width="15px" style="padding-right: 0px;"><a href="<?= site_url('anggota/edit/' . $row->id_anggota) ?>" class="btn btn-secondary margin"><span class="fa fa-eye"></span></a></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<section>