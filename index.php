<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login/login.php?pesan=belum_login");
  exit();
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>
    dompetKita
  </title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2f7c7772c6.js" crossorigin="anonymous"></script>
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
</head>
<body>

  <div class="container pt-3">
    <div class="card">
      <div class="card-header bg-success">
        <b class="text-white"><a href="index.php" class="text-white">dompetKita</a></b>
        <?php include 'koneksi.php';
        $saldoTerbaru = mysqli_query($koneksi, "select saldo from dompet where user_id = '".$_SESSION['id']."' order by tanggal desc limit 1");
        $dataSaldo = mysqli_fetch_array($saldoTerbaru);
        $cek = mysqli_num_rows($saldoTerbaru);
        if ($cek > 0) {
          echo "<h8 class='text-white float-right'><i class='fa fa-money-bill-wave-alt'> Rp ".$dataSaldo['saldo']."</i></h8>";
        } else {
          echo "<h8 class='text-white float-right'><i class='fa fa-money-bill-wave-alt'> Rp 0</i></h8>";
        }
        ?>
      </div>
      <div class="card-body">
        <?php
        if (isset($_GET['pesan'])) {
          $pesan = $_GET['pesan'];
          if ($pesan == "input") {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='fa fa-check'></i>
  Input data berhasil!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
          } else if ($pesan == "hapus") {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='fa fa-trash'></i> Data berhasil dihapus!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
          } else if ($pesan == "login") {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='fa fa-sign-in'></i>
  Login berhasil! Selamat datang <i>".$_SESSION['user']."</i>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
          }
        }
        ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus"></i> Tambah Data</button>

        <a href="logout.php" class="btn btn-danger float-right" onclick="return confirm('Anda yakin ingin logout?')">
          <i class="fa fa-sign-out"></i> Log out</a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog " role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="proses.php" method="post">
                  <div class="form-group">
                    <label for="saldo">Tanggal & Waktu</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                      </div>
                      <input type="datetime-local" class="form-control" aria-label="Amount (to the nearest dollar)" name="tanggal" required>
                    </div>
                  </div>
                  <?php
                  $saldoTerbaru = mysqli_query($koneksi, "select saldo from dompet where user_id = '".$_SESSION['id']."' order by tanggal desc limit 1");
                  $dataSaldo = mysqli_fetch_array($saldoTerbaru);
                  ?>
                  <div class="form-group">
                    <label for="saldo">Saldo saat ini</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="saldo" readonly value="<?=$dataSaldo['saldo']; ?>">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                  <!--<div class="form-group"><label for="saldo">Saldo saat ini</label><input type="number" class="form-control" id="saldo" value="<?=$dataSaldo['saldo']; ?>"  name="saldo" disabled></div>-->
                  <div class="form-group">
                    <label for="saldo">Income/Pemasukan</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="income">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="saldo">Outcome/Pengeluaran</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                      </div>
                      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="outcome">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>
        <table class="table table-responsive table-sm table-bordered" id="example">
          <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Saldo</th>
              <th scope="col">Income</th>
              <th scope="col">Outcome</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = mysqli_query($koneksi, "select * from dompet WHERE user_id = '".$_SESSION['id']."'");
            while ($d = mysqli_fetch_array($data)) {
              $originalDate = $d['tanggal'];
              $newDate = date("d-m-Y H:i", strtotime($originalDate));
              ?>
              <tr>
                <td><font size="2">
                  <span style="display:none;"><?=strtotime($originalDate); ?></span>
                  <?= $newDate; ?></font>
                </td>
                <td><b>Rp <?=$d['saldo']; ?></b></td>
                <td><font color="green">+ Rp <?=$d['income']; ?></font></td>
                <td><font color="red">- Rp <?=$d['outcome']; ?></font></td>
                <td align="center" class="align-middle"><a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a></td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer text-secondary">
        <h6>Copyright © Taufik Hidayat</h6>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 2000);
  });
</script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
      "order": [[0, "desc"]]
    });
  });
</script>
</html>