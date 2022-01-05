<?php
require('function.php');

    if(isset($_POST['submit'])){
    //cek keberhasilan
      if(tambah($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                
            </script>
        ";
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
      <label for="nama" class="form-label">Nama Barang</label>
      <input name="br_nm" type="text" class="form-control" id="br_nm" required>
    </div>
    <div class="col-md-2">
      <label for="iten" class="form-label">Item Barang</label>
      <input name="br_item" type="text" class="form-control" id="br_item" required>
    </div>
    <div class="col-md-2">
      <label for="harga" class="form-label">Harga Barang</label>
    <input name="br_hrg" type="text" class="form-control" id="br_hrg" required>
    </div>
    <div class="col-md-2">
      <label for="stock" class="form-label">Stock Barang</label>
      <input name="br_stok" type="text" class="form-control" id="br_stok" required>
    </div>
    <div class="col-md-2">
      <label for="satuan" class="form-label">Satuan Barang</label>
      <input name="br_satuan" type="text" class="form-control" id="br_satuan" required>
    </div>
    <div class="col-md-2">
      <label for="status" class="form-label">Status</label>
      <input name="br_sts" type="text" class="form-control" id="br_sts" required>
    </div>
    <div class="col-md-2">
      <label for="gambar" class="form-label">Gambar Barang</label>
      <input name="br_gbr" type="file" class="form-control" id="br_gbr" required>
    </div>
    <div class="col-12">
      <label for="keterangan" class="form-label">Keterangan</label>
      <textarea id="ket" name="ket" rows="5" cols="50"></textarea>
    </div>
    <div class="col-12">
      <input type="submit" name="submit" value="Tambah">
    </div>
  </div>
  </form>
</body>
</html>
