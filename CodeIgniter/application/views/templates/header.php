<!DOCTYPE html>
<html>
<head>
	<title>codeigniter app</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/solar/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="icon" href="<?php echo base_url(); ?>/assets/icon.jpg" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/custom.css">
	<script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">CodeIgniter</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	    </button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
		        	<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
	      		</li>
	      		<li class="nav-item">
		        	<a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="<?php echo base_url(); ?>catagories">Catagories</a>
		        </li>
		        
		    </ul>
		    <ul class="navbar-nav navbar-right">
		    	<li class="nav-item">
		        	<a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link" href="<?php echo base_url(); ?>catagories/create">Create Catagories</a>
		        </li>
		    </ul>
	  	</div>
	</nav>
	<div class="container mb-5">

