
<ul class="list-group">
	<?php foreach ($catagories as $catagory):?>
		<li class="list-group-items"><a href="<?php echo site_url('/catagories/posts/'.$catagory['id']); ?>"><?php echo $catagory['name']; ?></a></li>
	<?php endforeach; ?>	
</ul>