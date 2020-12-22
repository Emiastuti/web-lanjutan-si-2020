 <!DOCTYPE html>
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
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tambah data</a>
      </li>
    </ul>
   <a> Emik</a>
    
  </div>

</nav>
 <div class="alert alert-primary" role="alert">
  <h3 align="center">emiastuti/1901050004</h3>
</div>

<div class="container">
  <!--from tambah mahasiswa-->
  <div class="row">
    <div class="col-md-6">
      <form action ="<?= site_url('mahasiswa/simpan_data')?>"method="post">
        <div class="form- group">
          <label>NIM</label>
          <input type="text" name="nim" class="form-control">
          
        </div>
        <div class="form-group">
          <label>Nama Mahasiswa</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control"name="alamat"></textarea>
          
        </div> 
        <div class="form-group">
          <button type="submit" name="submit" class="btn
          btn-primary">
            simpan data
          </button>
          
        </div>
      </form>
      
    </div>
    
  </div>
  
</div>
</body>
		
</html> 