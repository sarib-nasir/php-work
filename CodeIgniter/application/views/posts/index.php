<h2 class="mt-5"><?= $title?></h2>
<?php foreach ($posts as $post):?>
	<h3 class="text-capitalize mt-5"><?php echo $post['title']; ?></h3>
	<p class="text-capitalize">catagory : <?php echo $post['name']; ?></p>
	<small class="post_date">posted on : <?php echo $post['created_at']; ?></small><br><br>
	<div class="row">
		<div class="col-sm-3">
			<img src="<?php echo base_url(); ?>/assets/images/posts/<?php echo $post['post_image']; ?>" height="200" width="200">
		</div>
		<div class="col-sm-9">
			<?php echo word_limiter($post['body'],50); ?><br><br>
			<p><a class="btn btn-sm btn-light" href="<?php echo site_url('/posts/'.$post['slug']); ?>">read more</a></p>
		</div>
	</div>
	
<?php endforeach; ?>