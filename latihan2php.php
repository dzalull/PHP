<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
      <h1>Toko Mayang</h1>
      <div>Program aplikasi sederhana untuk menghitung penjualan barang toko wayang kami</div>
      <form method="POST">
        <div class="form-group">
            <label>Nama Barang</label>
            <input name="namaBarang" class="form-control">
        </div>  
        <div class="form-group">
            <label>Harga Barang</label>
            <input name="namaBarang" class="form-control">
        </div>
        <div class="form-group">
            <label>Jumlah Barang</label>
            <input name="namaBarang" class="form-control">
         </div>
         <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
      </form>   
      <hr>
      </div>
      if(isset($_POST['hitung'])) {
    $nama =$_POST['namaBarang'];
    $harga =$_POST['hargaBarang'];
    $jumlah =$_POST['jumlahBarang'];
    $diskon = 9.5;
    $total =$harga * $jumlah * $diskon;

    echo "
    <div class='container'>
    <h3>Jumlah yang harus dibayar</h3>
    <div>nama barang : $nama</div>
    <div>harga barang : $harga</div>
    <div>jumlah barang : $jumlah</div>
    <div>disko 50%</div>
    <h3>Rp. #$total</h3>
    </div>
    ";
  }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>






