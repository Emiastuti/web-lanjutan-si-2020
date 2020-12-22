 <!DOCTYPE html>
<html>
<head>
	<title>Data penjualan</title>
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">


	<!-- JavaScript -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= site_url('AController/tambah')?>"> Tambah </a>
</nav>
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Data penjualan</h5>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id_004</th>
      <th scope="col">merek</th>
      <th scope="col">jenis</th>
      <th scope="col">stok</th>
     
    </tr>
  </thead>
  <tbody>
  	<?php $no = 1; ?>
  	<?php foreach ($tbl_mahasiswa as $key) { ?> 

 
    <tr>
     	<td class="text-center"><?= $no++?></td>
      
      <td><?= $key->id_004?></td>
       <td><?= $key->merek?></td>
      <td><?= $key->jenis?></td>
      <td><?= $key->stok?></td>
      <td> <button type="button" class="btn btn-warning">edit</button>
      	<button type="button" class="btn btn-danger">delete</button></td>
    </tr>
 <?php } ?>

  </tbody>
</table>
</div>
</div>
</div>

</body>	
</html> 