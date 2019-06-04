<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-sm-5">
			<!-- <h2 class="text-capitalize"><?php echo $title; ?></h2> -->
			<?php echo validation_errors(); ?>
			<?php echo form_open('news/create'); ?>

				<label class="text-capitalize form-inline">title:</label>
				<input type="text" name="title" placeholder="enter title" class="form-control form-control-sm mb-2" aria-describedby="title">

				<label class="text-capitalize form-inline">post:</label>
				<textarea name="body" placeholder="enter post" class="form-control form-control-sm mb-2" aria-describedby="post"></textarea>
				<!-- <input type="text" > -->

				<input type="submit" class="btn btn-outline-danger btn-sm" name="submit" value="Create news item" />
			</form>
		</div>
	</div>
</div>
