<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('catagories/create'); ?>
	<div class="form-group">
		<label>name:</label>
		<input type="text" name="name" class="form-control form-control-sm" placeholder="enter name">
	</div>
	<button type="submit" class="btn btn-danger btn-sm">submit</button>
</form>