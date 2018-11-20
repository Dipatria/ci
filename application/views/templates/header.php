<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" media="screen" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="<?php echo site_url(); ?>">Project</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item <?php if($this->uri->uri_string() == '') { echo 'active'; } ?>">
	        <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item <?php if($this->uri->uri_string() == 'pages/view/about') { echo 'active'; } ?>">
	        <a class="nav-link" href="<?php echo site_url('pages/view/about'); ?>">About</a>
	      </li>
	    </ul>
	  </div>
	</nav>
<div class="container" align="justify">