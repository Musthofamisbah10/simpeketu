<div class="container">
	<section class="row">
		<div class="col-sm-12">
			<section class="row">
				<div class="col-12">
					<div class="card mb-4">
						<div class="card-block">
							<h3 class="card-title"><?= $header ?></h3>
							<?php echo form_open_multipart('anggota/save'); ?>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Kode Anggota</label>
									<div class="col-md-9">
										<input type="text" name="kode_anggota" class="form-control">
										<?php echo form_error('kode_anggota', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Nama Anggota</label>
									<div class="col-md-9">
										<input type="text" name="nama_anggota" class="form-control">
										<?php echo form_error('nama_anggota', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Tempat Lahir</label>
									<div class="col-md-9">
										<input type="text" name="tempat_lahir" class="form-control">
										<?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Tanggal Lahir</label>
									<div class="col-md-9">
										<input type="date" name="tanggal_lahir" class="form-control">
										<?php echo form_error('tanggal_lahir', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">kelamin</label>
									<div class="col-md-9">
										<select class="custom-select form-control" name="kelamin">
											<option value="">Laki-Laki</option>
											<option value="">Perempuan</option>
										</select>
										<?php echo form_error('kelamin', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Agama</label>
									<div class="col-md-9">
										<select class="custom-select form-control" name="agama">
											<option value="">Islam</option>
											<option value="">Kristen</option>
											<option value="">Budha</option>
										</select>
										<?php echo form_error('agama', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Jabatan</label>
									<div class="col-md-9">
										<select class="custom-select form-control" name="jabatan">
											<option value="">Anggota 1</option>
											<option value="">Anggota 2</option>
											<option value="">Anggota 3</option>
										</select>
										<?php echo form_error('jabatan', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Alamat</label>
									<div class="col-md-9">
										<input type="text" name="alamat" class="form-control">
										<?php echo form_error('alamat', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Universitas</label>
									<div class="col-md-9">
										<input type="text" name="univ" class="form-control">
										<?php echo form_error('univ', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Username</label>
									<div class="col-md-9">
										<input type="text" name="username" class="form-control">
										<?php echo form_error('username', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label">Password</label>
									<div class="col-md-9">
										<input type="text" name="password" class="form-control">
										<small class="form-text text-muted">Gunakan kombinasi simbol</small>
										<?php echo form_error('password', '<div class="text-danger small ml-3">') ?>
									</div>
								</div>
								<button type="submit" class="btn btn-sm btn-primary float-right mt-4">Primary</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
</div>