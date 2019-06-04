<h2 class="text-capitalize mt-5"><?php echo $post['title']; ?></h2>
<small class="post_date mb-3">posted on : <?php echo $post['created_at']; ?></small>
<div class="post_body">
	<img src="<?php echo base_url(); ?>/assets/images/posts/<?php echo $post['post_image']; ?>" height="200" >
	<?php echo $post['body']; ?>
</div>
<hr>
<div class="row ml-1">
	<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-sm btn-success text-capitalize ">edit</a>
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" name="submit" value="delete" class="btn btn-danger btn-sm">
	</form>
</div>
<hr>
<h3>comments</h3>
<?php if ($comments):
		foreach ($comments as $comment): ?>
			<div class="post_date mt-2">
				<h6><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h6>
			</div>
		<?php endforeach; 
	else: ?>
		<p>no comments</p>
<?php endif;?>
<hr>
<h3>add comment</h3>
<?php 
	echo validation_errors();
 ?>
<?php  echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>name</label>
		<input type="text" name="name" class="form-control form-control-sm">
	</div>
	<div class="form-group">
		<label>email</label>
		<input type="text" name="email" class="form-control form-control-sm">
	</div>
	<div class="form-group">
		<label>comment</label>
		<textarea type="text" name="body" class="form-control form-control-sm"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button type="submit" class="btn btn-sm btn-primary">post</button>
</form>