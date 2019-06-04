<div class="container mt-5 mb-5">
	<h2><?php echo $title; ?></h2>
	<?php foreach ($news as $news_items): ?>
		<h3 class="text-capitalize mt-3"><?php echo $news_items['title']; ?></h3>
		<small class="post-date">posted on :<?php echo $news_items['created_at']; ?></small><br><br>
		<p><?php echo $news_items['body']; ?></p>
		<a href="<?php echo site_url('news/'.$news_items['slug']); ?>">read more</a>
	<?php endforeach; ?>
</div>