<div class="container mt-5">
	<h2><?= $title;?></h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('posts/create'); ?>
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control form-control-sm" name="title" aria-describedby="title" placeholder="add title">
		</div>
		<div class="form-group">
			<label>upload image :</label><br>
			<input type="file" name="userfile" size="20" />
		</div>
		<div class="form-group">
			<label>Catagories</label>
			<select name="Catagory_id" class="form-control form-control-sm">
				<?php foreach ($catagories as $catagory):?>
					<option value="<?php echo $catagory['id'] ?>"><?php echo $catagory['name'] ?></option>
				<<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Post</label>
			<textarea id="editor" class="form-control form-control-sm" name="body" aria-describedby="post" placeholder="add post" cols="30" rows="10"></textarea>
		</div>
		<button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
	</form>
</div>

