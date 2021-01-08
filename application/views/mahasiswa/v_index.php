   <!DOCTYPE html>
 <div class="alert alert-primary" role="alert">
  <h3 align="center">emiastuti/1901050004</h3>
</div>
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Data mahasiswa</h5>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
       <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  	<?php $no = 1; ?>
  	<?php foreach ($tbl_mahasiswa as $isi) { ?> 

 
    <tr>
     	<td class="text-center"><?= $no++?></td>
      
      <td><?= $isi->Nim?></td>
       <td><?= $isi->Nama?></td>
      <td><?= $isi->Alamat?></td>
      <td class="text-center">


        <a href="<?=site_url('mahasiswa/hapus/'. $isi->Nim)?>"
          onclick="return confirm('mau dihapus?')"
         class="btn btn-danger btn-sm">Del</a>

          <a href="<?=site_url('mahasiswa/edit/'. $isi->Nim)?>"
         
         class="btn btn-info btn-sm">edit</a>


    </tr>
   <!--  <tr>
      <th scope="row">2</th>
      <td>anisa</td>
      <td>12345</td>
      <td>mataram</td>
      <td> <button type="button" class="btn btn-warning">edit</button>
      	<button type="button" class="btn btn-danger">delete</button></td>

    </tr> -->
    <?php } ?>

  </tbody>
</table>
  </div>
</div>
</div>
		
</html> 