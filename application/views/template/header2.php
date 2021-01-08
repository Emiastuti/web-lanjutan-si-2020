
<html>
<head>
	<title>Data Mahasiswa</title>
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">


	<!-- JavaScript -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</head>
<body>
	<div class ="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WebII</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('pengguna/tambah')?>"taindex="-1">Tambah data</a>
      </li>

      <a class="nav-link" href="<?= site_url('pengguna/index')?>">tabel pengguna</a>
      <li>
      </li>
         <a class="nav-link" href="<?= site_url('Login/logout')?>"tabindex="-1">Logout</a>

      </li>
     </li>
    
    </ul>
     <div class="navbar-nav ml-auto">
      <a href="#" class="nav-link"><?php echo $this->session->userdata('nama_pengguna'); ?></a>
    </div>
    
  </div>

</nav>