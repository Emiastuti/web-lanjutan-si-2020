<div class="card">
  <div class="card-body">
    tabel pengguna
    <br>
  </div>
  <table class="table">
    <thead>
      
    <tr>
      <th scope="col">nomor</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">nama_lengkap</th>
      <th scope="col">hak_akses</th>
    </tr>
  </thead>
  <tbody>

    <?php $no = 1; ?>
    <?php foreach ($tbl_pengguna as $key) { ?>

    <tr>
      <td class="text-center"><?= $no++ ?></td>
      <td><?= $key->username?></td>
      <td><?= $key->password?></td>
      <td><?= $key->nama_lengkap?></td>
      <td><?= $key->hak_akses?></td>
      

        </tr>
      <?php } ?>
      
 </tbody>
 </table>
 </div>  
</div>

</body>
</html>