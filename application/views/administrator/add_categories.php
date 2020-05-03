<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h4 mb-2 text-gray-800 mb-4">Buat Kategori Baru</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a
				href="<?= base_url(); ?>administrator/categories"
				class="btn btn-danger btn-sm"
				><i class="fa fa-times-circle"></i> Batal</a
			>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('failed'); ?>
			<form
				action="<?= base_url(); ?>administrator/categories/add"
				method="post"
				enctype="multipart/form-data"
			>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" autocomplete="off">
                        <small class="text-danger"><?php echo form_error('name'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">File Type</label>
                    <div class="col-sm-10">
                    <select name="type" id="type" class="form-control" required>
                        <option value="1">JPG/PNG</option>
                        <option value="2">GIF</option>
                        <option value="3">Link Video</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                    </div>
                </div>
			</form>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
