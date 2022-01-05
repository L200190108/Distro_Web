<?php
require('function.php');

$br_id = $_GET['br_id'];

$edit = query("SELECT * FROM barang WHERE br_id=$br_id")[0];

if(isset($_POST['submit'])){
    //cek keberhasilan
    if(edit($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil diedit');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diedit');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="br_id" value="<?= $br_id ?>">
    <input type="hidden" name="gambarlama" value="<?= $edit['br_gbr'] ?>">
    <div class="col-md-6">
      <label for="nama" class="form-label">Nama Barang</label>
      <input name="br_nm" type="text" class="form-control" id="br_nm" value="<?= $edit['br_nm'] ?>" required>
    </div>
    <div class="col-md-2">
      <label for="iten" class="form-label">Item Barang</label>
      <input name="br_item" type="text" class="form-control" id="br_item" value="<?= $edit['br_item'] ?>" required>
    </div>
    <div class="col-md-2">
      <label for="harga" class="form-label">Harga Barang</label>
    <input name="br_hrg" type="text" class="form-control" id="br_hrg" value="<?= $edit['br_hrg'] ?>" required>
    </div>
    <div class="col-md-2">
      <label for="stock" class="form-label">Stock Barang</label>
      <input name="br_stok" type="text" class="form-control" id="br_stok" value="<?= $edit['br_stok'] ?>" required>
    </div>
    <div class="col-md-2">
      <label for="satuan" class="form-label">Satuan Barang</label>
      <input name="br_satuan" type="text" class="form-control" id="br_satuan" value="<?= $edit['br_satuan'] ?>" required>
    </div>
    <div class="col-md-2">
      <label for="status" class="form-label">Status</label>
      <input name="br_sts" type="text" class="form-control" id="br_sts" value="<?= $edit['br_sts'] ?>" required>
    </div>
    <div class="col-md-2">
      <label for="br_gbr" class="form-label">Gambar Barang</label>
      <input name="br_gbr" type="file" class="form-control" id="br_gbr" value="<?= $edit['br_gbr'] ?>" required>
    </div>
    <div class="col-12">
      <label for="keterangan" class="form-label">Keterangan</label>
      <textarea id="ket" name="ket" rows="5" cols="50"></textarea>
    </div>
    <div class="col-12">
      <input type="submit" name="submit" value="Edit">
    </div>
  </div>
  </form>
</body>
</html>
