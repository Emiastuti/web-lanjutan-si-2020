 <!DOCTYPE html>
 <div class="alert alert-primary" role="alert">
  <h3 align="center">emiastuti/1901050004</h3>
</div>

<div class="container">
  <!--from tambah mahasiswa-->
  <div class="row">
    <div class="col-md-6">
      <form action ="<?= site_url('mahasiswa/update')?>"method="post">
       
        <div class="form- group">

          <label>NIM</label>
          <input type="text" readonly value="<?=$data_nim->Nim?>" name="nim" class="form-control">
          
        </div>
        <div class="form-group">
          <label>Nama Mahasiswa</label>
          <input type="text" value="<?=$data_nim->Nama?>" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control"name="alamat"><?=$data_nim->Alamat ?></textarea>
          
        </div> 
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">simpan data</button>
          <a href="<?= site_url('mahasiswa/index')?>" class="btn btn-warning">batal</a>
          
        </div>
      </form>

      
    </div> 
    
  </div>
  
</div>
</body>
		
</html> 