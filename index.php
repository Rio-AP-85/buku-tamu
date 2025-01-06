<!DOCTYPE html>
<html lang="en">
<?php 
    include 'koneksi.php'; 
    
       
    if(isset($_POST['simpan']))
    {
        
        $nama=$_POST['nama'];
        $tgl=$_POST['tgl'];
        $instansi=$_POST['instansi'];
        $masuk=$_POST['masuk'];
        $keluar=$_POST['keluar'];
        $kegiatan=$_POST['kegiatan'];
        

        
        $sql_kd_last="SELECT id FROM `kunjungan` ORDER by id desc limit 1;";
        $query_kode_last=mysqli_query($koneksi,$sql_kd_last);
        $id = mysqli_fetch_array($query_kode_last);
        $tmbh_id = $id[0] + 1;
                      
        $sql_insert="insert into kunjungan values(".$tmbh_id.",'De Morgan','".$tgl."','".$nama."','".$instansi."','".$masuk."','".$keluar."','".$kegiatan."');";
        $qry_ins = mysqli_query($koneksi,$sql_insert);
        
        if($qry_ins)
        {
            header('location:index.php');
        }
        else 
        {
            echo "Error: " . $sql_insert . mysqli_error($koneksi);
        }
               
    }
?>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Buku Tamu Ruang Lab</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style.css" />
    <!-- Akhir My CSS -->

    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
            function proses()
            {
                var nama;
                
                nama = document.getElementById('InputNama').value;
                
                alert('Pengunjung dengan nama ' + nama + ' berhasil tersimpan.');
            }
        </script>
  </head>

  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #ffc71149">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/ftilogo.png" alt="" width="120" height="74" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">De Morgan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bernoulli</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Aristoteles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fibbonaci</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="container-md">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="InputTanggal" class="form-label">Tanggal</label>
            <input type="date" name="tgl" class="form-control" id="InputTanggal" aria-describedby="dateHelp" required />
            <div id="dateHelp" class="form-text">Masukkan Tanggal Pemakaian</div>
          </div>
          <div class="mb-3">
            <label for="InputNama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="InputNama" aria-describedby="namaHelp" required />
          </div>
          <div class="mb-3">
            <label for="InputInstansi" class="form-label">Instansi</label>
            <input type="text" name="instansi" class="form-control" id="InputInstansi" aria-describedby="InstansiHelp" required />
          </div>
          <div class="mb-3">
            <label for="InputMasuk" class="form-label">Masuk</label>
            <input type="time" name="masuk" class="form-control" id="InputMasuk" aria-describedby="MasukHelp" required />
          </div>
          <div class="mb-3">
            <label for="InputKeluar" class="form-label">Keluar</label>
            <input type="time" name="keluar" class="form-control" id="Inputkeluar" aria-describedby="KeluarHelp" required />
          </div>
          <div class="mb-3">
            <label for="InputKegiatan" class="form-label">Kegiatan</label>
            <textarea cols="30" name="kegiatan" rows="1" class="form-control" id="editor" aria-describedby="KegiatanHelp" required />
            </textarea>
            <script>
              ClassicEditor
                  .create( document.querySelector( '#editor' ) )
                  .catch( error => {
                      console.error( error );
                  } );
            </script>
          </div>
          <button type="submit" name="simpan" onclick="proses();" class="btn btn-success">SIMPAN</button>
        </form>
      </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Footer -->
    <section class="footer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <p>
              <a href="https://dinamika.ac.id/">
                <img src="assets/undika.png" alt="" width="40%" />
              </a>
            </p>
          </div>
          <div class="col" style="text-align: left">
            <h6>Follow Us</h6>
            <a class="list-group-item list-group-item-action" target="_blank" href="https://www.instagram.com/labfti.undika/">
              <p><img src="assets/ig.png" alt="" width="30" height="30" /> &nbsp; Lab FTI Universitas Dinamika</p>
            </a>
            <a class="list-group-item list-group-item-action" target="_blank" href="https://www.instagram.com/universitasdinamika/">
              <p><img src="assets/ig.png" alt="" width="30" height="30" /> &nbsp; Universitas Dinamika</p>
            </a>
          </div>
        </div>
        <hr />
        <div class="row align-items-center">
          <div class="col">
            <p>Laboratorium FTI Universitas Dinamika &copy; 2024. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
